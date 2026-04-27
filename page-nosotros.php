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
        <div class="text-center max-w-4xl mx-auto mb-8 mt-8">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-primary mb-6 leading-tight opacity-0 translate-y-8 animate-on-scroll" data-delay="200">
                CREAT<span class="font-normal">alento</span> idóneo en el menor tiempo posible.
            </h1>
            <p class="text-xl text-primary opacity-0 translate-y-8 animate-on-scroll" data-delay="400">
                Promesa <span class="font-bold">Creatblue</span> que se cumple.
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
                    <h3 class="text-4xl md:text-5xl font-black text-primary mb-1">
                        +<span class="counter-number" data-target="2000">0</span>
                    </h3>
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
                    <h3 class="text-4xl md:text-5xl font-black text-primary mb-1">
                        +<span class="counter-number" data-target="250">0</span>%
                    </h3>
                    <p class="text-gray-600 text-sm md:text-base">de efectividad e impacto en los reportes de entrenamiento del 2025</p>
                </div>
            </div>
            
        </div>
    </div>
</section>

<!-- Sección: Quiénes Somos -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <h2 class="text-2xl md:text-3xl font-bold text-primary uppercase tracking-wide text-center mb-12">Quiénes somos como Creatblue México</h2>
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
                    Creatblue México es la nueva división de Grupo Schnellecke, empresa de clase mundial especializada en la gestión de cadenas de suministro para el sector industrial.
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
                <div class="w-full h-[500px] rounded-2xl shadow-2xl overflow-hidden">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/images/acerca/2.webp" 
                         alt="La importancia de Creatblue para el mercado mexicano" 
                         class="w-full h-full object-cover">
                </div>
            </div>
            
            <!-- Columna derecha - Texto -->
            <div class="space-y-6 opacity-0 translate-x-8 animate-on-scroll" data-delay="600">
                <h2 class="text-2xl md:text-3xl font-bold text-primary uppercase tracking-wide">
                La impotancia de CREATBLUE para el mercado mexicano
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

