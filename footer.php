<?php
/**
 * The theme footer
 * 
 * @package bootstrap-basic
 */
?>
                </div><!-- row -->
			</div><!--.site-content-->
			
			
			<footer id="site-footer" role="contentinfo">
				<div id="footer-row" class="row site-footer">
                    yeah -- tim update
					<div class="col-md-6 footer-left">
						<?php 
						if (!dynamic_sidebar('footer-left')) {
							printf(__('Powered by %s', 'bootstrap-basic'), 'WordPress');
							echo ' | ';
							printf(__('Theme: %s', 'bootstrap-basic'), '<a href="http://okvee.net">Bootstrap Basic</a>');
						} 
						?> 
					</div>
					<div class="col-md-6 footer-right text-right">
						<?php dynamic_sidebar('footer-right'); ?> 
					</div>
				</div>
			</footer>

		</div><!--.container page-container-->
		
		<!--wordpress footer-->

        <!-- new from pix %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
        <footer id="footer"> 
          <!-- Footer Top Start -->
          <div class="footer-top">
            <div class="container">
              <div class="row">
                <section class="col-lg-3 col-md-3 col-xs-12 col-sm-3 footer-one">
                  <h3>About</h3>
                  <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. </p>
                </section>
                <section class="col-lg-3 col-md-3 col-xs-12 col-sm-3 footer-two">
                  <h3>Twitter Stream</h3>
                  <ul id="tweets">
                    <li style="opacity: 1;">
                      <p class="content">Our new Gallaxy theme is live now at <a href="https://t.co/9fXM9gHGQK" target="_blank">https://t.co/9fXM9gHGQK</a>!! Go grab it!!! <a href="http://t.co/GyXuvEZxgv" target="_blank">http://t.co/GyXuvEZxgv</a></p>
                      <b><a href="http://twitter.com/FIFOThemes/status/495814354713853952" class="time" target="_blank">111 days ago</a></b></li>
                  </ul>
                </section>
                <section class="col-lg-3 col-md-3 col-xs-12 col-sm-3 footer-three">
                  <h3>Contact Us</h3>
                  <ul class="contact-us">
                    <li> <i class="fa fa-map-marker"></i>
                      <p> <strong class="contact-pad">Address:</strong><br> xxx 4 Mile Run Drive<br>
                        Arlington, VA xxxxx</p>
                    </li>
                    <li> <i class="fa fa-phone"></i>
                      <p><strong>Phone:</strong> +880 111-111-111</p>
                    </li>
                    <li> <i class="fa fa-envelope"></i>
                      <p><strong>Email:</strong><a href="mailto:support@fifothemes.com">support@fifothemes.com</a></p>
                    </li>
                  </ul>
                </section>
                <section class="col-lg-3 col-md-3 col-xs-12 col-sm-3 footer-four">
                  <h3>Flickr Photostream</h3>
                  <ul id="flickrfeed" class="thumbs">
                    <li><a rel="prettyPhoto[pp_gal]" href="http://farm4.staticflickr.com/3942/15522706046_724055dc48.jpg"><img src="http://farm4.staticflickr.com/3942/15522706046_724055dc48_s.jpg" alt="Marcus Henderson (#75B7971)"></a></li>
                    <li><a rel="prettyPhoto[pp_gal]" href="http://farm4.staticflickr.com/3876/15161220656_6258b3df9a.jpg"><img src="http://farm4.staticflickr.com/3876/15161220656_6258b3df9a_s.jpg" alt="Tim Atlas - Lost in the Waiting (#0748)"></a></li>
                    <li><a rel="prettyPhoto[pp_gal]" href="http://farm8.staticflickr.com/7275/13965306323_17d0a8f644.jpg"><img src="http://farm8.staticflickr.com/7275/13965306323_17d0a8f644_s.jpg" alt="The Beginning of a New Journey #5694"></a></li>
                    <li><a rel="prettyPhoto[pp_gal]" href="http://farm8.staticflickr.com/7373/10412001266_483a1e4c9d.jpg"><img src="http://farm8.staticflickr.com/7373/10412001266_483a1e4c9d_s.jpg" alt="Jackie Martinez (#9963)"></a></li>
                    <li><a rel="prettyPhoto[pp_gal]" href="http://farm4.staticflickr.com/3705/10278343103_dd92d24d07.jpg"><img src="http://farm4.staticflickr.com/3705/10278343103_dd92d24d07_s.jpg" alt="Tim Atlas - Lost in the Waiting Album Cover"></a></li>
                    <li><a rel="prettyPhoto[pp_gal]" href="http://farm9.staticflickr.com/8552/10217169844_a83bb0c26f.jpg"><img src="http://farm9.staticflickr.com/8552/10217169844_a83bb0c26f_s.jpg" alt="Ortofon Concorde S-120 (#1211)"></a></li>
                  </ul>
                </section>
              </div>
            </div>
          </div>
          <!-- Footer Top End --> 
          <!-- Footer Bottom Start -->
          <div class="footer-bottom">
            <div class="container">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6 "> © Copyright 2014 by <a style="cursor: pointer;">CFA</a>. All Rights Reserved. </div>
                <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6 ">
                  <ul class="social social-icons-footer-bottom">
                    <li class="facebook"><a data-toggle="tooltip" title="" style="cursor: pointer;" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li class="twitter"><a data-toggle="tooltip" title="" style="cursor: pointer;" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li class="dribbble"><a data-toggle="tooltip" title="" style="cursor: pointer;" data-original-title="Dribble"><i class="fa fa-dribbble"></i></a></li>
                    <li class="linkedin"><a data-toggle="tooltip" title="" style="cursor: pointer;" data-original-title="LinkedIn"><i class="fa fa-linkedin"></i></a></li>
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