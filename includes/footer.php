<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Insectus - Nutrição Exótica</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/markdown-it@13.0.1/dist/markdown-it.min.js"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { sans: ['Outfit', 'sans-serif'] },
                    colors: {
                        'glass-border': 'rgba(255, 255, 255, 0.2)',
                        'accent-green': '#a3e635',
                    },
                    backgroundImage: {
                        'swamp': "url('https://images.unsplash.com/photo-1550948537-130a1ce83314?q=80&w=2072&auto=format&fit=crop')",
                    },
                    animation: {
                        'pulse-slow': 'pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                    }
                }
            }
        }
    </script>

    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="relative min-h-screen flex flex-col items-center">

    <div class="fixed inset-0 z-[-2] bg-swamp bg-cover bg-center"></div>
    <div class="fixed inset-0 z-[-1] bg-black/50 bg-gradient-to-b from-black/30 via-transparent to-black/80"></div>

    <div class="blob bg-green-500 w-64 h-64 rounded-full top-20 left-10 mix-blend-overlay"></div>
    <div class="blob bg-blue-500 w-96 h-96 rounded-full bottom-20 right-10 mix-blend-overlay animation-delay-2000"></div>

    <nav class="fixed top-6 z-50 w-11/12 max-w-3xl animate-fade-in-down">
        <div class="liquid-glass rounded-full px-6 py-3 flex justify-between items-center relative z-50">
            <a href="index.php" class="flex items-center gap-2 text-white/90 hover:text-accent-green transition-colors">
                <i class="fa-solid fa-locust text-xl"></i>
                <span class="font-bold tracking-wider text-sm hidden sm:block uppercase">Prime Insectus</span>
            </a>

            <div class="hidden md:flex gap-8 text-sm font-light tracking-wide text-white/80">
                <a href="index.php" class="hover:text-white transition-all font-semibold">Início</a>
                <a href="sobre.php" class="hover:text-white transition-all">Sobre Nós</a>
                <a href="loja.php" class="hover:text-white transition-all">Loja</a>
            </div>

            <div class="flex items-center gap-4">
                <button id="login-btn" class="hidden md:flex items-center gap-2 text-xs bg-white/10 px-3 py-1.5 rounded-full hover:bg-white/20 transition-all text-white">
                    <i class="fa-brands fa-google"></i> Entrar
                </button>

                <div class="md:hidden cursor-pointer text-white hover:text-accent-green transition-colors" onclick="toggleMenu()">
                    <i id="menu-icon" class="fa-solid fa-bars text-lg"></i>
                </div>
            </div>
        </div>

        <div id="mobile-menu" class="hidden opacity-0 transform -translate-y-5 absolute top-full left-0 right-0 mt-2 p-4 liquid-glass rounded-2xl flex flex-col gap-4 text-center z-40">
            <a href="index.php" class="text-white hover:text-accent-green py-2 border-b border-white/10">Início</a>
            <a href="sobre.php" class="text-white hover:text-accent-green py-2 border-b border-white/10">Sobre Nós</a>
            <a href="loja.php" class="text-white hover:text-accent-green py-2 border-b border-white/10">Loja</a>
            <a href="#" class="text-white hover:text-accent-green py-2 border-b border-white/10"><i class="fa-solid fa-user mr-2"></i> Minha Conta</a>
            <button id="mobile-login-btn" class="w-full text-center text-accent-green font-bold py-2">
                <i class="fa-brands fa-google mr-2"></i> Entrar com Google
            </button>
        </div>
    </nav>
    <script src="assets/js/ui.js"></script>

    <script type="module" src="assets/js/script.js"></script>
</body>
</html>