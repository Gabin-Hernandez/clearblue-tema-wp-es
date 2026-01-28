<?php
/**
 * Template Name: Capacitacion  
 * Description: Página de servicios de capacitacion
 */

get_header();
?>

<!-- Hero Section -->
<section class="relative min-h-[80vh] bg-gradient-to-br from-gray-50 to-gray-100 pt-32 pb-20 overflow-hidden">
    <div class="container mx-auto px-6">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            
            <!-- Columna izquierda - Contenido de texto -->
            <div class="max-w-xl">
                <!-- Badge -->
                <div class="inline-block mb-6 opacity-0 translate-y-8 animate-on-scroll" data-delay="100">
                    <span class="bg-secondary text-white text-xs font-bold px-4 py-2 rounded-full uppercase tracking-wider">
                        CB Capacitación
                    </span>
                </div>
                
                <!-- Título principal -->
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-normal text-gray-900 mb-6 leading-tight opacity-0 translate-y-8 animate-on-scroll" data-delay="200">
                Programas de capacitación empresarial para  
                    <span class="text-secondary font-black">FORTALECER</span> tu talento humano
                </h1>
                
                <!-- CTA Buttons -->
                <div class="flex flex-wrap gap-4 opacity-0 translate-y-8 animate-on-scroll" data-delay="400">
                    <button class="bg-secondary hover:bg-secondary/80 text-white px-10 py-4 rounded-xl transition-all duration-300 font-bold text-md shadow-lg hover:shadow-xl transform hover:scale-105">
                        Cotizar ahora
                    </button>
                    <button class="bg-white hover:bg-gray-100 text-primary px-8 py-4 rounded-xl transition-all duration-300 font-bold text-md shadow-lg hover:shadow-xl transform hover:scale-105 border-2 border-primary/20 flex items-center gap-3">
                        <svg class="w-6 h-6 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                        Descargar catálogo
                    </button>
                </div>
            </div>
            
            <!-- Columna derecha - Grid de imágenes desordenado -->
            <div class="relative h-[500px] lg:h-[600px] hidden lg:block">
                <!-- Imagen 1 - Superior izquierda -->
                <div class="absolute top-0 left-0 w-60 h-72 rounded-2xl overflow-hidden shadow-2xl transform hover:scale-105 transition-transform duration-300 z-10 opacity-0 scale-75 animate-on-scroll particle-float" data-delay="300" data-speed="0.3">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/c1.webp" 
                         alt="Trabajador 1" 
                         class="w-full h-full object-cover">
                </div>
                
                <!-- Imagen 2 - Superior derecha -->
                <div class="absolute top-0 right-0 w-64 h-64 rounded-2xl overflow-hidden shadow-2xl transform hover:scale-105 transition-transform duration-300 z-20 opacity-0 scale-75 animate-on-scroll particle-float" data-delay="500" data-speed="0.5">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/c2.webp" 
                         alt="Trabajador 2" 
                         class="w-full h-full object-cover">
                </div>
                
                <!-- Imagen 3 - Centro izquierda (más grande y destacada) -->
                <div class="absolute top-60 left-24 w-60 h-72 rounded-2xl overflow-hidden shadow-2xl transform hover:scale-105 transition-transform duration-300 z-30 opacity-0 scale-75 animate-on-scroll particle-float" data-delay="700" data-speed="0.2">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/ima3.jpg" 
                         alt="Trabajador 3" 
                         class="w-full h-full object-cover">
                </div>
                
                <!-- Imagen 4 - Inferior derecha -->
                <div class="absolute bottom-0 right-8 w-48 h-52 rounded-2xl overflow-hidden shadow-2xl transform hover:scale-105 transition-transform duration-300 z-20 opacity-0 scale-75 animate-on-scroll particle-float" data-delay="900" data-speed="0.4">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/c3.webp" 
                         alt="Trabajador 4" 
                         class="w-full h-full object-cover">
                </div>
                
                <!-- Elementos decorativos (cuadrados morados como en la imagen) -->
                <div class="absolute top-64 right-32 w-20 h-20 bg-secondary rounded-lg opacity-80 z-0 particle-float" data-speed="0.6"></div>
                <div class="absolute bottom-32 left-4 w-16 h-16 bg-primary rounded-lg opacity-60 z-0 particle-float" data-speed="0.7"></div>
            </div>
            
            <!-- Grid móvil - Mostrar solo en pantallas pequeñas -->
            <div class="grid grid-cols-2 gap-4 lg:hidden">
                <div class="rounded-2xl overflow-hidden shadow-lg">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/c1.webp" 
                         alt="Trabajador 1" 
                         class="w-full h-48 object-cover">
                </div>
                <div class="rounded-2xl overflow-hidden shadow-lg">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/c2.webp" 
                         alt="Trabajador 2" 
                         class="w-full h-48 object-cover">
                </div>
                <div class="rounded-2xl overflow-hidden shadow-lg">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/ima3.jpg" 
                         alt="Trabajador 3" 
                         class="w-full h-48 object-cover">
                </div>
                <div class="rounded-2xl overflow-hidden shadow-lg">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/c3.webp" 
                         alt="Trabajador 4" 
                         class="w-full h-48 object-cover">
                </div>
            </div>
            
        </div>
    </div>
