<?php include 'includes/header.php'; ?>

<main class="w-full max-w-5xl px-4 pt-32 pb-20 flex flex-col gap-16 mx-auto">

    <!-- Header da Página -->
    <div class="text-center">
        <h1 class="text-5xl md:text-7xl font-bold text-white drop-shadow-2xl mb-4">Nossa Origem</h1>
        <p class="text-gray-300 max-w-2xl mx-auto text-lg font-light">
            De hobistas apaixonados a referência nacional em nutrição de animais exóticos.
        </p>
    </div>

    <!-- Seção 1: A História (Texto + Imagem) -->
    <div class="liquid-glass rounded-3xl p-8 md:p-12 flex flex-col md:flex-row items-center gap-12">
        <div class="md:w-1/2">
            <span class="text-accent-green font-bold tracking-widest uppercase text-xs mb-2 block">O Início</span>
            <h2 class="text-3xl font-bold text-white mb-4">Paixão que Virou Ciência</h2>
            <p class="text-gray-300 leading-relaxed mb-4">
                Tudo começou com um único Gecko Leopardo chamado "Spock". Percebemos a dificuldade em encontrar alimento vivo de qualidade no mercado nacional: grilos vinham desidratados, pequenos ou doentes.
            </p>
            <p class="text-gray-300 leading-relaxed">
                Decidimos criar nosso próprio alimento. O que era uma pequena colônia no quarto de hóspedes se transformou na <strong>Prime Insectus</strong>, uma biofábrica focada em excelência nutricional e bem-estar animal.
            </p>
        </div>
        <div class="md:w-1/2 relative group">
            <div class="absolute -inset-1 bg-gradient-to-r from-accent-green to-blue-600 rounded-2xl blur opacity-25 group-hover:opacity-50 transition duration-1000 group-hover:duration-200"></div>
            <img src="https://images.unsplash.com/photo-1583337130417-3346a1be7dee?q=80&w=1000&auto=format&fit=crop" class="relative rounded-2xl w-full object-cover shadow-2xl transform transition duration-500 hover:scale-[1.02]" alt="Criação de Insetos">
        </div>
    </div>

    <!-- Seção 2: Diferenciais (Grid) -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Card Biofábrica -->
        <div class="liquid-glass rounded-2xl p-8 text-center border-t-4 border-accent-green">
            <div class="w-16 h-16 bg-accent-green/10 rounded-full flex items-center justify-center mx-auto mb-4 text-accent-green text-2xl">
                <i class="fa-solid fa-flask"></i>
            </div>
            <h3 class="text-xl font-bold text-white mb-2">Biofábrica Controlada</h3>
            <p class="text-sm text-gray-400">
                Ambiente com temperatura (28°C) e umidade controladas digitalmente 24h por dia. Livre de pragas urbanas.
            </p>
        </div>

        <!-- Card Nutrição -->
        <div class="liquid-glass rounded-2xl p-8 text-center border-t-4 border-blue-500">
            <div class="w-16 h-16 bg-blue-500/10 rounded-full flex items-center justify-center mx-auto mb-4 text-blue-500 text-2xl">
                <i class="fa-solid fa-carrot"></i>
            </div>
            <h3 class="text-xl font-bold text-white mb-2">Dieta Premium</h3>
            <p class="text-sm text-gray-400">
                Nossos insetos comem melhor que muita gente! Vegetais orgânicos frescos e mix de cereais nobres.
            </p>
        </div>

        <!-- Card Sustentabilidade -->
        <div class="liquid-glass rounded-2xl p-8 text-center border-t-4 border-yellow-500">
            <div class="w-16 h-16 bg-yellow-500/10 rounded-full flex items-center justify-center mx-auto mb-4 text-yellow-500 text-2xl">
                <i class="fa-solid fa-leaf"></i>
            </div>
            <h3 class="text-xl font-bold text-white mb-2">Sustentabilidade</h3>
            <p class="text-sm text-gray-400">
                Produção verticalizada com pegada de carbono quase nula e consumo de água 2000x menor que a pecuária.
            </p>
        </div>
    </div>

    <!-- Seção 3: A Equipe -->
    <div class="liquid-glass rounded-3xl p-8 md:p-12">
        <h2 class="text-3xl font-bold text-white mb-8 text-center">Quem Cuida dos Bichos</h2>
        <div class="flex flex-wrap justify-center gap-8">
            
            <!-- Membro 1 -->
            <div class="text-center group">
                <div class="w-32 h-32 rounded-full overflow-hidden border-2 border-accent-green mx-auto mb-4 relative">
                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?q=80&w=400&auto=format&fit=crop" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500" alt="Bióloga">
                </div>
                <h4 class="text-white font-bold text-lg">Ana Silva</h4>
                <p class="text-accent-green text-sm uppercase tracking-wider font-bold">Bióloga Chefe</p>
            </div>

            <!-- Membro 2 -->
            <div class="text-center group">
                <div class="w-32 h-32 rounded-full overflow-hidden border-2 border-blue-500 mx-auto mb-4 relative">
                    <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?q=80&w=400&auto=format&fit=crop" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500" alt="Veterinário">
                </div>
                <h4 class="text-white font-bold text-lg">Dr. Carlos Mendes</h4>
                <p class="text-blue-500 text-sm uppercase tracking-wider font-bold">Veterinário</p>
            </div>

            <!-- Membro 3 -->
            <div class="text-center group">
                <div class="w-32 h-32 rounded-full overflow-hidden border-2 border-purple-500 mx-auto mb-4 relative">
                    <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?q=80&w=400&auto=format&fit=crop" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500" alt="Gerente">
                </div>
                <h4 class="text-white font-bold text-lg">Mariana Costa</h4>
                <p class="text-purple-500 text-sm uppercase tracking-wider font-bold">Logística</p>
            </div>

        </div>
    </div>

</main>

<?php include 'includes/footer.php'; ?>