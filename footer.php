<footer class="footer">
<div class="container">
    <div class="row">
        <div class="copyright col-sm-7 col-4">
            <p>All rights reserved.</p>
        </div>
        <div class="footer-menu col-sm-5 col-8 text-end">
            <?php wp_nav_menu(array(
                'theme_location' => 'my_footer_menu'
            )); ?>
        </div>
    </div>
</div>

</footer>
<?php wp_footer(); ?>
</body>
</html>