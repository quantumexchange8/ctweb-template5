@extends('layout.master')

@section('content')

<div class="sf-contener clearfix second-bg ">
    <nav class="nav-wrap container_9">
      <ul class="sf-menu clearfix  ">
        <li class="item"><a class="parent" href="/home">Home</a> </li>
        <li class="item"><a class="parent" href="/home">Products</a>
          <ul>
            <li><a href="/productList">Product list</a></li>
            <li><a href="/productGrid">Product grid</a></li>
          </ul>
        </li>
        <li class="item"><a class="parent" href="/productDetails">Single Product</a> </li>
        <li class="item"><a class="parent"  href="/shoppingCart">Shopping Cart</a></li>
        <li  class="item"><a class="parent"  href="/checkOut">Checkout</a></li>
        <li class="item"><a class="parent" href="/blog">Blog</a>
        <li class="item"><a class="parent" href="/single_Post">Single Post</a></li>
        </li>
      </ul>
    </nav>
  </div>
  <div class="slider-home-page">
  
  <!--[if IE 8 ]>
    <link rel="stylesheet" href="css/skin 4/ie-style.css" />
<![endif]-->

    <link rel="stylesheet" href="css/iview.css" />
    <link rel="stylesheet" href="css/skin 4/style.css" />
    <script type="text/javascript" src="js/raphael-min.js"></script> 
    <script type="text/javascript" src="js/jquery.easing.js"></script> 
    <script src="js/iview.js"></script> 
    <script>
			$(document).ready(function(){
				$('#iview').iView({
	                pauseTime: 7000,
					pauseOnHover: true,
					directionNav: true,
					directionNavHide: false,
					controlNav: true,
					controlNavNextPrev: false,
					controlNavTooltip: false,
					nextLabel: "Próximo",
					previousLabel: "Anterior",
					playLabel: "Jugada",
					pauseLabel: "Pausa",
					timer: "360Bar",
					timerBg: "#EEE",
					timerColor: "#000",
					timerDiameter: 40,
					timerPadding: 4,
					timerStroke: 8,
					timerPosition: "bottom-right"
				});
			});
		</script>
    <div id="iview">
      <div data-iview:thumbnail="photos/photo11_thumb.jpg" data-iview:image="media/slide-01.jpg">
        <div class="iview-caption caption1" data-x="100" data-y="150" data-transition="expandDown">
          <h3>AWESOME FURNITURE</h3>
          <h5> <strong>50%</strong> OFF<br>
            TRENDY <strong>DESIGNS</strong> </h5>
        </div>
      </div>
      <div data-iview:thumbnail="photos/photo12_thumb.jpg" data-iview:image="media/slide-02.jpg" data-iview:transition="block-drop-random" data-iview:pausetime="2000">
        <div class="iview-caption caption1" data-x="100" data-y="150" data-transition="expandDRight">
          <h3>AWESOME FURNITURE</h3>
          <h5> <strong>50%</strong> OFF<br>
            TRENDY <strong>DESIGNS</strong> </h5>
        </div>
      </div>
      <div data-iview:thumbnail="photos/photo13_thumb.jpg" data-iview:image="media/slide-03.jpg">
        <div class="iview-caption caption1" data-x="100" data-y="150" data-transition="expandLeft">
          <h3>AWESOME FURNITURE</h3>
          <h5> <strong>50%</strong> OFF<br>
            TRENDY <strong>DESIGNS</strong> </h5>
        </div>
      </div>
    </div>
  </div>
  <section  id="columns" class="container_9 clearfix col1" > 
    
    <!-- Center -->
    <article id="center_column" class=" grid_5" >
      <div class="category-list">
        <ul class="products-grid first ">
          <li class="fadeIn animated"> <span class="overlay first-bg"> </span>
            <h3><a href="#">Category Name 01</a></h3>
            <a href="#"> <img src="media/cat.jpg" width="369" height="133"></a> </li>
          <li class="fadeIn animated"> <span class="overlay first-bg"> </span>
            <h3><a href="#">Category Name 02</a></h3>
            <a href="#"> <img src="media/cat2.jpg" width="369" height="133"></a> </li>
          <li class="fadeIn animated last"> <span class="overlay first-bg"> </span>
            <h3><a href="#">Category Name 03</a></h3>
            <a href="#"> <img src="media/cat3.jpg" width="369" height="133"></a> </li>
        </ul>
      </div>
      <div class="width-carousel">
        <div class="title-box">
          <h3 class="title-carousel first-brd">Featured</h3>
        </div>
        
        <!-- bxSlider Javascript file --> 
        <script src="js/jquery.bxslider.min.js"></script> 
        <!-- bxSlider CSS file -->
        <link href="css/jquery.bxslider.css" rel="stylesheet" />
        <script>
