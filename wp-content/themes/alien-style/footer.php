<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Alien_Code
 * @since Alien Style 1.0
 */
?>

		</div><!-- .site-content -->

		<footer id="colophon" class="site-footer row full-width footer" role="contentinfo">
			<div class="medium-9 columns site-info">
				<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'twentysixteen' ); ?>">
          <?php
          wp_nav_menu( array(
            'theme_location' => 'primary',
            'menu_class'     => 'primary-menu no-bullet',
          ) );
          ?>
        </nav><!-- .main-navigation -->
			</div>
			<div class="medium-3 columns text-right social-links-container">
				<ul class="inline-list social-links">
					<li><a href="https://github.com/IsaacYung/alien-code"><i class="icon-github"></i></a></li>
					<li><a href=""><i id="facebook-share" class="icon-facebook2"></i></a></li>
					<li><a href="https://www.linkedin.com/cws/share?url=<?php echo get_site_url() ?>"><i class="icon-linkedin"></i></a></li>
					<li><a href="https://twitter.com/isaacyung"><i class="icon-twitter"></i></a></li>
				</ul>
			</div>
			<script>
				document.getElementById('facebook-share').onclick = function() {
				  FB.ui({
				    method: 'share',
				    display: 'popup',
				    href: 'https://developers.facebook.com/docs/',
				  }, function(response){});
				}
			</script>
			<div class="copyright text-center columns">
			 <span>Copyright 2016 - Alien Code | Seek knowledge</span>
			</div>
		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>
</body>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1763657957208598',
      xfbml      : true,
      version    : 'v2.7'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
</html>
