<?php get_header(); ?>

<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9">

                    <h1><?php the_author(); ?></h1>

                    <?php
                    if (have_posts()) :
                        while (have_posts()) :
                            the_post();
                            get_template_part('modules/post', 'snippet');
                        endwhile;
                    endif;

                    get_template_part('modules/pagination');
                    ?>

                </div>

                <?php get_sidebar(); ?>

            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>