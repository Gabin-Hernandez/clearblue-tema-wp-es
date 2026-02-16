<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

/**
 * SEO Dinámico - Meta tags centralizados por página
 * Modifica el título y agrega la meta description según el template de página.
 * Utiliza los filtros de WordPress para compatibilidad con plugins de SEO.
 */
add_action( 'wp', 'creatblue_setup_seo' );
function creatblue_setup_seo() {
    // No ejecutar en el admin
    if ( is_admin() ) {
        return;
    }

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
            'title' => 'Reclutamiento y Selección de Personal en México | Creatblue® México',
            'description' => 'Reclutamiento especializado con IA para cubrir posiciones clave en el menor tiempo posible.'
        ),
        'page-capacitacion' => array(
            'title' => 'Capacitación Empresarial y E-learning | Creatblue® México',
            'description' => 'Capacitación empresarial con métodos andragógicos y plataformas e-learning diseñadas para el desarrollo continuo.'
        ),
        'page-consultoria' => array(
            'title' => 'Consultoría Empresarial en Talento y Productividad | Creatblue® México',
            'description' => 'Consultoría especializada en seguridad, calidad, operación y recursos humanos para industria automotriz, industria textil, industria alimentaria, industria de bienestar, logística, entre otras industrias.'
        ),
        'page-originals' => array(
            'title' => 'Creatblue® Originals | Modelos propios para el desarrollo del talento humano',
            'description' => 'Impulsamos el desarrollo del talento humano con soluciones propias creadas para fortalecer personas, equipos y organizaciones.'
        ),
        'page-nosotros' => array(
            'title' => 'Quiénes Somos | Creatblue® México',
            'description' => 'Somos una empresa de origen alemán especializada en CREAR Talento Humano calificado para el sector industrial y corporativo en México.'
        ),
        'page-contacto' => array(
            'title' => 'Habla con un especialista en talento, entrenamiento, capacitación y consultoría | Creatblue® México',
            'description' => 'Contáctanos si buscas empleo o talento con soluciones de reclutamiento, capacitación, entrenamiento y consultoría empresarial. En Creatblue conectamos talento con oportunidades reales.'
        ),
    );

    // Detectar el template actual
    $template = '';
    if ( is_front_page() ) {
        $template = 'front-page';
    } elseif ( is_page_template() ) {
        $template_file = get_page_template_slug();
        $template = str_replace( '.php', '', $template_file );
    }

    // Si hay configuración SEO para este template, registrar los filtros y acciones
    if ( ! empty( $template ) && isset( $seo_config[ $template ] ) ) {
        $GLOBALS['creatblue_seo_data'] = $seo_config[ $template ];

        // Modificar el título
        add_filter( 'pre_get_document_title', 'creatblue_dynamic_title', 20 );

        // Agregar meta description
        add_action( 'wp_head', 'creatblue_dynamic_description', 1 );
    }
}

function creatblue_dynamic_title( $title ) {
    if ( isset( $GLOBALS['creatblue_seo_data']['title'] ) ) {
        return $GLOBALS['creatblue_seo_data']['title'];
    }
    return $title;
}

function creatblue_dynamic_description() {
    if ( isset( $GLOBALS['creatblue_seo_data']['description'] ) ) {
        echo '<meta name="description" content="' . esc_attr( $GLOBALS['creatblue_seo_data']['description'] ) . '">' . "\n";
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
    
    // Soporte para HTML5
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );
    
    // Soporte para feeds automáticos
    add_theme_support( 'automatic-feed-links' );
}

/**
 * Configurar posts por página para el blog
 * Solo aplica a la página principal del blog (home.php)
 * No afecta otros custom post types ni queries personalizadas
 * 
 * @param WP_Query $query La query de WordPress
 */
add_action( 'pre_get_posts', 'creatblue_posts_per_page' );
function creatblue_posts_per_page( $query ) {
    // Solo modificar la query principal en el frontend
    if ( ! is_admin() && $query->is_main_query() ) {
        
        // Solo para la página del blog (home) con posts normales
        if ( is_home() && ! is_front_page() ) {
            $query->set( 'posts_per_page', 7 );
        }
        
        // Si la página de inicio también muestra posts (configuración WP)
        // Puedes ajustar esto según tu configuración en Ajustes > Lectura
        if ( is_front_page() && $query->get( 'post_type' ) === 'post' ) {
            $query->set( 'posts_per_page', 7 );
        }
    }
}

/**
 * Agregar tamaños de imagen personalizados para el blog
 */
add_action( 'after_setup_theme', 'creatblue_custom_image_sizes' );
function creatblue_custom_image_sizes() {
    // Tamaño para las tarjetas del blog
    add_image_size( 'blog-card', 600, 400, true );
    
    // Tamaño para el hero del single post
    add_image_size( 'blog-hero', 1920, 800, true );
}

/**
 * Mejorar el extracto de los posts
 */
add_filter( 'excerpt_length', 'creatblue_excerpt_length', 999 );
function creatblue_excerpt_length( $length ) {
    return 30; // 30 palabras para el extracto
}

add_filter( 'excerpt_more', 'creatblue_excerpt_more' );
function creatblue_excerpt_more( $more ) {
    return '...';
}
?>