<?php session_start(); // Start a session ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>EggScan</title>
</head>
<body>
    <nav class="navbar navbar-color">
        <a class="navbar-brand" href="#">
        <img src="assets/logo (1).svg" alt="logo" class="logo-img">
        </a>
      </nav>
        <header class="container-fluid header-content">
            <section class="container header-container">
                <div class="row test-row">
                    <div class="col-md-6 content">
                          <h1 class="coming-soon text-white">We're coming soon!</h1>
                          <p class="coming-soon text-white">We'll never again let you worry about buying bad eggs.
                              Our app deploys cutting edge technologies to help you detect cracked eggs, bad eggs, and fresh good eggs that are 
                              healthy for consumption with just a click of a button.
                          </p>
                          <p class="coming-soon text-white">
                          Add your email below to stay up-to-date with our product lauch deals.
                        </p> 
                        
                        
                        
                    <form class="" method = "post" action="form_submit.php">
                        <div class="mt-5 input-group mb-2 mr-sm-2">
    
                           
                            <input type="email" name = "email" class="form-control form1" placeholder="Enter email" required>
                        
                            <div class="input-group-append">
                        
                             
                        
                                <button type="submit" name = "form_submit" class="float-right btn btn-primary">Subscribe</button>
                            </div>
                        </div>
                    </form>

                    <p> 
                    <?php

                    if (isset($_SESSION['notif']))	{

                        echo $_SESSION['notif']; 

                        unset($_SESSION['notif']); 
                    }

                    ?>
                    </p>
                    
                </div>
          
                    
                    <div class="col-md-6 content">
                     <img src="assets/iPhone X (9).png" class="phone1" alt="phono">
                </div>
            </div>
            </section>
        </header>

        <main class="container-fluid">
            <section class="container">
                <article class="row row-2">
                    <div class="col-12 colz" data-aos="flip-left">
                        <h3 class="text-center how-it-works">How it <span class="works">works</span></h3>
                        <p class="text-center get-familiar">Get familiar with our app</p>
                        <ul class="ul-link">
                            <li>
                                <img src="assets/Group 41.svg" alt="easy" class="features-img">
                                <h5>Easy to use</h5>
                                <p>Lorem ipsum dolor sit amet consect</p>
                            </li>
                            <li>
                                <img src="assets/Quick Scan.png" alt="phone" class="features-img">
                                <h5>Quick Scan</h5>
                                <p>Lorem ipsum dolor sit amet consectet</p>
                            </li>
                            <li>
                                <img src="assets/Fast result.png" alt="result" class="features-img">
                                <h5>Fast Result</h5>
                                <p>Lorem ipsum dolor sit amet consectetur</p>
                            </li>
                        </ul>                        
                    </div>
                </article>

                <article class="row row-3">
                    <div class="col-md-12 col-12">
                        <h4 class="text-center">Features</h4>
                    </div>
                </article>
                
                <article class="row row-4">
                    <div class="col-12 col-md-6" data-aos="zoom-in-up" data-aos-duration="2000">
                        <img src="assets/Top notch scanner.png" class="phone-2" alt="phone">
                    </div>
                    <div class="col-12 col-md-6">
                        <h3 class="center-text top-notch">Top notch AI Scanner</h3>
                        <h5 class="center-text">Welcome to a world of endless possibilities</h5>
                        <p class="center-text lead">
                            Forget about the large egg testers forever. EggScan turns your mobile
                            device into a powerful all-purpose tool. Powered automically analyzis your eggs
                            and recommends the best possible choice of eggs to buy.
                        </p>
                        <p class="center-text lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat accusamus illo autem rem ad libero, eaque iure reprehenderit vero, dicta minus sint eum excepturi nobis. 
                            Distinctio rem adipisci laudantium nemo.
                        </p>
                    </div>
                </article>

                <article class="row row-5">
                    <div class="col-12 col-md-6">
                        <h3 class="center-text top-notch">Fast and reliable results</h3>
                        <h5 class="center-text">Get results in real time</h5>
                        <p class="center-text lead">
                           The fast AI processor quickly brings up simplified results to let
                           you know if the eggs are healthy and fresh enough to be consumed.
                        </p>
                        <p class="center-text lead">Ameart ipsum dolor sit amet consectetur adipisicing elit. Quaerat accusamus illo autem rem ad libero, eaque iure reprehenderit vero, dicta minus sint eum excepturi nobis. 
                            Distinctio rem adipisci laudantium nemo.
                        </p>
                    </div>
                    <div class="col-12 col-md-6" data-aos="zoom-in-up" data-aos-duration="2000" data-aos-delay="50">
                        <img src="assets/Egg 1.png" class="phone-2 phone-3" alt="phone">
                    </div>
                </article>

                <article class="row last-row">
                    <div class="col-12 col-md-6" data-aos="zoom-in-up" data-aos-duration="2000" data-aos-delay="100">
                        <img src="assets/Fresh egg finder.png" class="phone-2 phone-4" alt="phone">
                    </div>
                    <div class="col-12 col-md-6">
                        <h3 class="center-text top-notch">Fresh Eggs Finder</h3>
                        <h5 class="center-text">Locate fresh eggs dealers</h5>
                        <p class="center-text lead">
                            If you can't seem to find healhty eggs, EggScan uses results shared by other users
                            on the app to help you locate fresh eggs dealers close to you.
                        </p>
                        <p class="center-text lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat accusamus illo autem rem ad libero, eaque iure reprehenderit vero, dicta minus sint eum excepturi nobis. 
                            Distinctio rem adipisci laudantium nemo.
                        </p>
                    </div>
                </article>
    
            </section>
           
        </main>

        <section class="container-fluid last-section">
            <div class="container">
                <article class="row">
                    <div class="col-12 col-md-6 mt-5 adjust">
                        <h4 class="text-center">EggScan is the first of its kind</h4>
                        <p class="lead text-center">Use the app to differentiate your eggs so as to live
                            a healthier and better life. </p>
                        <h4 class="text-center">We are coming soon</h4>
                    </div>
                        <div class="col-12 col-md-6 mt-5">
                            <img src="assets/Group 67.png" class="group67" alt="phone">
                        </div>
                </article>
            </div>
        </section>

        <footer class="footer-section">
        <div class="container">
            <div class="d-flex justify-content-center">
                <div class="col-12 col-md-6">
                    <h5 class="text-center mt-5 mg-top">Be the first to be notified when our app is ready</h5>
                        <form class="" method = "post" action="form_submit.php">
                                <div class="mt-5 input-group mb-2 mr-sm-2">
                                    <p>
                                    <?php

                                        if (isset($_SESSION['notif']))	{

                                            echo $_SESSION['notif']; 

                                            unset($_SESSION['notif']); 
                                        }

                                        ?>
                                    </p>
                              
                                    <input type="email" name = "email" class="form-control footer-form" placeholder="Enter email" required>
                                
                                    <div class="input-group-append">
                                
                                       
                                
                                    <button type="submit" name = "form_submit" class="float-right btn btn-primary">Subscribe</button>
                                    </div>
                                </div>
                        </form>
                        <h5 class="text-center">
                            <img src="assets/logo.svg" alt="logo" id="logo2-img">
                            </h5>
                        <p class="text-center">Follow us</p>
                        <ul class="d-flex justify-content-center">
                            
                            <li class="mr-3">
                                <a href="#"><img src="assets/icons8-facebook 1.svg" alt="facebook"></a>
                                
                            </li>
                            <li class="mr-3">
                            <a href="#"><img src="assets/icons8-instagram 1.svg" alt="instagram"></a>
                            </li>
                            
                        </ul>     
                </div>
            </div>
        </div>
        </footer>

    


<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
AOS.init();
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/gsap.min.js"></script>
<script src="js/app.js"></script>
</body>
</html>