<?php
/**
 * Displays content for front page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header();

?>


<!-- Content
            ============================================= -->
         <section id="content">
            <div class="content-wrap">
               <div class="container clearfix">
                  <div class="row clearfix">
                     <div class="col-xl-5" data-animate="fadeInLeft" data-delay="100">
                        <div class="heading-block bottommargin-sm">
                           <h1><span style="color:#de1a1a;">Mr. Light</span> Story</h1>
                        </div>
                        <p class="lead">Established in 2004 in the UAE, Mr. LIGHT is an international presence today in the Home Appliances market with operations spread across 26 countries. The rousing reception we received at the market encouraged us to innovate across a vast variety of Home Appliances products.
                           &amp; much more.
                        </p>
                        <div class=""><a href="about-us.html" class="button ls0 button-rounded button-border nott t400 ">Read More</a></div>
                     </div>
                     <div class="col-xl-7">
                        <div style="position: relative; margin-bottom: -60px;" class="ohidden" data-height-xl="426" data-height-lg="567" data-height-md="470" data-height-md="287" data-height-xs="183">
                           <img src="<?php echo get_template_directory_uri(); ?>/images/mr-light-product.jpg" style="position: absolute; top: 0; left: 0;" data-animate="fadeInRight" data-delay="100" alt="Chrome">
                           <!--<img src="images/services/main-fmobile.png" style="position: absolute; top: 0; left: 0;" data-animate="fadeInUp" data-delay="400" alt="iPad">-->
                        </div>
                     </div>
                  </div>
               </div>
               <div class="section nobottommargin">
                  <div class="container clear-bottommargin clearfix">
                     
                        <div class="col_one_third" data-animate="fadeInUp" data-delay="50">
                           <div class="feature-box ">
                              <div class="fbox-icon">
                                 <img src="<?php echo get_template_directory_uri(); ?>/images/ico-washingmachine.png">
                              </div>
                              <h3>Home Appliances</h3>
                              <p>Good Looks & Great Functionality. Check out our range of State-of-the-Art Home Appliances.</p>
                           </div>
                        </div>
                        <div class="col_one_third" data-animate="fadeInUp" data-delay="100">
                           <div class="feature-box ">
                              <div class="fbox-icon">
                                 <img src="<?php echo get_template_directory_uri(); ?>/images/ico-mixi.png">
                              </div>
                              <h3>Kitchen Appliances</h3>
                              <p>Hearths that answer to a Homemaker's Heart. Kitchen Appliances to make Life easy. </p>
                           </div>
                        </div>
                        <div class="col_one_third col_last" data-animate="fadeInUp" data-delay="150">
                           <div class="feature-box ">
                              <div class="fbox-icon">
                                 <img src="<?php echo get_template_directory_uri(); ?>/images/ico-speaker.png">
                              </div>
                              <h3>Entertainment Products</h3>
                              <p>Leisure & Pleasure at your Fingertips. Ease up with Cutting Edge Entertainment Technology.</p>
                           </div>
                        </div>
                        <div class="clear"></div>
                        <div class="col_one_third nobottommargin" data-animate="fadeInUp" data-delay="50">
                           <div class="feature-box ">
                              <div class="fbox-icon">
                                 <img src="<?php echo get_template_directory_uri(); ?>/images/ico-torch.png">
                              </div>
                              <h3>Lighting Devices</h3>
                              <p>Picture Perfect Lighting Devices. Easy on the Eye in every sense of the word!</p>
                           </div>
                        </div>
                        <div class="col_one_third nobottommargin" data-animate="fadeInUp" data-delay="100">
                           <div class="feature-box">
                              <div class="fbox-icon">
                                 <img src="<?php echo get_template_directory_uri(); ?>/images/ico-kettle.png">
                              </div>
                              <h3>Household Products</h3>
                              <p>Designed to Serve. Our Super Handy range of  Household Products.</p>
                           </div>
                        </div>
                        <div class="col_one_third nobottommargin col_last" data-animate="fadeInUp" data-delay="150">
                           <div class="feature-box ">
                              <div class="fbox-icon">
                                 <img src="<?php echo get_template_directory_uri(); ?>/images/ico-phone.png">
                              </div>
                              <h3>Best Customer Service</h3>
                              <p>At every nook & corner; At your beck & call. Why? Because YOU are Royal!</p>
                           </div>
                        </div>
                        
                  </div>
               </div>
               <div class="section nobg clearfix">
                  <div class="container clearfix">
                     <div class="heading-block divcenter nobottomborder center clearfix" style="max-width: 600px">
                        <small class="text-black-50 uppercase ls3 t600">Latest Products</small>
                        <h2 class="capitalize t600 mb-2" style="font-size: 36px; letter-spacing: -1px">Looking for More Products?</h2>
                        <!--<p class="mb-3">Energistically syndicate team building synergy after efficient human capital. Assertively underwhelm sticky solutions.</p>-->
                        <div class="center"><a href="product-categories.html" class="button ls0 button-rounded button-border nott t400 ">View More</a></div>
                     </div>
                     <div class="tab-container">
                        <div class="tab-content clearfix ui-tabs-panel ui-corner-bottom ui-widget-content" id="tabs-9" aria-labelledby="ui-id-1" role="tabpanel" aria-hidden="false">
                        	<div id="shop" class="shop clearfix">


                        		<?php
							    $args = array(
									'post_type' => 'products', // Your custom post type
									'posts_per_page' => '4', // Change the number to whatever you wish
									'order_by' => 'date', // Some optional sorting
									'order' => 'ASC', 
									);
									$new_query = new WP_Query ($args);
									if ($new_query->have_posts()) {
									    while($new_query->have_posts()){
									        $new_query->the_post();
									        ?>

									        <div class="product clearfix">
                                 <div class="product-image">
                                    <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
                                    <!-- <div class="sale-flash">50% Off*</div> -->
                                    <div class="product-overlay">
                                       <a href="<?php echo get_permalink(); ?>" class="add-to-cart"><i class="icon-zoom-in2"></i><span>Quick View</span></a>
                                    </div>
                                 </div>
                                 <div class="product-desc">
                                    <div class="product-title" style="text-align: center;">
                                       <h3><a href="<?php echo the_title(); ?>"><?php echo  the_title(); ?></a></h3>
                                    </div>
                                 </div>
                              </div>
									        <?php
									        // Get a list of post's categories
									        $categories = get_the_category($post->ID);
									        foreach ($categories as $category) {
									            echo $category->name;
									        }
									    }
									}
									wp_reset_postdata();

							    ?>

                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="section bottommargin-lg">
                  <div class="container clearfix">
                     <div class="col_half nobottommargin center">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/guiness.png" alt="Image" data-animate="fadeInLeft" class="fadeInLeft animated">
                     </div>
                     <div class="col_half topmargin-sm nobottommargin col_last">
                        <div class="row">
                           <div class="col">
                              <div class="counter counter-large" style="color:#de1a1a;"><span data-from="100" data-to="300" data-refresh-interval="80" data-speed="3000" data-comma="true"></span></div>
                              <h4>Quality Products</h4>
                           </div>
                           <div class="col">
                              <div class="counter counter-large" style="color:#de1a1a;"><span data-from="10000" data-to="50000" data-refresh-interval="80" data-speed="3000" data-comma="true"></span></div>
                              <h4>Satisfied Customers</h4>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col">
                              <div class="counter counter-large" style="color:#de1a1a;"><span data-from="15" data-to="26" data-refresh-interval="80" data-speed="3000" data-comma="true"></span></div>
                              <h4>Countries Reached</h4>
                           </div>
                           <div class="col">
                              <div class="counter counter-large" style="color:#de1a1a;"><span data-from="3" data-to="10" data-refresh-interval="80" data-speed="3000" data-comma="true"></span></div>
                              <h4>Successful Years</h4>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="container clearfix">
                  <div id="oc-clients" class="owl-carousel image-carousel carousel-widget" data-margin="60" data-loop="true" data-nav="false" data-autoplay="5000" data-pagi="false" data-items-xs="2" data-items-sm="3" data-items-md="4" data-items-lg="5" data-items-xl="6">
                     <div class="oc-item"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/outlet-1.jpg" alt="Outlets"></a></div>
                     <div class="oc-item"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/outlet-2.jpg" alt="Outlets"></a></div>
                     <div class="oc-item"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/outlet-3.jpg" alt="Outlets"></a></div>
                     <div class="oc-item"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/outlet-4.jpg" alt="Outlets"></a></div>
                     <div class="oc-item"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/outlet-5.jpg" alt="Outlets"></a></div>
                     <div class="oc-item"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/outlet-6.jpg" alt="Outlets"></a></div>
                     <div class="oc-item"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/outlet-7.jpg" alt="Outlets"></a></div>
                     <div class="oc-item"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/outlet-8.jpg" alt="Outlets"></a></div>
                     <div class="oc-item"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/outlet-9.jpg" alt="Outlets"></a></div>
                     <div class="oc-item"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/outlet-10.jpg" alt="Outlets"></a></div>
                  </div>
               </div>
            </div>
         </section>
         <!-- #content end -->