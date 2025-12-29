<?php
/**
 * Template Name: Welcome Page
 * Description: Página de bienvenida con diseño personalizado usando Tailwind CSS
 */
?>

<!-- Welcome section - Selección de País/Idioma -->
<section class="py-20 bg-gradient-to-br from-gray-50 to-gray-100">
    <div class="container mx-auto px-6">
        
        <!-- Título principal -->
        <div class="text-center mb-16">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 mb-4 opacity-0 translate-y-8 animate-on-scroll" data-delay="200">
                CREADORES DE TALENTO <span class="text-[#849dfa]">Human Talent Solutions</span>
            </h1>
        </div>
        
        <!-- Grid de 2 columnas -->
        <div class="grid lg:grid-cols-2 gap-12 items-center max-w-7xl mx-auto">
            
            <!-- Columna izquierda - Texto y enlaces -->
            <div class="space-y-8 opacity-0 translate-x-8 animate-on-scroll" data-delay="400">
                
                <!-- Título de selección -->
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                        Selecciona tu país para comenzar
                    </h2>
                    <p class="text-gray-600 text-lg italic">
                        Select your country to start / Wählen sie ihr land zum starten
                    </p>
                </div>
                
                <!-- Enlaces de países -->
                <div class="space-y-6">
                    <!-- México -->
                    <a href="<?php echo esc_url(home_url('/mx')); ?>" 
                       class="group flex items-center gap-4 p-6 bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 border-2 border-transparent hover:border-secondary">
                        <div class="flex-1">
                            <h3 class="text-2xl font-bold text-gray-900 group-hover:text-secondary transition-colors">
                                Creatblue <span class="text-[#849dfa]">México</span>
                            </h3>
                        </div>
                        <svg class="w-6 h-6 text-secondary transform group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                    
                    <!-- Estados Unidos -->
                    <a href="<?php echo esc_url(home_url('/us')); ?>" 
                       class="group flex items-center gap-4 p-6 bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 border-2 border-transparent hover:border-secondary">
                        <div class="flex-1">
                            <h3 class="text-2xl font-bold text-gray-900 group-hover:text-secondary transition-colors">
                                Creatblue <span class="text-[#849dfa]">United States of America</span>
                            </h3>
                        </div>
                        <svg class="w-6 h-6 text-secondary transform group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                    
                    <!-- Alemania -->
                    <a href="<?php echo esc_url(home_url('/de')); ?>" 
                       class="group flex items-center gap-4 p-6 bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 border-2 border-transparent hover:border-secondary">
                        <div class="flex-1">
                            <h3 class="text-2xl font-bold text-gray-900 group-hover:text-secondary transition-colors">
                                Creatblue <span class="text-[#849dfa]">Deutschland</span>
                            </h3>
                        </div>
                        <svg class="w-6 h-6 text-secondary transform group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
            
            <!-- Columna derecha - Imagen con iconos superpuestos -->
            <div class="relative w-full h-[600px] opacity-0 scale-75 animate-on-scroll" data-delay="600">
                <!-- Imagen de fondo del globo -->
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/back_global.webp" 
                     alt="Global Network" 
                     class="absolute inset-0 w-full h-full object-contain">
                
                <!-- Icono USA - Arriba izquierda -->
                <div class="absolute top-[15%] left-[10%] transform animate-float" style="animation-delay: 0s;">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/usa_l.webp" 
                         alt="USA" 
                         class="w-32 h-32 md:w-40 md:h-40 drop-shadow-2xl hover:scale-110 transition-transform duration-300 cursor-pointer">
                </div>
                
                <!-- Icono México - Abajo izquierda -->
                <div class="absolute bottom-[20%] left-[5%] transform animate-float" style="animation-delay: 1s;">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/mexio_l.webp" 
                         alt="México" 
                         class="w-32 h-32 md:w-40 md:h-40 drop-shadow-2xl hover:scale-110 transition-transform duration-300 cursor-pointer">
                </div>
                
                <!-- Icono Alemania - Centro derecha -->
                <div class="absolute top-[35%] right-[5%] transform animate-float" style="animation-delay: 2s;">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/deutchaland_l.webp" 
                         alt="Deutschland" 
                         class="w-32 h-32 md:w-40 md:h-40 drop-shadow-2xl hover:scale-110 transition-transform duration-300 cursor-pointer">
                </div>
            </div>
            
        </div>
    </div>
</section>
