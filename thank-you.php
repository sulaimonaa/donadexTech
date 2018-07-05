<style>
    
    .container{
        width: 60%;
        height: 300px;
        margin-top: 50px;
    }
    #rb{
        width: 120px;
        height: 30px;
        background: #ec6401;
        color: #ffffff;
        font-size: 16px;
        font-style: italic;
        cursor: pointer;
        margin-left: 50px;
    }
    h4{
        margin: 0px;
    }

</style>
<br/>
<?php 
    include 'include/header.php'; 
?>
<?php
echo("<p>Mail Sent Successfully, we will contact you shortly via the email entered.</p>")
?>
<div class="container">
<a href="services.php"><button id="rb" onclick="" value="Click Here">Click Here</button></a>
<h4>To return back to Service Request page</h4>
</div>

<?php 
    include 'include/footer.php'; 
?>