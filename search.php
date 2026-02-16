<?php
/**
 * Template for displaying search results
 * 
 * @package Creatblue
 * @since 1.0.0
 */

get_header(); ?>

<!-- Hero Section de Búsqueda -->
<section class="pt-32 pb-16 bg-gradient-to-br from-primary via-primary to-blue-900">
    <div class="container mx-auto px-6">
        <div class="max-w-3xl mx-auto text-center">
            <div class="inline-block bg-secondary/20 backdrop-blur-sm px-4 py-2 rounded-full text-white text-sm font-semibold mb-4">
                Resultados de búsqueda
            </div>
            
            <h1 class="text-4xl md:text-5xl font-black text-white mb-6">
                <?php
                printf(
                    esc_html__('Resultados para: %s', 'creatblue'),
                    '<span class="text-secondary">"' . get_search_query() . '"</span>'
                );
                ?>
            </h1>
            
            <!-- Formulario de búsqueda refinada -->
            <div class="max-w-2xl mx-auto">
                <form role="search" method="get" class="relative" action="<?php echo esc_url(home_url('/')); ?>">
                    <input type="search" 
                           name="s" 
                           value="<?php echo get_search_query(); ?>"
                           placeholder="Refinar búsqueda..." 
                           class="w-full px-6 py-4 pr-14 rounded-full text-lg focus:outline-none focus:ring-4 focus:ring-secondary/30 text-primary"
                           aria-label="Buscar">
                    <button type="submit" 
                            class="absolute right-2 top-1/2 -translate-y-1/2 bg-secondary hover:bg-primary text-white p-3 rounded-full transition-colors"
                            aria-label="Buscar">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </button>
                </form>
            </div>
            
            <!-- Contador de resultados -->
            <div class="mt-6 text-white/80">
                <?php
                global $wp_query;
                $total_results = $wp_query->found_posts;
                if ($total_results > 0) {
                    echo sprintf(
                        _n('Se encontró %s resultado', 'Se encontraron %s resultados', $total_results, 'creatblue'),
                        '<strong>' . number_format_i18n($total_results) . '</strong>'
                    );
                } else {
                    echo esc_html__('No se encontraron resultados', 'creatblue');
                }
                ?>
            </div>
        </div>
    </div>
</section>

