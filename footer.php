<!-- Footer -->
<footer class="bg-gray-100 py-12">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mb-8">
            <!-- Columna 1 -->
            <div>
                <h4 class="font-black text-secondary mb-4">Acerca de nosotros</h4>
                <ul class="space-y-2">
                    <li><a href="<?php echo esc_url(home_url('/quienes-somos')); ?>" class="text-gray-600 hover:text-secondary transition">Quiénes somos</a></li>
                    <li><a href="<?php echo esc_url(home_url('/blog')); ?>" class="text-gray-600 hover:text-secondary transition">Blog</a></li>
                    <li><a href="<?php echo esc_url(home_url('/contacto')); ?>" class="text-gray-600 hover:text-secondary transition">Contacto</a></li>
                </ul>
            </div>
            
            <!-- Columna 2 -->
            <div>
                <h4 class="font-black text-secondary mb-4">Creatblue HR</h4>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer',
                    'container' => false,
                    'menu_class' => 'space-y-2',
                    'fallback_cb' => function() {
                        ?>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-gray-600 hover:text-secondary transition">Entrenamiento</a></li>
                            <li><a href="#" class="text-gray-600 hover:text-secondary transition">Reclutamiento +</a></li>
                            <li><a href="#" class="text-gray-600 hover:text-secondary transition">Selección</a></li>
                            <li><a href="#" class="text-gray-600 hover:text-secondary transition">Consultoría</a></li>
                        </ul>
                        <?php
                    },
                    'link_before' => '<span class="text-gray-600 hover:text-secondary transition">',
                    'link_after' => '</span>',
                ));
                ?>
            </div>
            
            <!-- Columna 3 -->
            <div>
                <h4 class="font-black text-secondary mb-4">Ventas</h4>
                <ul class="space-y-2">
                    <li>
                        <a href="mailto:info@creatblue.com" class="text-gray-600 hover:text-secondary transition">
                            info@creatblue.com
                        </a>
                    </li>
                    <li>
                        <a href="tel:8001121050" class="text-gray-600 hover:text-secondary transition">
                           800 112 1050
                        </a>
                    </li>
                </ul>
            </div>
            
            <!-- Columna 4 -->
            <div>
                <h4 class="font-black text-secondary mb-4">Candidatos</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="text-gray-600 hover:text-secondary transition">Bolsa de trabajo</a></li>
                </ul>
            </div>
        </div>
        
        <!-- Redes sociales y logo -->
        <div class="border-t border-gray-300 pt-8 flex flex-col md:flex-row justify-between items-center">
            <div class="mb-4 md:mb-0">
                <?php if (has_custom_logo()) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/logo_dark.png" 
                             alt="<?php bloginfo('name'); ?>" 
                             class="h-8" 
                             onerror="this.style.display='none';this.nextElementSibling.style.display='block';">
                        <span class="text-gray-800 font-bold text-xl" style="display:none;">
                            <?php bloginfo('name'); ?>
                        </span>
                    </a>
                <?php endif; ?>
            </div>
            
            <div class="flex items-center space-x-4">
                <!-- LinkedIn -->
                <a href="#" target="_blank" rel="noopener noreferrer" class="text-primary hover:text-secondary transition" aria-label="LinkedIn">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                    </svg>
                </a>
                
                <!-- Facebook -->
                <a href="#" target="_blank" rel="noopener noreferrer" class="text-primary hover:text-secondary transition" aria-label="Facebook">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/>
                    </svg>
                </a>
                
                <!-- YouTube -->
                <a href="#" target="_blank" rel="noopener noreferrer" class="text-primary hover:text-secondary transition" aria-label="YouTube">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/>
                    </svg>
                </a>
                
                <!-- Instagram -->
                <a href="#" target="_blank" rel="noopener noreferrer" class="text-primary hover:text-secondary transition" aria-label="Instagram">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                    </svg>
                </a>
            </div>
        </div>
        
        <div class="text-center mt-8 text-gray-500 text-sm">
            <p class="font-black text-primary">Creatblue México</p>
            <p>&copy; <?php echo date('Y'); ?> Avenida JINT #300 Parque industrial JINT. Puebla, Pue.</p>
            <p class="mt-3">
                <a href="<?php echo esc_url(home_url('/politica-de-cookies')); ?>" class="hover:text-secondary transition">Política de cookies</a>
                <span class="mx-2">|</span>
                <a href="<?php echo esc_url(home_url('/aviso-de-privacidad')); ?>" class="hover:text-secondary transition">Aviso de privacidad</a>
                <span class="mx-2">|</span>
                <a href="<?php echo esc_url(home_url('/terminos-y-condiciones')); ?>" class="hover:text-secondary transition">Términos y condiciones</a>
            </p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
