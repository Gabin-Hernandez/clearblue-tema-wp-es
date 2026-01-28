<?php
/**
 * Template Name: Acerca de nosotros
 * Description: Página de Acerca de nosotros
 * 
 * SEO:
 * - Title: Quiénes Somos | Creatblue® México
 * - Meta Description: Somos una empresa de origen alemán especializada en CREAR Talento Humano calificado para el sector industrial y corporativo en México.
 */

// SEO manejado dinámicamente desde functions.php
get_header();
?>


<!-- Nosotros section -->
<!-- Sección Hero - Título principal -->
<section class="pt-32 pb-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center max-w-4xl mx-auto mb-8">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-primary mb-6 leading-tight opacity-0 translate-y-8 animate-on-scroll" data-delay="200">
                CREAT<span class="font-normal">alento</span> idóneo en el menor tiempo posible.
            </h1>
            <p class="text-lg text-primary opacity-0 translate-y-8 animate-on-scroll" data-delay="400">
                Promesa <span class="font-bold">Creatblue®</span> que se cumple.
            </p>
        </div>
    </div>
</section>

<!-- Dos banners con dato duro -->
<section class="py-12 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
            
            <!-- Banner 1: Vacantes cubiertas -->
            <div class="bg-white rounded-2xl shadow-xl p-8 flex items-center gap-6 opacity-0 translate-y-8 animate-on-scroll" data-delay="200">
                <!-- Icono placeholder -->
                <div class="flex-shrink-0 w-16 h-16 bg-secondary/10 rounded-xl flex items-center justify-center">
                    <svg class="w-8 h-8 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <!-- Contenido -->
                <div>
                    <h3 class="text-4xl md:text-5xl font-black text-primary mb-1">+2K</h3>
                    <p class="text-gray-600 text-sm md:text-base">vacantes cubiertas en lo que fue del 2025</p>
                </div>
            </div>
            
            <!-- Banner 2: Efectividad -->
            <div class="bg-white rounded-2xl shadow-xl p-8 flex items-center gap-6 opacity-0 translate-y-8 animate-on-scroll" data-delay="400">
                <!-- Icono placeholder -->
                <div class="flex-shrink-0 w-16 h-16 bg-secondary/10 rounded-xl flex items-center justify-center">
                    <svg class="w-8 h-8 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                    </svg>
                </div>
                <!-- Contenido -->
                <div>
                    <h3 class="text-4xl md:text-5xl font-black text-primary mb-1">+250%</h3>
                    <p class="text-gray-600 text-sm md:text-base">de efectividad e impacto en los reportes de entrenamiento del 2025</p>
                </div>
            </div>
            
        </div>
    </div>
</section>

<!-- Sección: Quiénes Somos -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <h2 class="text-2xl md:text-3xl font-bold text-primary uppercase tracking-wide text-center mb-12">Quiénes somos como Creatblue® México</h2>
    </div>
    <div class="container mx-auto px-6">
        <div class="grid lg:grid-cols-2 gap-12 items-center max-w-7xl mx-auto">
            
            <!-- Columna izquierda - Texto -->
            <div class="space-y-6 opacity-0 translate-x-8 animate-on-scroll" data-delay="400">
                <h2 class="text-2xl md:text-3xl font-bold text-primary uppercase tracking-wide">
                Nuestro Origen
                </h2>
                <div class="space-y-4 text-primary">
                    <p class="text-lg">
                    Creatblue® México es la nueva división de Grupo Schnellecke, empresa de clase mundial especializada en la gestión de cadenas de suministro para el sector industrial.
                    </p>
                </div>
                <h2 class="text-2xl md:text-3xl font-bold text-primary uppercase tracking-wide">
                Nuestra Misión
                </h2>
                <div class="space-y-4 text-primary">
                    <p class="text-lg">
                    Crear talento humano altamente calificado con las habilidades y actitudes correctas para despegar el potencial de tu empresa.
                    </p>
                </div>
            </div>
            
            <!-- Columna derecha - Contenedor de imagen -->
            <div class="opacity-0 scale-75 animate-on-scroll" data-delay="600">
                <div class="w-full h-[400px] rounded-2xl shadow-2xl overflow-hidden">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/images/acerca/1.webp" 
                         alt="Quiénes somos - Creatblue México" 
                         class="w-full h-full object-cover">
                </div>
            </div>
            
        </div>
    </div>
</section>

<!-- Sección: La Importancia de Creatblue -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="grid lg:grid-cols-2 gap-12 items-center max-w-7xl mx-auto">
            
            <!-- Columna izquierda - Contenedor de imagen -->
            <div class="opacity-0 scale-75 animate-on-scroll" data-delay="400">
                <div class="w-full h-[400px] rounded-2xl shadow-2xl overflow-hidden">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/images/acerca/2.webp" 
                         alt="La importancia de Creatblue para el mercado mexicano" 
                         class="w-full h-full object-cover">
                </div>
            </div>
            
            <!-- Columna derecha - Texto -->
            <div class="space-y-6 opacity-0 translate-x-8 animate-on-scroll" data-delay="600">
                <h2 class="text-2xl md:text-3xl font-bold text-primary uppercase tracking-wide">
                La impotancia de CREATBLUE® para el mercado mexicano
                </h2>
                
                <div class="space-y-4 text-primary">
                    <p class="leading-relaxed">
                        En el mercado laboral existe una alta demanda de personal calificado que crece día con día, sin que esta necesidad pueda ser atendida eficientemente,
                    </p>
                    <p class="text-right italic">
                        hasta ahora...
                    </p>
                </div>
            </div>
            
        </div>
    </div>
</section>

<!-- Sección Promesa Creatblue cumplida. -->
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
                    Promesa Creatblue cumplida.
                    </h2>
                    <p class="text-white text-lg">Creamos talento idóneo en el menor tiempo
                    posible enfocado en productividad.</p>
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