<!-- Resultados de Búsqueda -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="max-w-7xl mx-auto">
            
            <?php if (have_posts()) : ?>
                
                <!-- Grid de Resultados -->
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                    
                    <?php while (have_posts()) : the_post(); ?>
                        
                        <article id="post-<?php the_ID(); ?>" <?php post_class('bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 flex flex-col'); ?>>
                            
                            <!-- Tipo de contenido -->
                            <div class="px-6 pt-4">
                                <span class="inline-block bg-secondary/10 text-secondary px-3 py-1 rounded-full text-xs font-semibold uppercase">
                                    <?php echo esc_html(get_post_type_object(get_post_type())->labels->singular_name); ?>
                                </span>
                            </div>
                            
                            <!-- Imagen Destacada -->
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="relative overflow-hidden h-56 mt-4">
                                    <a href="<?php the_permalink(); ?>" class="block h-full">
                                        <?php 
                                        the_post_thumbnail('large', array(
                                            'class' => 'w-full h-full object-cover hover:scale-110 transition-transform duration-500',
                                            'alt' => get_the_title()
                                        )); 
                                        ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                            
                            <!-- Contenido del Card -->
                            <div class="p-6 flex-1 flex flex-col">
                                
                                <!-- Metadata -->
                                <?php if (get_post_type() === 'post') : ?>
                                    <div class="flex items-center gap-4 text-sm text-gray-500 mb-3">
                                        <time datetime="<?php echo esc_attr(get_the_date('c')); ?>" class="flex items-center gap-1">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                            </svg>
                                            <?php echo esc_html(get_the_date('j \d\e F, Y')); ?>
                                        </time>
                                        
                                        <?php
                                        $categories = get_the_category();
                                        if (!empty($categories)) :
                                        ?>
                                            <span class="text-secondary font-semibold">
                                                <?php echo esc_html($categories[0]->name); ?>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
                                
                                <!-- Título -->
                                <h2 class="text-2xl font-black text-primary mb-3 hover:text-secondary transition-colors">
                                    <a href="<?php the_permalink(); ?>" class="line-clamp-2">
                                        <?php the_title(); ?>
                                    </a>
                                </h2>
                                
                                <!-- Extracto con términos de búsqueda resaltados -->
                                <div class="text-gray-600 mb-4 flex-1 line-clamp-3">
                                    <?php 
                                    if (has_excerpt()) {
                                        $excerpt = get_the_excerpt();
                                    } else {
                                        $excerpt = wp_trim_words(get_the_content(), 20, '...');
                                    }
                                    
                                    // Resaltar términos de búsqueda
                                    $search_term = get_search_query();
                                    if (!empty($search_term)) {
                                        $excerpt = preg_replace(
                                            '/(' . preg_quote($search_term, '/') . ')/i',
                                            '<mark class="bg-yellow-200 px-1">$1</mark>',
                                            $excerpt
                                        );
                                    }
                                    
                                    echo wp_kses_post($excerpt);
                                    ?>
                                </div>
                                
                                <!-- Botón Ver Más -->
                                <a href="<?php the_permalink(); ?>" 
                                   class="inline-flex items-center gap-2 text-secondary font-bold hover:text-primary transition-colors group">
                                    Ver más
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
                    'screen_reader_text' => 'Navegación de resultados',
                    'type'               => 'list',
                    'before_page_number' => '<span class="sr-only">Página </span>',
                );
                
                $pagination = paginate_links($pagination_args);
                
                if ($pagination) :
                ?>
                    <nav class="flex justify-center" role="navigation" aria-label="Paginación de resultados de búsqueda">
                        <div class="pagination-wrapper">
                            <?php echo wp_kses_post($pagination); ?>
                        </div>
                    </nav>
                <?php endif; ?>
                
            <?php else : ?>
                
                <!-- Sin resultados -->
                <div class="text-center py-16">
                    <div class="max-w-md mx-auto">
                        <svg class="w-24 h-24 mx-auto text-gray-300 mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <h2 class="text-3xl font-black text-primary mb-4">
                            No se encontraron resultados
                        </h2>
                        <p class="text-gray-600 mb-8">
                            Lo sentimos, no pudimos encontrar nada que coincida con tu búsqueda.<br>
                            Intenta con otros términos o navega por categorías.
                        </p>
                        
                        <!-- Sugerencias -->
                        <div class="bg-white rounded-2xl p-6 mb-8 text-left">
                            <h3 class="font-bold text-primary mb-4">💡 Sugerencias:</h3>
                            <ul class="space-y-2 text-gray-600">
                                <li class="flex items-start gap-2">
                                    <svg class="w-5 h-5 text-secondary flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                    Verifica la ortografía de las palabras
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg class="w-5 h-5 text-secondary flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                    Usa palabras más generales o diferentes
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg class="w-5 h-5 text-secondary flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                    Intenta con menos palabras clave
                                </li>
                            </ul>
                        </div>
                        
                        <!-- Categorías populares -->
                        <?php
                        $categories = get_categories(array(
                            'orderby' => 'count',
                            'order'   => 'DESC',
                            'number'  => 5,
                        ));
                        
                        if (!empty($categories)) :
                        ?>
                            <div class="mb-8">
                                <h3 class="font-bold text-primary mb-4">Categorías populares:</h3>
                                <div class="flex flex-wrap gap-2 justify-center">
                                    <?php foreach ($categories as $category) : ?>
                                        <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>" 
                                           class="inline-block bg-white text-primary px-4 py-2 rounded-full font-semibold hover:bg-secondary hover:text-white transition-colors border-2 border-gray-200 hover:border-secondary">
                                            <?php echo esc_html($category->name); ?>
                                            <span class="text-sm opacity-60">(<?php echo $category->count; ?>)</span>
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                        
                        <!-- Botones de acción -->
                        <div class="flex flex-wrap gap-4 justify-center">
                            <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" 
                               class="inline-flex items-center gap-2 bg-secondary text-white px-6 py-3 rounded-full font-bold hover:bg-primary transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                </svg>
                                Ver todos los posts
                            </a>
                            <a href="<?php echo esc_url(home_url('/')); ?>" 
                               class="inline-flex items-center gap-2 bg-white text-primary px-6 py-3 rounded-full font-bold hover:bg-gray-100 transition-colors border-2 border-gray-200">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                                </svg>
                                Ir al inicio
                            </a>
                        </div>
                    </div>
                </div>
                
            <?php endif; ?>
            
        </div>
    </div>
</section>

<!-- Estilos personalizados -->
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

mark {
    font-weight: 600;
}
</style>

<?php get_footer(); ?>
