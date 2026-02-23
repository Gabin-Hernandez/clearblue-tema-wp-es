<!-- Header/Nav fixed con efecto glassmorphism -->
<header class="fixed top-0 left-0 right-0 z-50 backdrop-blur-md border-b border-white/10 shadow-lg bg-primary/80" id="main-header">
    <nav class="container mx-auto px-6 py-4">
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <div class="flex items-center">
                <?php if (has_custom_logo()) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/logo_light.png" 
                             alt="<?php bloginfo('name'); ?>" 
                             class="h-16" 
                             onerror="this.style.display='none';this.nextElementSibling.style.display='block';">
                        <span class="text-white font-bold text-xl" style="display:none;">
                            <?php bloginfo('name'); ?>
                        </span>
                    </a>
                <?php endif; ?>
            </div>
            <!-- Menú Central y botón móvil -->
            <div class="flex items-center space-x-8">
                <!-- Menú Central -->
                <div class="hidden md:flex items-center space-x-8">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container' => false,
                    'menu_class' => '',
                    'items_wrap' => '%3$s',
                    'fallback_cb' => function() {
                        ?>
                        <a href="<?php echo esc_url(home_url('/nosotros')); ?>" class="text-white hover:text-secondary transition">Quiénes somos</a>
                        
                        <!-- Mega Menu: ¿Qué ofrecemos? -->
                        <div class="relative dropdown-container mega-menu-container">
                            <button class="text-white hover:text-secondary transition flex items-center gap-1 dropdown-toggle">
                                ¿Qué ofrecemos?
                                <svg class="w-4 h-4 transition-transform dropdown-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <!-- Mega Menu Dropdown - Revisar, -->
                            <div class="dropdown-menu mega-menu opacity-0 invisible transition-all duration-300 transform translate-y-2">
                                <div class="container mx-auto px-6 py-8">
                                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
                                        
                                        <!-- Entrenamiento -->
                                        <a href="<?php echo esc_url(home_url('/entrenamiento')); ?>" class="group bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 mega-menu-item">
                                            <div class="relative h-48 lg:h-48 md:h-32 overflow-hidden mega-menu-image">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/e6.webp" 
                                                     alt="Entrenamiento" 
                                                     class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                                                <div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent lg:block hidden"></div>
                                                <h3 class="absolute bottom-4 left-4 text-white font-bold text-xl lg:block hidden">Entrenamiento</h3>
                                            </div>
                                            <div class="p-4 mega-menu-content">
                                                <h3 class="text-primary font-bold text-lg mb-2 lg:hidden">Entrenamiento</h3>
                                                <p class="text-gray-600 text-sm leading-relaxed">
                                                    Entrenamiento industrial para <span class="text-secondary font-semibold">AUMENTAR</span> la productividad de tu equipo
                                                </p>
                                            </div>
                                        </a>
                                        
                                        <!-- Reclutamiento -->
                                        <a href="<?php echo esc_url(home_url('/reclutamiento')); ?>" class="group bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 mega-menu-item">
                                            <div class="relative h-48 lg:h-48 md:h-32 overflow-hidden mega-menu-image">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/ima7.jpg" 
                                                     alt="Reclutamiento" 
                                                     class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                                                <div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent lg:block hidden"></div>
                                                <h3 class="absolute bottom-4 left-4 text-white font-bold text-xl lg:block hidden">Reclutamiento</h3>
                                            </div>
                                            <div class="p-4 mega-menu-content">
                                                <h3 class="text-primary font-bold text-lg mb-2 lg:hidden">Reclutamiento</h3>
                                                <p class="text-gray-600 text-sm leading-relaxed">
                                                    Estrategias efectivas de reclutamiento y selección de personal para <span class="text-secondary font-semibold">IMPULSAR</span> tu capital humano
                                                </p>
                                            </div>
                                        </a>
                                        
                                        <!-- Capacitación -->
                                        <a href="<?php echo esc_url(home_url('/capacitacion')); ?>" class="group bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 mega-menu-item">
                                            <div class="relative h-48 lg:h-48 md:h-32 overflow-hidden mega-menu-image">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/c1.webp" 
                                                     alt="Capacitación" 
                                                     class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                                                <div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent lg:block hidden"></div>
                                                <h3 class="absolute bottom-4 left-4 text-white font-bold text-xl lg:block hidden">Capacitación</h3>
                                            </div>
                                            <div class="p-4 mega-menu-content">
                                                <h3 class="text-primary font-bold text-lg mb-2 lg:hidden">Capacitación</h3>
                                                <p class="text-gray-600 text-sm leading-relaxed">
                                                    Programas de capacitación empresarial para <span class="text-secondary font-semibold">FORTALECER</span> tu talento humano
                                                </p>
                                            </div>
                                        </a>
                                        
                                        <!-- Consultoría -->
                                        <a href="<?php echo esc_url(home_url('/consultoria')); ?>" class="group bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 mega-menu-item">
                                            <div class="relative h-48 lg:h-48 md:h-32 overflow-hidden mega-menu-image">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/ca3.webp" 
                                                     alt="Consultoría" 
                                                     class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                                                <div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent lg:block hidden"></div>
                                                <h3 class="absolute bottom-4 left-4 text-white font-bold text-xl lg:block hidden">Consultoría</h3>
                                            </div>
                                            <div class="p-4 mega-menu-content">
                                                <h3 class="text-primary font-bold text-lg mb-2 lg:hidden">Consultoría</h3>
                                                <p class="text-gray-600 text-sm leading-relaxed">
                                                    Consultoría estratégica para <span class="text-secondary font-semibold">POTENCIAR</span> el desarrollo de tu empresa
                                                </p>
                                            </div>
                                        </a>
                                        
                                        <!-- Originals -->
                                        <a href="<?php echo esc_url(home_url('/originals')); ?>" class="group bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 mega-menu-item">
                                            <div class="relative h-48 lg:h-48 md:h-32 overflow-hidden mega-menu-image">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/or2.webp" 
                                                     alt="Originals" 
                                                     class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                                                <div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent lg:block hidden"></div>
                                                <h3 class="absolute bottom-4 left-4 text-white font-bold text-xl lg:block hidden">Originals</h3>
                                            </div>
                                            <div class="p-4 mega-menu-content">
                                                <h3 class="text-primary font-bold text-lg mb-2 lg:hidden">Originals</h3>
                                                <p class="text-gray-600 text-sm leading-relaxed">
                                                    Soluciones exclusivas que <span class="text-secondary font-semibold">DIFERENCIAN</span> a tu empresa
                                                </p>
                                            </div>
                                        </a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <a href="<?php echo esc_url(home_url('/blog')); ?>" class="text-white hover:text-secondary transition">Blog</a>
                        <a href="<?php echo esc_url(home_url('/contacto')); ?>" class="text-white hover:text-secondary transition">Contacto</a>
                        <a href="http://bolsadeempleo.creatblue.com/" target="_blank" class="text-white hover:text-secondary transition">Bolsa de trabajo</a>
                        <?php
                    },
                    'link_before' => '<span class="text-white hover:text-secondary transition">',
                    'link_after' => '</span>',
                ));
                ?>
            </div>
            
            <!-- Menú móvil toggle  --> 
            <button id="mobile-menu-toggle" class="md:hidden text-white focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
            </div> 
        </div>
        
        <!-- Menú móvil -->
        <div id="mobile-menu" class="hidden md:hidden mt-4 pb-4">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container' => false,
                'menu_class' => 'space-y-3',
                'fallback_cb' => function() {
                    ?>
                    <div class="space-y-3">
                        <a href="<?php echo esc_url(home_url('/nosotros')); ?>" class="block text-white hover:text-secondary transition py-2">Quiénes somos</a>
                        
                        <!-- Dropdown móvil: ¿Qué ofrecemos? -->
                        <div class="mobile-dropdown">
                            <button class="w-full flex items-center justify-between text-white hover:text-secondary transition py-2 mobile-dropdown-toggle">
                                ¿Qué ofrecemos?
                                <svg class="w-4 h-4 transition-transform mobile-dropdown-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div class="mobile-dropdown-menu hidden pl-4 pt-2 space-y-2">
                                <a href="<?php echo esc_url(home_url('/entrenamiento')); ?>" class="block text-white/80 hover:text-secondary transition py-1">Entrenamiento</a>
                                <a href="<?php echo esc_url(home_url('/reclutamiento')); ?>" class="block text-white/80 hover:text-secondary transition py-1">Reclutamiento</a>
                                <a href="<?php echo esc_url(home_url('/capacitacion')); ?>" class="block text-white/80 hover:text-secondary transition py-1">Capacitación</a>
                                <a href="<?php echo esc_url(home_url('/consultoria')); ?>" class="block text-white/80 hover:text-secondary transition py-1">Consultoría</a>
                                <a href="<?php echo esc_url(home_url('/originals')); ?>" class="block text-white/80 hover:text-secondary transition py-1">Originals</a>
                            </div>
                        </div>
                        
                        <a href="<?php echo esc_url(home_url('/blog')); ?>" class="block text-white hover:text-secondary transition py-2">Blog</a>
                        <a href="<?php echo esc_url(home_url('/contacto')); ?>" class="block text-white hover:text-secondary transition py-2">Contacto</a>
                        <a href="#" class="block text-white hover:text-secondary transition py-2">Bolsa de trabajo</a>
                    </div>
                    <?php
                },
                'link_before' => '<span class="block text-white hover:text-secondary transition py-2">',
                'link_after' => '</span>',
            ));
            ?>
        </div>
    </nav>
