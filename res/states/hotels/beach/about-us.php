<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Food ordering system</title>
     <?php 
  	   include('css_files.php'); 
  	 ?>  
 </head>
 
 
 <body>

     <div class="loader"><img src="images/loading.gif" alt="" /></div>
        <!--banner section-->
        <section>
         <div class="banner">
         <img class="img-responsive logo1" src="images/logo.png"/ width="500" height="500">
		<center><img src="images/food.jpeg"  class="img-responsive" / width="500" height="100"></center>
	</div>
      <!--banner section close-->  
      <?php 
  	   include('nav_bar.php'); 
  	 ?>
</section>
<div class="clearfix"></div> 
<!--About -->
<section>
    <div class="container">
        <div class="row">
            <!--about text-->
            <div class="about">
                <div class="section-title2">
                     <div class="main_h3" style="color:#0CF;" align="center">The History</div>
                     <div class="line" align="center"><img class="img-responsive" src="images/undr.png" /></div> 
                 </div>
                             <div class="inner2">
                                <p>chili restaurant</p>
                                 <span></span>
                                 </div>
                                 <div class="abt-cntnt">
                <p> chili is the soul of southern India and we stand for authentic Indian cuisine. Here at chili, our aim is to bring to your table the essence of our rich heritage of taste and culinary culture. Our chefs excel in treating you with the most delectable spread and we have proved ourselves over the years of being the ones to present the same to you in the most outstanding manner. Our restaurant has a milieu that is comforting and enjoyable with spacious and sophisticated interiors and service crews that will make you feel special, welcome and relaxed. .</p>
            </div>
            </div>
            </div>
            <!--about text close-->
            </div>
            
            </section>
 
    <div class="container">
            <div class="section-title2"></div>
            <div class="row">
               <div class="col-md-4" align="center"><img src="images/thumb1.jpg" class="img img-circle" width="270" height="220" alt="" /></div>
            <div class="col-md-8">
              <div class="main_h3" style="color:#0CF;">What We Can Do</div>
              <ul class="list icons"><font color="orange">
                <li><i class="fa fa-cutlery"></i>we can acomodate 40 people</li>
                <li><i class="fa fa-leaf"></i>fresh food every day, produced locally from our neightbours</li>
                <li><i class="fa fa-trophy"></i>world renouned chefs with 20 years experience</li>
                <li><i class="fa fa-glass"></i>need a romantic getaway, kateleya is for you</li>
                <li><i class="fa fa-coffee"></i>or maybe a business dinner, try us now or just come for a cupcontact us of exelent coffee</li></font>
              </ul>
          </div>
       </div>
   </div>           
</section>


<!-- Start Our Specials -->
<section>
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="">
<div class="section-title2">
      <div class="main_h3" style="color:#0CF;" align="center">Our Specials</div>
         <div class="line" align="center"><img class="img-responsive" src="images/undr.png" /></div> 
    </div>
     <div class="inner2">
        <p>These fine folks trusted tha award winning restaurant</p>
         <span></span>
         </div>
          <div class="marq">
    <marquee direction="left" scrollamount="10" onmouseover="this.stop();" onmouseout="this.start();">
    <img src="images/1-1.jpg" style="padding-right:15px;" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img src="images/1-2.jpg" style="padding-right:15px;" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img src="images/1-3.jpg" style="padding-right:15px;" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img src="images/1-4.jpg" style="padding-right:15px;" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img src="images/1-5.jpg" style="padding-right:15px;" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img src="images/1-6.jpg" style="padding-right:15px;" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </marquee>
    </div>
   </div>
  </div>
 </div>
</div>
</section> 
<!-- End Our Specials -->        

<?php 
	include('footer.php');
	include('js_files.php');
?>
</body>
</html>
