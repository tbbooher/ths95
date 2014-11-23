<?php
/**
 * Template for displaying pages
 * 
 * @package bootstrap-basic
 */

get_header();

?> 

            <!-- see http://bootstrapbay.com/blog/bootstrap-3-carousel-tutorial/ -->
            <?php /* 
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
                          <h1>Cool Picture and Content</h1>
                          <p>This is where awesome happens!</p>
                          <p><a class="btn btn-lg btn-primary" href="<?php echo site_url('getting-started'); ?>" role="button">Sign up today</a></p>
                        </div>
                      </div>
                    </div>
                    <div class="item active">
                      <img src="data:image/gif;base64,R0lGODlhAQABAIAAAGZmZgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
                      <div class="container">
                        <div class="carousel-caption">
                          <h1>Another example headline.</h1>
                          <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                          <p><a class="btn btn-lg btn-primary" href="<?php echo site_url('getting-started'); ?>" role="button">Learn more</a></p>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <img src="data:image/gif;base64,R0lGODlhAQABAIAAAFVVVQAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
                      <div class="container">
                        <div class="carousel-caption">
                          <h1>One more for good measure.</h1>
                          <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                          <p><a class="btn btn-lg btn-primary" href="<?php echo site_url('getting-started'); ?>" role="button">Browse gallery</a></p>
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
                */ ?>
                <!-- end carousel -->
				<div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <?php
                                $args = array( 'post_type' => 'wod', 'posts_per_page' => 1 );
                                $loop = new WP_Query( $args );
                                while ( $loop->have_posts() ) :
                                  $loop->the_post();
                                  $title = get_the_title();
                                  $content = get_the_content();
                                  $image = get_the_post_thumbnail(get_the_ID(), 'medium');
                                endwhile;
                                if ($image == '') {
                                    $image = '<img src="'.get_bloginfo('template_directory').'/img/Cookies.jpg">';
                                };
                            ?>
                            <?php echo $image; ?>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8">
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
                    </div>
                </div>
				<div class="container marketing">
                    <div class="row pad-above">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="content-box big ch-item bottom-pad-small">
                                <div class="box_content">
                                    <h3>Workout of the Day</h3>
                                    <h4><?php echo $title; ?></h4>
                                    <div class="entry-content">
                                        <?php echo $content; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="content-box big ch-item bottom-pad-small">
                                <div class="box_content">
                                    <?php
                                    $args = array( 'post_type' => 'business_item', 'posts_per_page' => 1 );
                                    $loop = new WP_Query( $args );
                                    while ( $loop->have_posts() ) : $loop->the_post();
                                      the_title( '<h3>', '</h3>' );
                                      echo '<div class="entry-content">';
                                      the_content();
                                      echo '</div>';
                                    endwhile;
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="content-box big ch-item bottom-pad-small">
                                <div class="box_content">
                                    <?php
                                    $args = array( 'post_type' => 'news_item', 'posts_per_page' => 1 );
                                    $loop = new WP_Query( $args );
                                    while ( $loop->have_posts() ) : $loop->the_post();
                                      the_title( '<h3>', '</h3>' );
                                      echo '<div class="entry-content">';
                                      the_content();
                                      echo '</div>';
                                    endwhile;
                                    ?>
                                </div>>
                            </div>
                        </div>                        
                    </div>
                </div>
<?php get_footer(); ?> 