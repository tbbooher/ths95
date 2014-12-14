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
                <section class="col-lg-3 col-md-3 hidden-sm hidden-xs footer-one">
                    <h3>Footer Left</h3>
                    <p>This should be social content, like a sample of flickr pictures</p>
                </section>
                <section class="col-lg-3 col-md-3 hidden-sm hidden-xs footer-two">
                    <?php get_template_part('sidebar','community'); ?>
                </section>
                <section class="col-lg-3 col-md-3 col-xs-12 col-sm-12 footer-three">
                  <h3>Contact Us</h3>
                  <ul class="contact-us">
                    <li> <i class="fa fa-map-marker"></i>
                      <p>
                        <strong class="contact-pad">Address:</strong>
                        <br>3623 Tupelo Place<br> 
                        Alexandria, VA 22304
                      </p>
                    </li>
                    <li> <i class="fa fa-phone"></i>
                      <p><strong>Phone:</strong> 703.625.2672</p>
                    </li>
                    <li> <i class="fa fa-envelope"></i>
                      <p><strong>Email:</strong><a href="mailto:ths95@theboohers.org">ths95@theboohers.org</a></p>
                    </li>
                  </ul>
                </section>
                <section class="col-lg-3 col-md-3 hidden-sm hidden-xs footer-four">
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
                    © Copyright <?php echo date('F Y') ?> by <a style="cursor: pointer;">THS 95</a>. All Rights Reserved.
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6 ">
                  <ul class="social social-icons-footer-bottom">
                    <li class="facebook"><a data-toggle="tooltip" title="" style="cursor: pointer;" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
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