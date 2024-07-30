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
  
  
      <!-- bxSlider Javascript file --> 
        <script src="js/jquery.bxslider.min.js"></script> 
        <!-- bxSlider CSS file -->
        <link href="css/jquery.bxslider.css" rel="stylesheet" />
        <script>
$(document).ready(function(){
  $('.category-slider').bxSlider({ 
  
       auto: true,
	   mode:'fade'

	
 
  });
});
</script>


  <ul class="category-slider">
    <li>  <img src="media/slide-01.jpg" width="1920" height="536"></li>
        <li>  <img src="media/slide-02.jpg" width="1920" height="536"></li>
            <li>  <img src="media/slide-03.jpg" width="1920" height="536"></li>
  </ul>

  </div>
  
  
   <div class="container_9 title-container"> <div class="page-title first-bg"> Furniture </div>
   
   <div class="breadcrumb"> 
   <a title="return to Home" href="/">Home</a> 
   <span class="navigation-pipe">/</span> 
   
      <a title="return to Home" href="/">Living Room</a> 
         <span class="navigation-pipe">/</span> 
   <span class="navigation_page">Product name</span> </div>
   
   
   </div>

<section  id="columns" class="container_9 clearfix col2-right">
 
  
    <!-- Center -->
    <article id="center_column" class=" grid_5">
      
      
          
          
       <div class="clearfix" id="primary_block"> 
          
          <!-- right infos-->
          <div id="pb-right-column"> 
            
            <!-- product img-->
            <div id="image-block">
              <link rel="stylesheet" href="css/prettyPhoto.css" />
              <script src="js/jquery.prettyPhoto.js"></script> 
              <script type="text/javascript">
  
  jQuery(document).ready(function() {
  
  $(".prettyPhoto").prettyPhoto();
       
  });
  
  </script> 
              <a class="prettyPhoto" href="media/246-thickbox_default.jpg"><img src="media/246-thickbox_default.jpg" width="470" height="261"></a> </div>
          </div>
          <div id="pb-left-column">
            <div id="short_description_block">
              <h1>Proins gravda</h1>
              <div class="price">
                <p class="our_price_display"> <span id="our_price_display">$345.00</span> </p>
              </div>
              <div class="rte align_justify" id="short_description_content">
                <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a</p>
              </div>
            </div>
            <form method="post" action="controller=cart" id="buy_block">
              <div class="product_attributes">
                <div class="add-to-box"> 
                  <script>
  $(document).ready(function(){
  
    
    
            $(".input a").click(function () {
          var inputEl = $(this).parent().parent().children().next().children();
          var qty = inputEl.val();
          if ($(this).parent().hasClass("plus"))
              qty++;
          else
              qty--;
          if (qty < 0)
              qty = 0;
          inputEl.val(qty);
      })
      
      
      
  });
  </script>
                  <div class="input-qty-box">
                    <div class="input">
                      <ul class="range">
                        <li class="item minus"><a style=" cursor:pointer">-</a></li>
                        <li>
                          <input type="text" maxlength="3" size="2" value="1" class="input-text qty text" id="quantity_wanted" name="qty">
                        </li>
                        <li class="item plus"><a style=" cursor:pointer">+</a></li>
                      </ul>
                    </div>
                  </div>
                  <button class="btn-icon btn"><i class="icon-shopping-cart"></i> Add to Cart</button>
                  <button class="btn-icon btn"><i class="icon-heart"></i> Add to Wishlist</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        
        
              <script>
  $(document).ready(function(){
  
    
    
        $('.content-li:first').addClass ('active');
      $('.content-li:first').css ('display', 'block');
      
      $('ul.i-tab').delegate('li:not(.active)', 'click', function() {
      $(this).addClass('active').siblings().removeClass('active')
      .parents('.tabs').find('ul.tab-content .content-li').hide()
      .eq($(this).index()).show();
      })
      
      
      
  });
  </script>
        <div class="tabs">
          <ul class="i-tab">
            <li class="active first-bg-hover"> Description </li>
            <li class="first-bg-hover"> Ingredients </li>
            <li class="first-bg-hover"> How to use </li>
            <li class="last first-bg-hover"> Video </li>
          </ul>
          <ul class="tab-content">
            <li class="content-li active" style="display: block;">
              <div class="box-collateral box-description">
                <div class="std">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  <p> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratcommodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
                </div>
              </div>
            </li>
            <li class="content-li">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <p> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi arcoluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
            </li>
            <li class="content-li">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <p> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius moincidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
            </li>
            <li class="content-li">
             <iframe src="//player.vimeo.com/video/58894324" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> <p><a href="http://vimeo.com/58894324">White Bedroom, CGI artwork</a> from <a href="http://vimeo.com/jurajtalcik">JurajTalcik</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
            </li>
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