
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


<!-- banner section  -->

<section id="about">
    <div class="about-banner">
        <div class="about-content">
            <h1>Contact Us</h1>
            <p> <a href="index.php"> HOME</a> / CONTACT US</p>
        </div>
    </div>
</section>




<section class="bg-light d-flex align-items-center justify-content-center mt-5 mb-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card h-100">
                    <div class="card-body d-flex flex-column align-items-start">
                        <i class="fas fa-comments fa-2x mb-3"></i>
                        <h5 class="card-title">Chat to sales</h5>
                        <p class="card-text text-muted">Speak to our friendly team.</p>
                        <a href="mailto:sales@untitledui.com" class="text-primary">sales@untitledui.com</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card h-100">
                    <div class="card-body d-flex flex-column align-items-start">
                        <i class="fas fa-life-ring fa-2x mb-3"></i>
                        <h5 class="card-title">Chat to support</h5>
                        <p class="card-text text-muted">We're here to help.</p>
                        <a href="mailto:support@untitledui.com" class="text-primary">support@untitledui.com</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card h-100">
                    <div class="card-body d-flex flex-column align-items-start">
                        <i class="fas fa-map-marker-alt fa-2x mb-3"></i>
                        <h5 class="card-title">Visit us</h5>
                        <p class="card-text text-muted">Visit our office HQ.</p>
                        <a href="https://www.google.com/maps" class="text-primary">View on Google Maps</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card h-100">
                    <div class="card-body d-flex flex-column align-items-start">
                        <i class="fas fa-phone fa-2x mb-3"></i>
                        <h5 class="card-title">Call us</h5>
                        <p class="card-text text-muted">Mon-Fri from 8am to 5pm.</p>
                        <a href="tel:+15550000000" class="text-primary">+1(555) 000-0000</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<div class="container">
    <div class="innerwrap">

        <section class="section1 clearfix">
            <div class="textcenter">
                <!-- <h1> <span> Contact</span> Us</h1> -->

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






<?php include ('./common/footer.php');?>




   