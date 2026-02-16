# 🌐 PROMPT FOR ENGLISH BLOG SYSTEM REPLICATION

Copy and paste this entire prompt to your Claude agent to replicate the blog system in English.

---

## 📋 PROMPT START

I'm working on a WordPress project using a child theme connected to GitHub with Yarn and automatic deployment. I need you to review the complete project structure and correctly generate the necessary templates to display a professional blog system.

### Technical Context:

- This is a traditional WordPress (not headless)
- We're using a child theme
- We don't use page builders
- HTML must be rendered using the WordPress loop
- Must respect WordPress template hierarchy
- We want real WordPress pagination (not JS fake pagination)
- Blog content must use the HTML that WordPress generates with `the_content()`

### Requirements:

#### 1. Create the blog listing template:
- Must display 7 posts per page
- Must use WP_Query or the main loop correctly
- Must implement pagination using `paginate_links()`
- Must display:
  - Featured image
  - Title
  - Excerpt
  - Date
  - "Read more" button
- Must be SEO friendly
- No external plugins
- Clean and professional code

#### 2. Create the individual blog post template:
- Must use `single.php` or `single-post.php` according to best practice
- Must load:
  - Featured image
  - Title
  - Date
  - Author
  - Full content using `the_content()`
- Must be prepared to add comments
- Must follow WordPress best practices

#### 3. Modify functions.php if necessary:
- Adjust `posts_per_page` only for the blog (7)
- Don't affect other custom post types
- Use `pre_get_posts` correctly

#### 4. Create archive.php template:
- For categories, tags, dates, and author archives
- Dynamic hero based on archive type
- Same grid layout as home.php
- Breadcrumb navigation
- Result counter

#### 5. Create search.php template:
- Search results display
- Highlight search terms in results
- Suggestions when no results found
- Popular categories display

### Design Requirements:

Use these colors and styles:
```css
Primary color: #1c1e33 (dark blue)
Secondary color: #85abff (light blue)
Font: Lato (Google Fonts)
```

Use Tailwind CSS for all styling (already integrated in the theme).

Design must be:
- Fully responsive (mobile-first)
- Modern cards with shadows and hover effects
- Hero sections with gradients
- Smooth transitions and animations
- Professional spacing and typography

### File Structure to Create:

```
/
├── home.php           ← Main blog listing (7 posts/page)
├── single.php         ← Individual post view
├── archive.php        ← Categories, tags, dates, author
├── search.php         ← Search results
├── functions.php      ← MODIFY (add blog configuration)
├── BLOG-README.md     ← Complete documentation
└── BLOG-SUMMARY.md    ← Technical summary
```

### WordPress Template Hierarchy Explanation:

Before writing code, analyze how WordPress will resolve the template hierarchy in this case:

#### For blog listing (`/blog/`):
```
WordPress searches in order:
1. home.php       ← WE'LL USE THIS
2. index.php      ← Parent theme fallback
```

#### For individual post (`/blog/my-post/`):
```
WordPress searches in order:
1. single-post.php  ← Doesn't exist
2. single.php       ← WE'LL USE THIS
3. singular.php     ← Doesn't exist
4. index.php        ← Won't reach here
```

#### For category (`/category/name/`):
```
WordPress searches in order:
1. category-{slug}.php  ← Doesn't exist
2. category-{id}.php    ← Doesn't exist
3. category.php         ← Doesn't exist
4. archive.php          ← WE'LL USE THIS
5. index.php            ← Won't reach here
```

### Code Requirements:

✅ Production-ready code (no pseudo-code)
✅ WordPress coding standards
✅ Native WordPress loop
✅ Use `the_content()` for HTML rendering
✅ Real pagination with `paginate_links()`
✅ `pre_get_posts` correctly implemented
✅ Don't affect other custom post types
✅ SEO friendly (semantic HTML, ARIA labels)
✅ Performance optimized
✅ Full responsive design
✅ Accessibility compliant

