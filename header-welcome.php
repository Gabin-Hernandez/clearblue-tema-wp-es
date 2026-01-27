<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class('welcome-page'); ?>>
<?php wp_body_open(); ?>

<!-- Header minimalista con logo y tagline a la izquierda -->
<header class="absolute top-0 left-0 right-0 z-50 py-6">
    <div class="container mx-auto px-6">
        <div class="flex items-center justify-start gap-4">
            <!-- Logo a la izquierda -->
            <?php if (has_custom_logo()) : ?>
                <?php the_custom_logo(); ?>
            <?php else : ?>
                <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/logo_dark.png" 
                         alt="<?php bloginfo('name'); ?>" 
                         class="h-16 md:h-20" 
                         onerror="this.style.display='none';this.nextElementSibling.style.display='block';">
                    <span class="text-primary font-bold text-2xl" style="display:none;">
                        <?php bloginfo('name'); ?>
                    </span>
                </a>
            <?php endif; ?>
            
            <!-- Tagline -->
            <div class="hidden sm:block border-l border-primary/30 pl-4">
                <p class="text-primary text-xs md:text-sm font-semibold uppercase tracking-wide">
                    Creadores de Talento
                </p>
                <p class="text-primary/70 text-xs">
                    Human Talent Solutions
                </p>
            </div>
        </div>
    </div>
</header>