$(document).ready(function(){
  $('.bxslider').bxSlider({ 
    slideWidth: 270,
    minSlides: 4,
    maxSlides: 4,
    slideMargin: 28
  });
});
</script>
        <ul class="products-grid first odd bxslider">
          <li class="item first fadeIn animated"> <a class="fa-search-btn first-bg"  href="media/246-thickbox_default.jpg"> enlarge image <i class="icon-search"></i></a> <a class="product-image" title="Product Name" href="/"> <img src="media/home-default.png" width="249" height="180" alt="product"></a>
            <h2 class="product-name"> <a title="Product Name" href="/"> Product Name </a> </h2>
            <div class="actions"> <a class="btn-circle first-bg-hover"> <i class="icon-heart"></i> </a> <a class="btn-circle first-bg-hover"> <i class="icon-shopping-cart"></i> </a> <a class="btn-circle first-bg-hover"> <i class="icon-exchange"></i> </a> </div>
          </li>
          <li class="item first fadeIn animated"> <a class="fa-search-btn first-bg"  href="media/246-thickbox_default.jpg"> enlarge image <i class="icon-search"></i></a> <a class="product-image" title="Product Name" href="/"> <img src="media/home-default2.png" width="249" height="180" alt="product"></a>
            <h2 class="product-name"> <a title="Product Name" href="/"> Product Name </a> </h2>
            <div class="actions"> <a class="btn-circle first-bg-hover"> <i class="icon-heart"></i> </a> <a class="btn-circle first-bg-hover"> <i class="icon-shopping-cart"></i> </a> <a class="btn-circle first-bg-hover"> <i class="icon-exchange"></i> </a> </div>
          </li>
          <li class="item first fadeIn animated"> <a class="fa-search-btn first-bg"  href="media/246-thickbox_default.jpg"> enlarge image <i class="icon-search"></i></a> <a class="product-image" title="Product Name" href="/"> <img src="media/home-default3.png" width="249" height="180" alt="product"></a>
            <h2 class="product-name"> <a title="Product Name" href="/"> Product Name </a> </h2>
            <div class="actions"> <a class="btn-circle first-bg-hover"> <i class="icon-heart"></i> </a> <a class="btn-circle first-bg-hover"> <i class="icon-shopping-cart"></i> </a> <a class="btn-circle first-bg-hover"> <i class="icon-exchange"></i> </a> </div>
          </li>
          <li class="item first fadeIn animated"> <a class="fa-search-btn first-bg"  href="media/246-thickbox_default.jpg"> enlarge image <i class="icon-search"></i></a> <a class="product-image" title="Product Name" href="/"> <img src="media/home-default4.png" width="249" height="180" alt="product"></a>
            <h2 class="product-name"> <a title="Product Name" href="/"> Product Name </a> </h2>
            <div class="actions"> <a class="btn-circle first-bg-hover"> <i class="icon-heart"></i> </a> <a class="btn-circle first-bg-hover"> <i class="icon-shopping-cart"></i> </a> <a class="btn-circle first-bg-hover"> <i class="icon-exchange"></i> </a> </div>
          </li>
          <li class="item first fadeIn animated"> <a class="fa-search-btn first-bg"  href="media/246-thickbox_default.jpg"> enlarge image <i class="icon-search"></i></a> <a class="product-image" title="Product Name" href="/"> <img src="media/home-default.png" width="249" height="180" alt="product"></a>
            <h2 class="product-name"> <a title="Product Name" href="/"> Product Name </a> </h2>
            <div class="actions"> <a class="btn-circle first-bg-hover"> <i class="icon-heart"></i> </a> <a class="btn-circle first-bg-hover"> <i class="icon-shopping-cart"></i> </a> <a class="btn-circle first-bg-hover"> <i class="icon-exchange"></i> </a> </div>
          </li>
          <li class="item first fadeIn animated"> <a class="fa-search-btn first-bg"  href="media/246-thickbox_default.jpg"> enlarge image <i class="icon-search"></i></a> <a class="product-image" title="Product Name" href="/"> <img src="media/home-default2.png" width="249" height="180" alt="product"></a>
            <h2 class="product-name"> <a title="Product Name" href="/"> Product Name </a> </h2>
            <div class="actions"> <a class="btn-circle first-bg-hover"> <i class="icon-heart"></i> </a> <a class="btn-circle first-bg-hover"> <i class="icon-shopping-cart"></i> </a> <a class="btn-circle first-bg-hover"> <i class="icon-exchange"></i> </a> </div>
          </li>
          <li class="item first fadeIn animated"> <a class="fa-search-btn first-bg"  href="media/246-thickbox_default.jpg"> enlarge image <i class="icon-search"></i></a> <a class="product-image" title="Product Name" href="/"> <img src="media/home-default3.png" width="249" height="180" alt="product"></a>
            <h2 class="product-name"> <a title="Product Name" href="/"> Product Name </a> </h2>
            <div class="actions"> <a class="btn-circle first-bg-hover"> <i class="icon-heart"></i> </a> <a class="btn-circle first-bg-hover"> <i class="icon-shopping-cart"></i> </a> <a class="btn-circle first-bg-hover"> <i class="icon-exchange"></i> </a> </div>
          </li>
          <li class="item first fadeIn animated"> <a class="fa-search-btn first-bg"  href="media/246-thickbox_default.jpg"> enlarge image <i class="icon-search"></i></a> <a class="product-image" title="Product Name" href="/"> <img src="media/home-default4.png" width="249" height="180" alt="product"></a>
            <h2 class="product-name"> <a title="Product Name" href="/"> Product Name </a> </h2>
            <div class="actions"> <a class="btn-circle first-bg-hover"> <i class="icon-heart"></i> </a> <a class="btn-circle first-bg-hover"> <i class="icon-shopping-cart"></i> </a> <a class="btn-circle first-bg-hover"> <i class="icon-exchange"></i> </a> </div>
          </li>
          <li class="item first fadeIn animated"> <a class="fa-search-btn first-bg"  href="media/246-thickbox_default.jpg"> enlarge image <i class="icon-search"></i></a> <a class="product-image" title="Product Name" href="/"> <img src="media/home-default.png" width="249" height="180" alt="product"></a>
            <h2 class="product-name"> <a title="Product Name" href="/"> Product Name </a> </h2>
            <div class="actions"> <a class="btn-circle first-bg-hover"> <i class="icon-heart"></i> </a> <a class="btn-circle first-bg-hover"> <i class="icon-shopping-cart"></i> </a> <a class="btn-circle first-bg-hover"> <i class="icon-exchange"></i> </a> </div>
          </li>
          <li class="item first fadeIn animated"> <a class="fa-search-btn first-bg"  href="media/246-thickbox_default.jpg"> enlarge image <i class="icon-search"></i></a> <a class="product-image" title="Product Name" href="/"> <img src="media/home-default2.png" width="249" height="180" alt="product"></a>
            <h2 class="product-name"> <a title="Product Name" href="/"> Product Name </a> </h2>
            <div class="actions"> <a class="btn-circle first-bg-hover"> <i class="icon-heart"></i> </a> <a class="btn-circle first-bg-hover"> <i class="icon-shopping-cart"></i> </a> <a class="btn-circle first-bg-hover"> <i class="icon-exchange"></i> </a> </div>
          </li>
          <li class="item first fadeIn animated"> <a class="fa-search-btn first-bg"  href="media/246-thickbox_default.jpg"> enlarge image <i class="icon-search"></i></a> <a class="product-image" title="Product Name" href="/"> <img src="media/home-default3.png" width="249" height="180" alt="product"></a>
            <h2 class="product-name"> <a title="Product Name" href="/"> Product Name </a> </h2>
            <div class="actions"> <a class="btn-circle first-bg-hover"> <i class="icon-heart"></i> </a> <a class="btn-circle first-bg-hover"> <i class="icon-shopping-cart"></i> </a> <a class="btn-circle first-bg-hover"> <i class="icon-exchange"></i> </a> </div>
          </li>
          <li class="item first fadeIn animated"> <a class="fa-search-btn first-bg"  href="media/246-thickbox_default.jpg"> enlarge image <i class="icon-search"></i></a> <a class="product-image" title="Product Name" href="/"> <img src="media/home-default4.png" width="249" height="180" alt="product"></a>
            <h2 class="product-name"> <a title="Product Name" href="/"> Product Name </a> </h2>
            <div class="actions"> <a class="btn-circle first-bg-hover"> <i class="icon-heart"></i> </a> <a class="btn-circle first-bg-hover"> <i class="icon-shopping-cart"></i> </a> <a class="btn-circle first-bg-hover"> <i class="icon-exchange"></i> </a> </div>
          </li>
          <li class="item first fadeIn animated"> <a class="fa-search-btn first-bg"  href="media/246-thickbox_default.jpg"> enlarge image <i class="icon-search"></i></a> <a class="product-image" title="Product Name" href="/"> <img src="media/home-default.png" width="249" height="180" alt="product"></a>
            <h2 class="product-name"> <a title="Product Name" href="/"> Product Name </a> </h2>
            <div class="actions"> <a class="btn-circle first-bg-hover"> <i class="icon-heart"></i> </a> <a class="btn-circle first-bg-hover"> <i class="icon-shopping-cart"></i> </a> <a class="btn-circle first-bg-hover"> <i class="icon-exchange"></i> </a> </div>
          </li>
          <li class="item first fadeIn animated"> <a class="fa-search-btn first-bg"  href="media/246-thickbox_default.jpg"> enlarge image <i class="icon-search"></i></a> <a class="product-image" title="Product Name" href="/"> <img src="media/home-default2.png" width="249" height="180" alt="product"></a>
            <h2 class="product-name"> <a title="Product Name" href="/"> Product Name </a> </h2>
            <div class="actions"> <a class="btn-circle first-bg-hover"> <i class="icon-heart"></i> </a> <a class="btn-circle first-bg-hover"> <i class="icon-shopping-cart"></i> </a> <a class="btn-circle first-bg-hover"> <i class="icon-exchange"></i> </a> </div>
          </li>
          <li class="item first fadeIn animated"> <a class="fa-search-btn first-bg"  href="media/246-thickbox_default.jpg"> enlarge image <i class="icon-search"></i></a> <a class="product-image" title="Product Name" href="/"> <img src="media/home-default3.png" width="249" height="180" alt="product"></a>
            <h2 class="product-name"> <a title="Product Name" href="/"> Product Name </a> </h2>
            <div class="actions"> <a class="btn-circle first-bg-hover"> <i class="icon-heart"></i> </a> <a class="btn-circle first-bg-hover"> <i class="icon-shopping-cart"></i> </a> <a class="btn-circle first-bg-hover"> <i class="icon-exchange"></i> </a> </div>
          </li>
          <li class="item first fadeIn animated"> <a class="fa-search-btn first-bg"  href="media/246-thickbox_default.jpg"> enlarge image <i class="icon-search"></i></a> <a class="product-image" title="Product Name" href="/"> <img src="media/home-default4.png" width="249" height="180" alt="product"></a>
            <h2 class="product-name"> <a title="Product Name" href="/"> Product Name </a> </h2>
            <div class="actions"> <a class="btn-circle first-bg-hover"> <i class="icon-heart"></i> </a> <a class="btn-circle first-bg-hover"> <i class="icon-shopping-cart"></i> </a> <a class="btn-circle first-bg-hover"> <i class="icon-exchange"></i> </a> </div>
          </li>
        </ul>
      </div>
      <div class="promo-home">
        <ul>
          <li class="first-bg"><a href="#"><img src="media/promo1.png"></a></li>
          <li class="first-bg"><a href="#"><img src="media/promo2.png"></a></li>
          <li class="first-bg last"><a href="#"><img src="media/promo3.png" ></a></li>
        </ul>
      </div>
      <div class="width-carousel">
        <div class="title-box">
          <h3 class="title-carousel first-brd">Recent Products</h3>
        </div>
        
        <!-- bxSlider Javascript file --> 
        <script src="js/jquery.bxslider.min.js"></script> 
        <!-- bxSlider CSS file -->
        <link href="css/jquery.bxslider.css" rel="stylesheet" />
        <script>
