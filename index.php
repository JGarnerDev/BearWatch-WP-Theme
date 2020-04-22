<!-- 
    1. Made an HTML wireframe. 
    2. Made CSS for it. 
    3. Copypasta HTML into index.php
    4. Copypasta CSS into style.css, linked it in the head with PHP 

    5. Set the html language attribute, charset, WP head, WP Footer, body class 

    6. Navigation Menu linked with Wordpress (functions.php) for theme support (now 'Menus' are customizable in the admin page). In WP Admin, we made an 'About' page with 'FAQ' and 'Our Team' set up as child pages (by going to 'page attributes' and setting 'parent page' to 'About' ). 

    7. Post metadata now has category links. 

    8. Excerpt set to specified length (functions.php)

    9. Feature/Thumbnail image support (functions.php)

    10. Create a single post page (single.php). Cut header and footer from index and placed them in their own files. That remains in index.php will become the content of single.php, and we'll edit it from there.   

    11. Create an archive page (archive.php). This is the page format that is used when you want to see all the posts of a certain category, or of a certain user. Start it off by copy and pasting the index HTML into it. 

    12. Create a search (search.php). Copy and paste archive.php into it to start. 

    13. Create a content.php, and cut the <article> element (containing the post loop) from index.php and place it in the new content file.  Create conditional statements to refactor all our repeitious code, and place "php get_template_part( 'content' )" in their stead. 

    14. Content, or posts, will have different formats like 'aside', 'link', and 'gallery. These need to be enabled in theme support, and they each get their respective file (ex: content-aside.php ).

    15. For a custom page, make a page-about.php (where 'about' is replaced with the slug (site.com/about/) )

    16. Sub-navigation, or navigation that is accessible on particular pages. wp_list_pages() will do most of the work for us, but it won't filter out irrelevent pages. To do so, we need a new function in functions.php that filters out all pages that are parents or siblings. That function returns the useful list of pages that are descendants. Page.php for reference. 

    17. There's a bug with 17; It will display the current page as a navigable link in the sub-nav even if there are no children (no effective subnavigation). To fix this, we need a function that counts the children of the page and returns that number. By passing it in a 'if' statement, we can conditionally render the subnavigation if there are child pages to navigate to. See functions.php and page.php. 

    18. Widgets. 

    19. Comment functionality. single.php

-->




<?php get_header() ?>



<div class="container content">
    <div class="main block">

        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

        <?php get_template_part('content', get_post_format()) ?>

        <?php endwhile; ?>
        <?php else : ?>
        <?php echo apautop('Sorry, no posts were found') ?>

        <?php endif; ?>
    </div>
    <div class="side">
        <?php if (is_active_sidebar('sidebar')) : ?>
        <?php dynamic_sidebar('sidebar') ?>
        <?php endif; ?>
    </div>
</div>

<?php get_footer() ?>