<nav class="navigation pagination">
    <h2 class="screen-reader-text">Inläggsnavigering</h2>
    <?php echo paginate_links(array(
        'prev_text' => 'Föregående',
        'next_text' => 'Nästa',
    )); ?>
</nav>