$(document).ready(function(){
  $('.bxslider').bxSlider({ 
    slideWidth: 270,
    minSlides: 4,
    maxSlides: 4,
    slideMargin: 28
  });
});
</script>
        <ul class="products-grid first odd bxslider">
          <li class="item first fadeIn animated"> <a class="fa-search-btn first-bg"  href="media/246-thickbox_default.jpg"> enlarge image <i class="icon-search"></i></a> <a class="product-image" title="Product Name" href="/"> <img src="media/home-default.png" width="249" height="180" alt="product"></a>
            <h2 class="product-name"> <a title="Product Name" href="/"> Product Name </a> </h2>
            <div class="actions"> <a class="btn-circle first-bg-hover"> <i class="icon-heart"></i> </a> <a class="btn-circle first-bg-hover"> <i class="icon-shopping-cart"></i> </a> <a class="btn-circle first-bg-hover"> <i class="icon-exchange"></i> </a> </div>
          </li>
          <li class="item first fadeIn animated"> <a class="fa-search-btn first-bg"  href="media/246-thickbox_default.jpg"> enlarge image <i class="icon-search"></i></a> <a class="product-image" title="Product Name" href="/"> <img src="media/home-default2.png" width="249" height="180" alt="product"></a>
            <h2 class="product-name"> <a title="Product Name" href="/"> Product Name </a> </h2>
            <div class="actions"> <a class="btn-circle first-bg-hover"> <i class="icon-heart"></i> </a> <a class="btn-circle first-bg-hover"> <i class="icon-shopping-cart"></i> </a> <a class="btn-circle first-bg-hover"> <i class="icon-exchange"></i> </a> </div>
          </li>
          <li class="item first fadeIn animated"> <a class="fa-search-btn first-bg"  href="media/246-thickbox_default.jpg"> enlarge image <i class="icon-search"></i></a> <a class="product-image" title="Product Name" href="/"> <img src="media/home-default3.png" width="249" height="180" alt="product"></a>
            <h2 class="product-name"> <a title="Product Name" href="/"> Product Name </a> </h2>
            <div class="actions"> <a class="btn-circle first-bg-hover"> <i class="icon-heart"></i> </a> <a class="btn-circle first-bg-hover"> <i class="icon-shopping-cart"></i> </a> <a class="btn-circle first-bg-hover"> <i class="icon-exchange"></i> </a> </div>
          </li>
          <li class="item first fadeIn animated"> <a class="fa-search-btn first-bg"  href="media/246-thickbox_default.jpg"> enlarge image <i class="icon-search"></i></a> <a class="product-image" title="Product Name" href="/"> <img src="media/home-default4.png" width="249" height="180" alt="product"></a>
            <h2 class="product-name"> <a title="Product Name" href="/"> Product Name </a> </h2>
            <div class="actions"> <a class="btn-circle first-bg-hover"> <i class="icon-heart"></i> </a> <a class="btn-circle first-bg-hover"> <i class="icon-shopping-cart"></i> </a> <a class="btn-circle first-bg-hover"> <i class="icon-exchange"></i> </a> </div>
          </li>
          <li class="item first fadeIn animated"> <a class="fa-search-btn first-bg"  href="media/246-thickbox_default.jpg"> enlarge image <i class="icon-search"></i></a> <a class="product-image" title="Product Name" href="/"> <img src="media/home-default.png" width="249" height="180" alt="product"></a>
            <h2 class="product-name"> <a title="Product Name" href="/"> Product Name </a> </h2>
            <div class="actions"> <a class="btn-circle first-bg-hover"> <i class="icon-heart"></i> </a> <a class="btn-circle first-bg-hover"> <i class="icon-shopping-cart"></i> </a> <a class="btn-circle first-bg-hover"> <i class="icon-exchange"></i> </a> </div>
          </li>
          <li class="item first fadeIn animated"> <a class="fa-search-btn first-bg"  href="media/246-thickbox_default.jpg"> enlarge image <i class="icon-search"></i></a> <a class="product-image" title="Product Name" href="/"> <img src="media/home-default2.png" width="249" height="180" alt="product"></a>
            <h2 class="product-name"> <a title="Product Name" href="/"> Product Name </a> </h2>
            <div class="actions"> <a class="btn-circle first-bg-hover"> <i class="icon-heart"></i> </a> <a class="btn-circle first-bg-hover"> <i class="icon-shopping-cart"></i> </a> <a class="btn-circle first-bg-hover"> <i class="icon-exchange"></i> </a> </div>
          </li>
          <li class="item first fadeIn animated"> <a class="fa-search-btn first-bg"  href="media/246-thickbox_default.jpg"> enlarge image <i class="icon-search"></i></a> <a class="product-image" title="Product Name" href="/"> <img src="media/home-default3.png" width="249" height="180" alt="product"></a>
            <h2 class="product-name"> <a title="Product Name" href="/"> Product Name </a> </h2>
            <div class="actions"> <a class="btn-circle first-bg-hover"> <i class="icon-heart"></i> </a> <a class="btn-circle first-bg-hover"> <i class="icon-shopping-cart"></i> </a> <a class="btn-circle first-bg-hover"> <i class="icon-exchange"></i> </a> </div>
          </li>
          <li class="item first fadeIn animated"> <a class="fa-search-btn first-bg"  href="media/246-thickbox_default.jpg"> enlarge image <i class="icon-search"></i></a> <a class="product-image" title="Product Name" href="/"> <img src="media/home-default4.png" width="249" height="180" alt="product"></a>
            <h2 class="product-name"> <a title="Product Name" href="/"> Product Name </a> </h2>
            <div class="actions"> <a class="btn-circle first-bg-hover"> <i class="icon-heart"></i> </a> <a class="btn-circle first-bg-hover"> <i class="icon-shopping-cart"></i> </a> <a class="btn-circle first-bg-hover"> <i class="icon-exchange"></i> </a> </div>
          </li>
        </ul>
      </div>
      <div class="width-carousel brand-carousel">
        <div class="title-box">
          <h3 class="title-carousel first-brd">Our Brands</h3>
        </div>
        
        <!-- bxSlider Javascript file --> 
        <script src="js/jquery.bxslider.min.js"></script> 
        <!-- bxSlider CSS file -->
        <link href="css/jquery.bxslider.css" rel="stylesheet" />
        <script>
