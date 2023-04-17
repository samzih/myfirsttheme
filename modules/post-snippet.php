<!-- An individual posts extrude/snippet (post thumbnail + post title + postmeta template part + post excerpt) -->

<article>
    <img src="<?php the_post_thumbnail_url(); ?>" />
    <h2 class="title">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h2>
    <?php get_template_part('modules/post', 'metadata'); ?>
    <p><?php the_excerpt(); ?></p>
</article>