</header>

<style>
/* Mega Menu Styles */
.mega-menu {
    position: fixed;
    left: 0;
    right: 0;
    top: 100%;
    background: white;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
    border-top: 2px solid #f0f0f0;
    max-height: 0;
    overflow: hidden;
}

.mega-menu-container:hover .mega-menu,
.mega-menu-container .mega-menu.show {
    max-height: 600px;
}

/* Responsive adjustments */
@media (max-width: 1023px) {
    .mega-menu .grid {
        grid-template-columns: 1fr !important;
        gap: 1rem;
    }
    
    /* Layout horizontal en tabletas y móviles */
    .mega-menu-item {
        display: flex !important;
        flex-direction: row !important;
        align-items: center;
        min-height: auto;
    }
    
    .mega-menu-image {
        width: 150px !important;
        min-width: 150px !important;
        height: 120px !important;
        flex-shrink: 0;
    }
    
    .mega-menu-content {
        flex: 1;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    
    .mega-menu-container:hover .mega-menu,
    .mega-menu-container .mega-menu.show {
        max-height: 800px;
    }
}

@media (max-width: 640px) {
    .mega-menu-image {
        width: 120px !important;
        min-width: 120px !important;
        height: 100px !important;
    }
    
    .mega-menu-content {
        padding: 0.75rem !important;
    }
    
    .mega-menu-content h3 {
        font-size: 1rem !important;
        margin-bottom: 0.5rem !important;
    }
    
    .mega-menu-content p {
        font-size: 0.813rem !important;
        line-height: 1.4 !important;
    }
}
</style>

<script>
// Toggle menú móvil
document.addEventListener('DOMContentLoaded', function() {
    const toggle = document.getElementById('mobile-menu-toggle');
    const menu = document.getElementById('mobile-menu');
    
    if (toggle && menu) {
        toggle.addEventListener('click', function() {
            menu.classList.toggle('hidden');
        });
    }
    
    // Mega Menu Desktop
    const megaMenuContainers = document.querySelectorAll('.mega-menu-container');
    
    megaMenuContainers.forEach(container => {
        const toggle = container.querySelector('.dropdown-toggle');
        const menu = container.querySelector('.mega-menu');
        const arrow = container.querySelector('.dropdown-arrow');
        let timeout;
        
        // Hover para mostrar/ocultar con delay
        container.addEventListener('mouseenter', function() {
            clearTimeout(timeout);
            menu.classList.remove('opacity-0', 'invisible', 'translate-y-2');
            menu.classList.add('opacity-100', 'visible', 'translate-y-0', 'show');
            arrow.style.transform = 'rotate(180deg)';
        });
        
        container.addEventListener('mouseleave', function() {
            timeout = setTimeout(() => {
                menu.classList.add('opacity-0', 'invisible', 'translate-y-2');
                menu.classList.remove('opacity-100', 'visible', 'translate-y-0', 'show');
                arrow.style.transform = 'rotate(0deg)';
            }, 200);
        });
        
        // Mantener abierto cuando el mouse está sobre el mega menú
        menu.addEventListener('mouseenter', function() {
            clearTimeout(timeout);
        });
        
        menu.addEventListener('mouseleave', function() {
            timeout = setTimeout(() => {
                menu.classList.add('opacity-0', 'invisible', 'translate-y-2');
                menu.classList.remove('opacity-100', 'visible', 'translate-y-0', 'show');
                arrow.style.transform = 'rotate(0deg)';
            }, 200);
        });
        
        // Click también funciona
        toggle.addEventListener('click', function(e) {
            e.preventDefault();
            const isVisible = menu.classList.contains('opacity-100');
            
            if (isVisible) {
                menu.classList.add('opacity-0', 'invisible', 'translate-y-2');
                menu.classList.remove('opacity-100', 'visible', 'translate-y-0', 'show');
                arrow.style.transform = 'rotate(0deg)';
            } else {
                menu.classList.remove('opacity-0', 'invisible', 'translate-y-2');
                menu.classList.add('opacity-100', 'visible', 'translate-y-0', 'show');
                arrow.style.transform = 'rotate(180deg)';
            }
        });
    });
    
    // Dropdown Móvil
    const mobileDropdowns = document.querySelectorAll('.mobile-dropdown');
    
    mobileDropdowns.forEach(dropdown => {
        const toggle = dropdown.querySelector('.mobile-dropdown-toggle');
        const menu = dropdown.querySelector('.mobile-dropdown-menu');
        const arrow = dropdown.querySelector('.mobile-dropdown-arrow');
        
        toggle.addEventListener('click', function(e) {
            e.preventDefault();
            const isHidden = menu.classList.contains('hidden');
            
            if (isHidden) {
                menu.classList.remove('hidden');
                arrow.style.transform = 'rotate(180deg)';
            } else {
                menu.classList.add('hidden');
                arrow.style.transform = 'rotate(0deg)';
            }
        });
    });
    
    // Cerrar mega menu al hacer click fuera
    document.addEventListener('click', function(e) {
        if (!e.target.closest('.mega-menu-container')) {
            megaMenuContainers.forEach(container => {
                const menu = container.querySelector('.mega-menu');
                const arrow = container.querySelector('.dropdown-arrow');
                menu.classList.add('opacity-0', 'invisible', 'translate-y-2');
                menu.classList.remove('opacity-100', 'visible', 'translate-y-0', 'show');
                arrow.style.transform = 'rotate(0deg)';
            });
        }
    });
});
</script>
