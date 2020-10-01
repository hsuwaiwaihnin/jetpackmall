<x-frontend1>
	<section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <span class="subheading">Featured Products</span>
            <h2 class="mb-4">Our Products</h2>
          </div>
        </div>      
      </div>
      <div class="container">
        <div class="row">
          @foreach($subcategoryitems as $sitem)
            @php 
            $id=$sitem->id;
            $codeno=$sitem->codeno;
            $name=$sitem->name;
            $photo=$sitem->photo;
            $price=$sitem->price;
            $discount=$sitem->discount;
            @endphp
          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="product">
              <a href="#" class="img-prod"><img class="img-fluid" src="{{asset($photo)}}" alt="Colorlib Template" style="width:100%; height: 200px;">
                <div class="overlay"></div>
              </a>
              <div class="text py-3 pb-4 px-3 text-center">
                <h3><a href="#">{{$name}}</a></h3>
                <div class="d-flex">
                  <div class="pricing">
                    <p class="price">
                      @php
                      if($discount){
                      @endphp
                      <span class="mr-2 price-dc">{{$price}}</span><span class="price-sale">{{$discount}}</span>
                      @php
                        }else{
                      @endphp
                      <span>{{$price}}</span>
                      @php
                        }
                      @endphp
                    </p>
                  </div>
                </div>
                <div class="bottom-area d-flex px-3">
                  <div class="m-auto d-flex">
                    <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                      <span><i class="ion-ios-menu"></i></span>
                    </a>
                    <a href="javascript:void(0)" class="buy-now d-flex justify-content-center align-items-center mx-1 addtocartBtn" data-id="{{$id}}" data-name="{{$name}}" data-codeno="{{$codeno}}" data-price="{{$price}}" data-discount="{{$discount}}" data-photo="{{$photo}}">
                      <span><i class="ion-ios-cart"></i></span>
                    </a>
                    <a href="#" class="heart d-flex justify-content-center align-items-center ">
                      <span><i class="ion-ios-heart"></i></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>
</x-frontend1>