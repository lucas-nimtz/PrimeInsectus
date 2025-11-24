<?php include 'includes/header.php'; ?>

<main class="w-full max-w-6xl px-4 pt-32 pb-20 flex flex-col gap-10">

    <!-- Header da Categoria -->
    <div class="text-center mb-8">
        <div class="inline-flex items-center gap-2 bg-blue-500/10 text-blue-400 px-4 py-1.5 rounded-full text-sm font-bold mb-4 uppercase tracking-wider border border-blue-500/20">
            <i class="fa-solid fa-frog"></i> Categoria
        </div>
        <h1 class="text-5xl md:text-7xl font-bold text-white drop-shadow-2xl mb-4">Anfíbios</h1>
        <p class="text-gray-300 max-w-2xl mx-auto text-lg font-light">
            Sapos, rãs e pererecas possuem pele permeável e digestão sensível, exigindo insetos de altíssima qualidade sanitária.
        </p>
    </div>

    <!-- Destaque Principal -->
    <div class="liquid-glass rounded-3xl overflow-hidden relative min-h-[400px] flex items-center">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1597849122557-01a24d852cb7?q=80&w=1000&auto=format&fit=crop" class="w-full h-full object-cover opacity-60" alt="Sapo">
            <div class="absolute inset-0 bg-gradient-to-r from-black via-black/50 to-transparent"></div>
        </div>
        
        <div class="relative z-10 p-8 md:p-12 max-w-2xl">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">A Importância da Hidratação</h2>
            <p class="text-gray-200 mb-6 leading-relaxed">
                Anfíbios não bebem água como nós; eles absorvem pela pele. Por isso, insetos "suculentos" e bem hidratados são cruciais. Evitamos rações secas na dieta dos nossos grilos destinados a anfíbios, focando em vegetais ricos em água.
            </p>
            <div class="flex gap-4">
                <div class="flex items-center gap-2 text-blue-400 font-bold">
                    <i class="fa-solid fa-droplet"></i> Alta Umidade
                </div>
                <div class="flex items-center gap-2 text-blue-400 font-bold">
                    <i class="fa-solid fa-shield-virus"></i> Livre de Parasitas
                </div>
            </div>
        </div>
    </div>

    <!-- Espécies Populares -->
    <section>
        <h3 class="text-2xl font-bold text-white mb-6 pl-2 border-l-4 border-blue-500">Espécies & Necessidades</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            
            <!-- Card 1: Pacman Frog -->
            <div class="liquid-glass rounded-2xl p-6 flex flex-col md:flex-row gap-6 items-center">
                <div class="w-24 h-24 rounded-full overflow-hidden border-2 border-white/20 shrink-0">
                    <img src="https://images.unsplash.com/photo-1579294270428-1b777a837c15?q=80&w=200&auto=format&fit=crop" class="w-full h-full object-cover" alt="Pacman Frog">
                </div>
                <div>
                    <h4 class="text-xl font-bold text-white">Sapo Pacman</h4>
                    <p class="text-sm text-gray-400 mt-1 italic">Ceratophrys ornata</p>
                    <p class="text-sm text-gray-300 mt-3">
                        <strong class="text-blue-400">Dieta:</strong> Carnívoro voraz.
                        <br>Come quase tudo que se mexe. Baratas e grilos grandes são ideais.
                    </p>
                </div>
            </div>

            <!-- Card 2: Perereca de Olhos Vermelhos -->
            <div class="liquid-glass rounded-2xl p-6 flex flex-col md:flex-row gap-6 items-center">
                <div class="w-24 h-24 rounded-full overflow-hidden border-2 border-white/20 shrink-0">
                    <img src="https://images.unsplash.com/photo-1597849122557-01a24d852cb7?q=80&w=200&auto=format&fit=crop" class="w-full h-full object-cover" alt="Red Eyed Frog">
                </div>
                <div>
                    <h4 class="text-xl font-bold text-white">Agalychnis (Olhos Vermelhos)</h4>
                    <p class="text-sm text-gray-400 mt-1 italic">Agalychnis callidryas</p>
                    <p class="text-sm text-gray-300 mt-3">
                        <strong class="text-blue-400">Dieta:</strong> Insetívoro noturno.
                        <br>Precisa de grilos menores e macios durante a noite.
                    </p>
                </div>
            </div>

        </div>
    </section>

    <!-- Call to Action -->
    <div class="text-center mt-8">
        <a href="loja.php" class="inline-block bg-blue-500 text-white font-bold px-8 py-4 rounded-xl hover:bg-white hover:text-black transition-all shadow-[0_0_20px_rgba(59,130,246,0.5)]">
            Ver Insetos para Anfíbios <i class="fa-solid fa-arrow-right ml-2"></i>
        </a>
    </div>

</main>

<?php include 'includes/footer.php'; ?>