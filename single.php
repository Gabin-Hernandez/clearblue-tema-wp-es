<?php
/**
 * Template for displaying single posts
 * 
 * @package Creatblue
 * @since 1.0.0
 */

get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

    <!-- Hero Section con Imagen Destacada -->
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        
        <?php if (has_post_thumbnail()) : ?>
            <section class="relative h-[60vh] min-h-[500px] bg-primary overflow-hidden">
                <!-- Imagen de fondo -->
                <div class="absolute inset-0">
                    <?php 
                    the_post_thumbnail('full', array(
                        'class' => 'w-full h-full object-cover opacity-40'
                    )); 
                    ?>
                    <!-- Overlay gradiente -->
                    <div class="absolute inset-0 bg-gradient-to-b from-primary/60 via-primary/80 to-primary"></div>
                </div>
                
                <!-- Contenido del Hero -->
                <div class="relative container mx-auto px-6 h-full flex items-end pb-16">
                    <div class="max-w-4xl">
                        
                        <!-- Categorías -->
                        <?php 
                        $categories = get_the_category();
                        if (!empty($categories)) : 
                        ?>
                            <div class="mb-4">
                                <?php foreach ($categories as $category) : ?>
                                    <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>" 
                                       class="inline-block bg-secondary text-white px-4 py-2 rounded-full text-sm font-semibold mr-2 hover:bg-white hover:text-secondary transition-colors">
                                        <?php echo esc_html($category->name); ?>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                        
                        <!-- Título -->
                        <h1 class="text-4xl md:text-5xl lg:text-6xl font-black text-white mb-6">
                            <?php the_title(); ?>
                        </h1>
                        
                        <!-- Metadata -->
                        <div class="flex flex-wrap items-center gap-6 text-white/90">
                            <!-- Autor -->
                            <div class="flex items-center gap-2">
                                <?php echo get_avatar(get_the_author_meta('ID'), 40, '', '', array('class' => 'rounded-full')); ?>
                                <div>
                                    <p class="text-sm font-semibold">
                                        <?php echo esc_html(get_the_author()); ?>
                                    </p>
                                    <p class="text-xs text-white/70">
                                        Autor
                                    </p>
                                </div>
                            </div>
                            
                            <!-- Fecha -->
                            <div class="flex items-center gap-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                <time datetime="<?php echo esc_attr(get_the_date('c')); ?>">
                                    <?php echo esc_html(get_the_date('j \d\e F, Y')); ?>
                                </time>
                            </div>
                            
                            <!-- Tiempo de lectura estimado -->
                            <?php
                            $content = get_post_field('post_content', get_the_ID());
                            $word_count = str_word_count(strip_tags($content));
                            $reading_time = ceil($word_count / 200); // 200 palabras por minuto
                            ?>
                            <div class="flex items-center gap-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span><?php echo esc_html($reading_time); ?> min de lectura</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php else : ?>
            <!-- Hero sin imagen destacada -->
            <section class="pt-32 pb-16 bg-gradient-to-br from-primary via-primary to-blue-900">
                <div class="container mx-auto px-6">
                    <div class="max-w-4xl mx-auto">
                        
                        <!-- Categorías -->
                        <?php 
                        $categories = get_the_category();
                        if (!empty($categories)) : 
                        ?>
                            <div class="mb-4">
                                <?php foreach ($categories as $category) : ?>
                                    <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>" 
                                       class="inline-block bg-secondary text-white px-4 py-2 rounded-full text-sm font-semibold mr-2 hover:bg-white hover:text-secondary transition-colors">
                                        <?php echo esc_html($category->name); ?>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                        
                        <!-- Título -->
                        <h1 class="text-4xl md:text-5xl lg:text-6xl font-black text-white mb-6">
                            <?php the_title(); ?>
                        </h1>
                        
                        <!-- Metadata -->
                        <div class="flex flex-wrap items-center gap-6 text-white/90">
                            <div class="flex items-center gap-2">
                                <?php echo get_avatar(get_the_author_meta('ID'), 40, '', '', array('class' => 'rounded-full')); ?>
                                <div>
                                    <p class="text-sm font-semibold"><?php echo esc_html(get_the_author()); ?></p>
                                    <p class="text-xs text-white/70">Autor</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                <time datetime="<?php echo esc_attr(get_the_date('c')); ?>">
                                    <?php echo esc_html(get_the_date('j \d\e F, Y')); ?>
                                </time>
                            </div>
                            <?php
                            $content = get_post_field('post_content', get_the_ID());
                            $word_count = str_word_count(strip_tags($content));
                            $reading_time = ceil($word_count / 200);
                            ?>
                            <div class="flex items-center gap-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span><?php echo esc_html($reading_time); ?> min de lectura</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>
        
        <!-- Contenido del Post -->
        <section class="py-16 bg-white">
            <div class="container mx-auto px-6">
                <div class="max-w-4xl mx-auto">
                    
                    <!-- Contenido principal usando the_content() -->
                    <div class="prose prose-lg max-w-none blog-content">
                        <?php 
                        the_content();
                        
                        // Paginación de posts si el contenido tiene el tag <!--nextpage-->
                        wp_link_pages(array(
                            'before'      => '<div class="page-links mt-8 pt-8 border-t border-gray-200"><span class="page-links-title font-bold text-primary">Páginas:</span>',
                            'after'       => '</div>',
                            'link_before' => '<span class="page-number">',
                            'link_after'  => '</span>',
                            'pagelink'    => 'Página %',
                            'separator'   => ' ',
                        ));
                        ?>
                    </div>
                    
                    <!-- Tags -->
                    <?php
                    $tags = get_the_tags();
                    if ($tags) :
                    ?>
                        <div class="mt-12 pt-8 border-t border-gray-200">
                            <h3 class="text-lg font-bold text-primary mb-4 flex items-center gap-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                </svg>
                                Etiquetas
                            </h3>
                            <div class="flex flex-wrap gap-2">
                                <?php foreach ($tags as $tag) : ?>
                                    <a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>" 
                                       class="inline-block bg-gray-100 text-gray-700 px-4 py-2 rounded-full text-sm font-medium hover:bg-secondary hover:text-white transition-colors">
                                        #<?php echo esc_html($tag->name); ?>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    
                    <!-- Información del Autor -->
                    <div class="mt-12 pt-8 border-t border-gray-200">
                        <div class="flex items-start gap-6 bg-gray-50 rounded-2xl p-6">
                            <div class="flex-shrink-0">
                                <?php echo get_avatar(get_the_author_meta('ID'), 80, '', '', array('class' => 'rounded-full')); ?>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-black text-primary mb-2">
                                    <?php echo esc_html(get_the_author()); ?>
                                </h3>
                                <?php if (get_the_author_meta('description')) : ?>
                                    <p class="text-gray-600 mb-4">
                                        <?php echo wp_kses_post(get_the_author_meta('description')); ?>
                                    </p>
                                <?php endif; ?>
                                <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>" 
                                   class="inline-flex items-center gap-2 text-secondary font-semibold hover:text-primary transition-colors">
                                    Ver todos los posts de <?php echo esc_html(get_the_author()); ?>
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Navegación entre posts -->
                    <div class="mt-12 pt-8 border-t border-gray-200">
                        <nav class="flex flex-col md:flex-row justify-between gap-6" role="navigation" aria-label="Navegación entre posts">
                            
                            <?php
                            $prev_post = get_previous_post();
                            $next_post = get_next_post();
                            ?>
                            
                            <!-- Post Anterior -->
                            <div class="flex-1">
                                <?php if (!empty($prev_post)) : ?>
                                    <a href="<?php echo esc_url(get_permalink($prev_post->ID)); ?>" 
                                       class="group block bg-white border-2 border-gray-200 rounded-2xl p-6 hover:border-secondary transition-all duration-300">
                                        <p class="text-sm text-gray-500 mb-2 flex items-center gap-2">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                            </svg>
                                            Post anterior
                                        </p>
                                        <h4 class="text-lg font-bold text-primary group-hover:text-secondary transition-colors">
                                            <?php echo esc_html(get_the_title($prev_post->ID)); ?>
                                        </h4>
                                    </a>
                                <?php endif; ?>
                            </div>
                            
                            <!-- Post Siguiente -->
                            <div class="flex-1">
                                <?php if (!empty($next_post)) : ?>
                                    <a href="<?php echo esc_url(get_permalink($next_post->ID)); ?>" 
                                       class="group block bg-white border-2 border-gray-200 rounded-2xl p-6 hover:border-secondary transition-all duration-300 text-right">
                                        <p class="text-sm text-gray-500 mb-2 flex items-center justify-end gap-2">
                                            Post siguiente
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                            </svg>
                                        </p>
                                        <h4 class="text-lg font-bold text-primary group-hover:text-secondary transition-colors">
                                            <?php echo esc_html(get_the_title($next_post->ID)); ?>
                                        </h4>
                                    </a>
                                <?php endif; ?>
                            </div>
                            
                        </nav>
                    </div>
                    
                    <!-- Sección de Comentarios -->
                    <?php 
                    /* Sección de comentarios temporalmente oculta
                    if (comments_open() || get_comments_number()) : ?>
                        <div class="mt-12 pt-8 border-t border-gray-200">
                            <?php comments_template(); ?>
                        </div>
                    <?php endif; 
                    */ 
                    ?>
                    
                </div>
            </div>
        </section>
        
    </article>

