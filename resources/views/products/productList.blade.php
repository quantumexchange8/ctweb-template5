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
  <div class="category-full-image"> 
    

    <ul class="category-slider">
      <li> <img src="media/page-title-bg.jpg" ></li>
    </ul>
  </div>
  <div class="container_9 title-container">
    <div class="page-title first-bg"> Furniture </div>
    <div class="breadcrumb"> <a title="return to Home" href="/">Home</a> <span class="navigation-pipe">/</span> <span class="navigation_page">Living Room</span> </div>
  </div>
  <section  id="columns" class="container_9 clearfix col2-right"> 
    
    <!-- Center -->
    <article id="center_column" class=" grid_5">
      <div class="toolbar">
        <div class="sort-select">
          <label>Sort by</label>
          <select class="selectBox">
            <option>Position</option>
          </select>
        </div>
        <div class="sort-select">
          <label>Show</label>
          <select class="selectBox">
            <option>5 per page</option>
               <option>7 per page</option>
                  <option>9 per page</option>
          </select>
        </div>
        <div class="lg-panel htabs">
          <label>View</label>
          <a href="/productList" class="list-btn first-bg active" id="list"></a> <a class="grid-btn  first-bg " id="grid" href="/productGrid"></a> </div>
      </div>
      <ol id="products-list" class="products-list">
        <li class="item fadeIn animated"> <a rel="prettyPhoto[pp_gal]" class="product-image" title="" href="/productDetails"><img src="media/home-default.png" width="249" height="180" alt="product"></a>
          <div class="product-shop">
            <div class="no-fix">
              <h2 class="product-name"><a title="" href="/productDetails">Product name</a></h2>
              <div class="price-box"> <span id="product-price-51" class="regular-price"> <span class="price">$299.99</span> </span> </div>
              <div class="desc std"> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing </div>
            </div>
          </div>
          <div class="btn-set">
            <div class="actions"> <a class="btn-circle first-bg-hover"> <i class="icon-heart"></i> </a> <a class="btn-circle first-bg-hover"> <i class="icon-shopping-cart"></i> </a> <a class="btn-circle first-bg-hover"> <i class="icon-exchange"></i> </a> </div>
          </div>
        </li>
        <li class="item fadeIn animated"> <a rel="prettyPhoto[pp_gal]"  class="product-image" title="" href="/productDetails"><img src="media/home-default2.png" width="249" height="180" alt="product"></a>
          <div class="product-shop">
            <div class="no-fix">
              <h2 class="product-name"><a title="" href="/productDetails">Product name</a></h2>
              <div class="price-box"> <span id="product-price-51" class="regular-price"> <span class="price">$299.99</span> </span> </div>
              <div class="desc std"> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing </div>
            </div>
          </div>
          <div class="btn-set">
            <div class="actions"> <a class="btn-circle first-bg-hover"> <i class="icon-heart"></i> </a> <a class="btn-circle first-bg-hover"> <i class="icon-shopping-cart"></i> </a> <a class="btn-circle first-bg-hover"> <i class="icon-exchange"></i> </a> </div>
          </div>
        </li>
        <li class="item fadeIn animated"> <a rel="prettyPhoto[pp_gal]" class="product-image" title="" href="/productDetails"><img src="media/home-default3.png" width="249" height="180" alt="product"></a>
          <div class="product-shop">
            <div class="no-fix">
              <h2 class="product-name"><a title="" href="/productDetails">Product name</a></h2>
              <div class="price-box"> <span id="product-price-51" class="regular-price"> <span class="price">$299.99</span> </span> </div>
              <div class="desc std"> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing </div>
            </div>
          </div>
          <div class="btn-set">
            <div class="actions"> <a class="btn-circle first-bg-hover"> <i class="icon-heart"></i> </a> <a class="btn-circle first-bg-hover"> <i class="icon-shopping-cart"></i> </a> <a class="btn-circle first-bg-hover"> <i class="icon-exchange"></i> </a> </div>
          </div>
        </li>
      </ol>
      
      
      <div class="pagination">
        <div class="item-total"> Items 1 to 9 of 12 total </div>
        <ul>
          <li><a href="#">«</a></li>
          <li class="active first-bg-hover" ><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li><a href="#">»</a></li>
        </ul>
      </div>
    </article>
    
    <!-- Right -->
    <aside id="right_column" class="column grid_2 omega"> 
      
      <!-- Block categories module -->
      <div id="categories_block_left" class="block">
        <h4 class="title_block">Categories</h4>
        <div class="block_content">
          <ul class="tree dhtml">
            <li > <a href="/"  title="">Living Room</a>
              <ul>
                <li > <a href="/"  title="">Chairs</a> </li>
                <li > <a href="/"  title="">Sofas</a> </li>
                <li > <a href="/"  title="">Tables</a> </li>
                <li > <a href="/"  title="">Wardrobes</a> </li>
              </ul>
            </li>
            <li > <a href="/"  title="">DedRoom</a>
              <ul>
                <li > <a href="/"  title="">Sofas</a> </li>
                <li > <a href="/"  title="">Wardrobes</a> </li>
              </ul>
            </li>
            <li > <a href="/"  title="">Dining Room</a>
              <ul>
                <li > <a href="/"  title="">Wardrobes</a> </li>
                <li > <a href="/"  title="">Tables</a> </li>
                <li > <a href="/"  title="">Chairs</a> </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      <!-- /Block categories module --> 
      
      <!-- Block CMS module -->
      <div class="block" id="layered_block_left">
        <h4 class="title_block">Filter By</h4>
        <div class="block_content">
          <form id="layered_form" action="#">
            <div>
            <div> <span class="layered_subtitle">Categories</span>
              <div class="clear"></div>
              <ul class="Hide" id="ul_layered_category_0" >
                <li>
                  <input type="checkbox" id="layered_category_1" class="checkbox">
                  <label for="layered_category_1"> Jackets<span> (1)</span> </label>
                </li>
                <li>
                  <input type="checkbox" id="layered_category_2" class="checkbox">
                  <label for="layered_category_2"> Chairs <span> (10)</span> </label>
                </li>
                <li>
                  <input type="checkbox" id="layered_category_3" class="checkbox">
                  <label for="layered_category_3"> Kids & Babies<span> (1)</span> </label>
                </li>
                <li>
                  <input type="checkbox" id="layered_category_4" class="checkbox">
                  <label for="layered_category_4"> Electronics <span> (1)</span></label>
                </li>
                <li>
                  <input type="checkbox" id="layered_category_5" class="checkbox">
                  <label for="layered_category_5"> Jackets<span> (1)</span></label>
                </li>
              </ul>
            </div>
            <div> <span class="layered_subtitle">Condition</span>
              <div class="clear"></div>
              <ul class="Hide" id="ul_layered_condition_0" >
                <li >
                  <input type="checkbox" id="layered_Condition_1" class="checkbox">
                  <label for="layered_Condition_1"> New<span> (1)</span></label>
                </li>
                <li >
                  <input type="checkbox" id="layered_Condition_2" class="checkbox">
                  <label for="layered_Condition_2">Old<span> (1)</span></label>
                </li>
              </ul>
            </div>
            
            <!-- bxSlider Javascript file --> 
            <script src="js/jquery.slider.min.js"></script> 
            
            <!-- Javascripts All --> 
            <script src="js/scripts.js"></script> 
            <!-- Javascripts --> 
            <script src="js/jquery.nouislider.min.js"></script>
            <link rel="stylesheet" href="css/nouislider.fox.css" type="text/css" media="screen" />
            <div class="layered_price"> <span class="layered_subtitle">Price</span>
              <div class="clear"></div>
              <ul id="ul_layered_price_0" class="Hide">
                <div class="section-body">
                  <div class="range-slider-container">
                    <div class="range-slider"></div>
                    <div class="range-slider-value clearfix"> <span class="min"></span> <span class="max"></span> </div>
                  </div>
                </div>
              </ul>
            </div>
          </form>
        </div>
      </div>
    </aside>
  </section>
  <div class="footer-info first-bg">
    <div class="container_9 clearfix">
      <p><a href="/"><img src="media/footer-banner.png" alt=""></a></p>
    </div>
  </div>
    
@endsection