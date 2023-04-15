<?php get_header(); ?>

<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-8 col-md-offset-2">

                    <h1>Sökresultat för: <?php the_search_query(); ?></h1>

                    <div class="searchform-wrap">
                        <form id="searchform" class="searchform">
                            <label for="s">Sök efter:</label>
                            <?php get_search_form() ?>
                        </form>
                    </div>

                    <?php
                    if (have_posts()) :
                        while (have_posts()) :
                            the_post();
                            get_template_part('modules/post', 'snippet');
                        endwhile;
                    else : ?>
                        <p><?php echo 'Tyvärr, inga inlägg matchade din sökning.'; ?></p>
                    <?php endif;

                    get_template_part('modules/pagination');
                    ?>

                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>