<!-- Mapa de México con presencia -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <h2 class="text-2xl md:text-3xl font-bold text-primary uppercase tracking-wide text-center mb-12 opacity-0 translate-y-8 animate-on-scroll" data-delay="200">
            Nuestra presencia en México
        </h2>
        <div class="max-w-5xl mx-auto opacity-0 scale-95 animate-on-scroll" data-delay="400">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/mapa.webp" 
                 alt="Mapa de presencia de Creatblue en México" 
                 class="w-full h-auto rounded-2xl shadow-xl">
        </div>

        <div class="max-w-6xl mx-auto mt-14 md:mt-20">
            <h3 class="text-xl md:text-2xl font-bold text-primary text-center mb-10 opacity-0 translate-y-8 animate-on-scroll" data-delay="200">
                Direcciones Creatblue México
            </h3>
            <div class="grid sm:grid-cols-2 xl:grid-cols-3 gap-6 md:gap-8">
                <?php
                $cb_locations = array(
                    array(
                        'title'       => 'Corporativo Creatblue México',
                        'address'     => 'Avenida JINT, #300 Parque Industrial JINT, Puebla, Pue. 72710, MX',
                        'phone_label' => '800 112 1050',
                        'phone_href'  => 'tel:+528001121050',
                        'accent'      => 'corporate',
                    ),
                    array(
                        'title'       => 'Creatblue Sucursal EDOMEX',
                        'address'     => 'Plaza Sentura, Perif. Blvd. Manuel Ávila Camacho 2610, Torre B Piso 10 int. 1035, Tlalnepantla, Estado de México 54040, MX',
                        'phone_label' => '55 6529 5626',
                        'phone_href'  => 'tel:+525565295626',
                        'accent'      => 'branch',
                    ),
                    array(
                        'title'       => 'Creatblue Sucursal Guanajuato',
                        'address'     => 'Terraza Jerez, De Las Rosas 409, Local 10-A, León de los Aldama, Guanajuato 37530, MX',
                        'phone_label' => '55 4449 5506',
                        'phone_href'  => 'tel:+525544495506',
                        'accent'      => 'branch',
                    ),
                    array(
                        'title'       => 'Creatblue Sucursal Monterrey',
                        'address'     => 'Jose Ma Pino Suarez 750, piso 8 oficina 801 K, Monterrey, Nuevo León 64000, MX',
                        'phone_label' => '(811) 278 3619',
                        'phone_href'  => 'tel:+528112783619',
                        'accent'      => 'branch',
                    ),
                    array(
                        'title'       => 'Creatblue Sucursal Guadalajara',
                        'address'     => 'Calle Jose Maria Morelos 1734, Piso 4, Oficina F4 Ladron de Guevara, Lafayette',
                        'phone_label' => '(331) 764 8631',
                        'phone_href'  => 'tel:+523317648631',
                        'accent'      => 'branch',
                    ),
                    array(
                        'title'       => 'Creatblue Sucursal Mérida',
                        'address'     => 'Calle 20 #106 entre 25 y 27 Col. México. Mérida, Yucatán. CP 97125',
                        'phone_label' => '(999) 224 2884',
                        'phone_href'  => 'tel:+529992242884',
                        'accent'      => 'branch',
                    ),
                );
                $loc_delay = 300;
                foreach ( $cb_locations as $loc ) :
                    $is_corporate = ( isset( $loc['accent'] ) && 'corporate' === $loc['accent'] );
                    ?>
                <article class="group relative bg-white rounded-2xl border border-gray-100 shadow-lg hover:shadow-xl hover:border-secondary/30 transition-all duration-300 p-6 flex flex-col h-full opacity-0 translate-y-8 animate-on-scroll" data-delay="<?php echo esc_attr( (string) $loc_delay ); ?>">
                    <?php if ( $is_corporate ) : ?>
                    <span class="absolute top-4 right-4 text-[10px] font-bold uppercase tracking-wider text-secondary bg-secondary/10 px-2 py-1 rounded-md">Corporativo</span>
                    <?php endif; ?>
                    <div class="flex items-center gap-3 mb-4 <?php echo $is_corporate ? 'pr-16' : ''; ?>">
                        <span class="flex-shrink-0 w-12 h-12 rounded-xl bg-secondary/10 flex items-center justify-center text-secondary group-hover:bg-secondary group-hover:text-white transition-colors duration-300 text-2xl leading-none" aria-hidden="true">
                            <i class="ti ti-map-pin"></i>
                        </span>
                        <h4 class="text-lg font-bold text-primary leading-snug"><?php echo esc_html( $loc['title'] ); ?></h4>
                    </div>
                    <p class="text-sm text-gray-600 leading-relaxed flex-grow pl-[3.75rem] -mt-1">
                        <?php echo esc_html( $loc['address'] ); ?>
                    </p>
                    <a href="<?php echo esc_url( $loc['phone_href'] ); ?>" class="mt-5 inline-flex items-center gap-2 text-secondary font-semibold text-sm hover:text-primary transition-colors pl-[3.75rem]">
                        <span class="flex-shrink-0 w-9 h-9 rounded-lg bg-gray-50 flex items-center justify-center text-secondary group-hover:bg-secondary/10 text-base leading-none" aria-hidden="true">
                            <i class="ti ti-phone"></i>
                        </span>
                        <?php echo esc_html( $loc['phone_label'] ); ?>
                    </a>
                </article>
                    <?php
                    $loc_delay += 80;
                endforeach;
                ?>
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
    // Función para animar números (contador)
    function animateCounter(element, target, duration = 2000) {
        const start = 0;
        const increment = target / (duration / 16); // 60 FPS
        let current = start;
        
        const timer = setInterval(() => {
            current += increment;
            if (current >= target) {
                current = target;
                clearInterval(timer);
            }
            
            // Formatear el número con comas
            const formattedNumber = Math.floor(current).toLocaleString('en-US');
            element.textContent = formattedNumber;
        }, 16);
    }
    
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
    
    // Observer especial para los contadores
    const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting && !entry.target.classList.contains('counted')) {
                const target = parseInt(entry.target.dataset.target);
                entry.target.classList.add('counted');
                animateCounter(entry.target, target);
                counterObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });
    
    // Observar todos los números contadores
    const counters = document.querySelectorAll('.counter-number');
    counters.forEach((counter) => {
        counterObserver.observe(counter);
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
