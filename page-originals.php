<?php
/**
 * Template Name: Originals
 * Description: Página de servicios de originals
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
                    Creatblue ORIGINALS
                    </span>
                </div>
                
                <!-- Título principal -->
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-normal text-gray-900 mb-6 leading-tight opacity-0 translate-y-8 animate-on-scroll" data-delay="200">
                Soluciones exclusivas que  
                    <span class="text-secondary font-black">DIFERENCIAN</span> a tu empresa
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
                        Descargar brochure
                    </button>
                </div>
            </div>
            
            <!-- Columna derecha - Imagen única -->
            <div class="rounded-3xl overflow-hidden shadow-2xl opacity-0 scale-95 animate-on-scroll" data-delay="400">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/or1.webp" 
                     alt="Creatblue Originals México" 
                     class="w-full h-auto object-cover">
            </div>
            
        </div>
    </div>
</section>

<!-- Sección de Estadísticas y Gestión -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6 leading-tight opacity-0 translate-y-8 animate-on-scroll" data-delay="200">
            Adaptamos nuestros modelos, metodologías y programas para potencializar el exito de cada empresa en México con el talento humano
            </h2>
            <p>BENEFICIOS CREATBLUE®</p>
        </div>
        
        <!-- Grid de 3 columnas con iconos -->
        <div class="grid md:grid-cols-3 gap-6 mb-20">
            <!-- Card 1: Soluciones creadas desde el éxito -->
            <div class="bg-gradient-to-b from-white to-secondary/20 rounded-2xl px-8 py-12 shadow-xl hover:shadow-sm transition-all duration-300 border border-gray-100 opacity-0 translate-y-8 animate-on-scroll" data-delay="400">
                <div class="flex items-center gap-6">
                    <div class="w-16 h-16 bg-gradient-to-br from-secondary/10 to-secondary/30 rounded-2xl flex items-center justify-center flex-shrink-0">
                        <!-- Icono de bombilla/idea -->
                        <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 leading-tight">
                    Soluciones creadas desde el éxito y la experiencia real
                    </h3>
                </div>
            </div>
            
            <!-- Card 2: Alineación personas y objetivos -->
            <div class="bg-gradient-to-b from-white to-secondary/20 rounded-2xl px-8 py-12 shadow-xl hover:shadow-sm transition-all duration-300 border border-gray-100 opacity-0 translate-y-8 animate-on-scroll" data-delay="600">
                <div class="flex items-center gap-6">
                    <div class="w-16 h-16 bg-gradient-to-br from-secondary/10 to-secondary/30 rounded-2xl flex items-center justify-center flex-shrink-0">
                        <!-- Icono de diana/objetivo -->
                        <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 leading-tight">
                    Alineación entre personas y objetivos organizacionales
                    </h3>
                </div>
            </div>
            
            <!-- Card 3: Flexibilidad y adaptación -->
            <div class="bg-gradient-to-b from-white to-secondary/20 rounded-2xl px-8 py-12 shadow-xl hover:shadow-sm transition-all duration-300 border border-gray-100 opacity-0 translate-y-8 animate-on-scroll" data-delay="800">
                <div class="flex items-center gap-6">
                    <div class="w-16 h-16 bg-gradient-to-br from-secondary/10 to-secondary/30 rounded-2xl flex items-center justify-center flex-shrink-0">
                        <!-- Icono de puzzle/adaptación -->
                        <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 leading-tight">
                    Flexibilidad y adaptación a cada empresa
                    </h3>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sección Decisiones respaldadas por estrategia - Banner Badge con Glassmorphism -->
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
                    Modelos creados desde la experiencia
                    </h2>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sección Soluciones Creatblue Originals -->
<section class="relative overflow-hidden py-20 bg-gradient-to-br from-[#2f3082] to-[#0f1229]">
    <!-- Efectos de fondo -->
    <div class="absolute inset-0 opacity-40">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-gradient-to-b from-[#2f3082]/30 to-primary/20 rounded-full blur-3xl"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-gradient-to-b from-[#2f3082]/20 to-primary/10 rounded-full blur-2xl"></div>
    </div>

    <!-- Grid de 3 banners -->
    <div class="container mx-auto px-6 relative z-10">
        <!-- Grid de 3 columnas -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Banner 1: WORKFORCE Ready to Go -->
            <div class="bg-gradient-to-b from-[#1a1d4a] to-[#2f3082] rounded-3xl overflow-hidden shadow-2xl opacity-0 translate-y-8 animate-on-scroll" data-delay="400">
                <!-- Imagen arriba -->
                <div class="p-8 md:p-10 flex items-center justify-center border-b border-white/10">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/wforce_light.webp" 
                         alt="Workforce Ready to Go" 
                         class="w-full max-w-[250px] h-auto">
                </div>
                
                <!-- Contenido abajo -->
                <div class="p-6 md:p-8">
                    <h3 class="text-white text-xl md:text-2xl font-bold mb-3 leading-tight">
                        Workforce Ready to Go Creatblue® México
                    </h3>
                    <p class="text-white/90 text-base mb-6">
                        Reclutamiento y entrenamiento de personal sin experiencia.
                    </p>
                    <button class="bg-secondary hover:bg-secondary/80 text-white px-5 py-3 rounded-xl transition-all duration-300 font-bold text-sm shadow-lg hover:shadow-xl transform hover:scale-105 flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M6 4v16a1 1 0 0 0 1.524 .852l13 -8a1 1 0 0 0 0 -1.704l-13 -8a1 1 0 0 0 -1.524 .852z" />
                        </svg>
                        <span>Ver cómo funciona</span>
                    </button>
                </div>
            </div>
            
            <!-- Banner 2: CREATmap -->
            <div class="bg-gradient-to-b from-[#1a1d4a] to-[#2f3082] rounded-3xl overflow-hidden shadow-2xl opacity-0 translate-y-8 animate-on-scroll" data-delay="600">
                <!-- Imagen arriba -->
                <div class="p-8 md:p-10 flex items-center justify-center border-b border-white/10">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/cmap_light.webp" 
                         alt="CREATmap" 
                         class="w-full max-w-[250px] h-auto">
                </div>
                
                <!-- Contenido abajo -->
                <div class="p-6 md:p-8">
                    <h3 class="text-white text-xl md:text-2xl font-bold mb-3 leading-tight">
                        CREATmap Creatblue® México
                    </h3>
                    <p class="text-white/90 text-base mb-6">
                        Modelo de entrenamiento industrial para optimizar la productividad.
                    </p>
                    <button class="bg-secondary hover:bg-secondary/80 text-white px-5 py-3 rounded-xl transition-all duration-300 font-bold text-sm shadow-lg hover:shadow-xl transform hover:scale-105 flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M6 4v16a1 1 0 0 0 1.524 .852l13 -8a1 1 0 0 0 0 -1.704l-13 -8a1 1 0 0 0 -1.524 .852z" />
                        </svg>
                        <span>Ver cómo funciona</span>
                    </button>
                </div>
            </div>
            
            <!-- Banner 3: Creatblue Learning -->
            <div class="bg-gradient-to-b from-[#1a1d4a] to-[#2f3082] rounded-3xl overflow-hidden shadow-2xl opacity-0 translate-y-8 animate-on-scroll" data-delay="800">
                <!-- Imagen arriba -->
                <div class="p-8 md:p-10 flex items-center justify-center border-b border-white/10">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/clea_light.webp" 
                         alt="Creatblue Learning" 
                         class="w-full max-w-[250px] h-auto">
                </div>
                
                <!-- Contenido abajo -->
                <div class="p-6 md:p-8">
                    <h3 class="text-white text-xl md:text-2xl font-bold mb-3 leading-tight">
                        Creatblue Learning Creatblue® México
                    </h3>
                    <p class="text-white/90 text-base mb-6">
                        Desarrollo de video gaming para capacitaciones empresariales.
                    </p>
                    <button class="bg-secondary hover:bg-secondary/80 text-white px-5 py-3 rounded-xl transition-all duration-300 font-bold text-sm shadow-lg hover:shadow-xl transform hover:scale-105 flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M6 4v16a1 1 0 0 0 1.524 .852l13 -8a1 1 0 0 0 0 -1.704l-13 -8a1 1 0 0 0 -1.524 .852z" />
                        </svg>
                        <span>Ver cómo funciona</span>
                    </button>
                </div>
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
