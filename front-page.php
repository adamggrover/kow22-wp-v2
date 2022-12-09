<?php
    get_header();
?>
 
    

        
<!-- New welcome section-->
    <section id="welcome">

        <div class="welcome-background pt-4 pb-4">


            <div class="container d-lg-none ">
              <div class="row mt-5 pt-2">
                <div data-aos="fade-up" data-aos-delay="200" data-aos-duration='800' >
                          <div>
                                  <h3 CLASS="h2">WELCOME</h3>
                              <h4 class="mt-2">TO KINGS OF WESSEX ACADEMY</h4>
                              <p class="mt-4 mb-4">"We are delighted that you wish to find out about our school – a place that we consider to be a fantastic community to work and to learn. By ensuring your child’s happiness remains our first priority, we know they will go onto achieve their full potential here with us."</p>
                              <a href="" class="">READ MORE</a>
                          </div>
                  </div>   

              </div>
            </div>

        

            <div class="container d-none d-lg-block">

                

                <div class="row p-5">

                    <div class="col-lg-6 d-flex align-items-center pt-5" data-aos="fade-up" data-aos-delay="200" data-aos-duration='800' >
                        <div class="left-welcome-content col-10 p-0">
                                <h3 CLASS="h2">WELCOME</h3>
                            <h4 class="mt-2">TO KINGS OF WESSEX ACADEMY</h4>
                            <p class="mt-4 mb-4">"I am delighted to welcome you to The Kings of Wessex Academy – one of the top performing schools in the country.</p>
                            <p>Kings is a high achieving 13-18 years school. Exam results are consistently high year-on-year, with students making outstanding progress from Key Stage 2 to 4, and after the Sixth Form many students go on to top universities"</p>
                            <a href="<?php
                            $page_object = get_page_by_path( '/headteachers-welcome' );
                            $page_id = $page_object->ID;
                            $permalink = get_permalink( $page_id );
                            echo $permalink;
                            ?>">READ MORE</a>
                        </div>
                    </div>   
                    <div class="welcome-right-background col-lg-6 pt-5">
                        
                        <div class="welcome-img-container" data-aos="fade-left" data-aos-delay="600" data-aos-duration='800'>
                            <img src="wp-content/themes/kow22/Assets/images/900px/teacher-and-child.jpg" alt="Teacher explaining something to two children" class="img-fluid welcome-img">
                        </div>
                        
        
                    </div>

                </div>  


            </div>

        </div>
              

        <!-- New links section-->

        <div class="container p-5">
            <div class="row mb-5">

            <div class="col-sm-3 p-2">
                
                
          
                <div class="img-container img-link-3" style="position: relative;
                width: 100%;" data-aos="fade-up" data-aos-delay="200">
      
      
                  <a href="<?php
                            $page_object = get_page_by_path( '/safeguarding-at-kings' );
                            $page_id = $page_object->ID;
                            $permalink = get_permalink( $page_id );
                            echo $permalink;
                            ?>">
                  <div class="mask" style="  position: absolute;
                  background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(20, 20, 20, 0.3));
                  top: 0;
                  bottom: 0;
                  left: 0;
                  right: 0;
                  height: 100%;
                  width: 100%;"></div>    
                  
                  <img src="wp-content/themes/kow22/Assets/images/600px/violin.jpg" alt="Avatar" class="image" style="width: 100%;
                  max-height: 200px;
                  object-fit:cover;">
                  <div class="text h6" style="  color: white;
                  
                  position: absolute;
                  left: 50%;
                  bottom: 0;
                  -webkit-transform: translate(-50%, -50%);
                  -ms-transform: translate(-50%, -50%);
                  transform: translate(-50%, -50%);
                  text-align: center;">Safeguarding</div>
      
                  <div class="overlay" 
                  onMouseOver="this.style.opacity='1'"
                  onMouseOut="this.style.opacity='0'"
                  style="  position: absolute;
                  opacity: 0;
                  top: 0;
                  bottom: 0;
                  left: 0;
                  right: 0;
                  height: 100%;
                  width: 100%;
                  
                  transition: .5s ease;
                  background-color: rgba(192, 214, 48, 0.85);">
                  
                    <div class="text h6" style="  color: white;
                    
                    position: absolute;
                    left: 50%;
                    bottom: 0;
                    -webkit-transform: translate(-50%, -50%);
                    -ms-transform: translate(-50%, -50%);
                    transform: translate(-50%, -50%);
                    text-align: center;">Safeguarding</div>
                  </div>
                </div>
              </a>
               </div>
              
         

         <div class="col-sm-3 p-2">
                
                
          
            <div class="img-container img-link-2" style="position: relative;
            width: 100%;" data-aos="fade-up" data-aos-delay="600">
  
  
              <a href="https://kow.fireflycloud.net/login/login.aspx?prelogin=https%3a%2f%2fkow.fireflycloud.net%2f" target="_blank">
              <div class="mask" style="  position: absolute;
              background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(20, 20, 20, 0.3));
              top: 0;
              bottom: 0;
              left: 0;
              right: 0;
              height: 100%;
              width: 100%;"></div>    
              
              <img src="wp-content/themes/kow22/Assets/images/600px/microsope.jpg" alt="Avatar" class="image" style="width: 100%;
              max-height: 200px;
              object-fit:cover;">
              <div class="text h6" style="  color: white;
              
              position: absolute;
              left: 50%;
              bottom: 0;
              -webkit-transform: translate(-50%, -50%);
              -ms-transform: translate(-50%, -50%);
              transform: translate(-50%, -50%);
              text-align: center;">Firefly</div>
  
              <div class="overlay" 
              onMouseOver="this.style.opacity='1'"
              onMouseOut="this.style.opacity='0'"
              style="  position: absolute;
              opacity: 0;
              top: 0;
              bottom: 0;
              left: 0;
              right: 0;
              height: 100%;
              width: 100%;
              
              transition: .5s ease;
              background-color: rgba(192, 214, 48, 0.85);">
              
                <div class="text h6" style="  color: white;
                
                position: absolute;
                left: 50%;
                bottom: 0;
                -webkit-transform: translate(-50%, -50%);
                -ms-transform: translate(-50%, -50%);
                transform: translate(-50%, -50%);
                text-align: center;">Firefly</div>
              </div>
            </div>
          </a>
           </div>

           <div class="col-sm-3 p-2">
                
                
          
          <div class="img-container img-link-1" style="position: relative;
          width: 100%;" data-aos="fade-up" data-aos-delay="700">


            <a href="<?php
                        $page_object = get_page_by_path( '/online-payments' );
                        $page_id = $page_object->ID;
                        $permalink = get_permalink( $page_id );
                        echo $permalink;
                        ?>">
            <div class="mask" style="  position: absolute;
            background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(20, 20, 20, 0.3));
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            height: 100%;
            width: 100%;"></div>    
            
            <img src="wp-content/themes/kow22/Assets/images/600px/hockey-church.jpg" alt="Avatar" class="image" style="width: 100%;
            max-height: 200px;
            object-fit:cover;">
            <div class="text h6" style="  color: white;
            
            position: absolute;
            left: 50%;
            bottom: 0;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            text-align: center;">Payments</div>

            <div class="overlay" 
            onMouseOver="this.style.opacity='1'"
            onMouseOut="this.style.opacity='0'"
            style="  position: absolute;
            opacity: 0;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            height: 100%;
            width: 100%;
            
            transition: .5s ease;
            background-color: rgba(192, 214, 48, 0.85);">
            
              <div class="text h6" style="  color: white;
              
              position: absolute;
              left: 50%;
              bottom: 0;
              -webkit-transform: translate(-50%, -50%);
              -ms-transform: translate(-50%, -50%);
              transform: translate(-50%, -50%);
              text-align: center;">Payments</div>
            </div>
          </div>
        </a>
         </div>
           

           <div class="col-sm-3 p-2">
                
                
          
            <div class="img-container img-link-4" style="position: relative;
            width: 100%;" data-aos="fade-up" data-aos-delay="800">
  
  
              <a href="<?php
                        $page_object = get_page_by_path( '/welcome-to-kings-sixth' );
                        $page_id = $page_object->ID;
                        $permalink = get_permalink( $page_id );
                        echo $permalink;
                        ?>">
              <div class="mask" style="  position: absolute;
              background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(20, 20, 20, 0.3));
              top: 0;
              bottom: 0;
              left: 0;
              right: 0;
              height: 100%;
              width: 100%;"></div>    
              
              <img src="wp-content/themes/kow22/Assets/images/600px/sixth-formers.jpg" alt="Avatar" class="image" style="width: 100%;
              max-height: 200px;
              object-fit:cover;">
              <div class="text h6" style="  color: white;
              
              position: absolute;
              left: 50%;
              bottom: 0;
              -webkit-transform: translate(-50%, -50%);
              -ms-transform: translate(-50%, -50%);
              transform: translate(-50%, -50%);
              text-align: center;">Kings Sixth</div>
  
              <div class="overlay" 
              onMouseOver="this.style.opacity='1'"
              onMouseOut="this.style.opacity='0'"
              style="  position: absolute;
              opacity: 0;
              top: 0;
              bottom: 0;
              left: 0;
              right: 0;
              height: 100%;
              width: 100%;
              
              transition: .5s ease;
              background-color: rgba(192, 214, 48, 0.85);">
              
                <div class="text h6" style="  color: white;
                
                position: absolute;
                left: 50%;
                bottom: 0;
                -webkit-transform: translate(-50%, -50%);
                -ms-transform: translate(-50%, -50%);
                transform: translate(-50%, -50%);
                text-align: center;">Kings Sixth</div>
              </div>
            </div>
          </a>
           </div>
            
          

            
              

              
            </div>
            
          </div>


          

            
         
              
      </section>





        <!--NEWS LINKS SECTION-->

        <section id="news container">

            <div class="section-headings text-center row">
                <h2 class="mt-5 mb-3 section-title">Latest News</h2>
                <a href="<?php
                        $page_object = get_page_by_path( '/news' );
                        $page_id = $page_object->ID;
                        $permalink = get_permalink( $page_id );
                        echo $permalink;
                        ?>" class="mb-3 section-link">VIEW ALL NEWS</a>
            </div> 

            <div class="container mb-0 ps-5 pe-5">
                
                
                <div class="row row-cols-1 row-cols-md-3 g-4 mb-5 mt-2" data-aos="fade-up" data-aos-delay="100">

                     


                  <?php
                    $newsPosts = new WP_Query( array( 'pagename' => 'news', 'posts_per_page' => '3' ) );
                    

                    while ($newsPosts->have_posts()) : $newsPosts->the_post(); ?>

                    
                      <div class="col d-flex align-items-stretch">
                          
                          <div id="#news-card-container">
                          
                              <div class="card h-100 news-card">
                                
                                
                                  <div class="news-card-content">
                                  <a class="news-card-link" href="<?php the_permalink();?>">
                                    <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top" alt="...">
                                  
                                    <div class="card-body" id ="news-card-body">
                                      <!--<h6 class=""><?php the_tags('',' | ');?></h6>-->
                                      <h5 class="news-card-title"><?php the_title();?></h5>
                                      <div class="card-body-text">
                                        <p><?php the_excerpt();?></p>
                                        
                                        <p class="card-link-text news-card-date"><small><?php the_date(); ?></small></p>
                                      </div>
                                    </div>
                                    
                                  </div>
                                  
                            
                            
                              </a>
                            <div class="news-overlay"></div>
                            
                          </div>
                          
                        </div>
                        
                          
                        </div>
                    <?php endwhile; ?>

                    









