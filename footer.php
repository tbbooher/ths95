<?php
/**
 * The theme footer
 * 
 * @package bootstrap-basic
 */
?>
                </div><!-- row -->
			</div><!--.site-content-->			
		</div><!--.container page-container-->
		
		<!--wordpress footer-->

        <!-- new from pix %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
        <footer id="footer"> 
          <!-- Footer Top Start -->
          <div class="footer-top">
            <div class="container">
              <div class="row">
                <section class="col-lg-3 col-md-3 col-xs-12 col-sm-3 footer-one">
                    <h3>Footer Left</h3>
                    <p>This should be social content, like a sample of flickr pictures</p>
                    <?php 
                        if (!dynamic_sidebar('footer-left')) {
                            printf(__('Powered by %s', 'bootstrap-basic'), 'WordPress');
                            echo ' | ';
                            printf(__('Theme: %s', 'bootstrap-basic'), '<a href="http://okvee.net">Bootstrap Basic</a>');
                        } 
                    ?> 
                </section>
                <section class="col-lg-3 col-md-3 col-xs-12 col-sm-3 footer-two">
                  <h3>Partners</h3>
                  <p>Also give this major air time on the wod page</p>
                  <ul>
                    <li>Link to Power Supply</li>
                    <li>Link to Custom Fit</li>
                    <li>Link to Reebok Store</li>
                    <li>Link to Jackson Clinics</li>
                  </ul>
                </section>
                <section class="col-lg-3 col-md-3 col-xs-12 col-sm-3 footer-three">
                  <h3>Contact Us</h3>
                  <ul class="contact-us">
                    <li> <i class="fa fa-map-marker"></i>
                      <p>
                        <strong class="contact-pad">Address:</strong>
                        <br> xxx 4 Mile Run Drive<br>
                        Arlington, VA xxxxx
                      </p>
                    </li>
                    <li> <i class="fa fa-phone"></i>
                      <p><strong>Phone:</strong> +880 111-111-111</p>
                    </li>
                    <li> <i class="fa fa-envelope"></i>
                      <p><strong>Email:</strong><a href="mailto:info@crossfitadaptation.com">info@crossfitadaptation.com</a></p>
                    </li>
                  </ul>
                </section>
                <section class="col-lg-3 col-md-3 col-xs-12 col-sm-3 footer-four">
                    <h3>CFA Community</h3>
                    <ul class="community">
                      <li><a href="http://journal.crossfit.com/start.tpl?version=CFJ-graphic123x63" target="_blank" title="CrossFit Journal: The Performance-Based Lifestyle Resource"><img src="http://journal.crossfit.com/templates/images/graphic-125x63.jpg" width="125px" height="63px" alt="CrossFit Journal: The Performance-Based Lifestyle Resource"></a></li>
                      <li><a href="http://www.crossfitfallschurch.com/"><img src="<?php echo get_bloginfo('template_directory').'/img/cffc.png' ?>"></a></li>
                    </ul>
                    <?php dynamic_sidebar('footer-right'); ?> 
                </section>
              </div>
            </div>
          </div>
          <!-- Footer Top End --> 
          <!-- Footer Bottom Start -->
          <div class="footer-bottom">
            <div class="container">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6 ">
                    © Copyright 2014 by <a style="cursor: pointer;">CFA</a>. All Rights Reserved.
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6 ">
                  <ul class="social social-icons-footer-bottom">
                    <li class="facebook"><a data-toggle="tooltip" title="" style="cursor: pointer;" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li class="twitter"><a data-toggle="tooltip" title="" style="cursor: pointer;" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li class="rss"><a data-toggle="tooltip" title="" style="cursor: pointer;" data-original-title="Rss"><i class="fa fa-rss"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- Footer Bottom End --> 
        </footer>
        <!-- end from pix %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
		<?php wp_footer(); ?> 
	</body>
</html>