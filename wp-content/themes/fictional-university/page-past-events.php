<?php 
    get_header(); 
    pageBanner([
        'title' => 'All Past Events!',
        'subtitle' => 'Recap of our past events!',
        'photo' => get_theme_file_uri('/assets/images/library-hero.jpg')
    ]);
    ?>

    <div class="container container--narrow page-section">
        <?php 
           $today = date('Ymd');
           $pastEvents = new WP_Query([
               'post_type' => 'event',
               'meta_key' => 'event_date',
               'orderby' => 'meta_value_num',
               'order' => 'ASC',
               'meta_query' => [
                   [
                       'key' => 'event_date',
                       'compare' => '<',
                       'value' => $today,
                       'type' => 'numeric'
                   ]
                ],
                // get the query of the custom page in url
                'paged' => get_query_var('paged', 1)
                   
           ]);

            while($pastEvents->have_posts()) {
                $pastEvents->the_post();
                get_template_part('template-parts/content', 'event');
            }
            echo paginate_links([
                'total' => $pastEvents->max_num_pages
            ]);
        ?>
    </div>


<?php get_footer(); ?>
