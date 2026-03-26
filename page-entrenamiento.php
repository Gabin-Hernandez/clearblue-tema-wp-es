<?php
/**
 * Template Name: Entrenamiento MX
 * Description: Página de servicios de entrenamiento
 * 
 * SEO:
 * - Title: Entrenamiento Industrial en México | Creatblue® México
 * - Meta Description: Modelos de entrenamiento industrial diseñados para aumentar la productividad, eficiencia operativa y desempeño del talento humano.
 */

// SEO manejado dinámicamente desde functions.php
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
                    CB ENTRENAMIENTO
                    </span>
                </div>
                
                <!-- Título principal -->
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-normal text-gray-900 mb-6 leading-tight opacity-0 translate-y-8 animate-on-scroll" data-delay="200">
                Entrenamiento industrial para <span class="text-secondary font-black">AUMENTAR</span> la productividad de tu equipo
                </h1>
                
                <!-- CTA Buttons -->
                <div class="flex flex-wrap gap-4 opacity-0 translate-y-8 animate-on-scroll" data-delay="400">
                    <a href="<?php echo esc_url(home_url('/contacto#form_contact')); ?>" class="inline-block bg-secondary hover:bg-secondary/80 text-white px-10 py-4 rounded-xl transition-all duration-300 font-bold text-md shadow-lg hover:shadow-xl transform hover:scale-105">
                        Cotizar ahora
                    </a>
                    <a href="https://www.youtube.com/@CreatblueMX" target="_blank" rel="noopener noreferrer" class="bg-white hover:bg-gray-100 text-primary px-8 py-4 rounded-xl transition-all duration-300 font-bold text-md shadow-lg hover:shadow-xl transform hover:scale-105 border-2 border-primary/20 flex items-center gap-3">
                        <svg class="w-6 h-6 text-secondary" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M8 5v14l11-7z"/>
                        </svg>
                        Ver cómo funciona
                    </a>
                </div>
            </div>
            
            <!-- Columna derecha - Grid de imágenes desordenado -->
            <div class="relative h-[500px] lg:h-[600px] hidden lg:block">
                <!-- Imagen 1 - Superior izquierda -->
                <div class="absolute top-0 left-0 w-60 h-72 rounded-2xl overflow-hidden shadow-2xl transform hover:scale-105 transition-transform duration-300 z-10 opacity-0 scale-75 animate-on-scroll particle-float" data-delay="300" data-speed="0.3">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/e8.webp" 
                         alt="Trabajador 1" 
                         class="w-full h-full object-cover">
                </div>
                
                <!-- Imagen 2 - Superior derecha -->
                <div class="absolute top-0 right-0 w-64 h-64 rounded-2xl overflow-hidden shadow-2xl transform hover:scale-105 transition-transform duration-300 z-20 opacity-0 scale-75 animate-on-scroll particle-float" data-delay="500" data-speed="0.5">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/e6.webp" 
                         alt="Trabajador 2" 
                         class="w-full h-full object-cover">
                </div>
                
                <!-- Imagen 3 - Centro izquierda (más grande y destacada) - VIDEO -->
                <div class="absolute top-60 left-24 w-60 h-72 rounded-2xl overflow-hidden shadow-2xl transform hover:scale-105 transition-transform duration-300 z-30 opacity-0 scale-75 animate-on-scroll particle-float" data-delay="700" data-speed="0.2">
                    <video autoplay loop muted playsinline class="w-full h-full object-cover">
                        <source src="<?php echo get_stylesheet_directory_uri(); ?>/public/video/entrenamiento.mp4" type="video/mp4">
                        Tu navegador no soporta la reproducción de video.
                    </video>
                </div>
                
                <!-- Imagen 4 - Inferior derecha -->
                <div class="absolute bottom-0 right-8 w-48 h-52 rounded-2xl overflow-hidden shadow-2xl transform hover:scale-105 transition-transform duration-300 z-20 opacity-0 scale-75 animate-on-scroll particle-float" data-delay="900" data-speed="0.4">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/e7.webp" 
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
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/e8.webp" 
                         alt="Trabajador 1" 
                         class="w-full h-48 object-cover">
                </div>
                <div class="rounded-2xl overflow-hidden shadow-lg">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/e6.webp" 
                         alt="Trabajador 2" 
                         class="w-full h-48 object-cover">
                </div>
                <div class="rounded-2xl overflow-hidden shadow-lg">
                    <video autoplay loop muted playsinline class="w-full h-48 object-cover">
                        <source src="<?php echo get_stylesheet_directory_uri(); ?>/public/video/entrenamiento.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="rounded-2xl overflow-hidden shadow-lg">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/e7.webp" 
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
            Diseñamos modelos de entrenamiento profesionales, ideales para empresas que buscan optimizar, mejorar la eficiencia operativa y el desarrollo de soft skills en su equipo.
            </h2>
            <div class="inline-block opacity-0 translate-y-8 animate-on-scroll" data-delay="300">
                <span class="bg-gradient-to-r from-secondary to-primary text-white text-sm md:text-base font-bold px-8 py-3 rounded-full uppercase tracking-wider shadow-lg">
                    BENEFICIOS CREATBLUE
                </span>
            </div>
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
                    Mejora de productividad y eficiencia
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
                        Entrenamiento adaptado a tu industria.
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
                        Formación para operativos, mandos medios y líderes.
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
            ¿Te ha pasado? Principales problemas en la operación industrial
            </h2>
        </div>
        
        <!-- Grid de 4 cards -->
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Card 1: Paros en línea -->
            <div class="bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 opacity-0 translate-y-8 animate-on-scroll" data-delay="400">
                <div class="flex justify-center mb-6">
                    <div class="w-16 h-16 bg-[#849dfa] rounded-2xl flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                    </div>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4 text-center">
                Paros en línea de producción
                </h3>
                <p class="text-gray-700 text-center leading-relaxed">
                Una hora de paro en línea puede costar entre 10K y 50K USD. Dependiendo de la empresa. 
                </p>
            </div>
            
            <!-- Card 2: Daños en instalaciones -->
            <div class="bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 opacity-0 translate-y-8 animate-on-scroll" data-delay="600">
                <div class="flex justify-center mb-6">
                    <div class="w-16 h-16 bg-[#849dfa] rounded-2xl flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                    </div>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4 text-center">
                Daños en las instalaciones
                </h3>
                <p class="text-gray-700 text-center leading-relaxed">
                El 60% de los incidentes industriales se deben a malas prácticas operativas y falta de capacitación del personal.
                </p>
            </div>
            
            <!-- Card 3: Accidentes e incidentes -->
            <div class="bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 opacity-0 translate-y-8 animate-on-scroll" data-delay="800">
                <div class="flex justify-center mb-6">
                    <div class="w-16 h-16 bg-[#849dfa] rounded-2xl flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4 text-center">
                Accidentes e incidentes en el área operativa
                </h3>
                <p class="text-gray-700 text-center leading-relaxed">
                El 38% de los accidentes por mantenimiento generan daños a infraestructura, equipos y barreras de seguridad.
                </p>
            </div>
            
            <!-- Card 4: Scrap de materiales -->
            <div class="bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 opacity-0 translate-y-8 animate-on-scroll" data-delay="1000">
                <div class="flex justify-center mb-6">
                    <div class="w-16 h-16 bg-[#849dfa] rounded-2xl flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                        </svg>
                    </div>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4 text-center">
                Scrap de materiales
                </h3>
                <p class="text-gray-700 text-center leading-relaxed">
                El scrap puede representar entre el 2% y el 10% de los ingresos totales por ventas de una línea de producción.
                </p>
            </div>
        </div>
        <!-- BADGE Reclutamiento y selección para prevenir rotación de personal -->
        <div class="text-center mt-12">
            <p class="inline-block text-white/90 text-base md:text-lg bg-white/10 backdrop-blur-sm px-6 py-3 rounded-full opacity-0 translate-y-8 animate-on-scroll" data-delay="200">
            Entrenamiento industrial para prevenir paros, accidentes y scrap de materiales
            </p>
        </div>
    </div>
