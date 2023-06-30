<!DOCTYPE html>
<html>
   <head>
    <base href="/public">
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
      <link href="home/css/main.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />
   </head>
   <body>
    
    @include('sweetalert::alert')
      <div class="hero_area">
         <!-- header section strats -->
         @include('home.header')
  
         <div class="container py-4 flex items-center gap-3">
            <a href="../index.html" class="text-primary text-base">
            </a>
            <span class="text-sm text-gray-400">
            </span>
        </div>
        <!-- ./breadcrumb -->
      
        <!-- product-detail -->
        <div class="container grid grid-cols-2 gap-6">
            <div>
                <img style="border-radius:30px" src="{{ url('/product/'.$product->image) }}" alt="product" class="w-full">
                <div class="grid grid-cols-5 gap-4 mt-4">
                    
                </div>
            </div>
            <div>
              <br>
                <h2 class="text-3xl font-medium uppercase mb-2">{{$product->title}}</h2>
                <div class="space-y-2">
                  <p class="space-x-2">
                    <span class="text-gray-800 font-semibold">Kategori: </span>
                    <span class="text-gray-600">{{$product->catagory}}</span>
                  </p>
                  <p class="text-gray-800 font-semibold space-x-2">
                      <span>Stok Tersedia: </span>
                      <span class="text-gray-600">{{$product->quantity}}</span>
                  </p>
                  <p class="text-gray-800 font-semibold space-x-2">
                      <span>Harga Produk: </span>
                      <span class="text-gray-600">
                        @if ($product->discount_price!=null)
                        <p class="text-xl text-danger font-semibold">@currency($product->discount_price)</p>
                        <p class="text-sm text-gray-400 line-through">@currency($product->price)</p>
                        @else
                        <p class="text-xl text-gray font-semibold">@currency($product->price)</p>
                        @endif 
                      </span>
                  </p>
                </div>
                <div >
      
                
      
                <form action="{{url('add_cart',$product->id)}}" method="post">
                  @csrf
                <div class="mt-4">
                    <h3 class="text-sm text-gray-800 uppercase mb-1" for="quantity">Jumlah Beli:</h3>
                  <input type="number" name="jubel" value="1" min="1" class="border border-gray-400 p-2" style="width:100px; height: 35px; border:0px; text-align:center;">
                </div>
                @if (Session()->has('message'))

            <div class="alert alert-danger" role="alert" style="padding; width: 260px">
              <strong>Stok Habis!</strong>
            {{ Session()->get('message')}}
        </div>
    @endif
                <div class="mt-3 flex gap-3 border-b border-gray-200 pb-5">
                  <button type="submit" class="bg-danger border border-danger text-white px-8 py-2 font-medium rounded uppercase flex items-center gap-2 hover:bg-transparent hover:text-danger transition">
                      <i class="fa fa-shopping-cart"></i></i>Masukan Keranjang
                  </button>
                </div>
              </form>
            </div>
        </div>
        <!-- ./product-detail -->
      
        <!-- description -->
        <div class="container pb-16">
            <h3 class="border-b border-gray-200 font-roboto text-gray-800 pb-3 font-medium">Product details</h3>
            <div class="w-3/5 pt-6">
                <div class="text-gray-600">
                    <p>{{$product->description}}</p>
                    
                </div>
      
                <table class="table-auto border-collapse w-full text-left text-gray-600 text-sm mt-6">
                    <tr>
                        <th class="py-2 px-4 border border-gray-300 w-40 font-medium">Color</th>
                        <th class="py-2 px-4 border border-gray-300 ">Blank, Brown, Red</th>
                    </tr>
                    <tr>
                        <th class="py-2 px-4 border border-gray-300 w-40 font-medium">Material</th>
                        <th class="py-2 px-4 border border-gray-300 ">Latex</th>
                    </tr>
                    <tr>
                        <th class="py-2 px-4 border border-gray-300 w-40 font-medium">Weight</th>
                        <th class="py-2 px-4 border border-gray-300 ">55kg</th>
                    </tr>
                </table>
            </div>
        </div>
      </div>

      <!-- footer start -->
      @include('home.footer')
      <!-- footer end -->
      <div class="cpy_">
        <p class="mx-auto">© 2023 Copyright</a><br>
        
           Distributed By <a href="/">Taman H. Enjo</a>
        
        </p>
     </div>
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
      <script src="home/js/oi.js"></script>
   </body>
</html>