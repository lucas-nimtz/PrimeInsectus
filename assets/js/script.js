// assets/js/script.js

// --- 1. IMPORTAÇÕES DO FIREBASE (Versão Modular) ---
import { initializeApp } from "https://www.gstatic.com/firebasejs/10.7.1/firebase-app.js";
import { getAuth, signInWithPopup, GoogleAuthProvider, onAuthStateChanged, signOut } from "https://www.gstatic.com/firebasejs/10.7.1/firebase-auth.js";
import { getFirestore, collection, addDoc, query, where, getDocs, orderBy } from "https://www.gstatic.com/firebasejs/10.7.1/firebase-firestore.js";

// --- 2. CONFIGURAÇÃO (Sua conta PrimeInsectus) ---
const firebaseConfig = {
  apiKey: "AIzaSyCe44NE-mgV7U7mczhef_fEqm5GnNaTTdA",
  authDomain: "primeinsectus.firebaseapp.com",
  projectId: "primeinsectus",
  storageBucket: "primeinsectus.firebasestorage.app",
  messagingSenderId: "655747820638",
  appId: "1:655747820638:web:67cc474aa351ba62fdd8cf",
  measurementId: "G-SF52FKE1TJ"
};

// --- 3. INICIALIZAÇÃO ---
const app = initializeApp(firebaseConfig);
const auth = getAuth(app);
const db = getFirestore(app);
const provider = new GoogleAuthProvider();

// Variáveis Globais de Estado
let currentUser = null;

// Configuração do Markdown (mantendo o original)
const md = window.markdownit();

// ==========================================
// LÓGICA DO FIREBASE (AUTH & DATABASE)
// ==========================================

// Função de Login
async function loginWithGoogle() {
    try {
        await signInWithPopup(auth, provider);
        // O onAuthStateChanged tratará da atualização da UI
    } catch (error) {
        console.error("Erro no login:", error);
        alert("Erro ao entrar: " + error.message);
    }
}

// Observador de Autenticação (Roda ao carregar e ao logar/deslogar)
onAuthStateChanged(auth, (user) => {
    currentUser = user;
    const loginBtn = document.getElementById('login-btn');
    const mobileLoginBtn = document.getElementById('mobile-login-btn');
    const warning = document.getElementById('login-warning');
    const historySection = document.getElementById('history-section');

    if (user) {
        // --- USUÁRIO LOGADO ---
        console.log("Usuário conectado:", user.displayName);

        // Atualiza botão Desktop
        if(loginBtn) {
            loginBtn.innerHTML = `<img src="${user.photoURL}" class="w-6 h-6 rounded-full border border-white"> ${user.displayName.split(' ')[0]}`;
            // Opcional: Adicionar evento de Logout se clicar novamente
            loginBtn.onclick = () => { if(confirm("Deseja sair?")) signOut(auth); };
        }

        // Atualiza menu Mobile
        if(mobileLoginBtn) {
            mobileLoginBtn.innerHTML = `<img src="${user.photoURL}" class="w-6 h-6 rounded-full inline mr-2"> Olá, ${user.displayName.split(' ')[0]}`;
        }

        // Esconde aviso de login no carrinho
        if(warning) warning.classList.add('hidden');

        // Carrega histórico de pedidos
        if(historySection) {
            historySection.classList.remove('hidden');
            loadOrderHistory(user.uid);
        }

    } else {
        // --- USUÁRIO DESLOGADO ---
        if(loginBtn) {
            loginBtn.innerHTML = `<i class="fa-brands fa-google"></i> Entrar`;
            loginBtn.onclick = loginWithGoogle; // Restaura evento de login
        }
        
        if(mobileLoginBtn) {
            mobileLoginBtn.innerHTML = `<i class="fa-brands fa-google mr-2"></i> Entrar com Google`;
        }

        if(historySection) historySection.classList.add('hidden');
    }
});

