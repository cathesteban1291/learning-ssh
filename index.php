<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package start
 */

get_header(); ?>

<div id="our-company" class="page-wrapper full-width light-bg" style="background-color:#ffffff">
	 <div class="page-fullwdth-content">	
		   <div id="slider">
          <div id="carousel-main" class="carousel slide">
            <div class="carousel-inner">
              <div class="item">
                <img width="2130" height="840" src="http://leadci.com/wp-content/uploads/2015/01/1.Company-Banner.jpg" class="img-responsive wp-post-image" alt="1.Company-Banner">
                  <div class="carousel-caption">
                    <div class="container">
                      <h2>Our purpose</h2>
                        <p class="lead">is to develop individuals and teams so they have the&nbsp;<strong>capabilities&nbsp;</strong>(abilities and willingness) to&nbsp;<strong>lead and manage change&nbsp;</strong>and&nbsp;<strong>continuous improvement&nbsp;</strong>in all aspects of business</p>
                    </div>
                  </div>
              </div>

              <div class="item">
                <img width="2130" height="840" src="http://leadci.com/wp-content/uploads/2015/01/2.Identify-Banner.jpg" class="img-responsive wp-post-image" alt="2.Identify-Banner">
                  <div class="carousel-caption">
                    <div class="container">
                      <h2>We identify</h2>
                        <p class="lead"><strong>opportunities, ideas and problems</strong> and work with you to <strong>quantify the possibilities</strong>
                        </p>
                    </div>
                  </div>
              </div>

              <div class="item">
                <img width="2130" height="840" src="http://leadci.com/wp-content/uploads/2015/01/3.Engage-Banner.jpg" class="img-responsive wp-post-image" alt="3.Engage-Banner">
                  <div class="carousel-caption">
                    <div class="container">
                      <h2>We engage</h2>
                        <p class="lead"><strong>individuals and teams</strong> in the change and <strong>continuous improvement process</strong>
                        </p>
                    </div>
                  </div>
              </div>

              <div class="item">
                <img width="2130" height="840" src="http://leadci.com/wp-content/uploads/2015/01/4.Develop-Banner.jpg" class="img-responsive wp-post-image" alt="4.Develop-Banner">
                  <div class="carousel-caption">
                    <div class="container">
                      <h2>We develop</h2>
                        <p class="lead">your people’s <strong>Leadership, Management and Continuous Improvement Skills</strong> and Capabilities</p>
                    </div>
                  </div>
              </div>

              <div class="item active">
                <img width="2130" height="840" src="http://leadci.com/wp-content/uploads/2015/01/5.Deliver-Banner.jpg" class="img-responsive wp-post-image" alt="5.Deliver-Banner">
                  <div class="carousel-caption">
                    <div class="container">
                      <h2>We deliver</h2>
                        <p class="lead"><strong>results</strong> and build a <strong>continuous improvement culture</strong></p>
                    </div>
                  </div>
              </div>

            </div>

            <a class="left carousel-control" href="#carousel-main" data-slide="prev"><i class="fa fa-angle-left"></i></a><a class="right carousel-control" href="#carousel-main" data-slide="next"><i class="fa fa-angle-right"></i></a></div></div>

           <div id="our-company-mobile" style="display:none; text-align:center;">
           
              <h2 style="margin-top:35px;">Our Purpose</h2>
              <p>is to develop individuals and teams so they have the&nbsp;<strong>capabilities&nbsp;</strong>(abilities and willingness) to&nbsp;<strong>lead and manage change&nbsp;</strong>and&nbsp;<strong>continuous improvement&nbsp;</strong>in all aspects of business.</p>
              
              <h2 style="margin-top:35px;">We Identify</h2>
              <p><strong>opportunities, ideas and problems</strong> and work with you to <strong>quantify the possibilities</strong></p>
              
              <h2 style="margin-top:35px;">We Engage</h2>
              <p><strong>individuals and teams</strong> in the change and <strong>continuous improvement process</strong></p>
              
              <h2 style="margin-top:35px;">We Develop</h2>
              <p>your people’s <strong>Leadership, Management and Continuous Improvement Skills</strong> and Capabilities</p>
              
              <h2 style="margin-top:35px;">We Deliver</h2>
              <p style="margin-bottom:45px;"><strong>results</strong> and build a <strong>continuous improvement culture</strong></p>
           
           </div>						
       </div>
</div> <!-- .page-wrapper fullwdth-content -->
	





<?php get_footer(); ?>
