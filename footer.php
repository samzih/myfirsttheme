<footer id="footer">
    <div class="container">
        <div class="row top">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <?php dynamic_sidebar('footer-widget-area-1'); ?>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
                <?php dynamic_sidebar('footer-widget-area-2'); ?>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
                <?php dynamic_sidebar('footer-widget-area-3'); ?>
            </div>
        </div>
        <div class="row bottom">
            <div class="col-xs-12">
                <?php dynamic_sidebar('footer-widget-area-4'); ?>
            </div>
        </div>
    </div>
</footer>

<!-- injects various content (scripts, stylesheets & more) into the footer section -->
<?php wp_footer(); ?>
</body>

</html>