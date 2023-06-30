
      <div class="hero_area">
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
                 <form action="{{url('product_search')}}" method="get" >
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

