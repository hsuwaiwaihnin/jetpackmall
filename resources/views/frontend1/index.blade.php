<x-frontend1>
	<section id="home-section" class="hero">
    <div class="home-slider owl-carousel">
        <div class="slider-item" style="background-image: url(frontend1/images/mall1.jpg);">
          <div class="overlay"></div>
          <div class="container">
            <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

              <div class="col-md-12 ftco-animate text-center">
                <h1 class="mb-2">100% Quality &amp; Styles</h1>
                <h2 class="subheading mb-4">We deliver high quality accessories </h2>
                <p><a href="#" class="btn btn-primary">View Details</a></p>
              </div>

            </div>
          </div>
        </div>

        <div class="slider-item" style="background-image: url(frontend1/images/mall.jpeg);">
          <div class="overlay"></div>
          <div class="container">
            <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

              <div class="col-sm-12 ftco-animate text-center">
                <h1 class="mb-2">Enjoy with Us</h1>
                <h2 class="subheading mb-4">We deliver high quality accessories</h2>
                <p><a href="#" class="btn btn-primary">View Details</a></p>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
    <div class="container">
      <div class="row no-gutters ftco-services">
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services mb-md-0 mb-4">
                    <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
                    <span class="flaticon-shipped"></span>
                    </div>
                    <div class="media-body">
                      <h3 class="heading">Free Shipping</h3>
                      <span>On order over $100</span>
                    </div>
                </div>      
              </div>
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
                <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
                <span class="flaticon-diet"></span>
                </div>
                <div class="media-body">
                  <h3 class="heading">Always Smart</h3>
                  <span>Product well package</span>
                </div>
            </div>    
        </div>
        <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
                <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
                <span class="flaticon-award"></span>
                </div>
                <div class="media-body">
                  <h3 class="heading">Superior Quality</h3>
                  <span>Quality Products</span>
                </div>
            </div>      
        </div>
        <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
                <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
                <span class="flaticon-customer-service"></span>
                </div>
                <div class="media-body">
                  <h3 class="heading">Support</h3>
                  <span>24/7 Support</span>
                </div>
            </div>      
        </div>
  </section>

  <section class="ftco-section ftco-category ftco-no-pt">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="row">
              <div class="col-md-6 order-md-last align-items-stretch d-flex">
                <div class="category-wrap-2 ftco-animate img align-self-stretch d-flex" style="background-image: url(frontend1/images/mall3.jpg);">
                  <div class="text text-center">
                    <h2>Accessories</h2>
                    <p>Needs for everyone</p>
                    <p><a href="#" class="btn btn-primary">Shop now</a></p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(frontend1/images/perfume.jpg);">
                  <div class="text px-3 py-1">
                    <h2 class="mb-0"><a href="#">Perfume</a></h2>
                  </div>
                </div>
                <div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(frontend1/images/handbag.jpg);">
                  <div class="text px-3 py-1">
                    <h2 class="mb-0"><a href="#">Bags</a></h2>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(frontend1/images/clothes.jpeg);">
              <div class="text px-3 py-1">
                <h2 class="mb-0"><a href="#">Clothes</a></h2>
              </div>    
            </div>
            <div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(frontend1/images/shoes.jpg);">
              <div class="text px-3 py-1">
                <h2 class="mb-0"><a href="#">Shoes</a></h2>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>

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
          @foreach($items as $item)
            @php 
            $id=$item->id;
            $codeno=$item->codeno;
            $name=$item->name;
            $photo=$item->photo;
            $price=$item->price;
            $discount=$item->discount;
            @endphp
          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="product">
              <a href="#" class="img-prod"><img class="img-fluid" src="{{$photo}}" alt="Colorlib Template" style="width:100%; height: 200px;">
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
                    <a href="#" class="heart d-flex justify-content-center align-items-center">
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

    <hr>

  <section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
      <div class="container py-4">
        <div class="row d-flex justify-content-center py-5">
          <div class="col-md-6">
            <h2 style="font-size: 22px;" class="mb-0">Subcribe to our Newsletter</h2>
            <span>Get e-mail updates about our latest shops and special offers</span>
          </div>
          <div class="col-md-6 d-flex align-items-center">
            <form action="#" class="subscribe-form">
              <div class="form-group d-flex">
                <input type="text" class="form-control" placeholder="Enter email address">
                <input type="submit" value="Subscribe" class="submit px-3">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
</x-frontend1>