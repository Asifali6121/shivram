<?php include('./common/header.php'); ?>





<?php
// URL se product ka naam lena
if (isset($_GET['product'])) {
    $product = htmlspecialchars($_GET['product']); // Security ke liye sanitize

    // Product images aur details ka array
    $products = [
        "perfect-digital-hanging-weighing-machine" => [
            "name" => "Perfect Digital Hanging Weighing Machine",
            "image" => "./common/images/perfect-digital-hanging-weighing-machine-500x500.webp",
            "description" => "The Perfect Digital Hanging Weighing Machine is a highly accurate and portable weighing device designed for various applications, including industrial, commercial, and personal use. It is commonly used for weighing luggage, fish, agricultural products, and other heavy items that need to be suspended for accurate measurement.",
            "specifications" => <<<HTML
            <div class="specifications">

                <table>
                    <tr>
                        <th>Size</th>
                        <td>10 x 5 x 4 inch (LxWxH)
                    <tr>
                        <th>Usage/Application</th>
                        <td>Weighing</td>
                    </tr>
                    <tr>
                        <th>Material</th>
                        <td>SS And MS (Body)</td>
                    </tr>
                    <tr>
                        <th>Surface Finish</th>
                        <td>Paint Coated</td>
                    </tr>
                    <tr>
                        <th>Display Type</th>
                        <td>LED</td>
                    </tr>
                    <tr>
                        <th>Scale type</th>
                        <td>Digital</td>
                    </tr>
                    <tr>
                        <th>Voltage</th>
                        <td>220 V</td>
                    </tr>
                    <tr>
                        <th>Frequency</th>
                        <td>50 Hz</td>
                    </tr>
                    <tr>
                        <th>Accuracy</th>
                        <td>0.01%</td>
                    </tr>
                    <tr>
                        <th>Capacity</th>
                        <td>100 Kg</td>
                    </tr>
                    <tr>
                        <th>Brand</th>
                        <td>Perfect</td>
                    </tr>
                    
                </table>
                
            </div>
            HTML
                    ],

        "stainless-steel-table-top-weighing-scale" => [
            "name" => "Stainless Steel Table Top Weighing Scale",
            "image" => "./common/images/stainless-steel-table-top-weighing-scale.webp",
            "description" => "The Stainless Steel Table Top Weighing Scale is a durable and high-precision digital weighing machine designed for commercial, industrial, and retail applications. It provides accurate weight measurements while being compact and easy to use on countertops or tables. This scale is widely used in kitchens, bakeries, grocery stores, jewelry shops, and industrial weighing applications.",
        "specifications" => <<<HTML
            <div class="specifications">

                <table>
                    <tr>
                        <th>Size</th>
                        <td>10 x 5 x 4 inch (LxWxH)
                    <tr>
                        <th>Usage/Application</th>
                        <td>Weighing</td>
                    </tr>
                    <tr>
                        <th>Material</th>
                        <td>SS And MS (Body)</td>
                    </tr>
                    <tr>
                        <th>Surface Finish</th>
                        <td>Paint Coated</td>
                    </tr>
                    <tr>
                        <th>Display Type</th>
                        <td>LED</td>
                    </tr>
                    <tr>
                        <th>Scale type</th>
                        <td>Digital</td>
                    </tr>
                    <tr>
                        <th>Voltage</th>
                        <td>220 V</td>
                    </tr>
                    <tr>
                        <th>Frequency</th>
                        <td>50 Hz</td>
                    </tr>
                    <tr>
                        <th>Accuracy</th>
                        <td>0.01%</td>
                    </tr>
                    <tr>
                        <th>Capacity</th>
                        <td>100 Kg</td>
                    </tr>
                    <tr>
                        <th>Brand</th>
                        <td>Perfect</td>
                    </tr>
                    
                </table>
                
            </div>
            HTML
                    ],

        "label-printing-platform-weighing-scale" => [
            "name" => "Label Printing Platform Weighing Scale",
            "image" => "./common/images/label-printing-platform-weighing-scale.webp",
            "description" => "The Label Printing Platform Weighing Scale is an advanced digital weighing solution designed for businesses that require weighing and instant label printing. It is widely used in retail stores, supermarkets, warehouses, logistics, and food packaging industries to improve efficiency and streamline product labeling.",
            "specifications" => <<<HTML
            <div class="specifications">

                <table>
                    <tr>
                        <th>Size</th>
                        <td>10 x 5 x 4 inch (LxWxH)
                    <tr>
                        <th>Usage/Application</th>
                        <td>Weighing</td>
                    </tr>
                    <tr>
                        <th>Material</th>
                        <td>SS And MS (Body)</td>
                    </tr>
                    <tr>
                        <th>Surface Finish</th>
                        <td>Paint Coated</td>
                    </tr>
                    <tr>
                        <th>Display Type</th>
                        <td>LED</td>
                    </tr>
                    <tr>
                        <th>Scale type</th>
                        <td>Digital</td>
                    </tr>
                    <tr>
                        <th>Voltage</th>
                        <td>220 V</td>
                    </tr>
                    <tr>
                        <th>Frequency</th>
                        <td>50 Hz</td>
                    </tr>
                    <tr>
                        <th>Accuracy</th>
                        <td>0.01%</td>
                    </tr>
                    <tr>
                        <th>Capacity</th>
                        <td>100 Kg</td>
                    </tr>
                    <tr>
                        <th>Brand</th>
                        <td>Perfect</td>
                    </tr>
                    
                </table>
                
            </div>
            HTML
                    ],

        "led-display-platform-weighing-scale" => [
            "name" => "LED Display Platform Weighing Scale",
            "image" => "./common/images/led-display-platform-weighing-scale.webp",
            "description" => "The LED Display Platform Weighing Scale is a high-precision digital scale designed for industrial, commercial, and retail applications. It features a bright LED display for easy readability, even in low-light environments, making it ideal for factories, warehouses, grocery stores, and logistics centers.",
            "specifications" => <<<HTML
            <div class="specifications">

                <table>
                    <tr>
                        <th>Size</th>
                        <td>10 x 5 x 4 inch (LxWxH)
                    <tr>
                        <th>Usage/Application</th>
                        <td>Weighing</td>
                    </tr>
                    <tr>
                        <th>Material</th>
                        <td>SS And MS (Body)</td>
                    </tr>
                    <tr>
                        <th>Surface Finish</th>
                        <td>Paint Coated</td>
                    </tr>
                    <tr>
                        <th>Display Type</th>
                        <td>LED</td>
                    </tr>
                    <tr>
                        <th>Scale type</th>
                        <td>Digital</td>
                    </tr>
                    <tr>
                        <th>Voltage</th>
                        <td>220 V</td>
                    </tr>
                    <tr>
                        <th>Frequency</th>
                        <td>50 Hz</td>
                    </tr>
                    <tr>
                        <th>Accuracy</th>
                        <td>0.01%</td>
                    </tr>
                    <tr>
                        <th>Capacity</th>
                        <td>100 Kg</td>
                    </tr>
                    <tr>
                        <th>Brand</th>
                        <td>Perfect</td>
                    </tr>
                    
                </table>
                
            </div>
            HTML
                    ],

        "counter-top-electronic-weighing-scale" => [
            "name" => "Counter Top Electronic Weighing Scale",
            "image" => "./common/images/counter-top-electronic-weighing-scale.webp",
            "description" => "The Counter Top Electronic Weighing Scale is a compact and precise digital weighing machine designed for use in retail shops, grocery stores, bakeries, jewelry shops, and small-scale industries. It features an easy-to-read digital display, durable construction, and multiple weighing unit options, making it ideal for everyday weighing tasks.",
            "specifications" => <<<HTML
            <div class="specifications">

                <table>
                    <tr>
                        <th>Size</th>
                        <td>10 x 5 x 4 inch (LxWxH)
                    <tr>
                        <th>Usage/Application</th>
                        <td>Weighing</td>
                    </tr>
                    <tr>
                        <th>Material</th>
                        <td>SS And MS (Body)</td>
                    </tr>
                    <tr>
                        <th>Surface Finish</th>
                        <td>Paint Coated</td>
                    </tr>
                    <tr>
                        <th>Display Type</th>
                        <td>LED</td>
                    </tr>
                    <tr>
                        <th>Scale type</th>
                        <td>Digital</td>
                    </tr>
                    <tr>
                        <th>Voltage</th>
                        <td>220 V</td>
                    </tr>
                    <tr>
                        <th>Frequency</th>
                        <td>50 Hz</td>
                    </tr>
                    <tr>
                        <th>Accuracy</th>
                        <td>0.01%</td>
                    </tr>
                    <tr>
                        <th>Capacity</th>
                        <td>100 Kg</td>
                    </tr>
                    <tr>
                        <th>Brand</th>
                        <td>Perfect</td>
                    </tr>
                    
                </table>
                
            </div>
            HTML
                    ],

        "plastic-bag-sealing-machine" => [
            "name" => "Plastic Bag Sealing Machine",
            "image" => "./common/images/plastic-bag-sealing-machine.webp",
            "description" => "The Plastic Bag Sealing Machine is an efficient and reliable device designed to seal plastic bags quickly and securely, ensuring product freshness, protection, and extended shelf life. It is widely used in food packaging, pharmaceuticals, retail, and industrial applications where airtight sealing is required.",

            "specifications" => <<<HTML
            <div class="specifications">

                <table>
                    <tr>
                        <th>Size</th>
                        <td>10 x 5 x 4 inch (LxWxH)
                    <tr>
                        <th>Usage/Application</th>
                        <td>Weighing</td>
                    </tr>
                    <tr>
                        <th>Material</th>
                        <td>SS And MS (Body)</td>
                    </tr>
                    <tr>
                        <th>Surface Finish</th>
                        <td>Paint Coated</td>
                    </tr>
                    <tr>
                        <th>Display Type</th>
                        <td>LED</td>
                    </tr>
                    <tr>
                        <th>Scale type</th>
                        <td>Digital</td>
                    </tr>
                    <tr>
                        <th>Voltage</th>
                        <td>220 V</td>
                    </tr>
                    <tr>
                        <th>Frequency</th>
                        <td>50 Hz</td>
                    </tr>
                    <tr>
                        <th>Accuracy</th>
                        <td>0.01%</td>
                    </tr>
                    <tr>
                        <th>Capacity</th>
                        <td>100 Kg</td>
                    </tr>
                    <tr>
                        <th>Brand</th>
                        <td>Perfect</td>
                    </tr>
                    
                </table>
                
            </div>
            HTML
                    ],

        "perfect-digital-weighing-indicator" => [
            "name" => "Perfect Digital Weighing Indicator",
            "image" => "./common/images/perfect-digital-weighing-indicator.webp",
            "description" => "The Perfect Digital Weighing Indicator is an essential device used in industrial and commercial weighing systems. It is designed to display precise weight measurements and is commonly used with various types of weighing scales and load cells.",
            "specifications" => <<<HTML
            <div class="specifications">
                <table>
                    <tr>
                        <th>Series</th>
                        <td>Platform Scale</td>
                    </tr>
                    <tr>
                        <th>Type</th>
                        <td>Digital</td>
                    </tr>
                    <tr>
                        <th>Size</th>
                        <td>12 x 12 inch (Platform)</td>
                    </tr>
                    <tr>
                        <th>Brand</th>
                        <td>Perfect</td>
                    </tr>
                    <tr>
                        <th>Weighing Capacity</th>
                        <td>80 kg</td>
                    </tr>
                    <tr>
                        <th>Usage/Application</th>
                        <td>Weighing</td>
                    </tr>
                    <tr>
                        <th>Material</th>
                        <td>SS And MS (Body)</td>
                    </tr>
                    <tr>
                        <th>Display Type</th>
                        <td>LED Display</td>
                    </tr>
                    <tr>
                        <th>Accuracy</th>
                        <td>0.01%</td>
                    </tr>
                    <tr>
                        <th>Automation Grade</th>
                        <td>Semi-Automatic</td>
                    </tr>
                    <tr>
                        <th>Frequency</th>
                        <td>50Hz</td>
                    </tr>
                    <tr>
                        <th>Voltage</th>
                        <td>240V</td>
                    </tr>
                </table>
            </div>
            HTML
                    ],



        "Perfect-Electronic-Table-Top-Weighing-Scale" => [
            "name" => "Perfect Electronic Table Top Weighing Scale",
            "image" => "./common/images/Perfect-Electronic-Table-Top-Weighing-Scale.webp",
            "description" => "The Perfect Electronic Table Top Weighing Scale is a compact, high-precision digital scale designed for commercial, industrial, and retail applications. It provides accurate weight measurements and is widely used in grocery stores, retail shops, bakeries, jewelry shops, laboratories, and small-scale industries.",
            "specifications" => <<<HTML
            <div class="specifications">
                <table>
                    <tr>
                        <th>Series</th>
                        <td>Platform Scale</td>
                    </tr>
                    <tr>
                        <th>Type</th>
                        <td>Digital</td>
                    </tr>
                    <tr>
                        <th>Size</th>
                        <td>12 x 12 inch (Platform)</td>
                    </tr>
                    <tr>
                        <th>Brand</th>
                        <td>Perfect</td>
                    </tr>
                    <tr>
                        <th>Weighing Capacity</th>
                        <td>80 kg</td>
                    </tr>
                    <tr>
                        <th>Usage/Application</th>
                        <td>Weighing</td>
                    </tr>
                    <tr>
                        <th>Material</th>
                        <td>SS And MS (Body)</td>
                    </tr>
                    <tr>
                        <th>Display Type</th>
                        <td>LED Display</td>
                    </tr>
                    <tr>
                        <th>Accuracy</th>
                        <td>0.01%</td>
                    </tr>
                    <tr>
                        <th>Automation Grade</th>
                        <td>Semi-Automatic</td>
                    </tr>
                    <tr>
                        <th>Frequency</th>
                        <td>50Hz</td>
                    </tr>
                    <tr>
                        <th>Voltage</th>
                        <td>240V</td>
                    </tr>
                </table>
            </div>
            HTML
                    ],

    ];

    // Agar product exist karta hai to data lein, warna default show karein
    if (array_key_exists($product, $products)) {
        $productName = $products[$product]['name'];
        $productImage = $products[$product]['image'];
        $productDescription = $products[$product]['description'];
    } else {
        $productName = "Product Not Found";
        $productImage = "./common/images/default-product.jpg";
        $productDescription = "The product you are looking for does not exist.";
    }
} else {
    $productName = "No Product Selected";
    $productImage = "./common/images/default-product.jpg";
    $productDescription = "Please select a product from the list.";
}
?>