### Specific Features to Implement:

#### home.php:
- **Search form in hero section** (prominent, styled with Tailwind, **posts only**)
- **Visual category and tag filters** (before posts grid, with counts)
- Responsive grid (3 columns desktop, 2 tablet, 1 mobile)
- Featured image with hover zoom effect
- Category badge on image
- Post metadata (date, author)
- Excerpt (30 words)
- "Read more" button with arrow animation
- Styled pagination with numbers
- Empty state (no posts message)
- Placeholder image when no featured image

#### single.php:
- Full-width hero with featured image
- Gradient overlay on hero image
- Title, author with avatar, date, estimated reading time
- Full content with `the_content()`
- Custom styles for WordPress content (headings, lists, images, tables, blockquotes, code)
- Post tags display
- Author bio box with avatar
- Previous/next post navigation
- Related posts section (3 posts from same category)
- Comments section ready
- Support for `<!--nextpage-->` pagination

#### archive.php:
- Dynamic hero based on archive type (category/tag/author/date)
- Display category/tag description
- Author avatar and bio for author archives
- **Search form in hero section** (same as home.php, **posts only**)
- **Visual category and tag filters** (with active state highlighting)
- Breadcrumb navigation
- Result counter
- Same grid layout as home.php
- Pagination

#### search.php:
- Search results hero with search query display
- Refined search form
- Highlight search terms in results with `<mark>` tag
- Result counter
- Empty state with suggestions
- Popular categories display
- Links to go back home or view all posts

### functions.php Modifications:

