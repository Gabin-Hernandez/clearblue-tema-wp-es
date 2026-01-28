<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

/**
 * SEO Dinámico - Meta tags centralizados por página
 * Agrega title y meta description según el template de página
 */
add_action( 'wp_head', 'creatblue_dynamic_seo', 1 );
function creatblue_dynamic_seo() {
    // Configuración de SEO por página
    $seo_config = array(
        'front-page' => array(
            'title' => 'Creatblue® México | Entrenamiento Industrial, Reclutamiento, Capacitación y Consultoría Empresarial',
            'description' => 'Incrementamos la productividad de las empresas en México con entrenamiento industrial, reclutamiento especializado y consultoría estratégica en talento humano.'
        ),
        'page-entrenamiento' => array(
            'title' => 'Entrenamiento Industrial en México | Creatblue® México',
            'description' => 'Modelos de entrenamiento industrial diseñados para aumentar la productividad, eficiencia operativa y desempeño del talento humano.'
        ),
        'page-reclutamiento' => array(
            'title' => 'Reclutamiento y Selección de Personal | Creatblue® México',
            'description' => 'Servicios de reclutamiento especializado para encontrar el talento humano que tu empresa necesita.'
        ),
        'page-capacitacion' => array(
            'title' => 'Capacitación Empresarial | Creatblue® México',
            'description' => 'Programas de capacitación empresarial diseñados para fortalecer las competencias de tu equipo de trabajo.'
        ),
        'page-consultoria' => array(
            'title' => 'Consultoría Empresarial | Creatblue® México',
            'description' => 'Consultoría estratégica para potenciar el desarrollo de tu empresa y optimizar la gestión de talento humano.'
        ),
        'page-originals' => array(
            'title' => 'Creatblue Originals | Creatblue® México',
            'description' => 'Soluciones exclusivas de marca propia que diferencian a tu empresa con valor único y adaptado.'
        ),
        'page-nosotros' => array(
            'title' => 'Quiénes Somos | Creatblue® México',
            'description' => 'Somos una empresa de origen alemán especializada en CREAR Talento Humano calificado para el sector industrial y corporativo en México.'
        ),
        'page-contacto' => array(
            'title' => 'Contacto | Creatblue® México',
            'description' => 'Contáctanos y descubre cómo podemos ayudarte a crear equipos más fuertes, productivos y preparados.'
        ),
    );
    
    // Detectar el template actual
    $template = '';
    
    if (is_front_page()) {
        $template = 'front-page';
    } elseif (is_page_template()) {
        $template_file = get_page_template_slug();
        $template = str_replace('.php', '', $template_file);
    }
    
    // Si hay configuración SEO para este template, mostrar las meta tags
    if (!empty($template) && isset($seo_config[$template])) {
        $seo = $seo_config[$template];
        echo '<title>' . esc_html($seo['title']) . '</title>' . "\n";
        echo '<meta name="description" content="' . esc_attr($seo['description']) . '">' . "\n";
    }
}

// Agregar Tailwind CSS al head
add_action( 'wp_head', 'add_tailwind_css' );
function add_tailwind_css() {
    ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons@latest/icons-sprite.svg">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#1c1e33',
                        secondary: '#85abff',
                    },
                    fontFamily: {
                        'sans': ['Lato', 'sans-serif'],
                    }
                },
                container: {
                    center: true,
                    screens: {
                        sm: '100%',
                        md: '100%',
                        lg: '100%',
                        xl: '1440px'
                    }
                }
            }
        }
    </script>
    <style>
        /* Anular fuentes por defecto de WordPress */
        body, 
        .wp-site-blocks,
        .editor-styles-wrapper,
        .wp-block,
        h1, h2, h3, h4, h5, h6,
        p, span, div, a {
            font-family: 'Lato', sans-serif !important;
        }
        
        /* Anular variables CSS de WordPress */
        :root {
            --wp--preset--font-family--body: 'Lato', sans-serif;
            --wp--preset--font-family--heading: 'Lato', sans-serif;
        }
        
        @layer utilities {
            .bg-gradient-radial {
                background-image: radial-gradient(var(--tw-gradient-stops));
            }
        }
    </style>
    <?php
}

// Registrar menús de navegación
add_action( 'after_setup_theme', 'creatblue_setup' );
function creatblue_setup() {
    register_nav_menus( array(
        'primary' => __( 'Menú Principal', 'creatblue' ),
        'footer' => __( 'Menú Footer', 'creatblue' ),
    ) );
    
    // Soporte para imágenes destacadas
    add_theme_support( 'post-thumbnails' );
    
    // Soporte para título del sitio
    add_theme_support( 'title-tag' );
    
    // Soporte para logo personalizado
    add_theme_support( 'custom-logo', array(
        'height'      => 80,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ) );
}
?>