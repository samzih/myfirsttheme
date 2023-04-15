<!-- Post metadata (information) about postdate, author and its categories -->

<ul class="meta">
    <li>
        <i class="fa fa-calendar"></i> <?php echo get_the_date('j F, Y'); ?>
    </li>
    <li>
        <i class="fa fa-user"></i> <a href="<?php the_permalink(); ?>"><?php the_author_posts_link(); ?></a>
    </li>
    <li>
        <i class="fa fa-tag"></i> <?php the_category(', '); ?>
    </li>
</ul>