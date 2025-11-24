// assets/js/ui.js

// Variável global do carrinho
window.cart = [];
const md = window.markdownit();

// 1. Menu Mobile
function toggleMenu() {
    const menu = document.getElementById('mobile-menu');
    const icon = document.getElementById('menu-icon');
    
    if (menu.classList.contains('hidden')) {
        menu.classList.remove('hidden');
        setTimeout(() => menu.classList.remove('opacity-0', '-translate-y-5'), 10);
        icon.classList.remove('fa-bars');
        icon.classList.add('fa-xmark');
    } else {
        menu.classList.add('opacity-0', '-translate-y-5');
        setTimeout(() => menu.classList.add('hidden'), 300);
        icon.classList.add('fa-bars');
        icon.classList.remove('fa-xmark');
    }
}

// 2. Modal da IA
function toggleModal() {
    const modal = document.getElementById('ai-modal');
    if (!modal) return;
    if (modal.classList.contains('hidden')) {
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    } else {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    }
}

// 3. Carrinho (Visual)
function toggleCart() {
    const drawer = document.getElementById('cart-drawer');
    const overlay = document.getElementById('cart-overlay');
    if(!drawer) return;
    
    if (drawer.classList.contains('translate-x-full')) {
        drawer.classList.remove('translate-x-full');
        overlay.classList.remove('hidden');
    } else {
        drawer.classList.add('translate-x-full');
        overlay.classList.add('hidden');
    }
}

function addToCart(name, price) {
    window.cart.push({ name, price });
    updateCartUI();
    toggleCart(); // Abre o carrinho para mostrar o item
}

function removeFromCart(index) {
    window.cart.splice(index, 1);
    updateCartUI();
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
            </div>`;
    });
    container.innerHTML = html;
    totalEl.innerText = "R$ " + total.toFixed(2).replace('.', ',');
}

// 4. IA Gemini (Não depende do Firebase, pode ficar aqui)
async function askGemini() {
    const userText = document.getElementById('userPrompt').value;
    const btnText = document.getElementById('btnText');
    const btnIcon = document.getElementById('btnIcon');
    const spinner = document.getElementById('loadingSpinner');
    const responseArea = document.getElementById('responseArea');
    const output = document.getElementById('markdownOutput');

    if (!userText.trim()) return;

    btnText.innerText = "Pensando...";
    btnIcon.classList.add('hidden');
    spinner.classList.remove('hidden');
    responseArea.classList.add('hidden');

    // ⚠️ INSIRA SUA API KEY AQUI
    const apiKey = ""; 
    
    try {
        const response = await fetch(`https://generativelanguage.googleapis.com/v1beta/models/gemini-2.5-flash-preview-09-2025:generateContent?key=${apiKey}`, {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({
                contents: [{ parts: [{ text: userText }] }],
                systemInstruction: { parts: [{ text: "Você é a Dra. Lili Lagartixa. Responda com emojis e markdown." }] }
            })
        });

        if (!response.ok) throw new Error('Erro na API');
        const data = await response.json();
        const aiText = data.candidates?.[0]?.content?.parts?.[0]?.text || "Erro na resposta.";
        output.innerHTML = md.render(aiText);
        responseArea.classList.remove('hidden');

    } catch (error) {
        output.innerHTML = "<span class='text-red-400'>Erro de conexão com a IA.</span>";
        responseArea.classList.remove('hidden');
    } finally {
        btnText.innerText = "Enviar";
        btnIcon.classList.remove('hidden');
        spinner.classList.add('hidden');
    }
}

// Expor funções para o HTML (onclick)
window.toggleMenu = toggleMenu;
window.toggleModal = toggleModal;
window.toggleCart = toggleCart;
window.addToCart = addToCart;
window.removeFromCart = removeFromCart;
window.askGemini = askGemini;