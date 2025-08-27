<?php require_once('header.php'); ?>

<!-- Hero Section -->
<section class="relative min-h-screen flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="https://placehold.co/1920x1080?text=Modern+luxury+beauty+salon+interior+with+elegant+styling+chairs+and+professional+lighting" 
             alt="Modern luxury beauty salon interior with elegant styling chairs and professional lighting" 
             onerror="this.onerror=null;this.src='';" 
             class="w-full h-full object-cover">
        <div class="hero-overlay absolute inset-0"></div>
    </div>
    
    <div class="relative z-10 text-center text-white px-4 max-w-4xl mx-auto">
        <h1 class="hero-title text-5xl md:text-7xl font-playfair font-bold mb-6 fade-in">
            Puro Luck
        </h1>
        <p class="hero-subtitle text-xl md:text-2xl mb-8 slide-up">
            Transforme sua beleza com elegância e sofisticação
        </p>
        <p class="text-lg md:text-xl mb-10 max-w-2xl mx-auto slide-up">
            Há mais de 10 anos cuidando da sua autoestima com os melhores profissionais e tratamentos exclusivos
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center slide-up">
            <a href="contact.php" class="btn-primary px-8 py-4 rounded-full text-lg font-semibold hover:transform hover:scale-105 transition-all duration-300">
                Agendar Horário
            </a>
            <a href="services.php" class="btn-secondary bg-transparent border-2 border-white text-white px-8 py-4 rounded-full text-lg font-semibold hover:bg-white hover:text-pink-600 transition-all duration-300">
                Nossos Serviços
            </a>
        </div>
    </div>
</section>

<!-- Serviços em Destaque -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-playfair font-bold text-gray-800 mb-4">
                Nossos Serviços
            </h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Oferecemos uma gama completa de serviços de beleza com a mais alta qualidade e profissionalismo
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Corte e Penteado -->
            <div class="service-card bg-white rounded-lg overflow-hidden shadow-lg">
                <div class="h-48 overflow-hidden">
                    <img src="https://placehold.co/400x300?text=Professional+hair+cutting+and+styling+service+in+modern+salon" 
                         alt="Professional hair cutting and styling service in modern salon" 
                         onerror="this.onerror=null;this.src='';" 
                         class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Corte & Penteado</h3>
                    <p class="text-gray-600 mb-4">Cortes modernos e penteados exclusivos para realçar sua personalidade</p>
                    <div class="text-pink-600 font-semibold">A partir de R$ 80</div>
                </div>
            </div>
            
            <!-- Coloração -->
            <div class="service-card bg-white rounded-lg overflow-hidden shadow-lg">
                <div class="h-48 overflow-hidden">
                    <img src="https://placehold.co/400x300?text=Hair+coloring+and+highlights+professional+treatment" 
                         alt="Hair coloring and highlights professional treatment" 
                         onerror="this.onerror=null;this.src='';" 
                         class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Coloração</h3>
                    <p class="text-gray-600 mb-4">Coloração profissional com produtos de alta qualidade e técnicas avançadas</p>
                    <div class="text-pink-600 font-semibold">A partir de R$ 120</div>
                </div>
            </div>
            
            <!-- Tratamentos -->
            <div class="service-card bg-white rounded-lg overflow-hidden shadow-lg">
                <div class="h-48 overflow-hidden">
                    <img src="https://placehold.co/400x300?text=Luxury+hair+treatment+and+hydration+therapy" 
                         alt="Luxury hair treatment and hydration therapy" 
                         onerror="this.onerror=null;this.src='';" 
                         class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Tratamentos</h3>
                    <p class="text-gray-600 mb-4">Hidratação, reconstrução e tratamentos especializados para todos os tipos de cabelo</p>
                    <div class="text-pink-600 font-semibold">A partir de R$ 60</div>
                </div>
            </div>
            
            <!-- Manicure & Pedicure -->
            <div class="service-card bg-white rounded-lg overflow-hidden shadow-lg">
                <div class="h-48 overflow-hidden">
                    <img src="https://placehold.co/400x300?text=Professional+manicure+and+pedicure+nail+care+service" 
                         alt="Professional manicure and pedicure nail care service" 
                         onerror="this.onerror=null;this.src='';" 
                         class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Manicure & Pedicure</h3>
                    <p class="text-gray-600 mb-4">Cuidado completo para suas unhas com técnicas modernas e produtos de qualidade</p>
                    <div class="text-pink-600 font-semibold">A partir de R$ 40</div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-12">
            <a href="services.php" class="btn-primary px-8 py-4 rounded-full text-lg font-semibold inline-block">
                Ver Todos os Serviços
            </a>
        </div>
    </div>