$(document).ready(function(){
  $('.bxslider2').bxSlider({ 
    slideWidth: 193,
    minSlides: 7,
    maxSlides: 7
  });
});
</script>
        <ul class="products-grid first odd bxslider2">
          <li class="item first fadeIn animated"> <a href="#"><img src="media/5.jpg" width="193" height="92"></a> </li>
          <li class="item first fadeIn animated"> <a href="#"><img src="media/6.jpg" width="193" height="92"></a> </li>
          <li class="item first fadeIn animated"> <a href="#"><img src="media/7.jpg" width="193" height="92"></a> </li>
          <li class="item first fadeIn animated"> <a href="#"><img src="media/8.jpg" width="193" height="92"></a> </li>
          <li class="item first fadeIn animated"> <a href="#"><img src="media/5.jpg" width="193" height="92"></a> </li>
          <li class="item first fadeIn animated"> <a href="#"><img src="media/6.jpg" width="193" height="92"></a> </li>
          <li class="item first fadeIn animated"> <a href="#"><img src="media/7.jpg" width="193" height="92"></a> </li>
          <li class="item first fadeIn animated"> <a href="#"><img src="media/8.jpg" width="193" height="92"></a> </li>
        </ul>
      </div>
    </article>
  </section>
  <div class="footer-info first-bg">
    <div class="container_9 clearfix">
      <p><a href="/"><img src="media/footer-banner.png" alt=""></a></p>
    </div>
  </div>
  @endsection