<!-- banner section  -->

<section id="about">
    <div class="about-banner">
        <div class="about-content">
            <h1><?php echo $productName; ?></h1>
            <!-- <p> <a href="index.php"> HOME</a> / ABOUT US</p> -->
        </div>
    </div>
</section>

<!-- product section  -->

<section id="product-info" class="m-5">
    <div class="item-image-parent">
        <div class="item-image-main">
            <img src="<?php echo $productImage; ?>" alt="<?php echo $productName; ?>" height="400px" />
        </div>
    </div>

    <div class="item-info-parent">
        <!-- main info -->
        <div class="main-info">
            <h2><?php echo $productName; ?></h2>
            <p><?php echo $productDescription; ?></p>
        </div>
        <!-- Choose -->
        <div class="select-items">
            <div class="description">
                <?php
                if (!empty($products[$product]['specifications'])) {
                    // echo "<h3>Specifications:</h3>";
                    echo $products[$product]['specifications'];
                }
                ?>

            </div>
        </div>
    </div>
</section>


<!-- Related Products -->
<div class="product-header">
    <h2>Related Products</h2>
</div>

<div class="product-gallery">
    <?php
    foreach ($products as $key => $item) {
        if ($key !== $product) {
            echo '<div class="imageZoom">
                <img src="' . $item['image'] . '" alt="' . $item['name'] . '" class="zoomable" />
                <a href="sproduct.php?product=' . $key . '">
                    <div class="product-name">' . $item['name'] . '</div>
                </a>
            </div>';
        }
    }
    ?>
</div>



<?php include('./common/footer.php'); ?>