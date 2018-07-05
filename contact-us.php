<link href="css/contact.css" rel="stylesheet" type="text/css" />


<?php
    include 'include/header.php';
?>

<div class="contact-wrapper">

    <div class="contact-left">
        <h2>GET IN TOUCH WITH US</h2>
        <p>Kindly drop your comments, feedbacks, questions by filling the form below. Your will get a response within the shortest possible time.</p>
        <form method="post" action="contact-form.php">
            <input name="name" type="text" required="required" placeholder="ENTER YOUR NAMES" /><br>
            <input name="email" type="email" required="required" placeholder="ENTER YOUR EMAIL" /><br>
            <input name="phonenumber" type="tel" required="required" placeholder="ENTER YOUR PHONE NUMBER" /><br>
            <input name="cname" type="text" required="required" placeholder="ENTER YOUR COMPANY NAME (optional)" /><br>
            <textarea name="message" required="required" placeholder="ENTER YOUR MESSAGE / FEEDBACK"></textarea><br>
            <input type="submit" name="submit" value="SUBMIT">
        </form>

    </div>

    <div class="contact-right">
        
        <h2>HEAD OFFICE</h2>
        <p><span class="fa fa-map"></span> 187 Akowonjo Road, Alimosho, Egbeda, Lagos.</p>
        <p><span class="fa fa-phone"></span> (+234) 7036168688, 7013771792.</p>
        <iframe  class="edit" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.3750847101883!2d3.295986514315724!3d6.600221695226889!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b9052b1d08f3b%3A0x6eba149fe0a6c75a!2s74+Akowonjo+Rd%2C+Alimosho%2C+Lagos!5e0!3m2!1sen!2sng!4v1511774826672" width="500" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    
</div>




<?php
    include 'include/footer.php';
?>