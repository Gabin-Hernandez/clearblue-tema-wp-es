<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- SEO Meta Tags específicos para Welcome Page -->
    <title>Bienvenidos a Creatblue® Group | Selecciona tu país</title>
    <meta name="description" content="Selecciona tu país y descubre cómo Creatblue® impulsa la productividad de tu empresa.">
    
    <?php wp_head(); ?>
</head>
<body <?php body_class('welcome-page'); ?>>
<?php wp_body_open(); ?>

<!-- Header minimalista solo con logo centrado -->
<header class="absolute top-0 left-0 right-0 z-50 py-6">
    <div class="container mx-auto px-6">
        <div class="flex items-center justify-center">
            <!-- Logo centrado -->
            <?php if (has_custom_logo()) : ?>
                <?php the_custom_logo(); ?>
            <?php else : ?>
                <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/logo_darkCB.png" 
                         alt="<?php bloginfo('name'); ?>" 
                         class="h-20 md:h-24" 
                         onerror="this.style.display='none';this.nextElementSibling.style.display='block';">
                    <span class="text-primary font-bold text-2xl" style="display:none;">
                        <?php bloginfo('name'); ?>
                    </span>
                </a>
            <?php endif; ?>
        </div>
    </div>
</header>