</section>

<!-- Sección Entran con ganas y salen ¡Preparados! -->
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
                    Entran con ganas y salen ¡Preparados!
                    </h2>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sección WORKFORCE ready to go! -->
<section class="relative overflow-hidden py-20 bg-gradient-to-br from-[#2f3082] to-[#0f1229]">
    <!-- Efectos de fondo -->
    <div class="absolute inset-0 opacity-40">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-gradient-to-b from-[#2f3082]/30 to-primary/20 rounded-full blur-3xl"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-gradient-to-b from-[#2f3082]/20 to-primary/10 rounded-full blur-2xl"></div>
    </div>
    <div class="container mx-auto px-6 relative z-10">
        <!-- Header -->
        <div class="grid max-w-5xl mx-auto md:grid-cols-2 gap-8 items-center mb-16">
            <!-- Columna 1: Logo WORKFORCE -->
            <div class="opacity-0 translate-x-8 animate-on-scroll" data-delay="200">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/cmap_light.webp" 
                     alt="CREATMAP" 
                     class="w-full max-w-[400px] h-auto">
            </div>
            
            <!-- Columna 2: Título y texto -->
            <div class="text-right opacity-0 translate-x-8 animate-on-scroll" data-delay="400">
                <p class="text-white text-base max-w-2xl ml-auto mb-6">
                Modelo de entrenamiento industrial para optimizar la productividad
                </p>
                <!-- botones de como funciona y descarga brochure -->
                <div class="flex flex-wrap gap-3 justify-end opacity-0 translate-y-8 animate-on-scroll" data-delay="400">
                    <a href="https://www.youtube.com/@CreatblueMX" target="_blank" rel="noopener noreferrer" class="bg-white hover:bg-gray-100 text-primary px-6 py-3 rounded-xl transition-all duration-300 font-semibold text-sm shadow-lg hover:shadow-xl transform hover:scale-105 border-2 border-primary/20 flex items-center gap-2">
                        <svg class="w-5 h-5 text-secondary" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M8 5v14l11-7z"/>
                        </svg>
                        Ver cómo funciona
                    </a>
                    <a href="<?php echo get_stylesheet_directory_uri(); ?>/public/pdf/entrenamiento.pdf" download class="btn-descargar-pdf bg-white hover:bg-gray-100 text-primary px-6 py-3 rounded-xl transition-all duration-300 font-semibold text-sm shadow-lg hover:shadow-xl transform hover:scale-105 border-2 border-primary/20 flex items-center gap-2">
                        <svg class="w-5 h-5 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                        Descargar brochure
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 3 Banners: Mapea, Entrena, Optimiza -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
            
            <!-- Tarjeta 1: Mapea -->
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden opacity-0 translate-y-8 animate-on-scroll" data-delay="200">
                <!-- Imagen -->
                <div class="bg-gray-100">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/e1.webp" 
                         alt="Mapea - Evaluación de rendimiento" 
                         class="w-full h-auto">
                </div>
                <!-- Contenido -->
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-primary mb-3">Mapea: evaluación de desempeño y habilidades</h3>
                    <p class="text-gray-600 leading-relaxed">
                       Cada persona del equipo es evaluada antes y después del entrenamiento utilizando medidores de rendimiento operativos.
                    </p>
                </div>
            </div>
            
            <!-- Tarjeta 2: Entrena -->
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden opacity-0 translate-y-8 animate-on-scroll" data-delay="400">
                <!-- Imagen -->
                <div class="bg-gray-100">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/e2.webp" 
                         alt="Entrena - Capacitación del equipo" 
                         class="w-full h-auto">
                </div>
                <!-- Contenido -->
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-primary mb-3">Entrena: formación operativa y fortalecimiento</h3>
                    <p class="text-gray-600 leading-relaxed">
                    Programas de entrenamiento básico o de fortalecimiento enfocados en habilidades técnicas, operativas y conductuales.  
                    </p>
                </div>
            </div>
            
            <!-- Tarjeta 3: Optimiza -->
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden opacity-0 translate-y-8 animate-on-scroll" data-delay="600">
                <!-- Imagen -->
                <div class="bg-gray-100">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/e3.webp" 
                         alt="Optimiza - Mejora del rendimiento" 
                         class="w-full h-auto">
                </div>
                <!-- Contenido -->
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-primary mb-3">Optimiza: equipos productivos orientados a resultados</h3>
                    <p class="text-gray-600 leading-relaxed">
                        El proceso finaliza con equipos altamente productivos, comprometidos y enfocados en la mejora continua.
                    </p>
                </div>
            </div>
            
        </div>
    </div>
</section>

<!-- Sección LUGARES DE ENTRENAMIENTO -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <!-- Título principal -->
        <div class="mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 uppercase tracking-wide opacity-0 translate-y-8 animate-on-scroll" data-delay="200">
            Modalidades de Entrenamiento Creatblue México
            </h2>
        </div>
        
        <!-- Banner 1: CREATmobil - Ancho completo -->
        <div class="grid lg:grid-cols-2 gap-8 items-center mb-12 bg-gray-50 rounded-3xl overflow-hidden opacity-0 translate-y-8 animate-on-scroll" data-delay="400">
            <!-- Texto a la izquierda -->
            <div class="p-8 lg:p-12">
                <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4">
                    CREATmobil: entrenamiento en tus instalaciones
                </h3>
                <p class="text-gray-700 leading-relaxed text-lg">
                    Llevamos todo nuestro equipo de entrenamiento directamente a tus instalaciones, adaptándonos a tus procesos y operación.
                </p>
            </div>
            <!-- Imagen a la derecha -->
            <div class="h-120">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/e4.webp" 
                     alt="CREATmobil - Entrenamiento en tus instalaciones" 
                     class="w-full h-full object-cover">
            </div>
        </div>
        
        <!-- Banner 2: CEC - Grid con imagen y texto -->
        <div class="grid lg:grid-cols-2 gap-8 items-center bg-white rounded-3xl overflow-hidden shadow-xl opacity-0 translate-y-8 animate-on-scroll" data-delay="600">
            <!-- Imagen a la izquierda -->
            <div class="h-120">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/e5.webp" 
                     alt="CEC - Centros de Entrenamiento Creatblue" 
                     class="w-full h-full object-cover">
            </div>
            <!-- Texto a la derecha -->
            <div class="p-8 lg:p-12">
                <h3 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-6 leading-tight">
                    CEC SLP Y SILAO con una capacidad de 1,050 m²
                </h3>
                <p class="text-gray-700 leading-relaxed text-lg">
                    Prepara a tu equipo en nuestros Centros de Entrenamiento Creatblue, diseñados para simular entornos operativos reales.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Sección MATERIALES DE ENTRENAMIENTO -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <!-- Título principal -->
        <div class="mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 uppercase tracking-wide opacity-0 translate-y-8 animate-on-scroll" data-delay="200">
             y Equipos de Entrenamiento Industrial
            </h2>
        </div>
        
        <!-- Grid de 2 columnas -->
        <div class="grid md:grid-cols-2 gap-8 lg:gap-12">
            
            <!-- Elemento 1: Preparación de materiales para entrenamiento operativo -->
            <div class="bg-white p-8 rounded-2xl shadow-lg opacity-0 translate-y-8 animate-on-scroll" data-delay="400">
                <h3 class="text-xl md:text-2xl font-bold text-gray-900 mb-3">
                    Preparación de materiales para entrenamiento operativo
                </h3>
                <p class="text-gray-700 leading-relaxed">
                    Diseñamos y preparamos materiales de entrenamiento para picking, kitting y simulaciones reales de operación.
                </p>
            </div>
            
            <!-- Elemento 2: Catálogo de equipo móvil industrial y operativo -->
            <div class="bg-white p-8 rounded-2xl shadow-lg opacity-0 translate-y-8 animate-on-scroll" data-delay="600">
                <h3 class="text-xl md:text-2xl font-bold text-gray-900 mb-3">
                      sde equipo móvil industrial y operativo
                </h3>
                <p class="text-gray-700 leading-relaxed">
                    Contamos con equipos móviles especializados para entrenamiento operativo adaptado a cada industria y giro empresarial
                </p>
                <!-- Boton de descargar catalogo-->
                <a href="<?php echo get_stylesheet_directory_uri(); ?>/public/pdf/entrenamiento.pdf" download class="btn-descargar-pdf mt-4 bg-secondary hover:bg-secondary/80 text-white px-6 py-3 rounded-xl transition-all duration-300 font-semibold text-sm shadow-lg hover:shadow-xl transform hover:scale-105 flex items-center gap-2 inline-flex">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                    Descargar catálog
                </a>
            </div>
            
        </div>
    </div>
</section>

<!-- Sección CTA Final -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
            ¿Listo para transformar tu capital humano?
        </h2>
        <p class="text-gray-600 text-lg mb-8 max-w-2xl mx-auto">
            Contáctanos hoy y descubre cómo podemos ayudarte a optimizar tus procesos de reclutamiento y capacitación.
        </p>
        <a href="<?php echo esc_url(home_url('/contacto#form_contact')); ?>" class="inline-block bg-secondary hover:bg-secondary/80 text-white px-10 py-4 rounded-xl transition-all duration-300 font-bold text-md shadow-lg hover:shadow-xl transform hover:scale-105 opacity-0 translate-y-8 animate-on-scroll" data-delay="400">
            Contáctanos ahora
        </a>
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

/* Fallback visual para modal de descarga */
.plg-pdf-modal {
    position: fixed;
    inset: 0;
    display: none;
    z-index: 99999;
}

.plg-pdf-modal.is-open {
    display: block;
}

.plg-pdf-modal__overlay {
    position: absolute;
    inset: 0;
    background: rgba(0, 0, 0, 0.55);
}

.plg-pdf-modal__dialog {
    position: relative;
    z-index: 2;
    width: min(92%, 460px);
    margin: 7vh auto;
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.25);
    padding: 24px;
}

