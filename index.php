<?php
include('./common/header.php');
include('./common/config.php');

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $subject = $_POST['subject'];
    $textarea = $_POST['textarea'];

    $sql = "INSERT INTO `user_data`(`name`, `email`, `number`, `subject`, `textarea`) VALUES ('$name','$email','$number','$subject','$textarea')";

    if (mysqli_query($conn, $sql)) {

        echo "<script type='text/javascript'>
        alert('Your message has been sent successfully!');
        window.location.href = window.location.href; // Redirect to the same page
      </script>";
    } else {
        echo "<script type='text/javascript'>
                alert('There was an error sending your message. Please try again later.');
              </script>";
    }
}

// Close the database connection
mysqli_close($conn);

?>


<!-- Hero section start -->

<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="./common/images/banner2.jpg" class="d-block w-100" alt="..." height="510px" class="banner-img">
        </div>
        <div class="carousel-item">
            <img src="./common/images/banner3.jpg" class="d-block w-100" alt="..." height="510px" class="banner-img">
        </div>
        <div class="carousel-item">
            <img src="./common/images/banner4.jpg" class="d-block w-100" alt="..." height="510px" class="banner-img">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-target="#carouselExampleFade" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-target="#carouselExampleFade" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </button>
</div>


<!-- About section start  -->

<section class="about-section">
    <div class="container">
        <div class="row">
            <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
                <div class="inner-column">
                    <div class="sec-title">
                        <span class="title">About Mechanical Weighing Scale</span>
                        <h2>Mechanical Weighing Scale</h2>
                    </div>
                    <div class="text">A Mechanical Weighing Scale is a type of weighing instrument that operates without the need for electrical or digital components. It uses mechanical mechanisms such as springs or levers to measure the weight of an object. Here's a more in-depth look at how a Mechanical Weighing Scale works.
                        A spring is the central component in many mechanical scales. When you place an object on the scale, the weight of the object stretches the spring. The more weight on the scale, the more the spring stretches.
                    </div>

                    <button class="about-btn" role="button">Read More</button>

                </div>
            </div>

            <!-- Image Column -->
            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column wow fadeInLeft">
                    <figure class="image-1">
                        <a href="#" class="lightbox-image" data-fancybox="images">
                            <img src="./common/images/adjustable-platform-scale.webp" alt=""></a>
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Products section start  -->

<div class="product-header">
    <h1> <span>Our</span> Product</h1>
</div>

<div class="product-gallery">
    <div class="imageZoom">
        <img src="./common/images/perfect-digital-hanging-weighing-machine-500x500.webp" alt="" class="zoomable" />
        <a href="sproduct.php?product=perfect-digital-hanging-weighing-machine">
            <div class="product-name">Perfect-digital-hanging-weighing-machine</div>
        </a>

    </div>
    <div class="imageZoom">
        <img src="./common/images/stainless-steel-table-top-weighing-scale.webp" alt="" class="zoomable" />
        <a href="sproduct.php?product=stainless-steel-table-top-weighing-scale">
            <div class="product-name">Stainless-steel-table-top-weighing-scale</div>
        </a>
    </div>
    <div class="imageZoom">
        <img src="./common//images/label-printing-platform-weighing-scale.webp" alt="" class="zoomable" />
        <a href="sproduct.php?product=label-printing-platform-weighing-scale">
            <div class="product-name">Label-printing-platform-weighing-scale</div>
        </a>
    </div>
    <div class="imageZoom">
        <img src="./common/images/led-display-platform-weighing-scale.webp" alt="" class="zoomable" />
        <a href="sproduct.php?product=led-display-platform-weighing-scale">
            <div class="product-name">Led-display-platform-weighing-scale</div>
        </a>
    </div>
    <div class="imageZoom">
        <img src="./common/images/counter-top-electronic-weighing-scale.webp" alt="" class="zoomable" />
        <a href="sproduct.php?product=counter-top-electronic-weighing-scale">
            <div class="product-name">Counter-top-electronic-weighing-scale</div>
        </a>
    </div>
    <div class="imageZoom">
        <img src="./common/images/plastic-bag-sealing-machine.webp" alt="" class="zoomable" />
        <a href="sproduct.php?product=plastic-bag-sealing-machine">
            <div class="product-name">Plastic-bag-sealing-machine</div>
        </a>
    </div>
    <div class="imageZoom">
        <img src="./common/images/perfect-digital-weighing-indicator.webp" alt="" class="zoomable" />
        <a href="sproduct.php?product=perfect-digital-weighing-indicator">
            <div class="product-name">Perfect-digital-weighing-indicator</div>
        </a>
    </div>
    <div class="imageZoom">
        <img src="./common/images/Perfect-Electronic-Table-Top-Weighing-Scale.webp" alt="" class="zoomable" />
        <a href="sproduct.php?product=Perfect-Electronic-Table-Top-Weighing-Scale">
            <div class="product-name">Perfect Electronic Table Top Weighing Scale</div>
        </a>
    </div>
