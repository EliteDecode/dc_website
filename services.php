<?php  
include('includes/header.php')

?>

<style>
.merchants {
    background: url("./assets/img/hero/mer4.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: 0px 0px;
    background-color: rgba(0, 0, 0, 0.45);
    background-blend-mode: overlay;
    margin: 0% 0%;
    padding: 4%;
}

.customers {
    background: url("./assets/img/hero/recievepackag1.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: 0px 0px;
    background-color: rgba(0, 0, 0, 0.45);
    background-blend-mode: overlay;
    padding: 4%;
}

.logistics {
    background: url("./assets/img/hero/guyphone.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: 0px 0px;
    background-color: rgba(0, 0, 0, 0.45);
    background-blend-mode: overlay;
    padding: 4%;
}

.footer_logo a img {
    width: 35%;
    margin-bottom: 5%;
}

@media (min-width: 0px) and (max-width: 767px) {
    .footer_logo a img {
        width: 18% !important;
    }

    .logistics {
        background: url("./assets/img/hero/guyphone.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        background-position: -1500px 0px;
        background-color: rgba(0, 0, 0, 0.45);
        background-blend-mode: overlay;
        padding: 1% !important;
    }

    .merchants {
        background: url("./assets/img/hero/mer4.jpg");
        background-size: cover !important;
        background-repeat: no-repeat;
        background-position: -1770px 0px !important;
        background-color: rgba(0, 0, 0, 0.45);
        background-blend-mode: overlay;
        margin: 0% 0%;
        padding: 1% !important;
    }

    .customers {
        background: url("./assets/img/hero/recievepackag1.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        background-position: -1700px -0px !important;
        background-color: rgba(0, 0, 0, 0.45);
        background-blend-mode: overlay;
        padding: 1% !important;
    }
}

.logo a img {
    width: 55%;
}

@media (min-width: 0px) and (max-width: 767px) {
    .logo a img {
        width: 18% !important;
    }
}
</style>
<main>
    <!-- Services Area Start -->
    <section class="service-area services-padding" style="margin-top: -15%">
        <div class="customers">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section-tittle">
                            <h2 style="color: #fff; font-size: 45px" class="pt-5">
                                For Customers who love reliable services
                            </h2>
                        </div>
                    </div>
                </div>
                <!-- Section caption -->
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="services-caption text-center" style="
                    background-color: rgba(255, 255, 255, 0);
                    border: 2px solid rgba(255, 255, 255, 0);
                  ">
                            <div class="service-icon">
                                <span class="flaticon-businessman" style="
                        background: rgb(46, 49, 146);
                        background: linear-gradient(
                          90deg,
                          rgba(46, 49, 146, 1) 0%,
                          rgba(110, 78, 140, 1) 100%
                        );
                      "></span>
                            </div>
                            <div class="service-cap">
                                <h4><a href="#" style="color: #fff">Tracking</a></h4>
                                <p style="color: #fff" class="w-100">
                                    Track the movement of your packages from the point of
                                    shipment until point of delivery.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="services-caption active text-center" style="
                    background-color: rgba(255, 255, 255, 0);
                    border: 2px solid rgba(255, 255, 255, 0);
                  ">
                            <div class="service-icon">
                                <span class="flaticon-pay" style="
                        background: rgb(46, 49, 146);
                        background: linear-gradient(
                          90deg,
                          rgba(46, 49, 146, 1) 0%,
                          rgba(110, 78, 140, 1) 100%
                        );
                      "></span>
                            </div>
                            <div class="service-cap">
                                <h4 style="color: #fff">
                                    <a href="#">Find the best delivery providers and prices</a>
                                </h4>
                                <p style="color: #fff">
                                    Get products delivered efficiently to you from trusted
                                    riders, at an affordable price.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="services-caption text-center" style="
                    background-color: rgba(255, 255, 255, 0);
                    border: 2px solid rgba(255, 255, 255, 0);
                  ">
                            <div class="service-icon">
                                <span class="flaticon-plane" style="
                        background: rgb(46, 49, 146);
                        background: linear-gradient(
                          90deg,
                          rgba(46, 49, 146, 1) 0%,
                          rgba(110, 78, 140, 1) 100%
                        );
                      "></span>
                            </div>
                            <div class="service-cap">
                                <h4 style="color: #fff"><a href="#">Quick Messaging</a></h4>
                                <p style="color: #fff">
                                    Easily communicate with riders to ensure quality in
                                    services provided to you.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Provider Services start -->
        <div class="merchants">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section-tittle">
                            <h2 style="color: #fff; font-size: 45px" class="pt-5">
                                For Merchants who go the extra mile for their customers
                            </h2>
                        </div>
                    </div>
                </div>
                <!-- Section caption -->
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="services-caption text-center" style="
                    background-color: rgba(255, 255, 255, 0);
                    border: 2px solid rgba(255, 255, 255, 0);
                  ">
                            <div class="service-icon">
                                <span class="flaticon-businessman" style="
                        background: rgb(46, 49, 146);
                        background: linear-gradient(
                          90deg,
                          rgba(46, 49, 146, 1) 0%,
                          rgba(110, 78, 140, 1) 100%
                        );
                      "></span>
                            </div>
                            <div class="service-cap">
                                <h4>
                                    <a href="#" style="color: #fff">Sell more and stand apart from the competition</a>
                                </h4>
                                <p style="color: #ffffff">
                                    Hit goals and drive up sales. Automate your business,
                                    push your products to market faster. Get ahead of your
                                    competition
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="services-caption active text-center" style="
                    background-color: rgba(255, 255, 255, 0);
                    border: 2px solid rgba(255, 255, 255, 0);
                  ">
                            <div class="service-icon">
                                <span class="flaticon-pay" style="
                        background: rgb(46, 49, 146);
                        background: linear-gradient(
                          90deg,
                          rgba(46, 49, 146, 1) 0%,
                          rgba(110, 78, 140, 1) 100%
                        );
                      "></span>
                            </div>
                            <div class="service-cap">
                                <h4>
                                    <a href="#" style="color: #fff">Get insight into new opportunities</a>
                                </h4>
                                <p style="color: #fff">
                                    Opportunities are waiting for you. Take advantage of our
                                    available tools to see what is new for you and how you can
                                    profit from them.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="services-caption text-center" style="
                    background-color: rgba(255, 255, 255, 0);
                    border: 2px solid rgba(255, 255, 255, 0);
                  ">
                            <div class="service-icon">
                                <span class="flaticon-plane" style="
                        background: rgb(46, 49, 146);
                        background: linear-gradient(
                          90deg,
                          rgba(46, 49, 146, 1) 0%,
                          rgba(110, 78, 140, 1) 100%
                        );
                      "></span>
                            </div>
                            <div class="service-cap">
                                <h4>
                                    <a href="#" style="color: #fff">Build a loyal customer base</a>
                                </h4>
                                <p style="color: #fff">
                                    Know your customers and enjoy repeating business, when you use our platform to
                                    run your business
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="logistics">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section-tittle">
                            <h2 style="color: #fff; font-size: 45px" class="pt-5">
                                For Smart Logistis Companies
                            </h2>
                        </div>
                    </div>
                </div>
                <!-- Section caption -->
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="services-caption text-center" style="
                    background-color: rgba(255, 255, 255, 0);
                    border: 2px solid rgba(255, 255, 255, 0);
                  ">
                            <div class="service-icon">
                                <span class="flaticon-businessman" style="
                        background: rgb(46, 49, 146);
                        background: linear-gradient(
                          90deg,
                          rgba(46, 49, 146, 1) 0%,
                          rgba(110, 78, 140, 1) 100%
                        );
                      "></span>
                            </div>
                            <div class="service-cap">
                                <h4>
                                    <a href="#" style="color: #fff">Manage from one Location</a>
                                </h4>
                                <p style="color: #fff">
                                    Stay on top of all business operations and manage your
                                    employees with ease from within the app.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="services-caption active text-center" style="
                    background-color: rgba(255, 255, 255, 0);
                    border: 2px solid rgba(255, 255, 255, 0);
                  ">
                            <div class="service-icon">
                                <span class="flaticon-pay" style="
                        background: rgb(46, 49, 146);
                        background: linear-gradient(
                          90deg,
                          rgba(46, 49, 146, 1) 0%,
                          rgba(110, 78, 140, 1) 100%
                        );
                      "></span>
                            </div>
                            <div class="service-cap">
                                <h4>
                                    <a href="#" style="color: #fff">Connect with new customers and increase earnings</a>
                                </h4>
                                <p style="color: #fff">
                                    Connect with customers and increase your
                                    earnings.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="services-caption text-center" style="
                    background-color: rgba(255, 255, 255, 0);
                    border: 2px solid rgba(255, 255, 255, 0);
                  ">
                            <div class="service-icon">
                                <span class="flaticon-plane" style="
                        background: rgb(46, 49, 146);
                        background: linear-gradient(
                          90deg,
                          rgba(46, 49, 146, 1) 0%,
                          rgba(110, 78, 140, 1) 100%
                        );
                      "></span>
                            </div>
                            <div class="service-cap">
                                <h4>
                                    <a href="#" style="color: #fff">Track deliveries and payments</a>
                                </h4>
                                <p style="color: #fff">
                                    Monitor rider/agent performance to ensure they deliver the
                                    best customer service.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Provider Services end -->
    </section>
    <!-- Services Area End -->

    <!-- Available App  Start-->
    <div class="available-app-area" style="
          background: rgb(46, 49, 146);
          background: linear-gradient(
            90deg,
            rgba(46, 49, 146, 1) 0%,
            rgba(110, 78, 140, 1) 100%
          );
          margin-top: -15%;
        ">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-xl-5 col-lg-6">
                    <div class="app-caption">
                        <div class="section-tittle section-tittle3">
                            <h2>
                                Delivery Connect now available for download on all platforms
                            </h2>
                            <p>
                                Delivery Connect is now available on Google playstore and on
                                the Apple appstore.
                            </p>
                            <div class="app-btn">
                                <a href="#" class="app-btn1"><img src="assets/img/shape/app_btn1.png" alt="" /></a>
                                <a href="#" class="app-btn2"><img src="assets/img/shape/app_btn2.png" alt="" /></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="app-img">
                        <img src="assets/img/hero/bgb.png" alt="" />
                    </div>
                </div>
            </div>
        </div>
        <!-- Shape -->
        <div class="app-shape">
            <img src="assets/img/shape/app-shape-top.png" alt="" class="app-shape-top heartbeat d-none d-lg-block" />
            <img src="assets/img/shape/app-shape-left.png" alt="" class="app-shape-left d-none d-xl-block" />
            <!-- <img src="assets/img/shape/app-shape-right.png" alt="" class="app-shape-right bounce-animate "> -->
        </div>
    </div>
    <!-- Available App End-->

    <!-- Say Something Start -->
    <!-- <div class="say-something-aera pt-90 pb-90 fix">
        <div class="container">
          <div class="row justify-content-between align-items-center">
            <div class="offset-xl-1 offset-lg-1 col-xl-5 col-lg-5">
              <div class="say-something-cap">
                <h2>Say Hello To The Collaboration Hub.</h2>
              </div>
            </div>
            <div class="col-xl-2 col-lg-3">
              <div class="say-btn">
                <a
                  href="#"
                  class="btn radius-btn"
                  style="
                    background: rgb(46, 49, 146);
                    background: linear-gradient(
                      90deg,
                      rgba(46, 49, 146, 1) 0%,
                      rgba(110, 78, 140, 1) 100%
                    );
                  "
                  >Contact Us</a
                >
              </div>
            </div>
          </div>
        </div> -->
    <!-- shape -->
    <!-- <div class="say-shape">
          <img
            src="assets/img/shape/say-shape-left.png"
            alt=""
            class="say-shape1 rotateme d-none d-xl-block"
          />
          <img
            src="assets/img/shape/say-shape-right.png"
            alt=""
            class="say-shape2 d-none d-lg-block"
          />
        </div>
      </div> -->
    <!-- Say Something End -->
</main>
<?php  
include('includes/footer.php')

?>