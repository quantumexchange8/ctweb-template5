<!DOCTYPE html>

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!--[if IE 8 ]> <html class="ie8"> <![endif]-->
<!--[if IE 9 ]> <html class="ie9"> <![endif]-->

<!--[if IE 7]>
<script type="text/javascript">
location.replace("http://windows.microsoft.com/en-US/internet-explorer/products/ie/home");
</script>
<![endif]-->

<html>
<head>
<title>Online Sale</title>
<meta name="viewport" content="width=device-width; initial-scale=1.0;" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="icon" href="favicon.ico" type="Current Tech Template 5" />
<link href="css/styles.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/custom-style.css" rel="stylesheet" type="text/css" media="all" />

<!--[if IE 8 ]>
<link href="css/ie-grid.css" rel="stylesheet" type="text/css" media="all" />
<![endif]-->

<script src="js/jquery-1.7.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<link rel="stylesheet" href="css/prettyPhoto.css" />
<script src="js/jquery.prettyPhoto.js"></script>
<script type="text/javascript">

jQuery(document).ready(function() {

$(".fa-search-btn").prettyPhoto();

	
});

</script>
</head>

<body id="index" class=" ">
<div id="page" class="clearfix">
  <div class="navbar navbar-static top-links first-bg" >
    <div class="navbar-inner container_9">
      <ul id="header_nav" class="nav pull-left">
        <li ><i class="icon-user"></i> <a href="#">My Account</a></li>
        <li><i class="icon-heart"></i> <a href="/">Wishlist </a></li>
      </ul>
      <ul id="header_nav" class="nav pull-right">
        <li ><i class="icon-shopping-cart"></i> <a href="#">Shopping Cart</a></li>
        <li><i class="icon-circle-arrow-right"></i> <a href="/">Checkout </a></li>
      </ul>
    </div>
  </div>
  
   <!-- Header -->
   @include('layout.navbar')

   <!-- Main -->
   @yield('content')

   <!-- Footer -->
   @include('layout.footer')

   
</div>
</body>
</html>
