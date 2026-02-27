<?php
/**
 * Template Name: Blog Home
 * Description: Listado de posts del blog con paginación
 * 
 * @package Creatblue
 * @since 1.0.0
 */

get_header(); ?>

<!-- Sección Hero del Blog -->
<section class="pt-32 pb-16 bg-gradient-to-br from-primary via-primary to-blue-900">
    <div class="container mx-auto px-6">
        <div class="max-w-3xl mx-auto text-center">
            <h1 class="mb-4 flex justify-center items-center">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/camino_logo.webp" alt="Blog de Creatblue" class="h-16 md:h-24 w-auto object-contain">
            </h1>
            <p class="text-xl text-white/90">
                Conocimiento, tendencias y mejores prácticas en Recursos Humanos
            </p>
            
            <!-- Formulario de Búsqueda (solo posts) -->
            <div class="max-w-2xl mx-auto mt-8">
                <form role="search" method="get" class="relative" action="<?php echo esc_url(home_url('/')); ?>">
                    <input type="hidden" name="post_type" value="post">
                    <input type="search" 
                           name="s" 
                           placeholder="Buscar artículos del blog..." 
                           class="w-full px-6 py-4 pr-14 rounded-full text-lg focus:outline-none focus:ring-4 focus:ring-secondary/30 text-primary"
                           aria-label="Buscar en el blog">
                    <button type="submit" 
                            class="absolute right-2 top-1/2 -translate-y-1/2 bg-secondary hover:bg-primary text-white p-3 rounded-full transition-colors"
                            aria-label="Buscar">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Listado de Posts -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="max-w-7xl mx-auto">
            
            <!-- Filtros por Categorías y Tags -->
            <div class="mb-12">
                <div class="bg-white rounded-2xl shadow-lg p-6">
                    
                    <!-- Categorías -->
                    <?php
                    $categories = get_categories(array(
                        'orderby' => 'name',
                        'order'   => 'ASC',
                        'hide_empty' => true,
                    ));
                    
                    if (!empty($categories)) :
                    ?>
                        <div class="mb-6">
                            <h3 class="text-lg font-black text-primary mb-4 flex items-center gap-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                </svg>
                                Filtrar por Categoría
                            </h3>
                            <div class="flex flex-wrap gap-2">
                                <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" 
                                   class="inline-block px-4 py-2 rounded-full font-semibold transition-colors <?php echo !is_category() && !is_tag() && !is_author() ? 'bg-secondary text-white' : 'bg-gray-100 text-gray-700 hover:bg-secondary hover:text-white'; ?>">
                                    Todas
                                </a>
                                <?php foreach ($categories as $category) : ?>
                                    <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>" 
                                       class="inline-block px-4 py-2 rounded-full font-semibold bg-gray-100 text-gray-700 hover:bg-secondary hover:text-white transition-colors">
                                        <?php echo esc_html($category->name); ?>
                                        <span class="text-xs opacity-60">(<?php echo $category->count; ?>)</span>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    
                    <!-- Tags Populares -->
                    <?php
                    $tags = get_tags(array(
                        'orderby' => 'count',
                        'order'   => 'DESC',
                        'number'  => 10,
                        'hide_empty' => true,
                    ));
                    
                    if (!empty($tags)) :
                    ?>
                        <div>
                            <h3 class="text-lg font-black text-primary mb-4 flex items-center gap-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14"></path>
                                </svg>
                                Tags Populares
                            </h3>
                            <div class="flex flex-wrap gap-2">
                                <?php foreach ($tags as $tag) : ?>
                                    <a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>" 
                                       class="inline-block px-3 py-1 rounded-full text-sm font-medium bg-gray-100 text-gray-700 hover:bg-secondary hover:text-white transition-colors">
                                        #<?php echo esc_html($tag->name); ?>
                                        <span class="text-xs opacity-60">(<?php echo $tag->count; ?>)</span>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    
                </div>
            </div>
            
            <?php if (have_posts()) : ?>
                
                <!-- Grid de Posts -->
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                    
                    <?php while (have_posts()) : the_post(); ?>
                        
                        <article id="post-<?php the_ID(); ?>" <?php post_class('bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 flex flex-col'); ?>>
                            
                            <!-- Imagen Destacada -->
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="relative overflow-hidden h-56">
                                    <a href="<?php the_permalink(); ?>" class="block h-full">
                                        <?php 
                                        the_post_thumbnail('large', array(
                                            'class' => 'w-full h-full object-cover hover:scale-110 transition-transform duration-500',
                                            'alt' => get_the_title()
                                        )); 
                                        ?>
                                    </a>
                                    
                                    <!-- Categorías -->
                                    <?php 
                                    $categories = get_the_category();
                                    if (!empty($categories)) : 
                                    ?>
                                        <div class="absolute top-4 left-4">
                                            <span class="bg-secondary text-white px-3 py-1 rounded-full text-sm font-semibold">
                                                <?php echo esc_html($categories[0]->name); ?>
                                            </span>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php else : ?>
                                <!-- Imagen placeholder si no hay imagen destacada -->
                                <div class="relative overflow-hidden h-56 bg-gradient-to-br from-primary to-secondary flex items-center justify-center">
                                    <svg class="w-20 h-20 text-white/30" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                            <?php endif; ?>
                            
                            <!-- Contenido del Card -->
                            <div class="p-6 flex-1 flex flex-col">
                                
                                <!-- Metadata -->
                                <div class="flex items-center gap-4 text-sm text-gray-500 mb-3">
                                    <time datetime="<?php echo esc_attr(get_the_date('c')); ?>" class="flex items-center gap-1">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                        <?php echo esc_html(get_the_date('j \d\e F, Y')); ?>
                                    </time>
                                    
                                    <span class="flex items-center gap-1">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                        </svg>
                                        <?php echo esc_html(get_the_author()); ?>
                                    </span>
                                </div>
                                
                                <!-- Título -->
                                <h2 class="text-2xl font-black text-primary mb-3 hover:text-secondary transition-colors">
                                    <a href="<?php the_permalink(); ?>" class="line-clamp-2">
                                        <?php the_title(); ?>
                                    </a>
                                </h2>
                                
                                <!-- Extracto -->
                                <div class="text-gray-600 mb-4 flex-1 line-clamp-3">
                                    <?php 
                                    if (has_excerpt()) {
                                        echo wp_kses_post(get_the_excerpt());
                                    } else {
                                        echo wp_trim_words(get_the_content(), 20, '...');
                                    }
                                    ?>
                                </div>
                                
                                <!-- Botón Leer Más -->
                                <a href="<?php the_permalink(); ?>" 
                                   class="inline-flex items-center gap-2 text-secondary font-bold hover:text-primary transition-colors group">
                                    Leer más
                                    <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                    </svg>
                                </a>
                            </div>
                            
                        </article>
                        
                    <?php endwhile; ?>
                    
                </div>
                
                <!-- Paginación -->
                <?php
                $pagination_args = array(
                    'mid_size'           => 2,
                    'prev_text'          => '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg><span class="ml-2">Anterior</span>',
                    'next_text'          => '<span class="mr-2">Siguiente</span><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>',
                    'screen_reader_text' => 'Navegación de posts',
                    'type'               => 'list',
                    'before_page_number' => '<span class="sr-only">Página </span>',
                );
                
                $pagination = paginate_links($pagination_args);
                
                if ($pagination) :
                ?>
                    <nav class="flex justify-center" role="navigation" aria-label="Paginación del blog">
                        <div class="pagination-wrapper">
                            <?php echo wp_kses_post($pagination); ?>
                        </div>
                    </nav>
                <?php endif; ?>
                
            <?php else : ?>
                
                <!-- No hay posts -->
                <div class="text-center py-16">
                    <div class="max-w-md mx-auto">
                        <svg class="w-24 h-24 mx-auto text-gray-300 mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        <h2 class="text-3xl font-black text-primary mb-4">
                            No hay posts disponibles
                        </h2>
                        <p class="text-gray-600 mb-8">
                            Aún no hemos publicado ningún artículo. ¡Vuelve pronto!
                        </p>
                        <a href="<?php echo esc_url(home_url('/')); ?>" 
                           class="inline-flex items-center gap-2 bg-secondary text-white px-6 py-3 rounded-full font-bold hover:bg-primary transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg>
                            Volver al inicio
                        </a>
                    </div>
                </div>
                
            <?php endif; ?>
            
        </div>
    </div>
