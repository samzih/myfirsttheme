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
                <h4>Social media</h4>
                <ul class="social">
                    <li>
                        <i class="fa fa-facebook"></i> <a href="">Facebook</a>
                    </li>
                    <li>
                        <i class="fa fa-twitter"></i> <a href="">Twitter</a>
                    </li>
                    <li>
                        <i class="fa fa-instagram"></i> <a href="">Instagram</a>
                    </li>
                    <li>
                        <i class="fa fa-linkedin"></i> <a href="">LinkedIn</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row bottom">
            <div class="col-xs-12">
                <?php dynamic_sidebar('footer-widget-area-3'); ?>
            </div>
        </div>
    </div>
    <?php wp_footer(); // injects various content (scripts, stylesheets & more) into the footer section
    ?>
</footer>
</body>

</html>