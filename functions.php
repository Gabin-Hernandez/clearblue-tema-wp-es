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

/**
 * Agregar botón flotante de WhatsApp
 * Aparece en todas las páginas del sitio en la esquina inferior derecha
 */
add_action( 'wp_footer', 'creatblue_whatsapp_button' );
function creatblue_whatsapp_button() {
    ?>
    <!-- Botón Flotante de WhatsApp -->
    <a href="https://wa.me/5215669989384" 
       target="_blank" 
       rel="noopener noreferrer"
       class="whatsapp-float"
       aria-label="Contactar por WhatsApp">
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="currentColor">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
        </svg>
    </a>

    <style>
        .whatsapp-float {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 60px;
            height: 60px;
            background-color: #25D366;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 12px rgba(37, 211, 102, 0.4);
            z-index: 9999;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            cursor: pointer;
            text-decoration: none;
        }

        .whatsapp-float:hover {
            transform: scale(1.1);
            box-shadow: 0 6px 20px rgba(37, 211, 102, 0.6);
            background-color: #20BA5A;
        }

        .whatsapp-float:active {
            transform: scale(0.95);
        }

        /* Animación de pulso */
        @keyframes whatsapp-pulse {
            0% {
                box-shadow: 0 4px 12px rgba(37, 211, 102, 0.4), 0 0 0 0 rgba(37, 211, 102, 0.7);
            }
            50% {
                box-shadow: 0 4px 12px rgba(37, 211, 102, 0.4), 0 0 0 10px rgba(37, 211, 102, 0);
            }
            100% {
                box-shadow: 0 4px 12px rgba(37, 211, 102, 0.4), 0 0 0 0 rgba(37, 211, 102, 0);
            }
        }

        .whatsapp-float {
            animation: whatsapp-pulse 2s infinite;
        }

        .whatsapp-float:hover {
            animation: none;
        }

        /* Responsivo para móviles */
        @media (max-width: 768px) {
            .whatsapp-float {
                bottom: 20px;
                right: 20px;
                width: 56px;
                height: 56px;
            }
            
            .whatsapp-float svg {
                width: 28px;
                height: 28px;
            }
        }
    </style>
    <?php
}
?>