// Função para Carregar Histórico
async function loadOrderHistory(uid) {
    const historyContainer = document.getElementById('history-container');
    if(!historyContainer) return;

    historyContainer.innerHTML = '<p class="text-xs italic text-gray-500">Buscando pedidos...</p>';

    try {
        const q = query(collection(db, "orders"), where("userId", "==", uid), orderBy("date", "desc"));
        const querySnapshot = await getDocs(q);

        historyContainer.innerHTML = ""; // Limpa loading

        if (querySnapshot.empty) {
            historyContainer.innerHTML = '<p class="text-xs text-gray-500">Nenhum pedido anterior.</p>';
            return;
        }

        querySnapshot.forEach((doc) => {
            const order = doc.data();
            // Formata data (converte Timestamp do Firestore para JS Date)
            const date = order.date && order.date.toDate ? order.date.toDate().toLocaleDateString('pt-BR') : 'Data desc.';
            
            const itemHtml = `
                <div class="bg-white/5 p-3 rounded mb-2 border border-white/5 hover:border-accent-green/30 transition-colors">
                    <div class="flex justify-between text-accent-green font-bold text-xs">
                        <span>${date}</span>
                        <span>R$ ${parseFloat(order.total).toFixed(2).replace('.', ',')}</span>
                    </div>
                    <p class="text-xs text-gray-400 mt-1">${order.items ? order.items.length : 0} itens - <span class="text-yellow-500">${order.status || 'Pendente'}</span></p>
                </div>
            `;
            historyContainer.innerHTML += itemHtml;
        });
    } catch (e) {
        console.error("Erro ao carregar histórico:", e);
        historyContainer.innerHTML = '<p class="text-xs text-red-400">Erro ao carregar.</p>';
    }
}

// ==========================================
// FUNÇÕES DE UI (Atribuídas ao window)
// ==========================================

// Checkout (Substitui a lógica anterior)
window.checkout = async function() {
    if (!currentUser) {
        const warning = document.getElementById('login-warning');
        if(warning) warning.classList.remove('hidden');
        alert("Por favor, faça login com o Google para finalizar a compra.");
        loginWithGoogle(); // Tenta abrir o login direto
        return;
    }

    const totalEl = document.getElementById('cart-total');
    const cartTotal = parseFloat(totalEl.innerText.replace('R$', '').replace(',', '.').trim());

    if (cartTotal <= 0) {
        alert("Seu carrinho está vazio!");
        return;
    }

    // Assumindo que a variável 'cart' é global e gerida pelas funções do carrinho (não incluídas aqui mas mantidas se existirem)
    // Se não tiveres uma variável global 'cart', precisas de garantir que o addToCart a popula.
    // Como o teu código original não tinha a lógica do carrinho completa (variável cart), 
    // vou assumir que vais implementar ou usar o array abaixo:
    const currentCart = window.cart || []; 

    const btn = document.getElementById('checkout-btn');
    const originalText = btn.innerText;
    
    try {
        btn.innerText = "Processando...";
        btn.disabled = true;

        await addDoc(collection(db, "orders"), {
            userId: currentUser.uid,
            userName: currentUser.displayName,
            userEmail: currentUser.email,
            items: currentCart, 
            total: cartTotal,
            date: new Date(),
            status: "Aguardando Pagamento"
        });

        alert(`Pedido realizado com sucesso, ${currentUser.displayName.split(' ')[0]}! \nEntraremos em contato.`);
        
        // Limpar Carrinho (Lógica Visual)
        if(window.cart) window.cart = [];
        const container = document.getElementById('cart-items-container');
        if(container) container.innerHTML = '<p class="text-gray-500 text-center italic text-sm py-4">Seu carrinho está vazio.</p>';
        if(totalEl) totalEl.innerText = "R$ 0,00";
        
        toggleCart(); // Fecha o drawer

    } catch (e) {
        console.error("Erro no checkout:", e);
        alert("Houve um erro ao salvar seu pedido.");
    } finally {
        btn.innerText = originalText;
        btn.disabled = false;
    }
};

// Menu Hambúrguer
window.toggleMenu = function() {
    const menu = document.getElementById('mobile-menu');
    const icon = document.getElementById('menu-icon');
    
    if (menu.classList.contains('hidden')) {
        menu.classList.remove('hidden');
        setTimeout(() => {
            menu.classList.remove('opacity-0', '-translate-y-5');
        }, 10);
        icon.classList.remove('fa-bars');
        icon.classList.add('fa-xmark');
    } else {
        menu.classList.add('opacity-0', '-translate-y-5');
        setTimeout(() => {
            menu.classList.add('hidden');
        }, 300);
        icon.classList.add('fa-bars');
        icon.classList.remove('fa-xmark');
    }
}

// Modal da IA
window.toggleModal = function() {
    const modal = document.getElementById('ai-modal');
    if (modal.classList.contains('hidden')) {
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    } else {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    }
}

