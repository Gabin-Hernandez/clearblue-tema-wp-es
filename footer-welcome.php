<!-- Footer Global - Información general de la empresa -->
<footer class="bg-primary py-16">
    <div class="container mx-auto px-6">
        
        <!-- Logo y descripción -->
        <div class="text-center mb-12">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="inline-block mb-6">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/logo_light.png" 
                     alt="<?php bloginfo('name'); ?>" 
                     class="h-16 mx-auto" 
                     onerror="this.style.display='none';this.nextElementSibling.style.display='block';">
                <span class="text-white font-bold text-2xl" style="display:none;">
                    <?php bloginfo('name'); ?>
                </span>
            </a>
            <p class="text-white/80 text-lg max-w-2xl mx-auto">
                Creadores de Talento - Human Talent Solutions
            </p>
        </div>
        
        <!-- Grid de ubicaciones globales -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12 max-w-4xl mx-auto">
            
            <!-- México -->
            <div class="text-center">
                <div class="inline-flex items-center justify-center w-12 h-12 bg-secondary/20 rounded-full mb-4">
                    <svg class="w-6 h-6 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                </div>
                <h4 class="font-bold text-secondary mb-2">México</h4>
                <p class="text-white/70 text-sm">Puebla, México</p>
            </div>
            
            <!-- Estados Unidos -->
            <div class="text-center">
                <div class="inline-flex items-center justify-center w-12 h-12 bg-secondary/20 rounded-full mb-4">
                    <svg class="w-6 h-6 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                </div>
                <h4 class="font-bold text-secondary mb-2">United States</h4>
                <p class="text-white/70 text-sm">Texas, USA</p>
            </div>
            
            <!-- Alemania -->
            <div class="text-center">
                <div class="inline-flex items-center justify-center w-12 h-12 bg-secondary/20 rounded-full mb-4">
                    <svg class="w-6 h-6 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                </div>
                <h4 class="font-bold text-secondary mb-2">Deutschland</h4>
                <p class="text-white/70 text-sm">Germany</p>
            </div>
        </div>
        
        
        <!-- Línea divisoria -->
        <div class="border-t border-white/20 pt-8">
            <div class="flex flex-col md:flex-row justify-center items-center text-white/60 text-sm">
                <p>&copy; <?php echo date('Y'); ?> Creatblue®. Todos los derechos reservados.</p>
            </div>
        </div>
        
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
