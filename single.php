<?php get_header(); ?>

<main>
    <section>
        <div class="container">
            <div class="row">

                <div id="primary" class="col-xs-12 col-md-9">
                    <?php
                    if (have_posts()) :
                        while (have_posts()) :
                            the_post();
                    ?>

                            <article>
                                <img src="<?php the_post_thumbnail_url(); ?>" />
                                <h1 class="title"><?php single_post_title(); ?></h1>
                                <?php get_template_part('modules/post', 'metadata'); ?>
                                <p><?php the_content(); ?></p>
                            </article>

                    <?php
                        endwhile;
                    endif;
                    ?>

                </div>

                <?php get_sidebar(); ?>

            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>