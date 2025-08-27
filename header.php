<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puro Luck - Salão de Beleza</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="font-inter">
    <!-- Header -->
    <header class="bg-white shadow-lg fixed w-full top-0 z-50">
        <nav class="container mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <div class="flex items-center">
                    <h1 class="text-2xl font-playfair font-bold text-pink-600">Puro Luck</h1>
                    <span class="ml-2 text-sm text-gray-600">Salão de Beleza</span>
                </div>
                
                <!-- Desktop Navigation -->
                <div class="hidden md:flex space-x-8">
                    <a href="index.php" class="nav-link text-gray-700 hover:text-pink-600 transition-colors duration-300">Home</a>
                    <a href="about.php" class="nav-link text-gray-700 hover:text-pink-600 transition-colors duration-300">Sobre</a>
                    <a href="services.php" class="nav-link text-gray-700 hover:text-pink-600 transition-colors duration-300">Serviços</a>
                    <a href="contact.php" class="nav-link text-gray-700 hover:text-pink-600 transition-colors duration-300">Contato</a>
                </div>
                
                <!-- CTA Button -->
                <div class="hidden md:block">
                    <a href="contact.php" class="bg-pink-600 text-white px-6 py-2 rounded-full hover:bg-pink-700 transition-colors duration-300">
                        Agendar Horário
                    </a>
                </div>
                
                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button id="mobile-menu-btn" class="text-gray-700 hover:text-pink-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
            
            <!-- Mobile Navigation -->
            <div id="mobile-menu" class="hidden md:hidden mt-4 pb-4">
                <div class="flex flex-col space-y-4">
                    <a href="index.php" class="text-gray-700 hover:text-pink-600 transition-colors duration-300">Home</a>
                    <a href="about.php" class="text-gray-700 hover:text-pink-600 transition-colors duration-300">Sobre</a>
                    <a href="services.php" class="text-gray-700 hover:text-pink-600 transition-colors duration-300">Serviços</a>
                    <a href="contact.php" class="text-gray-700 hover:text-pink-600 transition-colors duration-300">Contato</a>
                    <a href="contact.php" class="bg-pink-600 text-white px-6 py-2 rounded-full hover:bg-pink-700 transition-colors duration-300 text-center">
                        Agendar Horário
                    </a>
                </div>
            </div>
        </nav>
    </header>
    
    <!-- Main Content Wrapper -->
    <main class="pt-20">
