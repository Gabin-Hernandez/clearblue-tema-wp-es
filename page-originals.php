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
            Creamos talento desarrollando soluciones de marca propia para aportar un valor único y adpatado a las necesidades de cada empresa.
            </h2>
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
                        Decisiones respaldadas por estrategia
                    </h2>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sección WORKFORCE y CREATPLAY ready to go! -->
<section class="relative overflow-hidden py-20 bg-gradient-to-br from-[#2f3082] to-[#0f1229]">
    <!-- Efectos de fondo -->
    <div class="absolute inset-0 opacity-40">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-gradient-to-b from-[#2f3082]/30 to-primary/20 rounded-full blur-3xl"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-gradient-to-b from-[#2f3082]/20 to-primary/10 rounded-full blur-2xl"></div>
    </div>

        <!-- Grid de 2 banners horizontales Workforce y CreatPlay  -->
        <div class="container mx-auto px-6 relative z-10">
            <!-- Grid de 2 columnas -->
            <div class="grid lg:grid-cols-2 gap-8">
                
                <!-- Banner 1: WORKFORCE - Reclutamiento + Entrenamiento -->
                <div class="bg-gradient-to-b from-[#1a1d4a] to-[#2f3082] rounded-3xl overflow-hidden shadow-2xl opacity-0 translate-y-8 animate-on-scroll" data-delay="400">
                    <!-- Imagen arriba -->
                    <div class="p-8 md:p-10 flex items-center justify-center border-b border-white/10">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/workforce_asset.png" 
                             alt="WORKFORCE ready to go" 
                             class="w-full max-w-[300px] h-auto">
                    </div>
                    
                    <!-- Contenido abajo -->
                    <div class="p-8 md:p-10">
                        <h3 class="text-white text-2xl md:text-3xl font-bold mb-4 leading-tight">
                            Reclutamiento + Entrenamiento
                        </h3>
                        <p class="text-white/90 text-base md:text-lg mb-6">
                            Reclutamiento y entrenamiento de personal sin experiencia.
                        </p>
                        <button class="bg-secondary hover:bg-secondary/80 text-white px-6 py-3 rounded-xl transition-all duration-300 font-bold text-sm md:text-md shadow-lg hover:shadow-xl transform hover:scale-105 flex items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-player-play">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M6 4v16a1 1 0 0 0 1.524 .852l13 -8a1 1 0 0 0 0 -1.704l-13 -8a1 1 0 0 0 -1.524 .852z" />
                            </svg>
                            <span>Ver cómo funciona</span>
                        </button>
                    </div>
                </div>
                
                <!-- Banner 2: CREATPLAY - Desarrollo de VIDEO GAMING -->
                <div class="bg-gradient-to-b from-[#1a1d4a] to-[#2f3082] rounded-3xl overflow-hidden shadow-2xl opacity-0 translate-y-8 animate-on-scroll" data-delay="600">
                    <!-- Imagen arriba -->
                    <div class="p-8 md:p-10 flex items-center justify-center border-b border-white/10">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/creatplay_asset.png" 
                             alt="CREATPLAY" 
                             class="w-full max-w-[300px] h-auto">
                    </div>
                    
                    <!-- Contenido abajo -->
                    <div class="p-8 md:p-10">
                        <h3 class="text-white text-2xl md:text-3xl font-bold mb-4 leading-tight">
                            Desarrollo de VIDEO GAMING
                        </h3>
                        <p class="text-white/90 text-base md:text-lg mb-6">
                            Desarrollo para capacitaciones empresariales.
                        </p>
                        <button class="bg-secondary hover:bg-secondary/80 text-white px-6 py-3 rounded-xl transition-all duration-300 font-bold text-sm md:text-md shadow-lg hover:shadow-xl transform hover:scale-105 flex items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-player-play">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M6 4v16a1 1 0 0 0 1.524 .852l13 -8a1 1 0 0 0 0 -1.704l-13 -8a1 1 0 0 0 -1.524 .852z" />
                            </svg>
                            <span>Ver cómo funciona</span>
                        </button>
                    </div>
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
