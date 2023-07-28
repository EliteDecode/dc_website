<?php  
include('includes/header.php')

?>

<!-- Slider Area Start-->
<div class="services-area" style="margin-top: -10%">
    <div class="container">
        <!-- Section-tittle -->
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
                <div class="section-tittle text-center mb-80">
                    <h2>Contact Us​</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Slider Area End-->

<!-- ================ contact section start ================= -->
<section class="contact-section">
    <div class="container">

        <div class="row">
            <div class="col-12">
                <h2 class="contact-title">Get in Touch</h2>
            </div>
            <div class="col-lg-8">
                <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm"
                    novalidate="novalidate">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'"
                                    placeholder=" Enter Message"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control valid" name="name" id="name" type="text"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'"
                                    placeholder="Enter your name" />
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control valid" name="email" id="email" type="email"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'"
                                    placeholder="Email" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control" name="subject" id="subject" type="text"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'"
                                    placeholder="Enter Subject" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="button button-contactForm boxed-btn">
                            Send
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 offset-lg-1">
                <!-- <div class="media contact-info">
              <span class="contact-info__icon"><i class="ti-home"></i></span>
              <div class="media-body">
                <h3>Buttonwood, California.</h3>
                <p>Rosemead, CA 91770</p>
              </div>
            </div> -->
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                    <div class="media-body">
                        <h3>+2349121902398</h3>
                        <p>Mon to Fri 9am to 6pm</p>
                    </div>
                </div>
                <!-- <div class="media contact-info">
              <span class="contact-info__icon"><i class="ti-email"></i></span>
              <div class="media-body">
                <h3>support@colorlib.com</h3>
                <p>Send us your query anytime!</p>
              </div>
            </div> -->
            </div>
        </div>
    </div>
</section>
<!-- ================ contact section end ================= -->


<?php  
include('includes/footer.php')
?>