<?php include 'includes/header.php'; ?>

<main class="w-full max-w-6xl px-4 pt-32 pb-20 flex flex-col gap-10">

    <!-- Header da Loja -->
    <div class="text-center mb-4">
        <h1 class="text-5xl md:text-7xl font-bold text-white drop-shadow-2xl mb-4">Catálogo</h1>
        <p class="text-gray-300 max-w-2xl mx-auto text-lg font-light">
            Alimentos selecionados e equipamentos para o seu terrário.
        </p>
    </div>

    <!-- Grid de Produtos -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

        <!-- Produto 1 -->
        <div class="liquid-glass rounded-3xl p-4 flex flex-col group relative overflow-hidden">
            <div class="h-48 rounded-2xl overflow-hidden relative mb-4">
                <div class="absolute top-2 right-2 bg-accent-green text-black text-xs font-bold px-2 py-1 rounded z-10">Vivo</div>
                <img src="https://plus.unsplash.com/premium_photo-1664304386766-3d7507119e78?q=80&w=1000&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" alt="Grilo Preto">
            </div>
            <div class="flex justify-between items-start mb-2">
                <div>
                    <h3 class="text-xl font-bold text-white">Grilo Preto</h3>
                    <p class="text-xs text-gray-400">Pote c/ 50 unidades</p>
                </div>
                <div class="text-right">
                    <span class="block text-lg font-bold text-accent-green">R$ 15,90</span>
                </div>
            </div>
            <!-- Botão com Função JS -->
            <button onclick="addToCart('Grilo Preto', 15.90)" class="mt-auto w-full py-3 rounded-xl bg-white/10 hover:bg-accent-green hover:text-black border border-white/10 transition-all font-semibold flex items-center justify-center gap-2">
                <i class="fa-solid fa-cart-plus"></i> Adicionar
            </button>
        </div>

        <!-- Produto 2 -->
        <div class="liquid-glass rounded-3xl p-4 flex flex-col group relative overflow-hidden">
            <div class="h-48 rounded-2xl overflow-hidden relative mb-4">
                <div class="absolute top-2 right-2 bg-orange-500 text-white text-xs font-bold px-2 py-1 rounded z-10">Seco</div>
                <img src="https://t3.ftcdn.net/jpg/02/56/08/65/360_F_256086580_0B7o5R9y5q5h5z5y5w5h5z5y5w5h5z5.jpg" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" alt="Tenébrio">
            </div>
            <div class="flex justify-between items-start mb-2">
                <div>
                    <h3 class="text-xl font-bold text-white">Tenébrio Molitor</h3>
                    <p class="text-xs text-gray-400">Desidratado 50g</p>
                </div>
                <div class="text-right">
                    <span class="block text-lg font-bold text-accent-green">R$ 12,50</span>
                </div>
            </div>
            <button onclick="addToCart('Tenébrio Molitor', 12.50)" class="mt-auto w-full py-3 rounded-xl bg-white/10 hover:bg-accent-green hover:text-black border border-white/10 transition-all font-semibold flex items-center justify-center gap-2">
                <i class="fa-solid fa-cart-plus"></i> Adicionar
            </button>
        </div>

        <!-- Produto 3 -->
        <div class="liquid-glass rounded-3xl p-4 flex flex-col group relative overflow-hidden">
            <div class="h-48 rounded-2xl overflow-hidden relative mb-4">
                <div class="absolute top-2 right-2 bg-blue-500 text-white text-xs font-bold px-2 py-1 rounded z-10">Pó</div>
                <img src="https://images.unsplash.com/photo-1599839575945-a9e5af0c3fa5?q=80&w=1000&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" alt="Cálcio">
            </div>
            <div class="flex justify-between items-start mb-2">
                <div>
                    <h3 class="text-xl font-bold text-white">Cálcio + D3</h3>
                    <p class="text-xs text-gray-400">Suplemento 100g</p>
                </div>
                <div class="text-right">
                    <span class="block text-lg font-bold text-accent-green">R$ 45,00</span>
                </div>
            </div>
            <button onclick="addToCart('Cálcio + D3', 45.00)" class="mt-auto w-full py-3 rounded-xl bg-white/10 hover:bg-accent-green hover:text-black border border-white/10 transition-all font-semibold flex items-center justify-center gap-2">
                <i class="fa-solid fa-cart-plus"></i> Adicionar
            </button>
        </div>

    </div>

    <!-- DRAWER LATERAL (Carrinho & Histórico) -->
    <div id="cart-drawer" class="fixed inset-y-0 right-0 w-full md:w-96 bg-[#0f172a] border-l border-white/10 transform translate-x-full transition-transform duration-300 z-[60] flex flex-col shadow-2xl">
        
        <!-- Header do Drawer -->
        <div class="p-6 border-b border-white/10 flex justify-between items-center bg-black/20">
            <h2 class="text-xl font-bold text-white"><i class="fa-solid fa-basket-shopping mr-2"></i> Meu Carrinho</h2>
            <button onclick="toggleCart()" class="text-gray-400 hover:text-white"><i class="fa-solid fa-xmark text-xl"></i></button>
        </div>

        <!-- Conteúdo Scrollável -->
        <div class="flex-1 overflow-y-auto p-6 flex flex-col gap-6">
            
            <!-- Lista de Itens do Carrinho -->
            <div id="cart-items-container" class="flex flex-col gap-3">
                <p class="text-gray-500 text-center italic text-sm py-4">Seu carrinho está vazio.</p>
            </div>

            <!-- Divisor -->
            <hr class="border-white/10">

            <!-- Histórico de Pedidos (Só aparece se logado) -->
            <div id="history-section" class="hidden">
                <h3 class="text-sm font-bold text-accent-green uppercase mb-3 tracking-wider">Histórico de Pedidos</h3>
                <div id="history-container" class="flex flex-col gap-2 text-sm text-gray-400">
                    <p class="text-xs italic">Carregando histórico...</p>
                </div>
            </div>
        </div>

        <!-- Footer do Drawer (Total + Botão) -->
        <div class="p-6 border-t border-white/10 bg-black/20">
            <div class="flex justify-between items-center mb-4">
                <span class="text-gray-400">Total:</span>
                <span id="cart-total" class="text-2xl font-bold text-white">R$ 0,00</span>
            </div>
            <button onclick="checkout()" id="checkout-btn" class="w-full py-3 rounded-xl bg-accent-green text-black font-bold hover:bg-white transition-colors disabled:opacity-50 disabled:cursor-not-allowed">
                Finalizar Compra
            </button>
            <p id="login-warning" class="text-xs text-red-400 text-center mt-2 hidden">Faça login para finalizar.</p>
        </div>
    </div>

    <!-- Overlay do Drawer -->
    <div id="cart-overlay" onclick="toggleCart()" class="fixed inset-0 bg-black/50 backdrop-blur-sm z-[55] hidden"></div>

</main>

<?php include 'includes/footer.php'; ?>