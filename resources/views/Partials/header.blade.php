 <div class="agileits_header">
    <div class="w3l_offers">
      <a href="/">ALL AONE</a>
    </div>
    <div class="w3l_search">
      <form action="/" method="get">
        <input type="text" name="Product" value="Search a product..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search a product...';}" required="">
        <input type="submit" value=" ">
      </form>
    </div>
    <div class="product_list_header">  
      <form action="{{route('cart.index')}}" method="get" class="last">
                <fieldset>
                   
                    <input type="submit" name="submit" value="View your cart" class="button" />
                </fieldset>
            </form>
    </div>
    <div class="w3l_header_right">
      <ul>
        <li class="dropdown profile_details_drop">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i><span class="caret"></span></a>
          <div class="mega-dropdown-menu">
            <div class="w3ls_vegetables">
              <ul class="dropdown-menu drp-mnu">
                <li><a href="">Login</a></li> 
                <li><a href="">Sign Up</a></li>
              </ul>
            </div>                  
          </div>  
        </li>
      </ul>
    </div>
    <div class="w3l_header_right1">
      <h2><a href="{{route('contact.us')}}">Contact Us</a></h2>
    </div>
    <div class="clearfix"> </div>
  </div>
<!-- script-for sticky-nav -->
  <script>
  $(document).ready(function() {
     var navoffeset=$(".agileits_header").offset().top;
     $(window).scroll(function(){
      var scrollpos=$(window).scrollTop(); 
      if(scrollpos >=navoffeset){
        $(".agileits_header").addClass("fixed");
      }else{
        $(".agileits_header").removeClass("fixed");
      }
     });
     
  });
  </script>
<!-- //script-for sticky-nav -->
  <div class="logo_products">
    <div class="container">
      <div class="w3ls_logo_products_left">
        <h1><a href="/"><span>All</span> AONE</a></h1>
      </div>
      <div class="w3ls_logo_products_left1">
        <ul class="special_items">
          <li><a href="/">Home</a><i>/</i></li>
          <li><a href="{{route('contact.us')}}">About Us</a><i>/</i></li>
          <li><a href="">Best Deals</a><i>/</i></li>
          <li><a href="">Services</a></li>
        </ul>
      </div>
      <div class="w3ls_logo_products_left1">
        <ul class="phone_email">
          <li><i class="fa fa-phone" aria-hidden="true"></i>+92 348 8700224</li>
          <li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="/">sale@allaone.com</a></li>
        </ul>
      </div>
      <div class="clearfix"> </div>
    </div>
  </div>