</section>

<!-- Sobre Nós -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-4xl md:text-5xl font-playfair font-bold text-gray-800 mb-6">
                    Sobre o Puro Luck
                </h2>
                <p class="text-lg text-gray-600 mb-6">
                    Há mais de uma década, o Puro Luck tem sido sinônimo de excelência em beleza e bem-estar. 
                    Nossa missão é realçar a beleza natural de cada cliente através de serviços personalizados 
                    e técnicas inovadoras.
                </p>
                <p class="text-lg text-gray-600 mb-8">
                    Com uma equipe de profissionais altamente qualificados e um ambiente acolhedor, 
                    proporcionamos uma experiência única que vai além da transformação visual, 
                    cuidando também da sua autoestima e bem-estar.
                </p>
                <a href="about.php" class="btn-secondary border-2 border-pink-600 text-pink-600 px-8 py-3 rounded-full font-semibold inline-block hover:bg-pink-600 hover:text-white transition-all duration-300">
                    Conheça Nossa História
                </a>
            </div>
            <div class="relative">
                <img src="https://placehold.co/600x500?text=Elegant+beauty+salon+team+of+professional+stylists" 
                     alt="Elegant beauty salon team of professional stylists" 
                     onerror="this.onerror=null;this.src='';" 
                     class="w-full rounded-lg shadow-xl">
            </div>
        </div>
    </div>
</section>

<!-- Depoimentos -->
<section class="py-20 bg-pink-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-playfair font-bold text-gray-800 mb-4">
                O Que Dizem Nossos Clientes
            </h2>
            <p class="text-xl text-gray-600">
                A satisfação dos nossos clientes é nossa maior recompensa
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Depoimento 1 -->
            <div class="testimonial-card p-6 rounded-lg shadow-lg">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-pink-200 rounded-full flex items-center justify-center mr-4">
                        <span class="text-pink-600 font-bold text-lg">M</span>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-800">Maria Silva</h4>
                        <div class="flex text-yellow-400">
                            ★★★★★
                        </div>
                    </div>
                </div>
                <p class="text-gray-600 italic">
                    "Excelente atendimento! Sempre saio do salão me sentindo renovada e linda. 
                    A equipe é super profissional e o ambiente é muito acolhedor."
                </p>
            </div>
            
            <!-- Depoimento 2 -->
            <div class="testimonial-card p-6 rounded-lg shadow-lg">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-pink-200 rounded-full flex items-center justify-center mr-4">
                        <span class="text-pink-600 font-bold text-lg">A</span>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-800">Ana Costa</h4>
                        <div class="flex text-yellow-400">
                            ★★★★★
                        </div>
                    </div>
                </div>
                <p class="text-gray-600 italic">
                    "Melhor salão da região! Os tratamentos são incríveis e os resultados sempre superam 
                    minhas expectativas. Recomendo de olhos fechados!"
                </p>
            </div>
            
            <!-- Depoimento 3 -->
            <div class="testimonial-card p-6 rounded-lg shadow-lg">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-pink-200 rounded-full flex items-center justify-center mr-4">
                        <span class="text-pink-600 font-bold text-lg">C</span>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-800">Carla Santos</h4>
                        <div class="flex text-yellow-400">
                            ★★★★★
                        </div>
                    </div>
                </div>
                <p class="text-gray-600 italic">
                    "Atendimento personalizado e produtos de primeira qualidade. 
                    Já sou cliente há 5 anos e nunca me decepcionei. Simplesmente perfeito!"
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-20 bg-gradient-to-r from-pink-600 to-pink-400 text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-4xl md:text-5xl font-playfair font-bold mb-6">
            Pronta para se Transformar?
        </h2>
        <p class="text-xl mb-8 max-w-2xl mx-auto">
            Agende seu horário e descubra por que somos o salão de beleza preferido da região
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="contact.php" class="bg-white text-pink-600 px-8 py-4 rounded-full text-lg font-semibold hover:bg-gray-100 transition-colors duration-300">
                Agendar Agora
            </a>
            <a href="tel:+5511999999999" class="border-2 border-white text-white px-8 py-4 rounded-full text-lg font-semibold hover:bg-white hover:text-pink-600 transition-all duration-300">
                (11) 99999-9999
            </a>
        </div>
    </div>
</section>

<?php require_once('footer.php'); ?>