</section>

<!-- Sección de Estadísticas y Gestión -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6 leading-tight opacity-0 translate-y-8 animate-on-scroll" data-delay="200">
            Diseñamos programas de capacitación empresarial que impulsan la productividad, fortalecen habilidades clave y generan resultados reales en tu equipo
            </h2>
            <p>BENEFICIOS CREATBLUE®</p>
        </div>
        
        <!-- Grid de 3 columnas con iconos -->
        <div class="grid md:grid-cols-3 gap-6 mb-20">
            <!-- Card 1: Menor tiempo -->
            <div class="bg-gradient-to-b from-white to-secondary/20 rounded-2xl px-8 py-12 shadow-xl hover:shadow-sm transition-all duration-300 border border-gray-100 opacity-0 translate-y-8 animate-on-scroll" data-delay="400">
                <div class="flex items-center gap-6">
                    <div class="w-16 h-16 bg-gradient-to-br from-secondary/10 to-secondary/30 rounded-2xl flex items-center justify-center flex-shrink-0">
                        <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 leading-tight">
                    Aumento de la productividad operativa
                    </h3>
                </div>
            </div>
            
            <!-- Card 2: Reclutamiento especializado -->
            <div class="bg-gradient-to-b from-white to-secondary/20 rounded-2xl px-8 py-12 shadow-xl hover:shadow-sm transition-all duration-300 border border-gray-100 opacity-0 translate-y-8 animate-on-scroll" data-delay="600">
                <div class="flex items-center gap-6">
                    <div class="w-16 h-16 bg-gradient-to-br from-secondary/10 to-secondary/30 rounded-2xl flex items-center justify-center flex-shrink-0">
                        <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 leading-tight">
                    Desarrollo de habilidades personalizadas clave
                    </h3>
                </div>
            </div>
            
            <!-- Card 3: Procesos asistidos -->
            <div class="bg-gradient-to-b from-white to-secondary/20 rounded-2xl px-8 py-12 shadow-xl hover:shadow-sm transition-all duration-300 border border-gray-100 opacity-0 translate-y-8 animate-on-scroll" data-delay="800">
                <div class="flex items-center gap-6">
                    <div class="w-16 h-16 bg-gradient-to-br from-secondary/10 to-secondary/30 rounded-2xl flex items-center justify-center flex-shrink-0">
                        <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 leading-tight">
                    Resultados medibles para las áreas administrativas y de operación
                    </h3>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sección ¿Te ha pasado? -->
