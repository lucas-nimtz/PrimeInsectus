<?php include 'includes/header.php'; ?>

<main class="w-full max-w-6xl px-4 pt-32 pb-20 flex flex-col gap-10">

    <!-- Header da Categoria -->
    <div class="text-center mb-8">
        <div class="inline-flex items-center gap-2 bg-accent-green/10 text-accent-green px-4 py-1.5 rounded-full text-sm font-bold mb-4 uppercase tracking-wider border border-accent-green/20">
            <i class="fa-solid fa-staff-snake"></i> Categoria
        </div>
        <h1 class="text-5xl md:text-7xl font-bold text-white drop-shadow-2xl mb-4">Répteis</h1>
        <p class="text-gray-300 max-w-2xl mx-auto text-lg font-light">
            De Geckos a Iguanas, a nutrição correta é o pilar para uma vida longa, coloração vibrante e estrutura óssea forte.
        </p>
    </div>

    <!-- Destaque Principal -->
    <div class="liquid-glass rounded-3xl overflow-hidden relative min-h-[400px] flex items-center">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1598460677894-672522730332?q=80&w=1000&auto=format&fit=crop" class="w-full h-full object-cover opacity-60" alt="Gecko Crestado">
            <div class="absolute inset-0 bg-gradient-to-r from-black via-black/50 to-transparent"></div>
        </div>
        
        <div class="relative z-10 p-8 md:p-12 max-w-2xl">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">O Segredo do Cálcio</h2>
            <p class="text-gray-200 mb-6 leading-relaxed">
                A maioria dos répteis em cativeiro sofre com Doença Óssea Metabólica (MBD) por falta de cálcio. Nossos insetos são criados com uma dieta rica em cálcio ("Gut-loading"), mas sempre recomendamos polvilhar os grilos com suplemento antes de oferecer.
            </p>
            <div class="flex gap-4">
                <div class="flex items-center gap-2 text-accent-green font-bold">
                    <i class="fa-solid fa-check-circle"></i> Ossos Fortes
                </div>
                <div class="flex items-center gap-2 text-accent-green font-bold">
                    <i class="fa-solid fa-check-circle"></i> Prevenção de MBD
                </div>
            </div>
        </div>
    </div>

    <!-- Espécies Populares -->
    <section>
        <h3 class="text-2xl font-bold text-white mb-6 pl-2 border-l-4 border-accent-green">Espécies & Necessidades</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            
            <!-- Card 1: Gecko Leopardo -->
            <div class="liquid-glass rounded-2xl p-6 flex flex-col md:flex-row gap-6 items-center">
                <div class="w-24 h-24 rounded-full overflow-hidden border-2 border-white/20 shrink-0">
                    <img src="https://images.unsplash.com/photo-1552562477-96c21b4f4044?q=80&w=200&auto=format&fit=crop" class="w-full h-full object-cover" alt="Gecko Leopardo">
                </div>
                <div>
                    <h4 class="text-xl font-bold text-white">Gecko Leopardo</h4>
                    <p class="text-sm text-gray-400 mt-1 italic">Eublepharis macularius</p>
                    <p class="text-sm text-gray-300 mt-3">
                        <strong class="text-accent-green">Dieta:</strong> 100% Insetívoro.
                        <br>Adora grilos vivos para caçar e tenébrios como petisco.
                    </p>
                </div>
            </div>

            <!-- Card 2: Dragão Barbudo -->
            <div class="liquid-glass rounded-2xl p-6 flex flex-col md:flex-row gap-6 items-center">
                <div class="w-24 h-24 rounded-full overflow-hidden border-2 border-white/20 shrink-0">
                    <img src="https://images.unsplash.com/photo-1504450874802-0ba2bcd9b5ae?q=80&w=200&auto=format&fit=crop" class="w-full h-full object-cover" alt="Pogona">
                </div>
                <div>
                    <h4 class="text-xl font-bold text-white">Dragão Barbudo (Pogona)</h4>
                    <p class="text-sm text-gray-400 mt-1 italic">Pogona vitticeps</p>
                    <p class="text-sm text-gray-300 mt-3">
                        <strong class="text-accent-green">Dieta:</strong> Onívoro.
                        <br>Jovens precisam de 80% insetos. Adultos focam mais em vegetais, mas amam baratas dubia.
                    </p>
                </div>
            </div>

        </div>
    </section>

    <!-- Call to Action -->
    <div class="text-center mt-8">
        <a href="loja.php" class="inline-block bg-accent-green text-black font-bold px-8 py-4 rounded-xl hover:bg-white transition-all shadow-[0_0_20px_rgba(163,230,53,0.3)]">
            Ver Insetos para Répteis <i class="fa-solid fa-arrow-right ml-2"></i>
        </a>
    </div>

</main>

<?php include 'includes/footer.php'; ?>