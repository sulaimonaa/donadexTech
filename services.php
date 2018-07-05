<link href="css/services.css" rel="stylesheet" type="text/css">

<?php
    include 'include/header.php';
?>


<div class="service-banner">
    <div class="service-banner-left">
        <?php
            include 'include/service.php';
        ?>
    </div>
    <div class="service-banner-right">
        <div class="service-request">
            <h4>PLACE YOUR REQUEST</h4>
            
            
            <form action="service-form.php" method="post">
                <input type="text" name="name" required="required" placeholder="Your Full Name" style="margin-top: 20px"><br>
                <input type="tel" name="phone-number"  required="required" placeholder="Your Phone Number"><br>
                <input type="email" name="email" required="required" placeholder="Your Email Address"><br>
                <select type="packages" name="package" value="" >
                    <option>Select Service Required</option>
                    <option>Basic Web Design</option>
                    <option>Premium Web Design</option>
                    <option>Advance Web Design</option>
                    <option>Travel/Hospitality Web Design</option>
                    <option>E-commerce Web Design</option>
                    <option>NGO Web Design</option>
                    <option>Web Maintenance</option>
                    <option>Graphic Design</option>
                    <option>Technical Support</option>
                    <option>Network Set up and Installation</option>
                    <option>IT Consultation</option>
                </select>
                <textarea name="message"  required="required" placeholder="Details of Service Required"></textarea>
                <input type="submit" name="submit" value="SUBMIT">
            </form>
            
           
        </div>
    </div>
</div>


<div class="service-listing">
    <div class="service-listing-wrapper">
        <div class="service-listing-top">
            <img src="images/service1.jpg" alt="services" />
            <p>Enjoy world class representation and interpretation of your business idea</p>
        </div>
        <div class="service-listing-top">
            <img src="images/service2.jpg" alt="services" />
            <p>Enjoy affordable web maintenance and management system</p>
        </div>
        <div class="service-listing-top">
            <img src="images/service4.jpg" alt="services" />
            <p>Let us help you improve your network infrastructure</p>
        </div>
        <div class="service-listing-top">
            <img src="images/service3.jpg" alt="services" />
            <p>Call now for IT Consultation</p>
        </div>
    </div>

</div>








<?php
    include 'include/footer.php';
?>
