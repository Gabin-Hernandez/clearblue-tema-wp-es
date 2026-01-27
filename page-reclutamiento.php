<?php
/**
 * Template Name: Reclutamiento
 * Description: Página de servicios de reclutamiento
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
                        CB RECLUTAMIENTO + SELECCIÓN
                    </span>
                </div>
                
                <!-- Título principal -->
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-normal text-gray-900 mb-6 leading-tight opacity-0 translate-y-8 animate-on-scroll" data-delay="200">
                    Estrategias efectivas de reclutamiento y selección de personal para 
                    <span class="text-secondary font-black">IMPULSAR</span> tu capital humano
                </h1>
                
                <!-- CTA Buttons -->
                <div class="flex flex-wrap gap-4 opacity-0 translate-y-8 animate-on-scroll" data-delay="400">
                    <button class="bg-secondary hover:bg-secondary/80 text-white px-10 py-4 rounded-xl transition-all duration-300 font-bold text-md shadow-lg hover:shadow-xl transform hover:scale-105">
                        Cotizar ahora
                    </button>
                    <button class="bg-white hover:bg-gray-100 text-primary px-8 py-4 rounded-xl transition-all duration-300 font-bold text-md shadow-lg hover:shadow-xl transform hover:scale-105 border-2 border-primary/20 flex items-center gap-3">
                        <svg class="w-6 h-6 text-secondary" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M8 5v14l11-7z"/>
                        </svg>
                        Ver cómo funciona
                    </button>
                </div>
            </div>
            
            <!-- Columna derecha - Grid de imágenes desordenado -->
            <div class="relative h-[500px] lg:h-[600px] hidden lg:block">
                <!-- Imagen 1 - Superior izquierda -->
                <div class="absolute top-0 left-0 w-60 h-72 rounded-2xl overflow-hidden shadow-2xl transform hover:scale-105 transition-transform duration-300 z-10 opacity-0 scale-75 animate-on-scroll particle-float" data-delay="300" data-speed="0.3">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/r1.webp" 
                         alt="Trabajador 1" 
                         class="w-full h-full object-cover">
                </div>
                
                <!-- Imagen 2 - Superior derecha -->
                <div class="absolute top-0 right-0 w-64 h-64 rounded-2xl overflow-hidden shadow-2xl transform hover:scale-105 transition-transform duration-300 z-20 opacity-0 scale-75 animate-on-scroll particle-float" data-delay="500" data-speed="0.5">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/r2.webp" 
                         alt="Trabajador 2" 
                         class="w-full h-full object-cover">
                </div>
                
                <!-- Imagen 3 - Centro izquierda (más grande y destacada) -->
                <div class="absolute top-60 left-24 w-60 h-72 rounded-2xl overflow-hidden shadow-2xl transform hover:scale-105 transition-transform duration-300 z-30 opacity-0 scale-75 animate-on-scroll particle-float" data-delay="700" data-speed="0.2">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/r3.webp" 
                         alt="Trabajador 3" 
                         class="w-full h-full object-cover">
                </div>
                
                <!-- Imagen 4 - Inferior derecha -->
                <div class="absolute bottom-0 right-8 w-48 h-52 rounded-2xl overflow-hidden shadow-2xl transform hover:scale-105 transition-transform duration-300 z-20 opacity-0 scale-75 animate-on-scroll particle-float" data-delay="900" data-speed="0.4">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/ima4.jpg" 
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
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/r1.webp" 
                         alt="Trabajador 1" 
                         class="w-full h-48 object-cover">
                </div>
                <div class="rounded-2xl overflow-hidden shadow-lg">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/r2.webp" 
                         alt="Trabajador 2" 
                         class="w-full h-48 object-cover">
                </div>
                <div class="rounded-2xl overflow-hidden shadow-lg">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/r3.webp" 
                         alt="Trabajador 3" 
                         class="w-full h-48 object-cover">
                </div>
                <div class="rounded-2xl overflow-hidden shadow-lg">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/ima4.jpg" 
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
            Expertos en gestión de capital humano, conocemos los desafíos clave que enfrentan las empresas y el impacto en su Core Business. 
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
                        Menor tiempo de espera en respuesta
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
                        Reclutamiento especializado por sector
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
                        Procesos asistidos con Tecnología de IA
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
            ¿Te ha pasado? Principales problemas en la búsqueda y contratación de personal
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
                Rotación de personal 
                </h3>
                <p class="text-gray-700 text-center leading-relaxed">
                El 80% de la rotación de personal se atribuye a malas decisiones de contratación, afectando clima laboral y continuidad corporativa.
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
                Costos por vacantes abiertas
                </h3>
                <p class="text-gray-700 text-center leading-relaxed">
                Si una vacante permanece 60 días sin cubrir, el costo total podría alcanzar los $166,140 MXN en pérdida de productividad y oportunidades de negocio.
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
                Incompatibilidad cultural y desgaste temprano
                </h3>
                <p class="text-gray-700 text-center leading-relaxed">
                Hasta 46% de los empleados que renuncian lo hacen por incompatibilidad, no por falta de habilidades técnicas.
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
                Procesos ineficientes de contratación
                </h3>
                <p class="text-gray-700 text-center leading-relaxed">
                Contratar sin métricas puede costar hasta 4.8 veces el salario anual del puesto, debido a decisiones subjetivas y falta de predictibilidad en el desempeño.
                </p>
            </div>
        </div>
        <!-- BADGE Reclutamiento y selección para prevenir rotación de personal -->
        <div class="text-center mt-12">
            <p class="inline-block text-white/90 text-base md:text-lg bg-white/10 backdrop-blur-sm px-6 py-3 rounded-full opacity-0 translate-y-8 animate-on-scroll" data-delay="200">
                Reclutamiento y selección para prevenir rotación de personal, cuidar del prestigio y erradicar pérdidas
            </p>
        </div>
    </div>
</section>

<!-- Sección El talento idóneo en el menor tiempo posible -->
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
                    El talento idóneo en el menor tiempo posible
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
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/workforce_asset.png" 
                     alt="WORKFORCE" 
                     class="w-full max-w-[400px] h-auto">
            </div>
            
            <!-- Columna 2: Título y texto -->
            <div class="text-right opacity-0 translate-x-8 animate-on-scroll" data-delay="400">
                <h2 class="text-secondary uppercase tracking-[0.2em] font-bold">
                    Reclutamiento y entrenamiento
                </h2>
                <p class="text-white text-base max-w-2xl ml-auto">
                    de personal sin experiencia.
                </p>
            </div>
        </div>
        <h2 class="text-white text-2xl md:text-3xl font-bold leading-tight text-center opacity-0 translate-x-8 animate-on-scroll mb-16" data-delay="400">¿Dificultad para encontrar personal calificado?
        </h2>

        <!-- Grid de imágenes tipo collage: 1 grande a la izquierda, 2 pequeñas apiladas a la derecha -->
        <div class="grid md:grid-cols-2 gap-6 max-w-5xl mx-auto">
            
            <!-- Imagen grande izquierda: Reduce la curva de aprendizaje -->
            <div class="relative rounded-3xl overflow-hidden shadow-2xl group md:row-span-2 h-96 md:h-[500px] opacity-0 scale-75 animate-on-scroll" data-delay="600">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/r4.webp" 
                     alt="Beneficios Modelo de reclutamiento y selección Creatblue® México " 
                     class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-8">
                    <h3 class="text-white text-2xl md:text-3xl font-bold leading-tight">
                    Reduce la curva de aprendizaje
                    </h3>
                </div>
            </div>
            
            <!-- Imagen pequeña superior derecha: Disminuye la accidentabilidad -->
            <div class="relative rounded-3xl overflow-hidden shadow-2xl group h-60 md:h-60 opacity-0 scale-75 animate-on-scroll" data-delay="800">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/fdo1.jpg" 
                     alt="Modelo CREATmap de Creatblue para evaluar, entrenar y optimizar talento humano industrial" 
                     class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-6">
                    <h3 class="text-white text-xl md:text-2xl font-bold leading-tight">
                    Disminuye la accidentabilidad y pérdidas de material
                    </h3>
                </div>
            </div>
            
            <!-- Imagen pequeña inferior derecha: Aumenta la productividad -->
            <div class="relative rounded-3xl overflow-hidden shadow-2xl group h-60 md:h-56 opacity-0 scale-75 animate-on-scroll" data-delay="1000">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/ima7.jpg" 
                     alt="Beneficios Modelo Workforce Ready to Go por Creatblue® México" 
                     class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-6">
                    <h3 class="text-white text-xl md:text-2xl font-bold leading-tight">
                    Aumenta la productividad desde el primer día
                    </h3>
                </div>
            </div>
            
        </div>
    </div>
</section>

<!-- Sección SOLUCIONES DE RECLUTAMIENTO + SELECCIÓN -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <!-- Título principal -->
        <div class="mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 uppercase tracking-wide opacity-0 translate-y-8 animate-on-scroll" data-delay="200">
            Soluciones de Reclutamiento y Selección de Personal
            </h2>
            <p>Nos adaptamos a las necesidades de cada empresa, desde posiciones especializadas hasta procesos de contratación masiva. 
            </p>
        </div>
        
        <!-- Grid de 2 columnas -->
        <div class="grid md:grid-cols-2 gap-8 lg:gap-12 mb-20">
            
            <!-- Elemento 1: Headhunting -->
            <div class="flex gap-6 items-start opacity-0 translate-y-8 animate-on-scroll" data-delay="400">
                <!-- Contenedor de imagen -->
                <div class="flex-shrink-0 w-32 h-32 md:w-40 md:h-40 bg-gray-200 rounded-2xl overflow-hidden">
                    <!-- Placeholder para imagen - cambiar después -->
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/rico1.jpg" alt="Headhunting especializado" class="w-full h-full object-cover">
                </div>
                <!-- Contenido de texto -->
                <div class="flex-1">
                    <h3 class="text-xl md:text-2xl font-bold text-gray-900 mb-3">
                    Headhunting especializado
                    </h3>
                    <p class="text-gray-700 leading-relaxed">
                    Búsqueda directa y confidencial de talento estratégico con perfiles clave, alineados con la cultura, objetivos y necesidades específicas de tu organización.
                    </p>
                </div>
            </div>
            
            <!-- Elemento 2: MRP (Massive Recruitment Process) -->
            <div class="flex gap-6 items-start opacity-0 translate-y-8 animate-on-scroll" data-delay="600">
                <!-- Contenedor de imagen -->
                <div class="flex-shrink-0 w-32 h-32 md:w-40 md:h-40 bg-gray-200 rounded-2xl overflow-hidden">
                    <!-- Placeholder para imagen - cambiar después -->
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/rico2.jpg" alt="Headhunting especializado" class="w-full h-full object-cover">
                </div>
                <!-- Contenido de texto -->
                <div class="flex-1">
                    <h3 class="text-xl md:text-2xl font-bold text-gray-900 mb-3">
                    MRP Reclutamiento Masivo (Massive Recruitment Process)
                    </h3>
                    <p class="text-gray-700 leading-relaxed">
                    Proceso estructurado de reclutamiento masivo diseñado para cubrir grandes volúmenes de vacantes en tiempos reducidos, manteniendo altos estándares de calidad en la selección.
                    </p>
                </div>
            </div>

            <!-- Elemento 3: Reclutamiento Puro -->
            <div class="flex gap-6 items-start opacity-0 translate-y-8 animate-on-scroll" data-delay="600">
                <!-- Contenedor de imagen -->
                <div class="flex-shrink-0 w-32 h-32 md:w-40 md:h-40 bg-gray-200 rounded-2xl overflow-hidden">
                    <!-- Placeholder para imagen - cambiar después -->
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/rico3.jpg" alt="Headhunting especializado" class="w-full h-full object-cover">
                </div>
                <!-- Contenido de texto -->
                <div class="flex-1">
                    <h3 class="text-xl md:text-2xl font-bold text-gray-900 mb-3">
                    Reclutamiento Puro
                    </h3>
                    <p class="text-gray-700 leading-relaxed">
                    Enfocado en la atracción, filtrado y presentación de candidatos calificados, permitiendo que tu equipo tome la decisión final de contratación con total confianza.
                    </p>
                </div>
            </div>

            <!-- Elemento 4: Evaluación de Perfiles -->
            <div class="flex gap-6 items-start opacity-0 translate-y-8 animate-on-scroll" data-delay="600">
                <!-- Contenedor de imagen -->
                <div class="flex-shrink-0 w-32 h-32 md:w-40 md:h-40 bg-gray-200 rounded-2xl overflow-hidden">
                    <!-- Placeholder para imagen - cambiar después -->
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/rico4.jpg" alt="Headhunting especializado" class="w-full h-full object-cover">
                </div>
                <!-- Contenido de texto -->
                <div class="flex-1">
                    <h3 class="text-xl md:text-2xl font-bold text-gray-900 mb-3">
                    Evaluación de Perfiles
                    </h3>
                    <p class="text-gray-700 leading-relaxed">
                    Evaluaciones técnicas y conductuales que aseguren la compatibilidad del candidato con el puesto, el equipo y la cultura organizacional.
                    </p>
                </div>
            </div>
            
        </div>
        
        <!-- Alcance de Perfiles -->
        <div class="mt-16 max-w-xl mx-auto text-center">
            <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4 opacity-0 translate-y-8 animate-on-scroll" data-delay="200">
                Alcance de Perfiles para Reclutamiento y Selección
            </h3>
            <p class="text-gray-700 text-lg mb-6 opacity-0 translate-y-8 animate-on-scroll" data-delay="300">
                Trabajamos con una amplia variedad de perfiles, adaptándonos a las necesidades operativas y estratégicas de cada empresa.
            </p>
            <ul class="space-y-3 opacity-0 translate-y-8 animate-on-scroll inline-block text-left" data-delay="400">
                <li class="flex items-center gap-3 text-gray-800">
                    <svg class="w-5 h-5 text-secondary flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-lg">Directivos y Gerenciales</span>
                </li>
                <li class="flex items-center gap-3 text-gray-800">
                    <svg class="w-5 h-5 text-secondary flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-lg">Administración y Mandos medios</span>
                </li>
                <li class="flex items-center gap-3 text-gray-800">
                    <svg class="w-5 h-5 text-secondary flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-lg">Operativos y Técnicos</span>
                </li>
            </ul>
        </div>
        
    </div>
</section>

<!-- Sección CTA Final -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="grid lg:grid-cols-2 gap-12 items-center max-w-6xl mx-auto">
            <!-- Columna izquierda - Imagen -->
            <div class="opacity-0 scale-75 animate-on-scroll" data-delay="200">
                <div class="rounded-2xl overflow-hidden shadow-2xl">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/r5.webp" 
                         alt="Soluciones de reclutamiento Creatblue" 
                         class="w-full h-[400px] object-cover">
                </div>
            </div>
            
            <!-- Columna derecha - Texto -->
            <div class="opacity-0 translate-x-8 animate-on-scroll" data-delay="400">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                    ¿Qué solución de reclutamiento necesita tu empresa?
                </h2>
                <p class="text-gray-600 text-lg mb-8">
                    Nuestro equipo te ayuda a definir la estrategia de reclutamiento más eficiente para optimizar tiempos, costos y resultados.
                </p>
                <button class="bg-secondary hover:bg-secondary/80 text-white px-10 py-4 rounded-xl transition-all duration-300 font-bold text-md shadow-lg hover:shadow-xl transform hover:scale-105">
                    Habla con un asesor
                </button>
            </div>
        </div>
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
