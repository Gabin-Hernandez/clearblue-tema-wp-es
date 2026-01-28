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
                        
                        <!-- Dropdown: ¿Qué ofrecemos? -->
                        <div class="relative dropdown-container">
                            <button class="text-white hover:text-secondary transition flex items-center gap-1 dropdown-toggle">
                                ¿Qué ofrecemos?
                                <svg class="w-4 h-4 transition-transform dropdown-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div class="dropdown-menu absolute top-full left-0 mt-2 w-48 bg-white rounded-lg shadow-xl opacity-0 invisible transition-all duration-200 transform translate-y-2">
                                <a href="<?php echo esc_url(home_url('/entrenamiento')); ?>" class="block px-4 py-3 text-gray-800 hover:bg-secondary hover:text-white transition rounded-t-lg">Entrenamiento</a>
                                <a href="<?php echo esc_url(home_url('/reclutamiento')); ?>" class="block px-4 py-3 text-gray-800 hover:bg-secondary hover:text-white transition">Reclutamiento</a>
                                <a href="<?php echo esc_url(home_url('/capacitacion')); ?>" class="block px-4 py-3 text-gray-800 hover:bg-secondary hover:text-white transition">Capacitación</a>
                                <a href="<?php echo esc_url(home_url('/consultoria')); ?>" class="block px-4 py-3 text-gray-800 hover:bg-secondary hover:text-white transition">Consultoría</a>
                                <a href="<?php echo esc_url(home_url('/originals')); ?>" class="block px-4 py-3 text-gray-800 hover:bg-secondary hover:text-white transition rounded-b-lg">Originals</a>
                            </div>
                        </div>
                        
                        <a href="#" class="text-white hover:text-secondary transition">Camino zum talent</a>
                        <a href="<?php echo esc_url(home_url('/contacto')); ?>" class="text-white hover:text-secondary transition">Contacto</a>
                        <a href="#" class="text-white hover:text-secondary transition">Bolsa de trabajo</a>
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
                        
                        <a href="#" class="block text-white hover:text-secondary transition py-2">Camino zum talent</a>
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
    
    // Dropdown Desktop
    const dropdownContainers = document.querySelectorAll('.dropdown-container');
    
    dropdownContainers.forEach(container => {
        const toggle = container.querySelector('.dropdown-toggle');
        const menu = container.querySelector('.dropdown-menu');
        const arrow = container.querySelector('.dropdown-arrow');
        
        // Hover para mostrar/ocultar
        container.addEventListener('mouseenter', function() {
            menu.classList.remove('opacity-0', 'invisible', 'translate-y-2');
            menu.classList.add('opacity-100', 'visible', 'translate-y-0');
            arrow.style.transform = 'rotate(180deg)';
        });
        
        container.addEventListener('mouseleave', function() {
            menu.classList.add('opacity-0', 'invisible', 'translate-y-2');
            menu.classList.remove('opacity-100', 'visible', 'translate-y-0');
            arrow.style.transform = 'rotate(0deg)';
        });
        
        // Click también funciona
        toggle.addEventListener('click', function(e) {
            e.preventDefault();
            const isVisible = menu.classList.contains('opacity-100');
            
            if (isVisible) {
                menu.classList.add('opacity-0', 'invisible', 'translate-y-2');
                menu.classList.remove('opacity-100', 'visible', 'translate-y-0');
                arrow.style.transform = 'rotate(0deg)';
            } else {
                menu.classList.remove('opacity-0', 'invisible', 'translate-y-2');
                menu.classList.add('opacity-100', 'visible', 'translate-y-0');
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
    
    // Cerrar dropdown al hacer click fuera
    document.addEventListener('click', function(e) {
        if (!e.target.closest('.dropdown-container')) {
            dropdownContainers.forEach(container => {
                const menu = container.querySelector('.dropdown-menu');
                const arrow = container.querySelector('.dropdown-arrow');
                menu.classList.add('opacity-0', 'invisible', 'translate-y-2');
                menu.classList.remove('opacity-100', 'visible', 'translate-y-0');
                arrow.style.transform = 'rotate(0deg)';
            });
        }
    });
});
</script>