<section class="py-20 bg-gradient-to-br from-[#849dfa] to-[#6b7fd8]">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-4 opacity-0 translate-y-8 animate-on-scroll" data-delay="200">
                ¿Te ha pasado? Principales problemas en las empresas al capacitar equipos
            </h2>
        </div>
        
        <!-- Grid de 4 cards -->
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Card 1: Retrabajo y errores -->
            <div class="bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 opacity-0 translate-y-8 animate-on-scroll" data-delay="400">
                <div class="flex justify-center mb-6">
                    <div class="w-16 h-16 bg-[#849dfa] rounded-2xl flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                    </div>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4 text-center">
                    Retrabajo y errores por capacitaciones ineficientes
                </h3>
                <p class="text-gray-700 text-center leading-relaxed">
                    Los costos se elevan hasta 25% más por correcciones y ajustes, ya que se necesita mayor supervisión, restando tiempo efectivo.
                </p>
            </div>
            
            <!-- Card 2: Dificultad para medir ROI -->
            <div class="bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 opacity-0 translate-y-8 animate-on-scroll" data-delay="600">
                <div class="flex justify-center mb-6">
                    <div class="w-16 h-16 bg-[#849dfa] rounded-2xl flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                        </svg>
                    </div>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4 text-center">
                    Dificultad para medir ROI
                </h3>
                <p class="text-gray-700 text-center leading-relaxed">
                    El 40% de empresas reporta que no se puede demostrar el ROI de sus programas de capacitación, lo que hace difícil justificar presupuestos y mejora continua.
                </p>
            </div>
            
            <!-- Card 3: Barreras para crecimiento -->
            <div class="bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 opacity-0 translate-y-8 animate-on-scroll" data-delay="800">
                <div class="flex justify-center mb-6">
                    <div class="w-16 h-16 bg-[#849dfa] rounded-2xl flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                        </svg>
                    </div>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4 text-center">
                    Barreras para crecimiento individual y colectivo
                </h3>
                <p class="text-gray-700 text-center leading-relaxed">
                    La falta de aprovechamiento en herramientas digitales o mejoras de performance operacional, afectando la competitividad.
                </p>
            </div>
            
            <!-- Card 4: Learning Gap -->
            <div class="bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 opacity-0 translate-y-8 animate-on-scroll" data-delay="1000">
                <div class="flex justify-center mb-6">
                    <div class="w-16 h-16 bg-[#849dfa] rounded-2xl flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    </div>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4 text-center">
                    Learning Gap al capacitar equipos
                </h3>
                <p class="text-gray-700 text-center leading-relaxed">
                    Baja de adopción de plataformas de aprendizaje, LMS subutilizados que se invierten pero no son utilizados.
                </p>
            </div>
        </div>
        
        <!-- Badge -->
        <div class="text-center mt-12">
            <p class="inline-block text-white/90 text-base md:text-lg bg-white/10 backdrop-blur-sm px-6 py-3 rounded-full opacity-0 translate-y-8 animate-on-scroll" data-delay="200">
                Capacitación empresarial para prevenir pérdidas, fortalecer el clima laboral y actualización de competencias
            </p>
        </div>
    </div>
</section>

<!-- Sección Transforma el talento en resultados -->
<section class="relative py-20 overflow-hidden">
    <!-- Imagen de fondo de la sección -->
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/fdo1.jpg" 
         alt="Background" 
         class="absolute inset-0 w-full h-full object-cover">
    
    <!-- Overlay oscuro sobre la imagen -->
    <div class="absolute inset-0 bg-gradient-to-br from-[#2f3082]/70 to-[#0f1229]/70"></div>
    
    <div class="container mx-auto px-6 relative z-10">
        <div class="max-w-4xl mx-auto">
            <!-- Badge con efecto glassmorphism -->
            <div class="backdrop-blur-xl bg-white/10 border border-white/20 rounded-3xl shadow-2xl hover:shadow-3xl transition-all duration-500 transform hover:-translate-y-1 opacity-0 translate-y-8 animate-on-scroll" data-delay="200">
                <div class="px-6 py-8 md:px-14 md:py-14 text-center">                    
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-white leading-tight drop-shadow-2xl">
                    Transforma el talento en resultados
                    </h2>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Sección CREATPLAY -->
