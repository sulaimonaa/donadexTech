<div id="main-container">
    	<img class="slides" src="images/codeBgTwo.jpg">
        <img class="slides" src="images/5.png">
        <img class="slides" src="images/codeBg.jpg">
        <img class="slides" src="images/3.png">
        <img class="slides" src="images/1.png">
        <img class="slides" src="images/7.png">
        <button class="btn" onclick="plusIndex(-1)" id="btn1">&#10094;</button>
        <button class="btn" onclick="plusIndex(1)" id="btn2">&#10095;</button>
    </div>

<div class="body-main1">
<!-- Main 1A and 1B starts here -->
	<div class="main1-left">
   		
            <div class="con">
            <img src="images/br.png">
            <h3>BRANDING</h3>
            <p>We help company or business promote and advertise their products & services with distinctive brand/logo designs.</p><br>
            <a href="services.php">ORDER NOW</a>    
 			</div>
            
            <div class="con">
            <img src="images/responsive.png">
            <h3>RESPONSIVE WEBSITE</h3>
            <p>We announce business and services to their target audience via professional, mobile-friendly & modern designs to fulfill their business objectives.</p>
            <a href="services.php">ORDER NOW</a>
            </div>
            
            <div class="con">
            <img src="images/cr-des.png">
            <h3>CREATIVE DESIGNS</h3>
            <p>We help company or business promote and advertise their products & services with distinctive advert designs.</p><br>
            <a href="services.php">ORDER NOW</a>    
            </div>
         
    </div>
    
	<div class="main1-right">
    <h2>ADVERTISEMENT</h2>
    <img src="images/ad1.jpg" />
        <a href="discount.php">
        <div class="c2r"><h3>ORDER NOW</h3></div>
        </a>
    </div>
</div>

<div class="body-main1">
	<div class="main1-left">
   		
            <div class="con">
            <img src="images/e-mar.png">
            <h3>E-MARKETING</h3>
            <p>Keep in touch with your target audience and convert them to real clients via effective digital marketing strategies.</p><br>
            <a href="services.php">ORDER NOW</a>
 			</div>
            
            <div class="con">
            <img src="images/h-s.png">
            <h3>HARDWARE/SOFTWARE TECHNICAL SUPPORT</h3>
            <p>Sales, Technical Support (Repair), System Set up and Network Set up for home and office.</p><br>
            <a href="services.php">ORDER NOW</a>
            </div>
            
            <div class="con">
            <img src="images/it-con.png">
            <h3>IT CONSULTANT</h3>
            <p>IT Consultation and Professional advise.</p><br><br><br>
            <a href="services.php">CONNECT NOW</a>
            </div>
    </div>
    
	<div class="main1-right">
    <h2>LIVE FEED</h2>
    <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2FdonadexTechnology&width=365&colorscheme=light&show_faces=true&border_color&stream=true&header=true&height=420"
    scrolling="yes" frameborder="0" style="border:none; overflow:hidden; width:100%; height:360px; background: white; float:left; " allowTransparency="true">
    </iframe>
    
    </div>
</div>

<!-- Main 1A and 1B ends here -->

<div class="body-main2">





</div>


<!--Banner Javascript-->

<script>
var index = 1;

function plusIndex(n){
index = index + 1;
showImage(index);
}

showImage(1);

function showImage(n){
var i;
var x = document.getElementsByClassName("slides");
if(n > x.length){ index = 1};
if(n < 1){ index = x.length};
for(i=0;i<x.length;i++)
{
x[i].style.display = "none";
}
x[index-1].style.display = "block";
}
autoSlide();
function autoSlide(){
var i;
var x = document.getElementsByClassName("slides");
for(i=0;i<x.length;i++){
x[i].style.display = "none";
}
index++;
if(index > x.length){index = 1}
x[index-1].style.display = "block";
setTimeout(autoSlide,3000);

}
</script>