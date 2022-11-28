
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

                    

<p>If you have any questions or would like to arrange a tour, please contact our Head of Sixth Form, Miss Rachael Wright who will be happy to assist you.</p>
<p>Contact the Academy on 01934 742608 or email <a href="office@kowessex.co.uk">office@kowessex.co.uk</a></p>
<h2 class="mt-5 mb-4"><strong>Application Form</strong></h2>
                        <div class="form-container">

                            <form method="post" autocomplete="on" action="../wp-content/themes/kow22/form.php">

                            <div class="form-contents" >


                                
                                <label for="first-name" class="form-question">First name:</label>
                                <input type="text" id="first-name" name="first-name" required>                            

                                <label for="last-name" class="form-question">Last name:</label>
                                <input type="text" id="last-name" name="last-name" required>

                                <label for="email" class="form-question">Email:</label>
                                <input type="email" id="email" name="email" required>

                                <label for="tel" class="form-question">Phone number:</label>
                                <input type="tel" id="tel" name="tel" required>

                                <label for="Kings-student" class="form-question">Are you already studying at Kings?</label>
                                    
                                    <div class="kings-yes">
                                        <input type="radio" id="kings-yes" name="kings-student" value="Yes" required>
                                        <label for="kings-yes">Yes</label>
                                    </div>
                                    <div class="kings-no">
                                        <input type="radio" id="kings-no" name="kings-student" value="No">
                                        <label for="kings-no">No</label>
                                    </div>

                                <div id="external-applicants">    

                                    <label for="date-of-birth" class="form-question">Date of Birth:</label>
                                    <input type="date" id="datemax" name="date-of-birth"> 

                                    <label for="address-line1" class="form-question">Address:</label>
                                    <input type="text" id="address1" name="address-line1">

                                    <label for="address-line2" class="form-question">Town/City</label>
                                    <input type="text" id="address2" name="address-line2">

                                    <label for="address-line3" class="form-question">County</label>
                                    <input type="text" id="address3" name="address-line3">

                                    <label for="post-code" class="form-question">Postcode</label>
                                    <input type="text" id="post-code" name="post-code" >

                                    <label for="current-school" class="form-question">Current school:</label>
                                    <input type="text" id="current-school" name="current-school" >

                                    <label for="parent-name" class="form-question">Name of parent/gaurdian</label>
                                    <input type="text" id="parent-name" name="parent-name" >

                                    <label for="parent-phone" class="form-question">Parent/gaurdian contact number</label>
                                    <input type="text" id="parent-phone" name="parent-phone" >

                                    <label for="parent-email" class="form-question">Parent/gaurdian email address</label>
                                    <input type="text" id="parent-email" name="parent-email">

                                </div>


                                <div id="internal-applicants">

                                    <label for="tutor-group" class="form-question">Tutor group:</label>
                                    <input type="text" id="tutor-group" name="tutor-group">

                                </div>
                                    <h5 class="mb-2 mt-4"><strong>Subject Choices</strong></h5>
                                    <p class="mb-1">Please select in order of preference</p>
                                    <p>*BTEC Diploma and Cambridge Technical Level 3 qualifications are the equivalent to two A levels and will therefore take two options</p>
                                    <label for="subjects1" class="form-question">Subject choice 1</label>

                                    <select name="subjects1" id="subjects1" required>
                                        <option value="" selected disabled hidden>Please make a selection</option>
                                        <option value="Fine Art A Level" >Fine Art A Level</option>
                                        <option value="Biology  A Level" >Biology  A Level</option>
                                        <option value="Business Studies A Level" >Business Studies A Level</option>
                                        <option value="Chemistry A Level" >Chemistry A Level</option>
                                        <option value="Computer Science A Level" >Computer Science A Level</option>
                                        <option value="Design & Technology (PRODUCT DESIGN) A Level" >Design & Technology (PRODUCT DESIGN) A Level</option>
                                        <option value="Economics A Level" >Economics A Level</option>
                                        <option value="English Language A Level" >English Language A Level</option>
                                        <option value="English Literature A Level" >English Literature A Level</option>
                                        <option value="Film Studies A Level" >Film Studies A Level</option>
                                        <option value="French A Level" >French A Level</option>
                                        <option value="Geography A Level" >Geography A Level</option>
                                        <option value="German A Level" >German A Level</option>
                                        <option value="History A Level" >History A Level</option>
                                        <option value="Maths A Level" >Maths A Level</option>
                                        <option value="Further maths A Level" >Further maths A Level</option>
                                        <option value="Music A Level" >Music A Level</option>
                                        <option value="Photography A Level" >Photography A Level</option>
                                        <option value="Physical Education A Level" >Physical Education A Level</option>
                                        <option value="Physics A Level" >Physics A Level</option>
                                        <option value="Psychology A Level" >Psychology A Level</option>
                                        <option value="Religious Studies (Philosophy & Ethics) A Level" >Religious Studies (Philosophy & Ethics) A Level</option>
                                        <option value="Sociology A Level" >Sociology A Level</option>
                                        <option value="Textiles A Level" >Textiles A Level</option>
                                        <option value="Criminology - BTEC Level 3 Certificate (worth 1)" >Criminology - BTEC Level 3 Certificate (worth 1)</option>
                                        <option value="Performing Arts - BTEC Level 3 Certificate (worth 1)" >Performing Arts - BTEC Level 3 Certificate (worth 1)</option>
                                        <option value="Sport & Fitness Services - BTEC Level 3 National Certificate (worth 1)" >Sport & Fitness Services - BTEC Level 3 National Certificate (worth 1)</option>
                                        <option value="Applied Law - BTEC Level 3 National Diploma (worth 1)" >Applied Law - BTEC Level 3 National Diploma (worth 1)</option>
                                        <option value="Applied Science - BTEC Level 3 National Diploma (worth 2)" >Applied Science - BTEC Level 3 National Diploma (worth 2)</option>
                                        <option value="Business - BTEC Level 3 National Diploma (worth 2)" >Business - BTEC Level 3 National Diploma (worth 2)</option>
                                        <option value="IT in Digital Media - Level 3 Cambridge TECHNICAL Diploma (worth 2)" >IT in Digital Media - Level 3 Cambridge TECHNICAL Diploma (worth 2)</option>
                                        <option value="Sport and Fitness Services - BTEC Level 3 National Diploma (worth 2)" >Sport and Fitness Services - BTEC Level 3 National Diploma (worth 2)</option>
                                        <option value="Work Skills - Level 2 BTEC (Diploma or Extended Certificate) (worth 4)" >Work Skills - Level 2 BTEC (Diploma or Extended Certificate) (worth 4)</option>
                                        </select>

                                        <label for="subjects2" class="form-question">Subject choice 2</label>

                                        <select name="subjects2" id="subjects2" required>
                                            <option value="" selected disabled hidden>Please make a selection</option>
                                            <option value="Fine Art A Level" >Fine Art A Level</option>
                                            <option value="Biology  A Level" >Biology  A Level</option>
                                            <option value="Business Studies A Level" >Business Studies A Level</option>
                                            <option value="Chemistry A Level" >Chemistry A Level</option>
                                            <option value="Computer Science A Level" >Computer Science A Level</option>
                                            <option value="Design & Technology (PRODUCT DESIGN) A Level" >Design & Technology (PRODUCT DESIGN) A Level</option>
                                            <option value="Economics A Level" >Economics A Level</option>
                                            <option value="English Language A Level" >English Language A Level</option>
                                            <option value="English Literature A Level" >English Literature A Level</option>
                                            <option value="Film Studies A Level" >Film Studies A Level</option>
                                            <option value="French A Level" >French A Level</option>
                                            <option value="Geography A Level" >Geography A Level</option>
                                            <option value="German A Level" >German A Level</option>
                                            <option value="History A Level" >History A Level</option>
                                            <option value="Maths A Level" >Maths A Level</option>
                                            <option value="Further maths A Level" >Further maths A Level</option>
                                            <option value="Music A Level" >Music A Level</option>
                                            <option value="Photography A Level" >Photography A Level</option>
                                            <option value="Physical Education A Level" >Physical Education A Level</option>
                                            <option value="Physics A Level" >Physics A Level</option>
                                            <option value="Psychology A Level" >Psychology A Level</option>
                                            <option value="Religious Studies (Philosophy & Ethics) A Level" >Religious Studies (Philosophy & Ethics) A Level</option>
                                            <option value="Sociology A Level" >Sociology A Level</option>
                                            <option value="Textiles A Level" >Textiles A Level</option>
                                            <option value="Criminology - BTEC Level 3 Certificate (worth 1)" >Criminology - BTEC Level 3 Certificate (worth 1)</option>
                                            <option value="Performing Arts - BTEC Level 3 Certificate (worth 1)" >Performing Arts - BTEC Level 3 Certificate (worth 1)</option>
                                            <option value="Sport & Fitness Services - BTEC Level 3 National Certificate (worth 1)" >Sport & Fitness Services - BTEC Level 3 National Certificate (worth 1)</option>
                                            <option value="Applied Law - BTEC Level 3 National Diploma (worth 1)" >Applied Law - BTEC Level 3 National Diploma (worth 1)</option>
                                            <option value="Applied Science - BTEC Level 3 National Diploma (worth 2)" >Applied Science - BTEC Level 3 National Diploma (worth 2)</option>
                                            <option value="Business - BTEC Level 3 National Diploma (worth 2)" >Business - BTEC Level 3 National Diploma (worth 2)</option>
                                            <option value="IT in Digital Media - Level 3 Cambridge TECHNICAL Diploma (worth 2)" >IT in Digital Media - Level 3 Cambridge TECHNICAL Diploma (worth 2)</option>
                                            <option value="Sport and Fitness Services - BTEC Level 3 National Diploma (worth 2)" >Sport and Fitness Services - BTEC Level 3 National Diploma (worth 2)</option>
                                            <option value="Work Skills - Level 2 BTEC (Diploma or Extended Certificate) (worth 4)" >Work Skills - Level 2 BTEC (Diploma or Extended Certificate) (worth 4)</option>
                                        </select>

                                        <label for="subjects3" class="form-question">Subject choice 3</label>

                                            <select name="subjects3" id="subjects3" required>
                                                <option value="" selected disabled hidden>Please make a selection</option>
                                                <option value="Fine Art A Level" >Fine Art A Level</option>
                                                <option value="Biology  A Level" >Biology  A Level</option>
                                                <option value="Business Studies A Level" >Business Studies A Level</option>
                                                <option value="Chemistry A Level" >Chemistry A Level</option>
                                                <option value="Computer Science A Level" >Computer Science A Level</option>
                                                <option value="Design & Technology (PRODUCT DESIGN) A Level" >Design & Technology (PRODUCT DESIGN) A Level</option>
                                                <option value="Economics A Level" >Economics A Level</option>
                                                <option value="English Language A Level" >English Language A Level</option>
                                                <option value="English Literature A Level" >English Literature A Level</option>
                                                <option value="Film Studies A Level" >Film Studies A Level</option>
                                                <option value="French A Level" >French A Level</option>
                                                <option value="Geography A Level" >Geography A Level</option>
                                                <option value="German A Level" >German A Level</option>
                                                <option value="History A Level" >History A Level</option>
                                                <option value="Maths A Level" >Maths A Level</option>
                                                <option value="Further maths A Level" >Further maths A Level</option>
                                                <option value="Music A Level" >Music A Level</option>
                                                <option value="Photography A Level" >Photography A Level</option>
                                                <option value="Physical Education A Level" >Physical Education A Level</option>
                                                <option value="Physics A Level" >Physics A Level</option>
                                                <option value="Psychology A Level" >Psychology A Level</option>
                                                <option value="Religious Studies (Philosophy & Ethics) A Level" >Religious Studies (Philosophy & Ethics) A Level</option>
                                                <option value="Sociology A Level" >Sociology A Level</option>
                                                <option value="Textiles A Level" >Textiles A Level</option>
                                                <option value="Criminology - BTEC Level 3 Certificate (worth 1)" >Criminology - BTEC Level 3 Certificate (worth 1)</option>
                                                <option value="Performing Arts - BTEC Level 3 Certificate (worth 1)" >Performing Arts - BTEC Level 3 Certificate (worth 1)</option>
                                                <option value="Sport & Fitness Services - BTEC Level 3 National Certificate (worth 1)" >Sport & Fitness Services - BTEC Level 3 National Certificate (worth 1)</option>
                                                <option value="Applied Law - BTEC Level 3 National Diploma (worth 1)" >Applied Law - BTEC Level 3 National Diploma (worth 1)</option>
                                                <option value="Applied Science - BTEC Level 3 National Diploma (worth 2)" >Applied Science - BTEC Level 3 National Diploma (worth 2)</option>
                                                <option value="Business - BTEC Level 3 National Diploma (worth 2)" >Business - BTEC Level 3 National Diploma (worth 2)</option>
                                                <option value="IT in Digital Media - Level 3 Cambridge TECHNICAL Diploma (worth 2)" >IT in Digital Media - Level 3 Cambridge TECHNICAL Diploma (worth 2)</option>
                                                <option value="Sport and Fitness Services - BTEC Level 3 National Diploma (worth 2)" >Sport and Fitness Services - BTEC Level 3 National Diploma (worth 2)</option>
                                                <option value="Work Skills - Level 2 BTEC (Diploma or Extended Certificate) (worth 4)" >Work Skills - Level 2 BTEC (Diploma or Extended Certificate) (worth 4)</option>
                                        </select>

                                        <label for="subjects4" class="form-question">Subject choice 4/Reserve choice</label>

                                            <select name="subjects4" id="subjects4" required>
                                                <option value="" selected disabled hidden>Please make a selection</option>
                                                <option value="Fine Art A Level" >Fine Art A Level</option>
                                                <option value="Biology  A Level" >Biology  A Level</option>
                                                <option value="Business Studies A Level" >Business Studies A Level</option>
                                                <option value="Chemistry A Level" >Chemistry A Level</option>
                                                <option value="Computer Science A Level" >Computer Science A Level</option>
                                                <option value="Design & Technology (PRODUCT DESIGN) A Level" >Design & Technology (PRODUCT DESIGN) A Level</option>
                                                <option value="Economics A Level" >Economics A Level</option>
                                                <option value="English Language A Level" >English Language A Level</option>
                                                <option value="English Literature A Level" >English Literature A Level</option>
                                                <option value="Film Studies A Level" >Film Studies A Level</option>
                                                <option value="French A Level" >French A Level</option>
                                                <option value="Geography A Level" >Geography A Level</option>
                                                <option value="German A Level" >German A Level</option>
                                                <option value="History A Level" >History A Level</option>
                                                <option value="Maths A Level" >Maths A Level</option>
                                                <option value="Further maths A Level" >Further maths A Level</option>
                                                <option value="Music A Level" >Music A Level</option>
                                                <option value="Photography A Level" >Photography A Level</option>
                                                <option value="Physical Education A Level" >Physical Education A Level</option>
                                                <option value="Physics A Level" >Physics A Level</option>
                                                <option value="Psychology A Level" >Psychology A Level</option>
                                                <option value="Religious Studies (Philosophy & Ethics) A Level" >Religious Studies (Philosophy & Ethics) A Level</option>
                                                <option value="Sociology A Level" >Sociology A Level</option>
                                                <option value="Textiles A Level" >Textiles A Level</option>
                                                <option value="Criminology - BTEC Level 3 Certificate (worth 1)" >Criminology - BTEC Level 3 Certificate (worth 1)</option>
                                                <option value="Performing Arts - BTEC Level 3 Certificate (worth 1)" >Performing Arts - BTEC Level 3 Certificate (worth 1)</option>
                                                <option value="Sport & Fitness Services - BTEC Level 3 National Certificate (worth 1)" >Sport & Fitness Services - BTEC Level 3 National Certificate (worth 1)</option>
                                                <option value="Applied Law - BTEC Level 3 National Diploma (worth 1)" >Applied Law - BTEC Level 3 National Diploma (worth 1)</option>
                                                <option value="Applied Science - BTEC Level 3 National Diploma (worth 2)" >Applied Science - BTEC Level 3 National Diploma (worth 2)</option>
                                                <option value="Business - BTEC Level 3 National Diploma (worth 2)" >Business - BTEC Level 3 National Diploma (worth 2)</option>
                                                <option value="IT in Digital Media - Level 3 Cambridge TECHNICAL Diploma (worth 2)" >IT in Digital Media - Level 3 Cambridge TECHNICAL Diploma (worth 2)</option>
                                                <option value="Sport and Fitness Services - BTEC Level 3 National Diploma (worth 2)" >Sport and Fitness Services - BTEC Level 3 National Diploma (worth 2)</option>
                                                <option value="Work Skills - Level 2 BTEC (Diploma or Extended Certificate) (worth 4)" >Work Skills - Level 2 BTEC (Diploma or Extended Certificate) (worth 4)</option>
                                        </select>

                                        <label for="comments" class="mt-4">Please add any further information about your choices</label>

                                        <textarea rows="4" cols="50" name="comments"></textarea>



                                        <label for="epq" class="form-question mt-4">Would you be interested in studying an EPQ alongside your choices?</label>
                                        
                                        <div class="epq-yes">
                                            <input type="radio" id="html" name="epq" value="Yes" required>
                                            <label for="yes">Yes</label>
                                        </div>
                                        <div class="epq-no">
                                            <input type="radio" id="css" name="epq" value="No">
                                            <label for="no">No</label>
                                        </div>

                                        <label for="lv3-maths" class="form-question">Would you be interested in studying a Core Maths Level 3 qualification alongside your choices?</label>
                                        
                                        <div class="core-maths-yes">
                                            <input type="radio" id="html" name="lv3-maths" value="Yes" required>
                                            <label for="yes">Yes</label>
                                        </div>
                                        <div class="core-maths-no">
                                            <input type="radio" id="css" name="lv3-maths" value="No">
                                            <label for="no">No</label>
                                        </div>

                                        <input id="form-submit" type="submit" value="Submit" name="submit">


                                </div>
                    
                            </form>
                        </div>





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