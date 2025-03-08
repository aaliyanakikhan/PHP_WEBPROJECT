<!DOCTYPE html><!--define the document type as html -->
<html lang="en"><!-- define the cooding language in english  -->
<head><!-- main heading -->
    <meta charset="UTF-8"><!-- use to support various symbols & caharcter -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--ensure web reponsive on all sceen type -->
    <title>Online Perfume store</title><!-- title of website -->
    <link rel="stylesheet" href="styles/styles.css"><!-- connects the css external file -->
</head>
<body>
    <!--navigation bar -->
    <nav class="nav-bar"> <!--creates the navigation bar -->
        <a id = "logo" href="#">NEO</a><!-- define the logo text neo that link homepage  -->
        <div class="nav-bar-links"><!--contain navigation links and buttons  -->
            <ul><!--creates an unorder list for menu items-->
            <li><a href="#">Home</a></li><!-- define menu link to home  -->
            <li><a href="#">Products</a></li><!-- define menu link to product -->
            <li><a href="#">Services</a></li><!-- define menu link to services-->
            <li><a href="#">Contact Us</a></li><!-- define menu link to contact us -->
        </ul><!-- end -->
        <button id="button1" class="button-style">Order Now</button></div> <!--button for ordering product-->
    </nav>
    <!-- end -->

    <!-- for mobile application currently skipping   
    <nav class="nav-bar-responsive">
        <a id = "logo" href="#">Essence</a>
        <div class="nav-bar-links">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
              </svg>
        </div>
    </nav>-->
    
    <div class="container-1"><!-- main intro section -->
        <div class="container-text"><!---->
            <h1 class="large-text">We care about Fragrances</h1><!-- text heading for container-->
            <p>Where modern elegance meets boundless spirit. Crafted for those who embrace the now and shape the future,
                 NEO fragrances are a symphony of unexpected notes,
                  designed to ignite your senses and leave an unforgettable impression.
                 Step into a world of contemporary sophistication.</p> <!-- paragraph text -->
            <button id="button2" class="button-style">See more</button><!-- button for see more -->
        </div>
        <div id="image-container-1"><!-- place holder for an image --> 
            <!-- <img src="images/first-image.png" alt="image"> skip image bcoz i have better preference -->
        </div>
    </div>
      

     <!-- brand into section-->
    <div class="container-2"> <!--2 conatiner for customer to why choose neo perfumes --> 
        <div class="slogan"><!--slogan is a css class that helps to customize the container according to css rule-->
            <h1 class="large-text">NEO</h1><!-- heading -->
            <p>Luxury Defined. One Drop at a Time.</p><!-- para -->
        </div>
        <div>
            <img src="images/second-image.jpg" alt=""><!-- use the image with link -->
        </div>
        <div class="container-text"><!-- conatiner to print text-->
            <h2 class="big-text">Why shop with Neo</h2><!-- heading -->
            <p>Distinctive Scents: Discover expertly crafted perfumes using high-quality ingredients,
                 designed to express your individuality.
                Modern Elegance: NEO offers contemporary sophistication, 
                staying ahead of fragrance trends.
                Lasting Impressions: Experience fragrances that linger, leaving a memorable mark.</p><!--para-->
            <button id="button3" class="button-style">Read More</button> <!--button for read more  -->
        </div>
    </div>
      <!--display service -->
    <div class="container-3"><!-- conatiner for service -->
        <h1 class="large-text">Our Services</h1><!-- heading -->
        <div class="container-3-services">
            <div> <!-- container for recommend-->
                <img src="logos/recommendation.png" alt=""><!-- image connect with link -->
                <h2>Recommendations</h2><!-- heading -->
                <p>Noir Celestial Whisper is a captivating fragrance that weaves a tapestry of warm,
                     spicy notes with the deep allure of dark woods.
                      It evokes a sense of mystery and sophisticated elegance,
                       making it ideal for evening wear or special occasions.</p> <!-- para -->
            </div>
            <div> <!-- conatiner for gifting  -->
                <img src="logos/giftbox.png" alt=""> 
                <h2>Gifting</h2>
                <p>Gifting NEO perfumes transcends a simple present; it's a gesture of refined taste and personal connection with their modern and distinctive scents, offer a unique olfactory experience Consider NEO for birthdays, anniversaries.</p>
            </div>
            <div> <!-- conatiner for refills section -->
                <img src="logos/perfume-spray.png" alt="">
                <h2>Refills</h2>
                <p>Extend your favorite scent with our eco-conscious refills. Enjoy the same premium fragrance, reduce waste, and embrace responsible elegance. Simple, efficient, and a conscious choice for the modern connoisseur.</p>
            </div>
            <div> <!-- container for returns -->
                <img src="logos/refund.png" alt="">
                <h2>Returns</h2>
                <p>NEO's return policy prioritizes your satisfaction. Enjoy a hassle-free return within 5 days for unopened products. We ensure a reflecting our commitment to quality and customer trust. Experience NEO risk-free.</p>
            </div>
        </div>
    </div>
     <!-- product section -->
    <div class="container-4"><!-- conatainer for product -->
        <h1 class="big-text">Our products</h1><!-- heading -->
        <p>explore the execellence of our product</p><!-- para-->
        <div>
            <ul><!-- list of product categories-->
                <li><a href="#">Floral</a></li><!-- floral perfume options -->
                <li><a href="#">Woody</a></li><!-- woody perfume options -->
                <li><a href="#">Fruity</a></li><!-- fruity perfume options -->
                <li><a href="#">Fresh</a></li><!-- fresh perfume options -->
        </ul>
    </div>

    <div class="container-4-collection">
        <img src="images/image101.jpeg" alt="">
       <img src="images/image102.jpeg" alt="">
        <img src="images/image103.jpeg" alt="">
        <img src="images/image104.jpeg" alt="">
        <img src="images/image105.jpeg" alt="">
        <img src="images/image106.jpeg" alt="">
    </div>
    </div>
    <!-- footer is used to stoore the details of footer info have smae func and div but purpose is different-->
    <footer id="footer">  <!-- opening of footer tag also id= footer is unique attribute that define this footer element-->
        <div>
            <h1 class="big-text">NEO</h1> <!-- heading -->
            <p>NEO: Modern Fragrance. © 2025 NEO. All Rights Reserved. 
                Privacy Policy | Terms of Service | Contact Us.
                 Discover our curated collections and experience lasting impressions.
                  Follow us on social media for exclusive updates and offer</p><!-- para -->
            <p>&copy; 2025 NEO - All rights Reserved</p>
            
        </div>
        <div> <!-- conatainer  for social media and timing -->
            <h2 class="big-text">Opening Times</h2>
            <p>Monday: Friday: 10.00 - 23.00 
                <br>
                Saturday: 10.00 - 19.00</p>
                <div id="social-logos">
                    <img src="logos/facebook.png" alt="">
                    <img src="logos/instagram.png" alt="">
                    <img src="logos/twitter.png" alt="">
                    <img src="logos/pinterest.png" alt="">
                </div>
        </div>
        <div>
            <h2 class="big-text">Contact Us </h2>
            <p>Tel: (+91) 9136731584</p>               
            <p>Email: info@neo.com</p>             
            <p>Address: Vasai Hill Road, Mumbai, India</p>
                
        </div>
    </footer>
      <!-- source link for js file -->
    <script src="script.js"></script>
</body>
</html>