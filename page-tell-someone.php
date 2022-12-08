
<?php
    
    get_header();




?>


<div class="container" id="main-page-area" data-aos="fade-up" data-aos-delay="200" data-aos-duration='800' >
            <div class="content-header row">
                <div class="content-header-breadcrumb-wrapper col-lg-5 col-md-12">
                    <i class="fa-solid fa-house fa-xl"></i><span class="breadcrumb-spacer"></span>
                    <h6 class="mb-0 content-header-breadcrumb-links"><?php if( function_exists( 'aioseo_breadcrumbs' ) ) aioseo_breadcrumbs(); ?></h6>
                    

                </div>
                <div class="content-header-social col-lg-4 col-md-12">
                    <h6 class="mb-0">Share This Page</h6><span class="breadcrumb-spacer"></span>
                    <div class="content-area-social-links">
                        <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" target="_blank" data-show-count="false"><i class="fa-brands fa-twitter ps-2 fa-xl"></i></a>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=example.org" target="_blank"><i class="fa-brands fa-facebook-f ps-2 fa-xl"></i></a>
                        <a href="mailto:office@kowessex.co.uk"><i class="fa-solid fa-envelope ps-2 fa-xl"></i></a>   

                    </div>
                    
                    
                </div>
            </div>
            <div class="content-area row" >
                <div class="col-lg-9 content-column">
                    
                    <h1 id="content-h1"><?php the_title(); ?></h1>

                    <div class="content-body">

                    

<p>Sometimes a student may find it difficult to talk to an adult when it comes to personal situations. If you want to report a concern about yourself or anyone around you, you can use the form below.</p>
<p>A concern may be connected with bullying, emotional, sexual or physical abuse, ‘sexting’, etc, please don’t ‘wait to see what happens’ </p>


<p>Fill out all the bits you can - don’t worry if it doesn’t all apply, the important thing is that you Tell Someone!</p>
<p>You can also email us at <a href="tellsomeone@kowessex.co.uk">tellsomeone@kowessex.co.uk</a></p>

                        <div class="form-container">

                            <form method="post" autocomplete="on" action="../wp-content/themes/kow22/form-tell-someone.php">

                            <div class="form-contents" >


                                
                                <label for="first-name" class="form-question">First name:</label>
                                <input type="text" id="first-name" name="first-name" required>                            

                                <label for="last-name" class="form-question">Last name:</label>
                                <input type="text" id="last-name" name="last-name" required>

                                <label for="tutor-group" class="form-question">Tutor group:</label>
                                <input type="text" id="tutor-group" name="tutor-group">

                                <label for="date" class="form-question">Date of incident:</label>
                                <input type="date" id="datemax" name="date"> 

                                <label for="time" class="form-question">Time of incident:</label>
                                <input type="time" id="time" name="time">

                                <label for="place" class="form-question">Location of incident:</label>

                                <textarea rows="1" cols="50" name="place"></textarea>

                                <label for="detail" class="form-question">Detail:</label>

                                <textarea rows="8" cols="50" name="detail"></textarea>

                                <!--<label for="evidence" class="mt-4 mb-2 form-question">Please upload any supporting evidence if you have any</label>

                                <input type="hidden" name="MAX_FILE_SIZE" value="100000"><input name="userfile" type="file"> -->


                                

                                <input id="form-submit" type="submit" value="Submit" name="submit">


                                </div>
                    
                            </form>
                        </div>



                        <?php
                        if (have_posts()):
                        while (have_posts()) : the_post();
                            the_content();
                        endwhile;
                        else:
                        echo '<p>Sorry, no posts matched your criteria.</p>';
                        endif;
                        ?>



                    </div>
                </div>





                <div class="col-lg-3" id="sidebar-section-nav-col" data-aos="fade-up" data-aos-delay="600" data-aos-duration='800'>
                    <div id="sidebar-container-nav">
                        <div id="SideNav">

                                <h5 class="sidenav-heading">In This Section</h5>

                                <?php if ( is_active_sidebar( 'sidenav-menu' ) ) : ?>
                                    <div id="sidenav-menu-bellows" class="sidenav-menu">
                                    <?php dynamic_sidebar( 'sidenav-menu' ); ?>
                                    </div>
                                <?php endif; ?>
                        	
                    
    
                              </div>
                            </div>
                          </div>

                    </div>

                </div>
      
            </div>
        </div>
       




<?php
    get_footer();
    ?>