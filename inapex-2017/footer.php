		<div class="footer">
        <div class="container">
            <div class="logo">
                 <a href="<?php bloginfo('url'); ?>/"><img src="<?php bloginfo('template_directory'); ?>/assets/img/logo.png" alt="Inapex"></a>
            </div>
            <div class="menu">
                <?php wp_nav_menu( array('theme_location' => 'footernav', 'menu_id' => 'footer-menu', 'menu_class' => 'nav-foot')); ?>
            </div>
            <div class="socmed">
                <li><a href="https://www.facebook.com/INAPEX.co.id" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="https://twitter.com/INAPropertiExpo" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="https://www.instagram.com/indonesiapropertiexpo/" class="search-btn"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
          
            </div>
        </div>
    </div>
    <!-- end footer -->

    <div class="copyright">
        <div class="container">
        <div class="copy-ins">
           Copyright &copy; <?php echo date('Y'); ?> inapex.co.id | All rights reserved
        </div>

        </div>
    </div>



    <div class="popup-search" style="display:none">
          
    </div>
		<?php wp_footer(); ?>
	</body>
</html>
