<?php
/**
 * @package WordPress
 * @subpackage BoilerstrapWP
 */
?>

    <footer>
        <p>
            <?php bloginfo('name'); ?> is proudly powered by
            <a href="http://wordpress.org/">WordPress</a>, and built using the <a href="http://html5boilerplate.com/">HTML5 Boilerplate</a>.
            <br />
            <a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a>
            and <a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a>.
            <!-- <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. -->
        </p>
    </footer>
</div> <!--! end of #container -->

<!-- Javascript at the bottom for fast page loading -->

<!-- Grab Google CDN's jQuery. fall back to local if necessary -->
<?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."js/vendor/jquery-1.9.1.min.js") ?>
<?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."js/vendor/bootstrap.min.js") ?>
<?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."js/plugins.js") ?>
<?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."js/main.js") ?>
   
<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
			   
<?php wp_footer(); ?>

</body>
</html>
