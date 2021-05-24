
<?php 

$conn = mysqli_connect("localhost","root","root","clubproj");

if(!$conn){
	echo 'Error: ' . mysqli_connect_error();
}


$name      =   $_POST['name'];
$phone       =   $_POST['phone'];
$clubname       =   $_POST['clubname'];


if(isset($_POST['submit'])){
	
   $sql = "INSeRT INTO club(name , number , clubname) 
          VALUES ('$name ' , '$phone ' , '$clubname') ";
  
     
     mysqli_query($conn , $sql);

}

?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="فندق للكلاب">
    <meta http-equiv="X-UA-compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<title>hotel</title>
</head>
<body>


  <!-- start navbar -->

  <div class="navbar-content text-sm-center">
  	<h1>اعرف اكثر  عن ناديك المفضل</h1>
  </div>

  <!-- end navbar -->

    <div class="schools-information">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-4 col-sm-12">
	    			<div class="card text-center" style="width: 18rem;">
						  <img src="imgs/gsc.jpg" class="card-img-top" alt="">
						  <div class="card-body">
						    <h5 class="card-title">نادى الجزيرة GSC </h5>
						  </div>
						  <ul class="about-school list-unstyled">
						    <li>
						    	<p>الموبايل: <span> 022123456789 </span></p>
						    </li>
						    <li>
						    	<p> المكان:<span> في مدينة السادس من أكتوبر</span></p>
						    </li>
						    <li>
						    	<p>الاشتراك :<span> 650 ألف جنيه للعائلة المكونة من زوج وزوجة</span></p>
						    </li>
						  </ul>
					</div>
			    </div>
    			<div class="col-md-4 col-sm-12">
	    			<div class="card text-center" style="width: 18rem;">
						  <img src="imgs/hsc.jfif" class="card-img-top" alt="">
						  <div class="card-body">
						    <h5 class="card-title">نادى الصيد</h5>
						  </div>
						  <ul class="about-school list-unstyled">
						    <li>
						    	<p>الموبايل: <span> 033123456789 </span></p>
						    </li>
						    <li>
						    	<p> المكان:<span> القطامية والسادس من أكتوبر</span></p>
						    </li>
						    <li>
						    	<p> الاشتراك :<span>  250 -300 ألف جنيه</span></p>
						    </li>
						  </ul>
					</div>
			    </div>
    			<div class="col-md-4 col-sm-12">
	    			<div class="card text-center" style="width: 18rem;">
						  <img src="imgs/eg.jfif" class="card-img-top" alt="">
						  <div class="card-body">
						    <h5 class="card-title"> نادى هليوبوليس الرياضى HSC</h5>
						  </div>
						  <ul class="about-school list-unstyled">
						    <li>
						    	<p>الموبايل: <span> 044123456789</span></p>
						    </li>
						    <li>
						    	<p> المكان:<span> مدينة الشروق</span></p>
						    </li>
						    <li>
						    	<p> الاشتراك:<span> 25 ألف دولار </span></p>
						    </li>
						  </ul>
					</div>
			    </div>
    		</div>
    		<div class="row">
    			<div class="col-md-4 col-sm-12">
	    			<div class="card text-center" style="width: 18rem;">
						  <img src="imgs/zamalek.jpg" class="card-img-top" alt="">
						  <div class="card-body">
						    <h5 class="card-title">نادى سبورتينج بالإسكندرية</h5>
						  </div>
						  <ul class="about-school list-unstyled">
						    <li>
						    	<p>الموبايل: <span>  055123456789 </span></p>
						    </li>
						    <li>
						    	<p> المكان:<span> الإسكندرية</span></p>
						    </li>
						    <li>
						    	<p> الاشتراك:<span>  175 ألف جنيه.</span></p>
						    </li>
						  </ul>
					</div>
			    </div>
    			<div class="col-md-4 col-sm-12">
	    			<div class="card text-center" style="width: 18rem;">
						  <img src="imgs/sport.jfif" class="card-img-top" alt="">
						  <div class="card-body">
						    <h5 class="card-title">النادى الأهلى</h5>
						  </div>
						  <ul class="about-school list-unstyled">
						    <li>
						    	<p>الموبايل: <span>  066123456789</span></p>
						    </li>
						    <li>
						    	<p> المكان:<span> مدينة نصر</span></p>
						    </li>
						    <li>
						    	<p> الاشتراك:<span>  160 ألف جنيه</span></p>
						    </li>
						  </ul>
					</div>
			    </div>
    			<div class="col-md-4 col-sm-12">
	    			<div class="card text-center" style="width: 18rem;">
						  <img src="imgs/smoha.jfif" class="card-img-top" alt="">
						  <div class="card-body">
						    <h5 class="card-title">نادى المعادى</h5>
						  </div>
						  <ul class="about-school list-unstyled">
						    <li>
						    	<p>الموبايل: <span> 077123456789 </span></p>
						    </li>
						    <li>
						    	<p> الامكان:<span> المعادي</span></p>
						    </li>
						    <li>
						    	<p> الاشتراك:<span> 120 ألف جنيه</span></p>
						    </li>
						  </ul>
					</div>
			    </div>
    		</div>
    		<div class="row">
    			<div class="col-md-4 col-sm-12">
	    			<div class="card text-center" style="width: 18rem;">
						  <img src="imgs/ahly.jfif" class="card-img-top" alt="">
						  <div class="card-body">
						    <h5 class="card-title">نادى سموحة بالإسكندرية</h5>
						  </div>
						  <ul class="about-school list-unstyled">
						    <li>
						    	<p>الموبايل: <span> 088123456789</span></p>
						    </li>
						    <li>
						    	<p> المكان:<span> سموحة</span></p>
						    </li>
						    <li>
						    	<p> الاشتراك:<span> 105 آلاف جنيه</span></p>
						    </li>
						  </ul>
					</div>
			    </div>
    			<div class="col-md-4 col-sm-12">
	    			<div class="card text-center" style="width: 18rem;">
						  <img src="imgs/degle.jpg" class="card-img-top" alt="">
						  <div class="card-body">
						    <h5 class="card-title">وادى دجلة</h5>
						  </div>
						  <ul class="about-school list-unstyled">
						    <li>
						    	<p>الموبايل: <span> 099123456789</span></p>
						    </li>
						    <li>
						    	<p> المكان:<span> الساس من اكتوبر</span></p>
						    </li>
						    <li>
						    	<p> الاشتراك:<span> 77 ألف جنيه</span></p>
						    </li>
						  </ul>
					</div>
			    </div>
    			<div class="col-md-4 col-sm-12">
	    			<div class="card text-center" style="width: 18rem;">
						  <img src="imgs/ma3ady.jfif" class="card-img-top" alt="">
						  <div class="card-body">
						    <h5 class="card-title">نادى الشمس</h5>
						  </div>
						  <ul class="about-school list-unstyled">
						    <li>
						    	<p>الموبايل: <span> 022789456123</span></p>
						    </li>
						    <li>
						    	<p> المكان:<span> مصر الجديدة</span></p>
						    </li>
						    <li>
						    	<p> الاشتراك:<span> 75 ألف جنيه</span></p>
						    </li>
						  </ul>
					</div>
			    </div>
    		</div>
    		<div class="row">
    			<div class="col-md-4 col-sm-12">
	    			<div class="card text-center" style="width: 18rem;">
						  <img src="imgs/ahly.jfif" class="card-img-top" alt="">
						  <div class="card-body">
						    <h5 class="card-title">الزمالك</h5>
						  </div>
						  <ul class="about-school list-unstyled">
						    <li>
						    	<p>الموبايل: <span> 033753951234</span></p>
						    </li>
						    <li>
						    	<p> المكان:<span> مصر الجديدة</span></p>
						    </li>
						    <li>
						    	<p> الاشتراك:<span> 65 ألف جنيه</span></p>
						    </li>
						  </ul>
					</div>
			    </div>
    			<div class="col-md-4 col-sm-12">
	    			<div class="card text-center" style="width: 18rem;">
						  <img src="imgs/hsc.jfif" class="card-img-top" alt="">
						  <div class="card-body">
						    <h5 class="card-title">نادى الصيد</h5>
						  </div>
						  <ul class="about-school list-unstyled">
						    <li>
						    	<p>الموبايل: <span> 033123456789 </span></p>
						    </li>
						    <li>
						    	<p> المكان:<span> القطامية والسادس من أكتوبر</span></p>
						    </li>
						    <li>
						    	<p> الاشتراك :<span>  250 -300 ألف جنيه</span></p>
						    </li>
						  </ul>
					</div>
			    </div>
    			<div class="col-md-4 col-sm-12">
	    			<div class="card text-center" style="width: 18rem;">
						  <img src="imgs/eg.jfif" class="card-img-top" alt="">
						  <div class="card-body">
						    <h5 class="card-title"> نادى هليوبوليس الرياضى HSC</h5>
						  </div>
						  <ul class="about-school list-unstyled">
						    <li>
						    	<p>الموبايل: <span> 044123456789</span></p>
						    </li>
						    <li>
						    	<p> المكان:<span> مدينة الشروق</span></p>
						    </li>
						    <li>
						    	<p> الاشتراك:<span> 25 ألف دولار </span></p>
						    </li>
						  </ul>
					</div>
			    </div>
    		</div>
    	</div>
    </div>

   <hr>
   
   <div class="information">
   	 <div class="container">
   	 	<form action="index.php" method="POST">
   	 		<div class="row">
   	 			<!-- <div class="col-md-6"> -->
   	 				<input type="text" name="name" id="name" placeholder="اكتب اسمك" class="form-control text-right mb-3">
   	 				<input type="number" name="phone" id="phone" placeholder="رقم الموبايل" class="form-control text-right mb-3">
   	 			<!-- </div> -->
                <!-- <div class="col-md-6"> -->
                	<input type="text" name="clubname" id="clubname" placeholder="اسم النادي" class="form-control text-right mb-3">
               	 	<input type="submit" name="submit" id="submit" value="ارسال" class="form-control">
                <!-- </div> -->
   	 		</div>
   	 	</form>
   	 </div>
   </div>


  <div class="footer-content text-center">
  	<p> &copy; جميع الحقوق محفوظة  </p>
  </div>


  	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>