<?php endwhile; ?>

<!-- Posts Relacionados -->
<?php
$related_args = array(
    'category__in'   => wp_get_post_categories(get_the_ID()),
    'post__not_in'   => array(get_the_ID()),
    'posts_per_page' => 3,
    'orderby'        => 'rand',
);

$related_query = new WP_Query($related_args);

if ($related_query->have_posts()) :
?>
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="max-w-7xl mx-auto">
                <h2 class="text-3xl font-black text-primary mb-8">
                    Posts Relacionados
                </h2>
                
                <div class="grid md:grid-cols-3 gap-8">
                    <?php while ($related_query->have_posts()) : $related_query->the_post(); ?>
                        
                        <article class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300">
                            
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="relative overflow-hidden h-48">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php 
                                        the_post_thumbnail('medium', array(
                                            'class' => 'w-full h-full object-cover hover:scale-110 transition-transform duration-500'
                                        )); 
                                        ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                            
                            <div class="p-6">
                                <h3 class="text-xl font-black text-primary mb-3 hover:text-secondary transition-colors line-clamp-2">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h3>
                                
                                <div class="text-sm text-gray-500 mb-4">
                                    <time datetime="<?php echo esc_attr(get_the_date('c')); ?>">
                                        <?php echo esc_html(get_the_date('j \d\e F, Y')); ?>
                                    </time>
                                </div>
                                
                                <a href="<?php the_permalink(); ?>" 
                                   class="inline-flex items-center gap-2 text-secondary font-bold hover:text-primary transition-colors">
                                    Leer más
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                    </svg>
                                </a>
                            </div>
                            
                        </article>
                        
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>
<?php
    wp_reset_postdata();