Add these functions (IMPORTANT: only add, don't remove existing code):

```php
/**
 * Configure posts per page for blog
 * Only applies to main blog page (home.php)
 * Doesn't affect other custom post types or queries
 */
add_action('pre_get_posts', 'theme_posts_per_page');
function theme_posts_per_page($query) {
    if (!is_admin() && $query->is_main_query()) {
        if (is_home() && !is_front_page()) {
            $query->set('posts_per_page', 7);
        }
    }
}

/**
 * Add custom image sizes for blog
 */
add_action('after_setup_theme', 'theme_custom_image_sizes');
function theme_custom_image_sizes() {
    add_image_size('blog-card', 600, 400, true);
    add_image_size('blog-hero', 1920, 800, true);
}

/**
 * Customize excerpt length
 */
add_filter('excerpt_length', 'theme_excerpt_length', 999);
function theme_excerpt_length($length) {
    return 30;
}

add_filter('excerpt_more', 'theme_excerpt_more');
function theme_excerpt_more($more) {
    return '...';
}
```

### Pagination Styles:

Include this CSS in each template that uses pagination:

```css
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
```

### Blog Content Styles:

Include this CSS in single.php for WordPress generated content:

```css
.blog-content {
    color: #374151;
    line-height: 1.8;
}

.blog-content h1, .blog-content h2, .blog-content h3,
.blog-content h4, .blog-content h5, .blog-content h6 {
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
```

### Utility Classes:

Add these utility classes to all templates:

```css
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
```

### Documentation Files:

Create two documentation files:

1. **BLOG-README.md** - Complete implementation guide with:
   - Files created
   - WordPress configuration steps
   - Features implemented
   - Customization options
   - Troubleshooting section
   - Checklist for production

2. **BLOG-SUMMARY.md** - Technical summary with:
   - Template hierarchy explanation
   - How WordPress resolves templates
   - Why pre_get_posts is correct
   - Comparison with bad practices
   - Design diagrams
   - Debugging tips
   - Key concepts (The Loop, Template Tags)

### WordPress Configuration Instructions:

Include in documentation that user needs to:

1. Go to **Settings → Reading** in WordPress admin
2. Select **"A static page"**
3. Choose:
   - **Homepage**: Current front-page.php
   - **Posts page**: Create new page called "Blog"
4. Save changes
5. Go to **Settings → Permalinks** and click "Save Changes" to regenerate rewrite rules
Search Form Implementation:

Add this search form in both `home.php` and `archive.php` right after the hero content (inside hero section, before closing divs):

```php
<!-- Search Form -->
<div class="max-w-2xl mx-auto mt-8">
    <form role="search" method="get" class="relative" action="<?php echo esc_url(home_url('/')); ?>">
        <input type="search" 
               name="s" 
               placeholder="Search the blog..." 
               class="w-full px-6 py-4 pr-14 rounded-full text-lg focus:outline-none focus:ring-4 focus:ring-secondary/30 text-primary"
               aria-label="Search the blog">
        <button type="submit" 
                class="absolute right-2 top-1/2 -translate-y-1/2 bg-secondary hover:bg-primary text-white p-3 rounded-full transition-colors"
                aria-label="Search">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
            </svg>
        </button>
    </form>
</div>
```

**Placement:**
- In `home.php`: After the subtitle, before the closing `</div></div></section>` tags of the hero
- In `archive.php`: After the post counter, before the closing `</div></div></section>` tags of the hero

### Important Notes:

- All text should be in **ENGLISH** (hero titles, buttons, labels, etc.)
- Use proper English date format (e.g., "February 16, 2026")
- Change "Leer más" to "Read more"
- Change "Post anterior" to "Previous post"
- Change "Post siguiente" to "Next post"
- Change "Resultados para:" to "Results for:"
- Change "Buscar artículos del blog..." to "Search blog articles..." (search placeholder)
- Change "Filtrar por Categoría" to "Filter by Category"
- Change "Tags Populares" to "Popular Tags"
- Change "Todas" to "All" (in category filters)
- Use `get_the_date('F j, Y')` for proper English date format
- All screen reader text should be in English
- All aria-labels should be in English
- Change "Resultados para:" to "Results for:"
- Use `get_the_date('F j, Y')` for proper English date format
- All screen reader text should be in English
- All aria-labels should be in English

### Deliverables:

Please create:
1. ✅ `home.php` - Main blog listing
2. ✅ `single.php` - Individual post view
3. ✅ `archive.php` - Archives (categories, tags, author, date)
4. ✅ `search.php` - Search results
5. ✅ Modify `functions.php` - Add blog configuration
6. ✅ `BLOG-README.md` - Complete documentation
7. ✅ `BLOG-SUMMARY.md` - Technical summary

### Before You Start:

1. Review the current project structure
2. Check existing header.php and footer.php
3. Verify functions.php current content
4. Understand the color scheme and design
5. Check if get_header() and get_footer() are available

### Code Quality Standards:

✅ No pseudo-code or placeholders
✅ Complete, production-ready code
✅ WordPress coding standards
✅ Proper escaping (esc_html, esc_url, etc.)
✅ Security best practices
✅ Responsive design
✅ Accessibility (ARIA labels)
✅ SEO optimized (semantic HTML)
✅ Performance optimized
✅ Clean, commented code

### Success Criteria:

- Blog displays 7 posts per page
- Pagination works correctly
- Single posts display full content
- Categories and tags work properly
- Search functionality works
- Design is professional and responsive
- Code follows WordPress standards
- All templates are production-ready

---

## 📋 PROMPT END

Copy everything above this line and paste it to your Claude agent in the English WordPress project. The agent will create all necessary files with the exact same functionality, but with English language and proper formatting.

**Note:** Make sure to mention in your prompt any specific differences in your English site structure (e.g., different color scheme, different parent theme, etc.).

---

## 🎯 Quick Instructions for You:

1. Copy the entire "PROMPT START" to "PROMPT END" section above
2. Open your English WordPress project in VS Code
3. Start a new conversation with Claude
4. Paste the entire prompt
5. Claude will analyze your project and create all files
6. Review and test the implementation
7. Configure WordPress Settings → Reading as instructed
8. Commit and push to GitHub

**That's it!** The blog system will be replicated with the exact same functionality in English.
