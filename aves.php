<?php include 'includes/header.php'; ?>

<main class="w-full max-w-6xl px-4 pt-32 pb-20 flex flex-col gap-10">

    <!-- Header da Categoria -->
    <div class="text-center mb-8">
        <div class="inline-flex items-center gap-2 bg-yellow-500/10 text-yellow-400 px-4 py-1.5 rounded-full text-sm font-bold mb-4 uppercase tracking-wider border border-yellow-500/20">
            <i class="fa-solid fa-crow"></i> Categoria
        </div>
        <h1 class="text-5xl md:text-7xl font-bold text-white drop-shadow-2xl mb-4">Aves</h1>
        <p class="text-gray-300 max-w-2xl mx-auto text-lg font-light">
            Muitas aves silvestres e exóticas dependem de proteína animal para a saúde das penas, canto vigoroso e reprodução.
        </p>
    </div>

    <!-- Destaque Principal -->
    <div class="liquid-glass rounded-3xl overflow-hidden relative min-h-[400px] flex items-center">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1452570053594-1b985d6ea890?q=80&w=1000&auto=format&fit=crop" class="w-full h-full object-cover opacity-60" alt="Pássaro Colorido">
            <div class="absolute inset-0 bg-gradient-to-r from-black via-black/50 to-transparent"></div>
        </div>
        
        <div class="relative z-10 p-8 md:p-12 max-w-2xl">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Período de Muda & Reprodução</h2>
            <p class="text-gray-200 mb-6 leading-relaxed">
                Durante a troca de penas (muda) ou época de criação de filhotes, a demanda por proteína dispara. Oferecer larvas de tenébrio ou grilos vivos é a forma mais natural de suprir essa necessidade energética.
            </p>
            <div class="flex gap-4">
                <div class="flex items-center gap-2 text-yellow-400 font-bold">
                    <i class="fa-solid fa-feather"></i> Penas Brilhantes
                </div>
                <div class="flex items-center gap-2 text-yellow-400 font-bold">
                    <i class="fa-solid fa-music"></i> Canto Forte
                </div>
            </div>
        </div>
    </div>

    <!-- Espécies Populares -->
    <section>
        <h3 class="text-2xl font-bold text-white mb-6 pl-2 border-l-4 border-yellow-500">Espécies & Necessidades</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            
            <!-- Card 1: Trinca-ferro -->
            <div class="liquid-glass rounded-2xl p-6 flex flex-col md:flex-row gap-6 items-center">
                <div class="w-24 h-24 rounded-full overflow-hidden border-2 border-white/20 shrink-0">
                    <img src="https://images.unsplash.com/photo-1549608276-5786777e6587?q=80&w=200&auto=format&fit=crop" class="w-full h-full object-cover" alt="Pássaro Silvestre">
                </div>
                <div>
                    <h4 class="text-xl font-bold text-white">Trinca-ferro</h4>
                    <p class="text-sm text-gray-400 mt-1 italic">Saltator similis</p>
                    <p class="text-sm text-gray-300 mt-3">
                        <strong class="text-yellow-400">Dieta:</strong> Onívoro.
                        <br>Adora tenébrios molitor como fonte extra de energia.
                    </p>
                </div>
            </div>

            <!-- Card 2: Sabiá -->
            <div class="liquid-glass rounded-2xl p-6 flex flex-col md:flex-row gap-6 items-center">
                <div class="w-24 h-24 rounded-full overflow-hidden border-2 border-white/20 shrink-0">
                    <img src="https://images.unsplash.com/photo-1522926193341-e9e6d9b86063?q=80&w=200&auto=format&fit=crop" class="w-full h-full object-cover" alt="Sabiá">
                </div>
                <div>
                    <h4 class="text-xl font-bold text-white">Sabiá Laranjeira</h4>
                    <p class="text-sm text-gray-400 mt-1 italic">Turdus rufiventris</p>
                    <p class="text-sm text-gray-300 mt-3">
                        <strong class="text-yellow-400">Dieta:</strong> Frugívoro/Insetívoro.
                        <br>Revira o solo em busca de minhocas e insetos.
                    </p>
                </div>
            </div>

        </div>
    </section>

    <!-- Call to Action -->
    <div class="text-center mt-8">
        <a href="loja.php" class="inline-block bg-yellow-500 text-black font-bold px-8 py-4 rounded-xl hover:bg-white transition-all shadow-[0_0_20px_rgba(234,179,8,0.5)]">
            Ver Insetos para Aves <i class="fa-solid fa-arrow-right ml-2"></i>
        </a>
    </div>

</main>

<?php include 'includes/footer.php'; ?>