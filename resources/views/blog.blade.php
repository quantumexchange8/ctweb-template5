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
    <div class="page-title first-bg"> Blog </div>
    <div class="breadcrumb"> <a title="return to Home" href="/">Blog</a> <span class="navigation-pipe">/</span> <span class="navigation_page">News furniture</span> </div>
  </div>
  <section  id="columns" class="container_9 clearfix col2-right"> 
    
    <!-- Center -->
    <article id="center_column" class=" grid_5">
      <ul class="post-list">
        <li>
          <div class="thumbnails"> <a href="#"><img src="media/post1.jpg" width="869" height="334"></a></div>
          <h3 class="title-post">Crave at CES: On the lookout for weird (pictures)</h3>
          <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Clatss aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a </p>
          <div class="post-details">
            <table>
              <tr>
                <td>13 comments</td>
                <td>Dec 31, 2012</td>
                <td class="first-bg"><a href="#" >Read more</a></td>
              </tr>
            </table>
          </div>
        </li>
        <li>
          <div class="thumbnails"> <a href="#"><img src="media/post2.jpg" width="869" height="334"></a></div>
          <h3 class="title-post">Crave at CES: On the lookout for weird (pictures)</h3>
          <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Clatss aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a </p>
          <div class="post-details">
            <table>
              <tr>
                <td>13 comments</td>
                <td>Dec 31, 2012</td>
                <td class="first-bg"><a href="#" >Read more</a></td>
              </tr>
            </table>
          </div>
        </li>
        <li>
          <div class="thumbnails"> <a href="#"><img src="media/post3.jpg" width="869" height="334"></a></div>
          <h3 class="title-post">Crave at CES: On the lookout for weird (pictures)</h3>
          <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Clatss aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a </p>
          <div class="post-details">
            <table>
              <tr>
                <td>13 comments</td>
                <td>Dec 31, 2012</td>
                <td class="first-bg"><a href="#" >Read more</a></td>
              </tr>
            </table>
          </div>
        </li>
      </ul>
    </article>
    
    <!-- Right -->
    <aside id="right_column" class="column grid_2 omega">
      <div  class="block block-news">
        <h4 class="title_block">Categories</h4>
        <div class="block_content">
          <ul >
            <li> <a href="#">Print design  (3)</a> </li>
            <li> <a href="#">User Interface  (7)</a> </li>
            <li> <a href="#">Photography  (1)</a> </li>
            <li> <a href="#">User Experience  (12)</a> </li>
            <li> <a href="#">Wallpapers  (32)</a> </li>
            <li> <a href="#">Futuristic Designs  (2)</a> </li>
          </ul>
        </div>
      </div>
      <div  class="block block-news block-tags">
        <h4 class="title_block">Tags</h4>
        <div class="block_content"> <a href="#" class="first-bg">web design</a> <a  class="first-bg" href="#">Html</a> <a  class="first-bg" href="#">User Interface</a> <a  class="first-bg" href="#">Photography</a> <a  class="first-bg" href="#">Css </a> <a  class="first-bg" href="#">Wallpapers</a> <a  class="first-bg" href="#">Php</a> <a  class="first-bg" href="#">Photography</a> <a  class="first-bg" href="#">Interface</a> </div>
      </div>
      <div  class="block block-news block-flickr">
        <h4 class="title_block">Flickr Gallery</h4>
        <div class="block_content"> <a href="#"><img src="media/images/flick_1.png" width="68" height="68"></a> <a href="#"><img src="media/images/flick_2.png" width="68" height="68"></a> <a href="#"><img src="media/images/flick_3.png" width="68" height="68"></a> <a href="#"><img src="media/images/flick_4.png" width="68" height="68"></a> <a href="#"><img src="media/images/flick_5.png" width="68" height="68"></a> <a href="#"><img src="media/images/flick_6.png" width="68" height="68"></a> <a href="#"><img src="media/images/flick_7.png" width="68" height="68"></a> <a href="#"><img src="media/images/flick_8.png" width="68" height="68"></a> <a href="#"><img src="media/images/flick_9.png" width="68" height="68"></a> </div>
      </div>
      <div  class="block block-news block-tweet">
        <h4 class="title_block">Latest Tweets</h4>
        <div class="block_content">
          <p><span style="color:#90c322;">@antiquefinderps</span><br>
            Can you open up a ticket with our Support team - <a href="/" style="color:#2e9aed">http://alldaypsd.com/twitter.jpg</a><br>
            They'll be able to help you out. Thanks! ^TK<br>
            <span style="color:#2e9aed">5 days ago</span></p>
        </div>
      </div>
      <div  class="block block-news block-video">
        <h4 class="title_block">Video Widget</h4>
        <div class="block_content"> 
          
          <!-- This version of the embed code is no longer supported. Learn more: https://vimeo.com/help/faq/embedding -->
          <object width="230" height="129">
            <param name="allowfullscreen" value="true" />
            <param name="allowscriptaccess" value="always" />
            <param name="movie" value="http://vimeo.com/moogaloop.swf?clip_id=58894324&amp;force_embed=1&amp;server=vimeo.com&amp;show_title=1&amp;show_byline=1&amp;show_portrait=1&amp;color=00adef&amp;fullscreen=1&amp;loop=1" />
            <embed src="http://vimeo.com/moogaloop.swf?clip_id=58894324&amp;force_embed=1&amp;server=vimeo.com&amp;show_title=1&amp;show_byline=1&amp;show_portrait=1&amp;color=00adef&amp;fullscreen=1&amp;autoplay=1&amp;loop=1" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always" width="230" height="129"></embed>
          </object>
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