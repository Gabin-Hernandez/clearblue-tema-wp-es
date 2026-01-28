<?php
/**
 * Template Name: Contacto
 * Description: Página de contacto Creatblue México
 */

get_header();
?>

<!-- Hero Section -->
<section class="relative min-h-[60vh] bg-gradient-to-br from-gray-50 to-gray-100 pt-32 pb-20 overflow-hidden">
    <div class="container mx-auto px-6">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            
            <!-- Columna izquierda - Contenido de texto -->
            <div class="max-w-xl">
                <!-- Badge -->
                <div class="inline-block mb-6 opacity-0 translate-y-8 animate-on-scroll" data-delay="100">
                    <span class="bg-secondary text-white text-xs font-bold px-4 py-2 rounded-full uppercase tracking-wider">
                    Creatblue Originals
                    </span>
                </div>
                
                <!-- Título principal -->
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-normal text-gray-900 mb-6 leading-tight opacity-0 translate-y-8 animate-on-scroll" data-delay="200">
                    Hablemos sobre el futuro de tu <span class="text-secondary font-black">talento</span>
                </h1>
                
                <!-- Descripción -->
                <p class="text-gray-600 text-lg leading-relaxed opacity-0 translate-y-8 animate-on-scroll" data-delay="300">
                    En Creatblue® México trabajamos con personas y empresas para crear equipos más fuertes, productivos y preparados, a través de reclutamiento, capacitación, entrenamiento y consultoría.
                </p>
            </div>
            
            <!-- Columna derecha - Imagen única -->
            <div class="rounded-3xl overflow-hidden shadow-2xl opacity-0 scale-95 animate-on-scroll" data-delay="400">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/cont1.webp" 
                     alt="Contacto Creatblue México" 
                     class="w-full h-auto object-cover">
            </div>
            
        </div>
    </div>
</section>

<!-- Sección ¿Cómo podemos ayudarte hoy? -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <!-- Título de sección -->
        <div class="mb-12 opacity-0 translate-y-8 animate-on-scroll" data-delay="200">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                ¿Cómo podemos ayudarte hoy?
            </h2>
            <p class="text-gray-600 text-lg">
                Cuéntanos qué estás buscando y te guiamos hacia la mejor solución.
            </p>
        </div>
        
        <!-- Grid de 2 tarjetas -->
        <div class="grid md:grid-cols-2 gap-8">
            
            <!-- Tarjeta 1: Perfil profesional -->
            <div class="border-2 border-gray-200 rounded-3xl p-8 md:p-10 hover:border-secondary/50 hover:shadow-lg transition-all duration-300 opacity-0 translate-y-8 animate-on-scroll" data-delay="400">
                <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4 leading-tight">
                    Quiero desarrollar mi perfil profesional
                </h3>
                <p class="text-gray-600 text-base mb-8">
                    Si estás buscando nuevas oportunidades laborales, aquí puedes descubrir nuestra variedad de vacantes desde posiciones operativas hasta directivas.
                </p>
                <a href="<?php echo esc_url(home_url('/vacantes')); ?>" class="inline-block bg-secondary hover:bg-secondary/80 text-white px-8 py-4 rounded-xl transition-all duration-300 font-bold text-md shadow-lg hover:shadow-xl transform hover:scale-105">
                    Descubre tu nuevo trabajo
                </a>
            </div>
            
            <!-- Tarjeta 2: Soluciones para organización -->
            <div class="border-2 border-gray-200 rounded-3xl p-8 md:p-10 hover:border-secondary/50 hover:shadow-lg transition-all duration-300 opacity-0 translate-y-8 animate-on-scroll" data-delay="600">
                <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4 leading-tight">
                    Busco soluciones para mi organización
                </h3>
                <p class="text-gray-600 text-base mb-8">
                    Ayudamos a las empresas a atraer talento, fortalecer equipos y mejorar su operación con soluciones estratégicas a la medida.
                </p>
                <a href="<?php echo esc_url(home_url('/cotizar')); ?>" class="inline-block bg-primary hover:bg-primary/80 text-white px-8 py-4 rounded-xl transition-all duration-300 font-bold text-md shadow-lg hover:shadow-xl transform hover:scale-105">
                    Cuéntanos más
                </a>
            </div>
            
        </div>
    </div>
</section>

<!-- Script para animaciones -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Intersection Observer para las animaciones de scroll
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const delay = entry.target.dataset.delay || 0;
                setTimeout(() => {
                    entry.target.classList.remove('opacity-0', 'translate-y-8', 'scale-95');
                    entry.target.classList.add('opacity-100', 'translate-y-0', 'scale-100');
                }, delay);
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Observar todos los elementos con la clase animate-on-scroll
    document.querySelectorAll('.animate-on-scroll').forEach(el => {
        el.classList.add('transition-all', 'duration-700', 'ease-out');
        observer.observe(el);
    });
});
</script>

<?php get_footer(); ?>