endif;
?>

<!-- Estilos personalizados para el contenido del blog -->
<style>
/* Estilos para el contenido generado por WordPress */
.blog-content {
    color: #374151;
    line-height: 1.8;
}

.blog-content h1, .blog-content h2, .blog-content h3, .blog-content h4, .blog-content h5, .blog-content h6 {
    color: #1c1e33;
    font-weight: 900;
    margin-top: 2rem;
    margin-bottom: 1rem;
}

.blog-content h2 { font-size: 2rem; }
.blog-content h3 { font-size: 1.5rem; }
.blog-content h4 { font-size: 1.25rem; }

.blog-content p {
    margin-bottom: 1.5rem;
}

.blog-content a {
    color: #85abff;
    text-decoration: underline;
    transition: color 0.3s ease;
}

.blog-content a:hover {
    color: #1c1e33;
}

.blog-content ul, .blog-content ol {
    margin-bottom: 1.5rem;
    padding-left: 2rem;
}

.blog-content ul li {
    list-style-type: disc;
    margin-bottom: 0.5rem;
}

.blog-content ol li {
    list-style-type: decimal;
    margin-bottom: 0.5rem;
}

.blog-content blockquote {
    border-left: 4px solid #85abff;
    padding-left: 1.5rem;
    margin: 2rem 0;
    font-style: italic;
    color: #6b7280;
}

.blog-content img {
    max-width: 100%;
    height: auto;
    border-radius: 1rem;
    margin: 2rem 0;
}

.blog-content pre {
    background: #f3f4f6;
    padding: 1.5rem;
    border-radius: 0.5rem;
    overflow-x: auto;
    margin-bottom: 1.5rem;
}

.blog-content code {
    background: #f3f4f6;
    padding: 0.25rem 0.5rem;
    border-radius: 0.25rem;
    font-family: 'Courier New', monospace;
    font-size: 0.9em;
}

.blog-content table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 1.5rem;
}

.blog-content table th,
.blog-content table td {
    border: 1px solid #e5e7eb;
    padding: 0.75rem;
    text-align: left;
}

.blog-content table th {
    background: #f3f4f6;
    font-weight: bold;
}

.blog-content .wp-caption {
    max-width: 100%;
}

.blog-content .wp-caption-text {
    text-align: center;
    font-size: 0.875rem;
    color: #6b7280;
    margin-top: 0.5rem;
}

/* Alineación de imágenes */
.blog-content .alignleft {
    float: left;
    margin-right: 1.5rem;
    margin-bottom: 1rem;
}

.blog-content .alignright {
    float: right;
    margin-left: 1.5rem;
    margin-bottom: 1rem;
}

.blog-content .aligncenter {
    display: block;
    margin-left: auto;
    margin-right: auto;
}

/* Galería de WordPress */
.blog-content .gallery {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    gap: 1rem;
    margin-bottom: 1.5rem;
}

/* Paginación de páginas del post */
.page-links {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 0.5rem;
}

.page-links a,
.page-links .page-number {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 2.5rem;
    height: 2.5rem;
    padding: 0.5rem;
    background: white;
    border: 2px solid #e5e7eb;
    border-radius: 0.5rem;
    font-weight: 600;
    transition: all 0.3s ease;
}

.page-links a:hover {
    background: #85abff;
    color: white;
    border-color: #85abff;
}

.line-clamp-2 {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}
</style>

<?php get_footer(); ?>
