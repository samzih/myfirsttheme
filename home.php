<?php get_header(); ?>

<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9">
                    <h1><?php wp_title(''); ?></h1>
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <article>
                                <img src="<?php the_post_thumbnail_url(); ?>">
                                <h2 class="title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h2>
                                <ul class="meta">
                                    <li>
                                        <i class="fa fa-calendar"></i> <?php echo get_the_date('j F, Y'); ?>
                                    </li>
                                    <li>
                                        <i class="fa fa-user"></i> <a href="<?php the_permalink(); ?>"><?php the_author_posts_link(); ?></a>
                                    </li>
                                    <li>
                                        <i class="fa fa-tag"></i> <?php the_category(', ') ?>
                                    </li>
                                </ul>
                                <p><?php the_excerpt(); ?></p>
                            </article>
                    <?php endwhile;
                    endif;
                    ?>
                    <nav class="navigation pagination">
                        <h2 class="screen-reader-text">Inläggsnavigering</h2>
                        <?php echo paginate_links(
                            array(
                                'prev_text' => 'Föregående',
                                'next_text' => 'Nästa',
                            )
                        ); ?>
                    </nav>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>