// Integração Gemini API
window.askGemini = async function() {
    const userText = document.getElementById('userPrompt').value;
    const btnText = document.getElementById('btnText');
    const btnIcon = document.getElementById('btnIcon');
    const spinner = document.getElementById('loadingSpinner');
    const responseArea = document.getElementById('responseArea');
    const output = document.getElementById('markdownOutput');

    if (!userText.trim()) return;

    btnText.innerText = "Dra. Lili pensando...";
    btnIcon.classList.add('hidden');
    spinner.classList.remove('hidden');
    responseArea.classList.add('hidden');

    const apiKey = ""; // ⚠️ INSIRA SUA CHAVE API DO GEMINI AQUI (Não é a do Firebase)
    
    const systemPrompt = `Você é a Dra. Lili Lagartixa, nutricionista herpetológica da 'Prime Insectus'. 
    Seu tom é simpático e profissional.
    Objetivo: Responder dúvidas sobre alimentação de répteis/anfíbios e sugerir nossos produtos.
    Use emojis e formatação Markdown.`;

    try {
        const response = await fetch(`https://generativelanguage.googleapis.com/v1beta/models/gemini-2.5-flash-preview-09-2025:generateContent?key=${apiKey}`, {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({
                contents: [{ parts: [{ text: userText }] }],
                systemInstruction: { parts: [{ text: systemPrompt }] }
            })
        });

        if (!response.ok) throw new Error('Erro na API');
        const data = await response.json();
        const aiText = data.candidates?.[0]?.content?.parts?.[0]?.text || "Desculpe, estou descansando na pedra aquecida agora.";
        
        output.innerHTML = md.render(aiText);
        responseArea.classList.remove('hidden');

    } catch (error) {
        console.error(error);
        output.innerHTML = "<span class='text-red-400'>Erro de conexão. Tente novamente mais tarde.</span>";
        responseArea.classList.remove('hidden');
    } finally {
        btnText.innerText = "Enviar para Dra. Lili";
        btnIcon.classList.remove('hidden');
        spinner.classList.add('hidden');
    }
}

// Carrinho de Compras (Lógica básica para funcionar com o HTML existente)
// Array global para armazenar itens
window.cart = [];

window.addToCart = function(name, price) {
    window.cart.push({ name, price });
    updateCartUI();
    // Abre o carrinho visualmente para feedback
    const drawer = document.getElementById('cart-drawer');
    const overlay = document.getElementById('cart-overlay');
    if(drawer) {
        drawer.classList.remove('translate-x-full');
        overlay.classList.remove('hidden');
    }
}

window.toggleCart = function() {
    const drawer = document.getElementById('cart-drawer');
    const overlay = document.getElementById('cart-overlay');
    
    if (drawer.classList.contains('translate-x-full')) {
        drawer.classList.remove('translate-x-full');
        overlay.classList.remove('hidden');
    } else {
        drawer.classList.add('translate-x-full');
        overlay.classList.add('hidden');
    }
}

function updateCartUI() {
    const container = document.getElementById('cart-items-container');
    const totalEl = document.getElementById('cart-total');
    
    if(!container || !totalEl) return;

    if (window.cart.length === 0) {
        container.innerHTML = '<p class="text-gray-500 text-center italic text-sm py-4">Seu carrinho está vazio.</p>';
        totalEl.innerText = "R$ 0,00";
        return;
    }

    let total = 0;
    let html = '';

    window.cart.forEach((item, index) => {
        total += item.price;
        html += `
            <div class="flex justify-between items-center bg-white/5 p-3 rounded">
                <div>
                    <p class="text-white text-sm font-bold">${item.name}</p>
                    <p class="text-gray-400 text-xs">R$ ${item.price.toFixed(2).replace('.', ',')}</p>
                </div>
                <button onclick="removeFromCart(${index})" class="text-red-400 hover:text-red-300">
                    <i class="fa-solid fa-trash text-xs"></i>
                </button>
            </div>
        `;
    });

    container.innerHTML = html;
    totalEl.innerText = "R$ " + total.toFixed(2).replace('.', ',');
}

window.removeFromCart = function(index) {
    window.cart.splice(index, 1);
    updateCartUI();
}

// Inicializações
document.addEventListener('DOMContentLoaded', () => {
    // Listeners adicionais se necessário
    const mobileLoginBtn = document.getElementById('mobile-login-btn');
    if(mobileLoginBtn) {
        mobileLoginBtn.addEventListener('click', loginWithGoogle);
    }
});