.plg-pdf-modal__close {
    position: absolute;
    top: 10px;
    right: 12px;
    border: 0;
    background: transparent;
    font-size: 28px;
    line-height: 1;
    cursor: pointer;
}

.plg-pdf-field {
    margin-bottom: 12px;
}

.plg-pdf-field label {
    display: block;
    margin-bottom: 4px;
    font-weight: 700;
}

.plg-pdf-field input {
    width: 100%;
    border: 1px solid #cbd5e1;
    border-radius: 8px;
    padding: 10px 12px;
    box-sizing: border-box;
}

.plg-pdf-error {
    display: block;
    min-height: 16px;
    margin-top: 4px;
    color: #dc2626;
    font-size: 12px;
}

.plg-pdf-submit {
    width: 100%;
    padding: 12px;
    border: 0;
    border-radius: 8px;
    background: #2563eb;
    color: #fff;
    font-weight: 700;
    cursor: pointer;
}

.plg-pdf-submit:disabled {
    opacity: 0.55;
    cursor: not-allowed;
}

.plg-modal-open {
    overflow: hidden;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function () {
    if (window.__PLG_PDF_GATE_INITIALIZED__) {
        console.log('[PLG FALLBACK PAGE] skipped because plugin script is active');
        return;
    }

    if (window.__PLG_PDF_PAGE_FALLBACK__) {
        return;
    }
    window.__PLG_PDF_PAGE_FALLBACK__ = true;

    console.log('[PLG FALLBACK PAGE] init on entrenamiento');

    var ajaxUrl = '<?php echo esc_url(admin_url('admin-ajax.php')); ?>';
    var nonce = '<?php echo esc_js(wp_create_nonce('plg_pdf_leads_nonce')); ?>';

    function ensureModal() {
        if (document.getElementById('plg-pdf-modal')) {
            return;
        }

        var wrapper = document.createElement('div');
        wrapper.innerHTML = '' +
            '<div id="plg-pdf-modal" class="plg-pdf-modal" aria-hidden="true">' +
                '<div class="plg-pdf-modal__overlay" data-close="true"></div>' +
                '<div class="plg-pdf-modal__dialog" role="dialog" aria-modal="true" aria-labelledby="plg-pdf-modal-title">' +
                    '<button type="button" class="plg-pdf-modal__close" id="plg-pdf-close" aria-label="Cerrar">&times;</button>' +
                    '<h3 id="plg-pdf-modal-title">Descargar PDF</h3>' +
                    '<p>Completa tus datos para continuar.</p>' +
                    '<form id="plg-pdf-form" novalidate>' +
                        '<div class="plg-pdf-field">' +
                            '<label for="plg_nombre">Nombre</label>' +
                            '<input type="text" id="plg_nombre" required>' +
                            '<small class="plg-pdf-error" data-error-for="nombre"></small>' +
                        '</div>' +
                        '<div class="plg-pdf-field">' +
                            '<label for="plg_telefono">Telefono</label>' +
                            '<input type="tel" id="plg_telefono" maxlength="10" inputmode="numeric" required>' +
                            '<small class="plg-pdf-error" data-error-for="telefono"></small>' +
                        '</div>' +
                        '<div class="plg-pdf-field">' +
                            '<label for="plg_correo">Email</label>' +
                            '<input type="email" id="plg_correo" required>' +
                            '<small class="plg-pdf-error" data-error-for="correo"></small>' +
                        '</div>' +
                        '<input type="hidden" id="plg_pdf_url">' +
                        '<button type="submit" id="plg-submit" class="plg-pdf-submit" disabled>Descargar PDF</button>' +
                        '<p id="plg-form-status" style="margin-top:10px;min-height:16px;"></p>' +
                    '</form>' +
                '</div>' +
            '</div>';

        document.body.appendChild(wrapper.firstChild);
    }

    ensureModal();

    var modal = document.getElementById('plg-pdf-modal');
    var closeBtn = document.getElementById('plg-pdf-close');
    var form = document.getElementById('plg-pdf-form');
    var submitBtn = document.getElementById('plg-submit');
    var statusEl = document.getElementById('plg-form-status');
    var nombreInput = document.getElementById('plg_nombre');
    var telefonoInput = document.getElementById('plg_telefono');
    var correoInput = document.getElementById('plg_correo');
    var pdfUrlInput = document.getElementById('plg_pdf_url');

    var phoneRegex = /^\d{10}$/;
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    function setError(name, msg) {
        var el = form.querySelector('[data-error-for="' + name + '"]');
        if (el) {
            el.textContent = msg || '';
        }
    }

    function validNombre() {
        var ok = !!nombreInput.value.trim();
        setError('nombre', ok ? '' : 'Nombre requerido.');
        return ok;
    }

    function validTelefono() {
        var value = telefonoInput.value.trim();
        var ok = phoneRegex.test(value);
        setError('telefono', ok ? '' : 'Telefono con 10 digitos.');
        return ok;
    }

    function validCorreo() {
        var value = correoInput.value.trim();
        var ok = emailRegex.test(value);
        setError('correo', ok ? '' : 'Correo invalido.');
        return ok;
    }

    function validateForm() {
        var ok = validNombre() && validTelefono() && validCorreo();
        submitBtn.disabled = !ok;
        return ok;
    }

    function openModal(url) {
        console.log('[PLG FALLBACK PAGE] opening modal', url);
        pdfUrlInput.value = url || '';
        modal.classList.add('is-open');
        modal.setAttribute('aria-hidden', 'false');
        document.body.classList.add('plg-modal-open');
        validateForm();
    }

    function closeModal() {
        modal.classList.remove('is-open');
        modal.setAttribute('aria-hidden', 'true');
        document.body.classList.remove('plg-modal-open');
    }

    document.addEventListener('click', function (event) {
        var trigger = event.target.closest('.btn-descargar-pdf');
        if (!trigger) {
            return;
        }
        event.preventDefault();
        var url = trigger.getAttribute('data-pdf-url') || trigger.getAttribute('href') || '';
        console.log('[PLG FALLBACK PAGE] button click intercepted', { url: url });
        openModal(url);
    });

    if (closeBtn) {
        closeBtn.addEventListener('click', closeModal);
    }

    if (modal) {
        modal.addEventListener('click', function (event) {
            if (event.target && event.target.getAttribute('data-close') === 'true') {
                closeModal();
            }
        });
    }

    [nombreInput, telefonoInput, correoInput].forEach(function (input) {
        input.addEventListener('input', validateForm);
        input.addEventListener('blur', validateForm);
    });

    telefonoInput.addEventListener('input', function () {
        this.value = this.value.replace(/\D/g, '').slice(0, 10);
    });

    form.addEventListener('submit', function (event) {
        event.preventDefault();

        if (!validateForm()) {
            return;
        }

        statusEl.textContent = 'Guardando...';
        submitBtn.disabled = true;

        var formData = new FormData();
        formData.append('action', 'plg_save_lead');
        formData.append('nonce', nonce);
        formData.append('nombre', nombreInput.value.trim());
        formData.append('telefono', telefonoInput.value.trim());
        formData.append('correo', correoInput.value.trim());
        formData.append('pdf_url', pdfUrlInput.value.trim());

        fetch(ajaxUrl, {
            method: 'POST',
            credentials: 'same-origin',
            body: formData
        })
            .then(function (res) { return res.json(); })
            .then(function (data) {
                console.log('[PLG FALLBACK PAGE] ajax result', data);
                if (!data || !data.success) {
                    throw new Error((data && data.data && data.data.message) ? data.data.message : 'Error al guardar');
                }

                statusEl.textContent = 'Listo, iniciando descarga...';
                var url = (data.data && data.data.pdf_url) ? data.data.pdf_url : pdfUrlInput.value.trim();
                if (url) {
                    var link = document.createElement('a');
                    link.href = url;
                    link.setAttribute('download', '');
                    document.body.appendChild(link);
                    link.click();
                    document.body.removeChild(link);
                }

                closeModal();
                form.reset();
                validateForm();
            })
            .catch(function (error) {
                statusEl.textContent = error.message || 'Error al guardar';
                submitBtn.disabled = false;
                console.error('[PLG FALLBACK PAGE] ajax error', error);
            });
    });
});
</script>

<?php
get_footer();
