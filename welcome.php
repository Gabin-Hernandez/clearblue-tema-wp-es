<?php
/**
 * Template Name: Welcome Page
 * Description: Página de bienvenida con diseño personalizado usando Tailwind CSS
 * 
 * Esta página utiliza un header minimalista (sin navegación) y un footer global
 * con información general de la empresa, ya que es la página de selección de país.
 */

// Usar header especial sin navegación (header-welcome.php)
get_header('welcome');
?>

<!-- Welcome section - Selección de País/Idioma -->
<section class="min-h-screen pt-44 md:pt-48 pb-20 bg-gradient-to-br from-gray-50 to-gray-100">
    <div class="container mx-auto px-6">
        
        <!-- Título principal H1 -->
        <div class="text-center mb-16">
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-primary mb-4 opacity-0 translate-y-8 animate-on-scroll" data-delay="200">
                Bienvenidos a Creatblue<sup>®</sup> <span class="text-secondary">Group</span>
            </h1>
        </div>
        
        <!-- Grid de 2 columnas: 40% - 60% -->
        <div class="grid lg:grid-cols-[40%_60%] gap-12 items-center max-w-7xl mx-auto">
            
            <!-- Columna izquierda - Texto y enlaces (40%) -->
            <div class="space-y-8 opacity-0 translate-x-8 animate-on-scroll" data-delay="400">
                
                <!-- Título de selección H2 -->
                <div>
                    <h2 class="text-2xl md:text-3xl font-bold text-primary mb-4">
                        Selecciona tu país para comenzar.
                    </h2>
                    <p class="text-primary/70 text-base italic">
                        Select your country to start / Wählen Sie Ihr Land zum Starten
                    </p>
                </div>
                
                <!-- Enlaces de países -->
                <div class="space-y-6">
                    <!-- México -->
                    <a href="<?php echo esc_url(home_url('/mx')); ?>" 
                       class="group flex items-center gap-4 p-6 bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 border-2 border-transparent hover:border-secondary">
                        <div class="flex-1">
                            <h3 class="text-2xl font-bold text-primary group-hover:text-secondary transition-colors">
                                Creatblue <span class="text-secondary">México</span>
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
                            <h3 class="text-2xl font-bold text-primary group-hover:text-secondary transition-colors">
                                Creatblue <span class="text-secondary">United States of America</span>
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
                            <h3 class="text-2xl font-bold text-primary group-hover:text-secondary transition-colors">
                                Creatblue <span class="text-secondary">Deutschland</span>
                            </h3>
                        </div>
                        <svg class="w-6 h-6 text-secondary transform group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
            
            <!-- Columna derecha - Imagen con iconos superpuestos (60%) -->
            <div class="relative w-full h-[600px] opacity-0 scale-75 animate-on-scroll" data-delay="600">
                <!-- Imagen de fondo del globo -->
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/back_global.webp" 
                     alt="Global Network" 
                     class="absolute inset-0 w-full h-full object-contain">
                
                <!-- Icono USA - Arriba izquierda -->
                <div class="absolute top-[15%] left-[10%] transform animate-float" style="animation-delay: 0s;">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/usa_l.webp" 
                         alt="USA" 
                         class="w-32 h-auto md:w-40 md:h-auto drop-shadow-2xl hover:scale-110 transition-transform duration-300 cursor-pointer">
                </div>
                
                <!-- Icono México - Abajo izquierda -->
                <div class="absolute bottom-[20%] left-[5%] transform animate-float" style="animation-delay: 1s;">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/mexico_l.webp" 
                         alt="México" 
                         class="w-32 h-auto md:w-40 md:h-auto drop-shadow-2xl hover:scale-110 transition-transform duration-300 cursor-pointer">
                </div>
                
                <!-- Icono Alemania - Centro derecha -->
                <div class="absolute top-[35%] right-[5%] transform animate-float" style="animation-delay: 2s;">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/deutschland_l.webp" 
                         alt="Deutschland" 
                         class="w-32 h-auto md:w-40 md:h-auto drop-shadow-2xl hover:scale-110 transition-transform duration-300 cursor-pointer">
                </div>
            </div>
            
        </div>
        
        <!-- Badge informativo -->
        <div class="mt-16 max-w-4xl mx-auto">
            <div class="flex flex-col md:flex-row items-center justify-center gap-4 p-6 bg-primary rounded-2xl text-center md:text-left">
                <div class="flex-shrink-0 w-14 h-14 bg-secondary/20 rounded-full flex items-center justify-center">
                    <svg class="w-7 h-7 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <p class="text-white text-lg md:text-xl font-medium">
                    Adaptamos nuestras soluciones de acuerdo con tu ubicación, industria y necesidades operativas.
                </p>
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
});
</script>

<style>
.animate-on-scroll {
    transition: all 0.8s cubic-bezier(0.4, 0.0, 0.2, 1);
}

.animate-on-scroll.animate-in {
    opacity: 1 !important;
    transform: translateY(0) translateX(0) scale(1) !important;
}

/* Animación flotante para los iconos de países */
@keyframes float {
    0%, 100% {
        transform: translateY(0px);
    }
    50% {
        transform: translateY(-20px);
    }
}

.animate-float {
    animation: float 3s ease-in-out infinite;
}
</style>

<?php
// Usar footer global especial (footer-welcome.php)
get_footer('welcome');
?>