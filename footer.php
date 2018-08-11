<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */


/**
?>

		</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="wrap">
				<?php
				get_template_part( 'template-parts/footer/footer', 'widgets' );

				if ( has_nav_menu( 'social' ) ) :
				?>
					<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentyseventeen' ); ?>">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'social',
									'menu_class'     => 'social-links-menu',
									'depth'          => 1,
									'link_before'    => '<span class="screen-reader-text">',
									'link_after'     => '</span>' . twentyseventeen_get_svg( array( 'icon' => 'chain' ) ),
								)
							);
						?>
					</nav><!-- .social-navigation -->
				<?php
				endif;

				get_template_part( 'template-parts/footer/site', 'info' );
				?>
			</div><!-- .wrap -->
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); 
**/

?>

</div>
</section>
      <!-- #wrapper end -->

<!-- Footer
            ============================================= -->
         <footer id="footer" class="dark">
            <div class="container">
               <!-- Footer Widgets
                  ============================================= -->
               <div class="footer-widgets-wrap clearfix">
                  <div class="col_two_third">
                     <div class="col_one_third">
                        <div class="widget clearfix">
                           <img src="<?php echo get_template_directory_uri(); ?>/images/footer-widget-logo.png" alt="" class="footer-logo">
                           <div style="background: url('<?php echo get_template_directory_uri(); ?>/images/world-map.png') no-repeat center center; background-size: 100%;">
                              <address>
                                 <strong>Headquarters:</strong><br>
                                 Tiger Building - 2, Office No:  101<br>Al Taawun Sharjah UAE<br>
                              </address>
                              <abbr title="Phone Number"><strong>Phone:</strong></abbr> +971 6523 7952<br>
                              <abbr title="Fax"><strong>Fax:</strong></abbr> +971 6523 7952<br>
                              <abbr title="Email Address"><strong>Email:</strong></abbr> info@mrlightglobal.com
                           </div>
                        </div>
                     </div>
                     <div class="col_one_third">
                        <div class="widget widget_links clearfix">
                           <h4>Links</h4>
                           <ul>
                              <li><a href="#">About</a></li>
                              <li><a href="#">Products</a></li>
                              <li><a href="#">Distributor</a></li>
                              <li><a href="#">Mr Care</a></li>
                              <li><a href="#">Contact</a></li>
                              <li><a href="#">Media</a></li>
                              <li><a href="#">E Waste Management</a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="col_one_third col_last">
                        <div class="widget clearfix">
                           <h4>Recent Posts</h4>
                           <div id="post-list-footer">
                              <div class="spost clearfix">
                                 <div class="entry-c">
                                    <div class="entry-title">
                                       <h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
                                    </div>
                                    <ul class="entry-meta">
                                       <li>10th July 2014</li>
                                    </ul>
                                 </div>
                              </div>
                              <div class="spost clearfix">
                                 <div class="entry-c">
                                    <div class="entry-title">
                                       <h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
                                    </div>
                                    <ul class="entry-meta">
                                       <li>10th July 2014</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col_one_third col_last">
                     <div class="widget subscribe-widget clearfix">
                        <h5><strong>Subscribe</strong> to Our Newsletter to get Important News, Amazing Offers &amp; Inside Scoops:</h5>
                        <div class="widget-subscribe-form-result"></div>
                        <form id="widget-subscribe-form" action="include/subscribe.php" role="form" method="post" class="nobottommargin">
                           <div class="input-group divcenter">
                              <div class="input-group-prepend">
                                 <div class="input-group-text"><i class="icon-email2"></i></div>
                              </div>
                              <input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
                              <div class="input-group-append">
                                 <button class="btn btn-success" type="submit">Subscribe</button>
                              </div>
                           </div>
                        </form>
                     </div>
                     <div class="widget clearfix" style="margin-bottom: -20px;">
                        <div class="row">
                           <div class="col-lg-6 clearfix bottommargin-sm">
                              <a href="#" class="social-icon si-dark si-colored si-facebook nobottommargin" style="margin-right: 10px;">
                              <i class="icon-facebook"></i>
                              <i class="icon-facebook"></i>
                              </a>
                              <a href="#"><small style="display: block; margin-top: 3px;"><strong>Like us</strong><br>on Facebook</small></a>
                           </div>
                           <div class="col-lg-6 clearfix">
                              <a href="#" class="social-icon si-dark si-colored si-rss nobottommargin" style="margin-right: 10px;">
                              <i class="icon-rss"></i>
                              <i class="icon-rss"></i>
                              </a>
                              <a href="#"><small style="display: block; margin-top: 3px;"><strong>Subscribe</strong><br>to RSS Feeds</small></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- .footer-widgets-wrap end -->
            </div>
            <!-- Copyrights
               ============================================= -->
            <div id="copyrights">
               <div class="container clearfix">
                  <div class="col_half">
                     Copyrights &copy; 2014 All Rights Reserved by Mr Light Global.<br>
                     <div class="copyright-links">Designed by: <a href="http://www.sparcsdigital.com">Sparcs Digital Agency</a></div>
                  </div>
                  <div class="col_half col_last tright">
                     <div class="fright clearfix">
                        <a href="#" class="social-icon si-small si-borderless si-facebook">
                        <i class="icon-facebook"></i>
                        <i class="icon-facebook"></i>
                        </a>
                        <a href="#" class="social-icon si-small si-borderless si-twitter">
                        <i class="icon-twitter"></i>
                        <i class="icon-twitter"></i>
                        </a>
                        <a href="#" class="social-icon si-small si-borderless si-gplus">
                        <i class="icon-gplus"></i>
                        <i class="icon-gplus"></i>
                        </a>
                        <a href="#" class="social-icon si-small si-borderless si-pinterest">
                        <i class="icon-pinterest"></i>
                        <i class="icon-pinterest"></i>
                        </a>
                        <a href="#" class="social-icon si-small si-borderless si-vimeo">
                        <i class="icon-vimeo"></i>
                        <i class="icon-vimeo"></i>
                        </a>
                        <a href="#" class="social-icon si-small si-borderless si-yahoo">
                        <i class="icon-yahoo"></i>
                        <i class="icon-yahoo"></i>
                        </a>
                        <a href="#" class="social-icon si-small si-borderless si-linkedin">
                        <i class="icon-linkedin"></i>
                        <i class="icon-linkedin"></i>
                        </a>
                     </div>
                     <div class="clear"></div>
                     <i class="icon-envelope2"></i> info@mrlightglobal.com <span class="middot">&middot;</span> <i class="icon-headphones"></i> +971 6523 7952
                  </div>
               </div>
            </div>
            <!-- #copyrights end -->
         </footer>
         <!-- #footer end -->






 <div id="gotoTop" class="icon-angle-up"></div>
      <!-- External JavaScripts
         ============================================= -->
      <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
      <script src="<?php echo get_template_directory_uri(); ?>/js/plugins.js"></script>
      <!-- Footer Scripts
         ============================================= -->
      <script src="<?php echo get_template_directory_uri(); ?>/js/functions.js"></script>

</body>
</html>
