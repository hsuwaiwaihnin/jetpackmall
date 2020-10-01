<x-frontend1>
	<section class="ftco-section ftco-cart">
		<div class="container  shoppingcart_div">
			<div class="row">
				<div class="col-md-12">
					<table class="table">
						<thead class="thead-primary">
							<tr class="text-center">
								<th>Products</th>
								<th>Price</th>
								<th>Quantity</th>
								<th>Total</th>
								<th></th>
							</tr>
						</thead>
						<tbody></tbody>
					</table>
				</div>
				<div class="col-lg-6 mt-5">
					<textarea placeholder="Notes" rows="5" cols="83" id="notes">
					</textarea>
				</div>
			</div>
			
			<div class="row justify-content-center">
				<div class="cart-total mb-3">
					<h3>Cart Totals</h3>
					<li>Total<span class="totality"></span></li>
				</div>
				<div>
					<div class="float-left">
					<a href="{{route('index')}}" class="btn btn-primary py-3 px-4">CONTINUE SHOPPING</a>
					</div>
				@if(Auth::check())
					<a href="javascript:void(0)" class="btn btn-primary py-3 px-4 checkoutBtn">PROCEED TO CHECKOUT</a>
				@else
					<a href="{{route('login')}}" class="btn btn-primary py-3 px-4">LOGIN TO CHECKOUT</a>
				@endif
				</div>
				</div>
			</div>
		</div>
	</section>
</x-frontend1>