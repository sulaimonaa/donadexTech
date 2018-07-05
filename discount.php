<link href="css/discount.css" rel="stylesheet" type="text/css" />

<?php
    include 'include/header.php';
?>

<div class="discount-banner">

</div>
<h3 style="font-family: 'Encode Sans Expanded', sans-serif;">BRACE YOURSELF... LET THE WORLD KNOW YOUR BRAND</h3>
<p style="font-family: 'Encode Sans Expanded', sans-serif;">As part of our commitment to helping our dear client optimize their potential of reaching out globally,
we present this amazing offer; Over 45% discount off normal cost of web design on all packages. Take this opprtunity
by filling the form below.</p>

<div class="dis-con">
<div class="form">
<form action="submit-discount.php" method="post" id="dis-form">
    <input name="firstname"  type="text" required="required" placeholder="First Name" /><br/>
    <input name="lastname" type="text" required="required" placeholder="Last Name" /><br/>
    <input name="email" type="email" required="required" placeholder="Email Address" /><br/>
    <input name="phone_number" type="tel" required="required" placeholder="Phone Number" /><br/>
    <label>Package Required</label><br/>
    <select type="packages" name="package" value="" >
                    <option>Basic Web Design</option>
                    <option>Premium Web Design</option>
                    <option>Advance Web Design</option>
                    <option>Travel/Hospitality Web Design</option>
                    <option>E-commerce Web Design</option>
                    <option>NGO Web Design</option>
                    <option>Others(Please Specify)</option>
    </select><br/>
    <label><p style="margin-top: 0px;">To meet your desired expectations on your website project, Kindly give detailed description of your desired project. This is due to web designs variation.</p></label>
    <textarea name="msg" type="text" required="required" placeholder="Project Description"></textarea><br/>
    <input name="budget" type="text" required="required" placeholder="Budget" /><br/>
    <label>Proposed Start-Up Date</label><br/>
    <select name="start-up">
        <option>Immediately</option>
        <option>1 week from now</option>
        <option>2 week from now</option>
        <option>1 month from now</option>
        <option>Included in the project description</option>
    </select><br/>
    <input type="submit" placeholder="Submit" value="Submit" name='submit' />
</form>
</div>

<div class="dispix"><img src="images/dis-right.png" alt="discount image" /></div>
</div>
    
<?php
    include 'include/footer.php';
?>