<section class="relative overflow-hidden py-20 bg-gradient-to-br from-[#2f3082] to-[#0f1229]">
    <!-- Efectos de fondo -->
    <div class="absolute inset-0 opacity-40">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-gradient-to-b from-[#2f3082]/30 to-primary/20 rounded-full blur-3xl"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-gradient-to-b from-[#2f3082]/20 to-primary/10 rounded-full blur-2xl"></div>
    </div>

    <div class="container mx-auto px-6 relative z-10">
        <!-- Header -->
        <div class="grid max-w-5xl mx-auto md:grid-cols-2 gap-8 items-center mb-16">
            <!-- Columna 1: Logo CREATPLAY -->
            <div class="opacity-0 translate-x-8 animate-on-scroll" data-delay="200">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/creatplay_asset.png" 
                     alt="CREATPLAY" 
                     class="w-full max-w-[400px] h-auto">
            </div>
            
            <!-- Columna 2: Título y texto -->
            <div class="text-right opacity-0 translate-x-8 animate-on-scroll" data-delay="400">
                <h2 class="text-secondary uppercase tracking-[0.2em] font-bold">
                    CREATplay:
                </h2>
                <p class="text-white text-base max-w-2xl ml-auto mb-6">
                    Metodología de capacitación basada en gaming y métodos andragógicos
                </p>
                <!-- Botones de cómo funciona y descarga brochure -->
                <div class="flex flex-wrap gap-3 justify-end opacity-0 translate-y-8 animate-on-scroll" data-delay="400">
                    <button class="bg-white hover:bg-gray-100 text-primary px-6 py-3 rounded-xl transition-all duration-300 font-semibold text-sm shadow-lg hover:shadow-xl transform hover:scale-105 border-2 border-primary/20 flex items-center gap-2">
                        <svg class="w-5 h-5 text-secondary" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M8 5v14l11-7z"/>
                        </svg>
                        Ver cómo funciona
                    </button>
                    <button class="bg-white hover:bg-gray-100 text-primary px-6 py-3 rounded-xl transition-all duration-300 font-semibold text-sm shadow-lg hover:shadow-xl transform hover:scale-105 border-2 border-primary/20 flex items-center gap-2">
                        <svg class="w-5 h-5 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                        Descargar brochure
                    </button>
                </div>
            </div>
        </div>

        <!-- Grid de imágenes: 2 banners del mismo tamaño -->
        <div class="grid md:grid-cols-2 gap-6 max-w-5xl mx-auto">
            
            <!-- Banner izquierdo: Gaming -->
            <div class="relative rounded-3xl overflow-hidden shadow-2xl group h-96 md:h-[450px] opacity-0 scale-75 animate-on-scroll" data-delay="600">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/c4.jpg" 
                     alt="Gaming - Capacitación empresarial" 
                     class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-8">
                    <h3 class="text-white text-2xl md:text-3xl font-bold leading-tight">
                    Capacitación empresarial a través de Gaming
                    </h3>
                    <p class="text-white text-base max-w-2xl ml-auto">
                    Dinámicas de aprendizaje gamificadas diseñandas para fortalecer habilidades e incrementar la participación.                    </p>
                </div>
            </div>
            
            <!-- Banner derecho: Métodos Andragógicos -->
            <div class="relative rounded-3xl overflow-hidden shadow-2xl group h-96 md:h-[450px] opacity-0 scale-75 animate-on-scroll" data-delay="800">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/c5.jpg" 
                     alt="Métodos Andragógicos - Aprendizaje generacional" 
                     class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-8">
                    <h3 class="text-white text-2xl md:text-3xl font-bold leading-tight">
                    Métodos Andragógicos para el aprendizaje generacional
                    </h3>
                        <p class="text-white text-base max-w-2xl ml-auto">
                        Capacitación basada en la experiencia, la práctica y casos reales, adaptada a las necesidades del talento humano.                    </p>
                </div>
            </div>
            
        </div>
    </div>
</section>

<!-- Sección Capacitación Presencial -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <!-- Título principal -->
        <div class="mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 uppercase tracking-wide opacity-0 translate-y-8 animate-on-scroll" data-delay="200">
                Capacitación Presencial para equipos operativos y directivos Creatblue® México
            </h2>
        </div>
        
        <!-- Grid de 2 columnas -->
        <div class="grid md:grid-cols-2 gap-8 lg:gap-12">
            
            <!-- Banner 1: Talleres empresariales -->
            <div class="bg-gray-50 rounded-2xl p-8 shadow-lg opacity-0 translate-y-8 animate-on-scroll" data-delay="400">
                <h3 class="text-xl md:text-2xl font-bold text-primary mb-6">
                    Talleres empresariales
                </h3>
                <ul class="space-y-3">
                    <li class="flex items-start gap-3 text-gray-700">
                        <svg class="w-5 h-5 text-secondary flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <span>Observación orientada</span>
                    </li>
                    <li class="flex items-start gap-3 text-gray-700">
                        <svg class="w-5 h-5 text-secondary flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <span>Swim Lane (alineación de procesos)</span>
                    </li>
                    <li class="flex items-start gap-3 text-gray-700">
                        <svg class="w-5 h-5 text-secondary flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <span>Planeación estratégica</span>
                    </li>
                    <li class="flex items-start gap-3 text-gray-700">
                        <svg class="w-5 h-5 text-secondary flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <span>Estrategia posicional</span>
                    </li>
                    <li class="flex items-start gap-3 text-gray-700">
                        <svg class="w-5 h-5 text-secondary flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <span>Proceso de acción correctiva (8D)</span>
                    </li>
                    <li class="flex items-start gap-3 text-gray-700">
                        <svg class="w-5 h-5 text-secondary flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <span>Evaluación de competencias gerenciales</span>
                    </li>
                </ul>
            </div>
            
            <!-- Banner 2: Implementaciones y mejora continua -->
            <div class="bg-gray-50 rounded-2xl p-8 shadow-lg opacity-0 translate-y-8 animate-on-scroll" data-delay="600">
                <h3 class="text-xl md:text-2xl font-bold text-primary mb-6">
                    Implementaciones y mejora continua
                </h3>
                <ul class="space-y-3">
                    <li class="flex items-start gap-3 text-gray-700">
                        <svg class="w-5 h-5 text-secondary flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <span>Opex (Excelencia operativa)</span>
                    </li>
                    <li class="flex items-start gap-3 text-gray-700">
                        <svg class="w-5 h-5 text-secondary flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <span>Implementación Lean Business System</span>
                    </li>
                    <li class="flex items-start gap-3 text-gray-700">
                        <svg class="w-5 h-5 text-secondary flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <span>Visual Management</span>
                    </li>
                    <li class="flex items-start gap-3 text-gray-700">
                        <svg class="w-5 h-5 text-secondary flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <span>Housekeeping (5S y 6S) - Orden, limpieza, seguridad y calidad</span>
                    </li>
                    <li class="flex items-start gap-3 text-gray-700">
                        <svg class="w-5 h-5 text-secondary flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <span>Planeación y control</span>
                    </li>
                    <li class="flex items-start gap-3 text-gray-700">
                        <svg class="w-5 h-5 text-secondary flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <span>Assessment gerencial a ejecutivos mandos medios</span>
                    </li>
                    <li class="flex items-start gap-3 text-gray-700">
                        <svg class="w-5 h-5 text-secondary flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <span>Implementación de competencias gerenciales</span>
                    </li>
                </ul>
            </div>
            
        </div>
    </div>
</section>

<!-- Sección Capacitación Online -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <!-- Título principal -->
        <div class="mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 uppercase tracking-wide opacity-0 translate-y-8 animate-on-scroll" data-delay="200">
                Capacitación Online para equipos operativos y directivos Creatblue® México
            </h2>
        </div>
        
        <!-- Banner: Cursos En Línea -->
        <div class="bg-white rounded-2xl p-8 shadow-lg opacity-0 translate-y-8 animate-on-scroll" data-delay="400">
            <h3 class="text-xl md:text-2xl font-bold text-primary mb-6">
                Cursos En Línea
            </h3>
            <ul class="grid md:grid-cols-2 gap-x-8 gap-y-3">
                <li class="flex items-start gap-3 text-gray-700">
                    <svg class="w-5 h-5 text-secondary flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                    </svg>
                    <span>Generaciones Laborales y Diversidad e Inclusión</span>
                </li>
                <li class="flex items-start gap-3 text-gray-700">
                    <svg class="w-5 h-5 text-secondary flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                    </svg>
                    <span>Reclutamiento 4.0 / 5.0</span>
                </li>
                <li class="flex items-start gap-3 text-gray-700">
                    <svg class="w-5 h-5 text-secondary flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                    </svg>
                    <span>Coaching Ejecutivo</span>
                </li>
                <li class="flex items-start gap-3 text-gray-700">
                    <svg class="w-5 h-5 text-secondary flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                    </svg>
                    <span>Assessment Center</span>
                </li>
                <li class="flex items-start gap-3 text-gray-700">
                    <svg class="w-5 h-5 text-secondary flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                    </svg>
                    <span>Evaluación de clima laboral</span>
                </li>
                <li class="flex items-start gap-3 text-gray-700">
                    <svg class="w-5 h-5 text-secondary flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                    </svg>
                    <span>Evaluación 360 por competencias</span>
                </li>
                <li class="flex items-start gap-3 text-gray-700">
                    <svg class="w-5 h-5 text-secondary flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                    </svg>
                    <span>Implementación Integral NOM 035</span>
                </li>
                <li class="flex items-start gap-3 text-gray-700">
                    <svg class="w-5 h-5 text-secondary flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                    </svg>
                    <span>NOM 035 para líderes</span>
                </li>
                <li class="flex items-start gap-3 text-gray-700">
                    <svg class="w-5 h-5 text-secondary flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                    </svg>
                    <span>Capacitaciones y programas formativos</span>
                </li>
                <li class="flex items-start gap-3 text-gray-700">
                    <svg class="w-5 h-5 text-secondary flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                    </svg>
                    <span>Formación de instructores</span>
                </li>
                <li class="flex items-start gap-3 text-gray-700">
                    <svg class="w-5 h-5 text-secondary flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                    </svg>
                    <span>Diseño y aplicación de assessment center</span>
                </li>
                <li class="flex items-start gap-3 text-gray-700">
                    <svg class="w-5 h-5 text-secondary flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                    </svg>
                    <span>Liderazgo resonante</span>
                </li>
                <li class="flex items-start gap-3 text-gray-700">
                    <svg class="w-5 h-5 text-secondary flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                    </svg>
                    <span>Team building "Beyond Borders"</span>
                </li>
                <li class="flex items-start gap-3 text-gray-700">
                    <svg class="w-5 h-5 text-secondary flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                    </svg>
                    <span>Accountability / Responsabilidad Personal</span>
                </li>
                <li class="flex items-start gap-3 text-gray-700">
                    <svg class="w-5 h-5 text-secondary flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                    </svg>
                    <span>Comisiones de Seguridad e Higiene NOM 019</span>
                </li>
                <li class="flex items-start gap-3 text-gray-700">
                    <svg class="w-5 h-5 text-secondary flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                    </svg>
                    <span>Gestión de la Capacitación por Competencias y STPS</span>
                </li>
            </ul>
        </div>
    </div>
</section>

<!-- Sección CTA Final -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
            ¿Listo para transformar tu capital humano?
        </h2>
        <p class="text-gray-600 text-lg mb-8 max-w-2xl mx-auto">
            Contáctanos hoy y descubre cómo podemos ayudarte a optimizar tus procesos de reclutamiento y capacitación.
        </p>
        <button class="bg-secondary hover:bg-secondary/80 text-white px-10 py-4 rounded-xl transition-all duration-300 font-bold text-md shadow-lg hover:shadow-xl transform hover:scale-105 opacity-0 translate-y-8 animate-on-scroll" data-delay="400">
            Contáctanos ahora
        </button>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Intersection Observer para las animaciones de scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '-50px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                const element = entry.target;
                const delay = parseInt(element.dataset.delay) || 0;
                
                setTimeout(() => {
                    element.classList.add('animate-in');
                    element.classList.remove('opacity-0', 'translate-y-8', 'translate-x-8', 'scale-75');
                }, delay);
                
                observer.unobserve(element);
            }
        });
    }, observerOptions);

    // Observar todos los elementos con la clase animate-on-scroll
    const animatedElements = document.querySelectorAll('.animate-on-scroll');
    animatedElements.forEach((element) => {
        observer.observe(element);
    });

    // Efecto parallax para las partículas flotantes
    const particles = document.querySelectorAll('.particle-float');
    
    window.addEventListener('scroll', () => {
        const scrollY = window.scrollY;
        
        particles.forEach(particle => {
            const speed = parseFloat(particle.dataset.speed) || 0.5;
            const yPos = -(scrollY * speed);
            
            // Check if element has animate-on-scroll class and is animated in
            if (particle.classList.contains('animate-on-scroll') && particle.classList.contains('animate-in')) {
                // Preserve the existing transform from animation and add parallax
                particle.style.transform = `translateY(${yPos}px)`;
            } else if (!particle.classList.contains('animate-on-scroll')) {
                // For elements without scroll animation, just apply parallax
                particle.style.transform = `translateY(${yPos}px)`;
            }
        });
    });
});
</script>

<style>
.animate-on-scroll {
    transition: all 0.8s cubic-bezier(0.4, 0.0, 0.2, 1);
}

.animate-on-scroll.animate-in {
    opacity: 1 !important;
    /* No aplicamos transform aquí para evitar conflictos con parallax */
}

.animate-on-scroll.animate-in:not(.particle-float) {
    transform: translateY(0) translateX(0) scale(1) !important;
}

.particle-float {
    transition: transform 0.1s ease-out;
    will-change: transform;
}
</style>

<?php
get_footer();
