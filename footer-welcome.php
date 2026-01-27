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
        
        <!-- Redes sociales -->
        <div class="flex items-center justify-center space-x-6 mb-10">
            <!-- LinkedIn -->
            <a href="#" target="_blank" rel="noopener noreferrer" class="text-white/70 hover:text-secondary transition-colors duration-300" aria-label="LinkedIn">
                <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                </svg>
            </a>
            
            <!-- Facebook -->
            <a href="#" target="_blank" rel="noopener noreferrer" class="text-white/70 hover:text-secondary transition-colors duration-300" aria-label="Facebook">
                <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/>
                </svg>
            </a>
            
            <!-- YouTube -->
            <a href="#" target="_blank" rel="noopener noreferrer" class="text-white/70 hover:text-secondary transition-colors duration-300" aria-label="YouTube">
                <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/>
                </svg>
            </a>
            
            <!-- Instagram -->
            <a href="#" target="_blank" rel="noopener noreferrer" class="text-white/70 hover:text-secondary transition-colors duration-300" aria-label="Instagram">
                <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                </svg>
            </a>
        </div>
        
        <!-- Línea divisoria -->
        <div class="border-t border-white/20 pt-8">
            <div class="flex flex-col md:flex-row justify-between items-center text-white/60 text-sm">
                <p>&copy; <?php echo date('Y'); ?> Creatblue Global. Todos los derechos reservados.</p>
                <div class="flex items-center space-x-6 mt-4 md:mt-0">
                    <a href="#" class="hover:text-secondary transition-colors">Aviso de privacidad</a>
                    <a href="#" class="hover:text-secondary transition-colors">Términos y condiciones</a>
                </div>
            </div>
        </div>
        
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
