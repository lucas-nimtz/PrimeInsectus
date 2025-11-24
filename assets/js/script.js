// assets/js/script.js
// MÓDULO: Lógica do Firebase (Login e Banco de Dados)

import { initializeApp } from "https://www.gstatic.com/firebasejs/10.7.1/firebase-app.js";
import { getAuth, signInWithPopup, GoogleAuthProvider, onAuthStateChanged, signOut } from "https://www.gstatic.com/firebasejs/10.7.1/firebase-auth.js";
import { getFirestore, collection, addDoc, query, where, getDocs, orderBy } from "https://www.gstatic.com/firebasejs/10.7.1/firebase-firestore.js";

const firebaseConfig = {
  apiKey: "AIzaSyCe44NE-mgV7U7mczhef_fEqm5GnNaTTdA",
  authDomain: "primeinsectus.firebaseapp.com",
  projectId: "primeinsectus",
  storageBucket: "primeinsectus.firebasestorage.app",
  messagingSenderId: "655747820638",
  appId: "1:655747820638:web:67cc474aa351ba62fdd8cf",
  measurementId: "G-SF52FKE1TJ"
};

// Inicialização
const app = initializeApp(firebaseConfig);
const auth = getAuth(app);
const db = getFirestore(app);
const provider = new GoogleAuthProvider();
let currentUser = null;

// Função de Auth
async function handleAuthClick() {
    if (currentUser) {
        if(confirm(`Sair da conta de ${currentUser.displayName}?`)) await signOut(auth);
    } else {
        try { await signInWithPopup(auth, provider); }
        catch (error) { 
            if(error.code !== 'auth/popup-closed-by-user') alert("Erro no login: " + error.message); 
        }
    }
}

// Observador (UI Updates)
onAuthStateChanged(auth, (user) => {
    currentUser = user;
    const loginBtn = document.getElementById('login-btn');
    const mobileBtn = document.getElementById('mobile-login-btn');
    const history = document.getElementById('history-section');
    const warning = document.getElementById('login-warning');

    if (user) {
        // Logado
        const userHtml = `<img src="${user.photoURL}" class="w-6 h-6 rounded-full border border-white"> ${user.displayName.split(' ')[0]}`;
        if(loginBtn) loginBtn.innerHTML = userHtml;
        if(mobileBtn) mobileBtn.innerHTML = userHtml;
        if(history) { history.classList.remove('hidden'); loadOrderHistory(user.uid); }
        if(warning) warning.classList.add('hidden');
    } else {
        // Deslogado
        const googleHtml = `<i class="fa-brands fa-google"></i> Entrar`;
        if(loginBtn) loginBtn.innerHTML = googleHtml;
        if(mobileBtn) mobileBtn.innerHTML = googleHtml + " com Google";
        if(history) history.classList.add('hidden');
    }
});

// Carregar Histórico
async function loadOrderHistory(uid) {
    const container = document.getElementById('history-container');
    if(!container) return;
    container.innerHTML = '<p class="text-xs italic text-gray-500">Carregando...</p>';

    try {
        const q = query(collection(db, "orders"), where("userId", "==", uid), orderBy("date", "desc"));
        const snapshot = await getDocs(q);
        container.innerHTML = "";
        
        if (snapshot.empty) {
            container.innerHTML = '<p class="text-xs text-gray-500">Sem pedidos.</p>';
            return;
        }
        
        snapshot.forEach((doc) => {
            const data = doc.data();
            const date = data.date?.toDate().toLocaleDateString('pt-BR') || '?';
            container.innerHTML += `
                <div class="bg-white/5 p-3 rounded mb-2 border border-white/5">
                    <div class="flex justify-between text-accent-green font-bold text-xs">
                        <span>${date}</span><span>R$ ${data.total}</span>
                    </div>
                    <p class="text-xs text-gray-400 mt-1">${data.items?.length || 0} itens - ${data.status}</p>
                </div>`;
        });
    } catch (e) { console.error(e); }
}

// Função Checkout (Única função global deste arquivo)
window.checkout = async function() {
    if (!currentUser) {
        alert("Faça login para comprar.");
        handleAuthClick();
        return;
    }
    
    // Pega o carrinho da janela global (definido no ui.js)
    const cart = window.cart || [];
    const totalText = document.getElementById('cart-total')?.innerText || "0";
    const total = parseFloat(totalText.replace('R$', '').replace(',', '.').trim());

    if (cart.length === 0) return alert("Carrinho vazio!");

    const btn = document.getElementById('checkout-btn');
    const oldText = btn.innerText;
    btn.innerText = "Processando...";
    btn.disabled = true;

    try {
        await addDoc(collection(db, "orders"), {
            userId: currentUser.uid,
            userEmail: currentUser.email,
            items: cart,
            total: total,
            date: new Date(),
            status: "Aguardando Pagamento"
        });
        alert("Pedido realizado com sucesso! 🦎");
        window.cart = []; // Limpa carrinho global
        window.updateCartUI?.(); // Atualiza UI se existir
        window.toggleCart?.(); // Fecha drawer
    } catch (e) {
        console.error(e);
        alert("Erro ao processar pedido.");
    } finally {
        btn.innerText = oldText;
        btn.disabled = false;
    }
};

// Inicialização dos Botões de Login
console.log("Firebase Module Carregado");
const loginBtn = document.getElementById('login-btn');
const mobileBtn = document.getElementById('mobile-login-btn');

if(loginBtn) loginBtn.addEventListener('click', handleAuthClick);
if(mobileBtn) mobileBtn.addEventListener('click', handleAuthClick);