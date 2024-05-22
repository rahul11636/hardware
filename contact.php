<?php include('header.php'); ?>
        <main>
            
            <!-- breadcrumb-area -->
            <section class="breadcrumb-area d-flex align-items-center" style="background-image:url(img/bg/bdrc-bg.jpg)">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-lg-12">
                            <div class="breadcrumb-wrap text-center">
                                <div class="breadcrumb-title">
                                    <h2>Contact Us</h2>    
                                    <div class="breadcrumb-wrap">
                              
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">About</li>
                                    </ol>
                                </nav>
                            </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->	
            <!-- contact-area -->
            <section id="contact" class="contact-area after-none contact-bg pt-120 pb-120 p-relative fix">
                <div class="container">
             
					<div class="row justify-content-center align-items-center">
						
                         <div class="col-lg-4 order-1">
                             
                            <div class="contact-info">
                                  <div class="single-cta pb-30 mb-30 wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                                        <div class="f-cta-icon">
                                            <i class="far fa-map"></i>
                                        </div>
                                        <h5>Office Address</h5>
                                        <p>Noida sector 65 Noida UP</p>
                                    </div>
                                     <div class="single-cta pb-30 mb-30 wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                                        <div class="f-cta-icon">
                                            <i class="far fa-clock"></i>
                                        </div>
                                        <h5>Working Hours</h5>
                                        <p>Monday to Friday 09:00 to 18:30 <br> 
                                            Saturday 15:30</p>
                                    </div>
                                     <div class="single-cta wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                                        <div class="f-cta-icon">
                                            <i class="far fa-envelope-open"></i>
                                        </div>
                                        <h5>Message Us</h5>
                                        <p> <a href="#">support@example.com</a><br><a href="#">info@example.com</a></p>
                                    </div>
                                </div>							
                        </div>
                        <div class="col-lg-8 order-2">
                            <div class="contact-bg02">
                                <div class="section-title center-align mb-40 text-center wow fadeInDown animated" data-animation="fadeInDown" data-delay=".4s">
                                <h2>
                                  Get In Touch
                                </h2>
                                </div>                               
                                <form action="#" method="post" class="contact-form mt-30">
                                    <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="contact-field p-relative c-name mb-20">                                    
                                            <input type="text" id="firstn" name="firstn" placeholder="First Name" required>
                                        </div>                               
                                    </div>

                                    <div class="col-lg-6 col-md-6">                               
                                        <div class="contact-field p-relative c-subject mb-20">                                   
                                            <input type="text" id="email" name="email" placeholder="Eamil" required>
                                        </div>
                                    </div>		
                                    <div class="col-lg-6 col-md-6">                               
                                        <div class="contact-field p-relative c-subject mb-20">                                   
                                            <input type="text" id="phone" name="phone" placeholder="Phone No." required>
                                        </div>
                                    </div>	
                                    <div class="col-lg-6 col-md-6">                               
                                        <div class="contact-field p-relative c-subject mb-20">                                   
                                            <input type="text" id="subject" name="subject" placeholder="Subject">
                                        </div>
                                    </div>	
                                    <div class="col-lg-12">
                                        <div class="contact-field p-relative c-message mb-30">                                  
                                            <textarea name="message" id="message" cols="30" rows="10" placeholder="Write comments"></textarea>
                                        </div>
                                        <div class="slider-btn">                                          
                                                    <button class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s"><span>Submit Now</span></button>				
                                                </div>                             
                                    </div>
                                    </div>
                            </form>                            
                            </div>    
                        
						</div>
					</div>
                    
                </div>
               
            </section>

            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="..." alt="Card image cap">
                 <div class="card-body">
                 <h5 class="card-title">Card title</h5>
                </div>
            </div>
            <!-- contact-area-end -->
          <!-- newslater-area -->
            <section class="newslater-area p-relative pt-120 pb-120" style="background-color: #f7f5f1;">
                <div class="animations-01"><img src="img/bg/an-img-07.png" alt="contact-bg-an-05"></div>
                <div class="container">
                    <div class="row justify-content-center align-items-center text-center">
                        <div class="col-xl-9 col-lg-9">
                            <div class="section-title center-align mb-40 text-center wow fadeInDown animated" data-animation="fadeInDown" data-delay=".4s">
                                 <h5>Newsletter</h5>
                                <h2>
                                    Get Best Offers On The Hotel
                                </h2>
                                <p>With the subscription, enjoy your favourite Hotels without having to think about it</p>
                            </div>
                            <form name="ajax-form" id="contact-form4" action="#" method="post" class="contact-form newslater">
                               <div class="form-group">
                                  <input class="form-control" id="email3" name="email" type="email" placeholder="Your Email Address" value="" required=""> 
                                  <button type="submit" class="btn btn-custom" id="send2">Subscribe Now</button>
                               </div>
                               <!-- /Form-email -->	
                            </form>
                        </div>
                       
                    </div>
                   
                </div>
            </section>
            <!-- newslater-aread-end -->
             
        </main>
        <!-- main-area-end -->
        <?php include('footer.php'); ?>