</section>

<!-- Estilos personalizados para la paginación -->
<style>
.pagination-wrapper .page-numbers {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    margin: 0 0.25rem;
}

.pagination-wrapper a.page-numbers,
.pagination-wrapper span.page-numbers {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 2.5rem;
    height: 2.5rem;
    padding: 0.5rem;
    border-radius: 0.5rem;
    font-weight: 600;
    transition: all 0.3s ease;
}

.pagination-wrapper a.page-numbers {
    background: white;
    color: #1c1e33;
    border: 2px solid #e5e7eb;
}

.pagination-wrapper a.page-numbers:hover {
    background: #85abff;
    color: white;
    border-color: #85abff;
    transform: translateY(-2px);
    box-shadow: 0 4px 6px -1px rgba(133, 171, 255, 0.3);
}

.pagination-wrapper span.current {
    background: #85abff;
    color: white;
    border: 2px solid #85abff;
}

.pagination-wrapper .prev,
.pagination-wrapper .next {
    min-width: auto;
    padding: 0.5rem 1rem;
}

.pagination-wrapper .dots {
    border: none;
    background: transparent;
    color: #9ca3af;
}

/* Line clamp utilities */
.line-clamp-2 {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.line-clamp-3 {
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

/* Screen reader only */
.sr-only {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    margin: -1px;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    white-space: nowrap;
    border-width: 0;
}
</style>

<?php get_footer(); ?>
