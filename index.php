<?php include 'includes/header.php'; ?>

    <!-- Conteúdo Principal -->
    <main class="w-full max-w-6xl px-4 pt-32 pb-20 flex flex-col gap-10">
        
        <!-- Header -->
        <div class="text-center mb-4">
            <h1 class="text-6xl md:text-8xl font-bold text-liquid tracking-tighter drop-shadow-2xl">
                Prime Insectus
            </h1>
            <p class="text-white/60 font-light mt-2 tracking-widest text-sm uppercase">Pioneirismo em Alimentação Viva & Desidratada</p>
        </div>

        <!-- Seção Hero -->
        <div class="flex flex-col lg:flex-row gap-8 items-stretch justify-center">
            <!-- Card Manifesto -->
            <div class="w-full lg:w-5/12 liquid-glass rounded-3xl p-8 relative overflow-hidden group min-h-[500px] flex flex-col justify-end">
                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent z-10"></div>
                <img src="https://images.unsplash.com/photo-1535083783855-76ae62b2914e?q=80&w=1000&auto=format&fit=crop" class="absolute inset-0 w-full h-full object-cover grayscale-[20%] group-hover:scale-110 transition-transform duration-1000" alt="Natureza">
                
                <div class="relative z-20">
                    <span class="text-xs font-bold uppercase tracking-widest text-accent-green bg-white/10 px-3 py-1 rounded-full backdrop-blur-md">Desde 2024</span>
                    <h2 class="text-4xl font-bold text-white my-4 drop-shadow-lg leading-tight">Nutrição que Respeita a Natureza.</h2>
                    <p class="text-gray-300 text-sm mb-6 border-l-2 border-accent-green pl-4">Especialistas em dieta biologicamente apropriada para répteis e anfíbios.</p>
                    <button onclick="toggleModal()" class="w-full py-4 rounded-xl bg-gradient-to-r from-accent-green to-green-600 text-black font-bold flex items-center justify-center gap-2 group hover:shadow-lg transition-all">
                        <i class="fa-solid fa-comment-medical"></i> <span class="group-hover:tracking-wider transition-all">Falar com Dra. Lili</span>
                    </button>
                </div>
            </div>

            <!-- Info Grid -->
            <div class="w-full lg:w-7/12 flex flex-col gap-6">
                <!-- Info 1 -->
                <div class="flex-1 liquid-glass rounded-3xl p-6 flex flex-row gap-6 items-center hover:bg-white/5 transition-colors">
                    <div class="h-24 w-24 min-w-[6rem] rounded-full bg-white/5 flex items-center justify-center border border-white/10"><i class="fa-solid fa-wheat-awn text-3xl text-accent-green"></i></div>
                    <div>
                        <h3 class="text-xl font-semibold text-white mb-2">Nutrição "Gut-Loaded"</h3>
                        <p class="text-sm text-gray-400">Insetos alimentados com vegetais e cereais premium 24h antes do envio.</p>
                    </div>
                </div>
                <!-- Info 2 -->
                <div class="flex-1 liquid-glass rounded-3xl p-6 flex flex-row gap-6 items-center hover:bg-white/5 transition-colors">
                    <div class="h-24 w-24 min-w-[6rem] rounded-full bg-white/5 flex items-center justify-center border border-white/10"><i class="fa-solid fa-box-open text-3xl text-accent-green"></i></div>
                    <div>
                        <h3 class="text-xl font-semibold text-white mb-2">Vivo & Desidratado</h3>
                        <p class="text-sm text-gray-400">Opções para estímulo de caça ou praticidade do dia-a-dia.</p>
                    </div>
                </div>
                <!-- Call to Action -->
                <div class="h-auto liquid-glass rounded-3xl p-8 flex flex-col md:flex-row justify-between items-center gap-6 relative overflow-hidden">
                    <div class="absolute inset-0 bg-accent-green/5 z-0"></div>
                    <div class="z-10 text-center md:text-left">
                        <h3 class="text-2xl font-bold text-white">Pronto para abastecer?</h3>
                        <p class="text-sm text-gray-400 mt-1">Veja nosso catálogo completo.</p>
                    </div>
                    <a href="loja.php" class="z-10 px-8 py-3 rounded-xl bg-white text-black font-bold hover:bg-accent-green transition-colors shadow-lg">Acessar Loja <i class="fa-solid fa-arrow-right ml-2"></i></a>
                </div>
            </div>
        </div>

        <!-- Seção: Por que escolher (3 Cards) -->
        <section class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="liquid-glass rounded-2xl p-6 text-center hover:bg-white/5 transition-all">
                <i class="fa-solid fa-dumbbell text-4xl text-accent-green mb-4"></i>
                <h3 class="text-xl font-bold text-white">Super Proteína</h3>
                <p class="text-sm text-gray-400 mt-2">69% de proteína bruta, superando carnes tradicionais.</p>
            </div>
            <div class="liquid-glass rounded-2xl p-6 text-center hover:bg-white/5 transition-all">
                <i class="fa-solid fa-droplet text-4xl text-blue-400 mb-4"></i>
                <h3 class="text-xl font-bold text-white">Sustentabilidade</h3>
                <p class="text-sm text-gray-400 mt-2">Consome 2000x menos água que a pecuária.</p>
            </div>
            <div class="liquid-glass rounded-2xl p-6 text-center hover:bg-white/5 transition-all">
                <i class="fa-solid fa-dna text-4xl text-purple-400 mb-4"></i>
                <h3 class="text-xl font-bold text-white">Instinto Natural</h3>
                <p class="text-sm text-gray-400 mt-2">Estimula comportamento de caça e reduz estresse.</p>
            </div>
        </section>

        <!-- Curiosidades (Links) -->
        <section class="mt-4 liquid-glass rounded-3xl p-8">
            <h2 class="text-2xl font-bold text-white mb-6">Curiosidades por Espécie</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Répteis -->
                <a href="repteis.php" class="relative group cursor-pointer overflow-hidden rounded-2xl h-64 bg-black/40 block">
                    <img src="https://images.unsplash.com/photo-1598460677894-672522730332?q=80&w=1000&auto=format&fit=crop" class="w-full h-full object-cover opacity-80 group-hover:scale-110 transition-all duration-700">
                    <div class="absolute bottom-0 p-6 w-full bg-gradient-to-t from-black/90 to-transparent">
                        <h4 class="text-2xl text-white font-bold">Répteis <i class="fa-solid fa-arrow-up-right-from-square text-xs ml-2 opacity-50"></i></h4>
                        <p class="text-xs text-gray-300 mt-1 line-clamp-2">Geckos, Pogonas & Iguanas.</p>
                    </div>
                </a>
                <!-- Anfíbios -->
                <a href="anfibios.php" class="relative group cursor-pointer overflow-hidden rounded-2xl h-64 bg-black/40 block">
                    <img src="https://images.unsplash.com/photo-1597849122557-01a24d852cb7?q=80&w=1000&auto=format&fit=crop" class="w-full h-full object-cover opacity-80 group-hover:scale-110 transition-all duration-700">
                    <div class="absolute bottom-0 p-6 w-full bg-gradient-to-t from-black/90 to-transparent">
                        <h4 class="text-2xl text-white font-bold">Anfíbios <i class="fa-solid fa-arrow-up-right-from-square text-xs ml-2 opacity-50"></i></h4>
                        <p class="text-xs text-gray-300 mt-1 line-clamp-2">Sapos, Rãs & Salamandras.</p>
                    </div>
                </a>
                <!-- Aves -->
                <a href="aves.php" class="relative group cursor-pointer overflow-hidden rounded-2xl h-64 bg-black/40 block">
                    <img src="https://images.unsplash.com/photo-1452570053594-1b985d6ea890?q=80&w=1000&auto=format&fit=crop" class="w-full h-full object-cover opacity-80 group-hover:scale-110 transition-all duration-700">
                    <div class="absolute bottom-0 p-6 w-full bg-gradient-to-t from-black/90 to-transparent">
                        <h4 class="text-2xl text-white font-bold">Aves <i class="fa-solid fa-arrow-up-right-from-square text-xs ml-2 opacity-50"></i></h4>
                        <p class="text-xs text-gray-300 mt-1 line-clamp-2">Trinca-ferros, Sabiás & Exóticos.</p>
                    </div>
                </a>
            </div>
        </section>

        <!-- Newsletter -->
        <section class="mt-10 mb-10 liquid-glass rounded-3xl p-8 text-center relative overflow-hidden">
            <div class="relative z-10 max-w-2xl mx-auto">
                <i class="fa-regular fa-paper-plane text-4xl text-accent-green mb-4"></i>
                <h2 class="text-3xl font-bold text-white mb-2">Clube dos Exóticos 🐾</h2>
                <p class="text-gray-300 mb-6">Receba ofertas exclusivas e dicas de manejo.</p>
                <div class="flex flex-col sm:flex-row gap-3">
                    <input type="email" placeholder="Seu melhor e-mail..." class="flex-1 bg-black/40 border border-white/20 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-accent-green">
                    <button class="bg-accent-green text-black font-bold px-8 py-3 rounded-xl hover:bg-white transition-colors">Inscrever</button>
                </div>
            </div>
        </section>

    </main>

<?php include 'includes/footer.php'; ?>