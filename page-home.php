<?php
/**
 * Template for displaying pages
 * 
 * @package bootstrap-basic
 */

get_header();

?> 

<!-- end test -->

            <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class=""></li>
                    <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                  </ol>
                  <div class="carousel-inner" role="listbox">
                    <div class="item">
                      <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
                      <div class="container">
                        <div class="carousel-caption">
                          <h1>Example headline.</h1>
                          <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
                          <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                        </div>
                      </div>
                    </div>
                    <div class="item active">
                      <img src="data:image/gif;base64,R0lGODlhAQABAIAAAGZmZgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
                      <div class="container">
                        <div class="carousel-caption">
                          <h1>Another example headline.</h1>
                          <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                          <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <img src="data:image/gif;base64,R0lGODlhAQABAIAAAFVVVQAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
                      <div class="container">
                        <div class="carousel-caption">
                          <h1>One more for good measure.</h1>
                          <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                          <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
				<div class="container" style="background-color: gray;">
                    <div class="row">
                        <div class="col-lg-4">
                            <img src="http://placehold.it/300x300" />
                        </div>
                        <div class="col-lg-8">
                            <h2>Free Workout</h2>
                            <p>Every saturday at noon . . .</p>
                        </div>                      
                    </div>
                </div>
				<div class="container marketing">
                    <div class="row">
                        <div class="col-lg-4" style="background-color: green;">
                                <?php 
                                while (have_posts()) {
                                    the_post();
                                    get_template_part('content', 'page');
                                    echo "\n\n";

                                    // If comments are open or we have at least one comment, load up the comment template
                                    // we don't think we will every have comments on a static page
                                    if (comments_open() || '0' != get_comments_number()) {
                                        comments_template();
                                    }
                                    echo "\n\n";
                                } //endwhile;
                                ?>
                        </div>
                        <div class="col-lg-4">
                            <h4>Elements Program and Memberships</h4>
                            <p>Post elements data here</p>
                        </div>
                        <div class="col-lg-4">
                            <h4>Latest news</h4>
                            <p>Display latest news here</p>
                        </div>                        
                    </div>
                </div>
<?php get_footer(); ?> 