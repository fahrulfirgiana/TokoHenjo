<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/111.jpg" type="">
      <title>HEnjo - Taman Haji Enjo</title>
      <!-- bootstrap core css -->
      
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <link rel="stylesheet" href="{{ asset('home/css/main.css') }}">
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         @include('home.header')
         <!-- end header section -->
         <!-- slider section -->
         <section class="product_section layout_padding">
          <div class="container">
             <div class="heading_container heading_center">
                <h2>
                   Our <span>products</span>
                </h2>
                <br><br>
                <div>
                 <form action="{{url('produk_search')}}" method="get" >
                    @csrf
                    <input style="width: 500px;" type="text" name="search" placeholder="Search Something">
                    <input type="submit" value="search">
                 </form>
                </div>
             </div>
             <div class="row">
       
          <div class="grid grid-cols-4 gap-6">
              @foreach ($product as $products)
              <div class="bg-white shadow rounded overflow-hidden group">
                  <div class="relative">
                      <a href="{{url('product_details',$products->id)}}">
                          <img src="product/{{$products->image}}" alt="product 1" class="w-full">
                      </a>
              </div>
              <div class="pt-4 pb-3 px-4">
                  <a href="#">
                      <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">{{$products->title}}</h4>
                  </a>
                  <div class="flex items-baseline mb-1 space-x-2">
                      @if ($products->discount_price!=null)
                      <p class="text-xl text-danger font-semibold">@currency($products->discount_price)</p>
                      <p class="text-sm text-gray-400 line-through">@currency($products->price)</p>
                      @else
                      <p class="text-xl text-gray font-semibold">@currency($products->price)</p>
                      @endif
                  </div>
              </div>
                  <a href="{{url('product_details',$products->id)}}"
                  class="block w-full py-1 text-center text-white bg-danger border border-danger rounded-b hover:bg-transparent hover:text-danger transition">See Detail</a>
              </div>
       
              @endforeach
                  
          </div>
       </div>
       </div>
       </section>
       <div class="container" style="padding-bottom: 50px;">
        <span>
            {!!$product->withQueryString()->links('pagination::bootstrap-5')!!}
        </span>
    </div>



      <!-- footer start -->
      @include('home.footer')
      <!-- footer end -->
      <div class="cpy_">
        <p class="mx-auto">© 2023 Copyright</a><br>
        
           Distributed By <a href="/">Taman H. Enjo</a>
        
        </p>
     </div>

      <script>
         document.addEventListener("DOMContentLoaded", function(event) { 
             var scrollpos = localStorage.getItem('scrollpos');
             if (scrollpos) window.scrollTo(0, scrollpos);
         });
 
         window.onbeforeunload = function(e) {
             localStorage.setItem('scrollpos', window.scrollY);
         };
     </script>


      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>