</div>
            

            
            </div>

    </section>

    

        <!--CALENDAR SECTION
        <section id="calendar-section">

            <div class="section-headings mb-5 text-center">
                <h2 class="section-title">Calendar</h2>
                <a class ="section-link" href="">VIEW FULL CALENDAR</a>
            </div>

            <div class="calendar-card-group justify-content-center row">

                <div class="calendar-card card col-sm-6 shadow" data-aos="fade-up" data-aos-delay="100">
                  
                  <div class="card-body text-center mt-5">
                        <h5 class="card-title h1 calendar-date">25</h5>
                        <p class="card-text calendar-month fw-bold">SEPT</p>
                        <p class="card-text calendar-event fw-bold">GCSE Results Day</p>
                        <p class="card-text calendar-time mt-5"><small>1800-1930</small></p>
                  </div>
                </div>

                <div class="calendar-card card col-sm-6 shadow" data-aos="fade-up" data-aos-delay="200">

                    <div class="card-body text-center mt-5">
                        <h5 class="card-title h1 calendar-date">25</h5>
                        <p class="card-text calendar-month fw-bold">JAN</p>
                        <p class="card-text calendar-event fw-bold">GCSE Results Day</p>
                        <p class="card-text calendar-time mt-5"><small>1800-1930</small></p>
                    </div>
                  
                  
                </div>
            </div>


        </section>

    -->

    <?php
    get_footer();
    ?>