</div>

<!-- Popup Modal -->
<div id="imagePopup" class="popup-modal">
    <span class="close-btn">&times;</span>
    <img class="popup-image" src="" alt="Zoomed Image">
</div>


<!-- testimonials section  -->
<section class="testimonial text-center">
    <div class="heading white-heading">
        Our Clients Says
    </div>
    <div class="container">
        <div id="testimonial4" class="carousel slide testimonial4_indicators testimonial4_control_button thumb_scroll_x swipe_x" data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">

            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div class="testimonial4_slide">
                        <img src="https://i.ibb.co/8x9xK4H/team.jpg" class="img-circle img-responsive" />
                        <p>This scale is incredibly easy to use with a clear LED display, perfect for weighing my luggage before flights. Great durability and long battery life, making it a reliable tool for both personal and commercial use. </p>
                        <h4>Ashok Yadav</h4>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="testimonial4_slide">
                        <img src="https://i.ibb.co/8x9xK4H/team.jpg" class="img-circle img-responsive" />
                        <p>This scale is incredibly easy to use with a clear LED display, perfect for weighing my luggage before flights. Great durability and long battery life, making it a reliable tool for both personal and commercial use. </p>
                        <h4>Ashok Yadav</h4>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="testimonial4_slide">
                        <img src="https://i.ibb.co/8x9xK4H/team.jpg" class="img-circle img-responsive" />
                        <p>This scale is incredibly easy to use with a clear LED display, perfect for weighing my luggage before flights. Great durability and long battery life, making it a reliable tool for both personal and commercial use. </p>
                        <h4>Ashok Yadav</h4>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#testimonial4" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#testimonial4" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
</section>


<!-- contact section  -->

<div class="container">
    <div class="innerwrap">

        <section class="section1 clearfix">
            <div class="textcenter">
                <h1> <span> Contact</span> Us</h1>

            </div>
        </section>

        <section class="section2 clearfix">
            <div class="col2 column1 first">
                <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
                <div class="sec2map" style='overflow:hidden;height:550px;width:100%;'>
                    <div id='gmap_canvas' style='height:100%;width:100%;'></div>
                    <div><small><a href="http://embedgooglemaps.com"> embed google maps </a></small></div>
                    <div><small><a href="http://freedirectorysubmissionsites.com/">free web directories</a></small></div>
                    <style>
                        #gmap_canvas img {
                            max-width: none !important;
                            background: none !important
                        }
                    </style>
                </div>
                <script type='text/javascript'>
                    function init_map() {
                        var myOptions = {
                            zoom: 14,
                            center: new google.maps.LatLng(19.075314480255834, 72.88153973865361),
                            mapTypeId: google.maps.MapTypeId.ROADMAP
                        };
                        map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
                        marker = new google.maps.Marker({
                            map: map,
                            position: new google.maps.LatLng(19.075314480255834, 72.88153973865361)
                        });
                        infowindow = new google.maps.InfoWindow({
                            content: '<strong>My Location</strong><br>Delhi<br>'
                        });
                        google.maps.event.addListener(marker, 'click', function() {
                            infowindow.open(map, marker);
                        });
                        infowindow.open(map, marker);
                    }
                    google.maps.event.addDomListener(window, 'load', init_map);
                </script>
            </div>
            <div class="col2 column2 last">
                <!-- <div class="sec2innercont">
                    <div class="sec2addr">
                        <p>45 BC, a Latin professor at Hampden-Sydney College in Virginia</p>
                        <p><span class="collig">Phone :</span> +91 976885083</p>
                        <p><span class="collig">Email :</span> vivek.mengu016@gmail.com</p>
                        <p><span class="collig">Fax :</span> +91 9768850839</p>
                    </div>
                </div> -->
                <div class="sec2contactform">
                    <h3>Drop Us a Mail</h3>
                    <form action="" method="POST" id="contactForm">
                        <div class="clearfix">
                            <input class="col2 first" type="text" placeholder="FirstName" name="name" required>
                            <input class="col2 last" type="text" placeholder="Email" name="email" required>
                        </div>
                        <div class="clearfix">
                            <input class="col2 first" type="number" placeholder="Contact Number" name="number" required>
                            <input class="col2 last" name="subject" type="text" placeholder="Subject" required>
                        </div>
                        <div class="clearfix">
                            <textarea name="textarea" id="" cols="30" rows="7" placeholder="Enter your message" required></textarea>
                        </div>
                        <div class="clearfix"><input name="submit" type="submit" value="Send"></div>
                    </form>
                </div>

            </div>
        </section>

    </div>
</div>




<?php include('./common/footer.php'); ?>