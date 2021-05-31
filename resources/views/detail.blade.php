@extends('master')
@section("content")
<div class='container-fluid'>
    <div class="card card_details mx-auto col-md-3 col-10 mt-5">
         <img class='mx-auto img-thumbnail'
         src="{{$product['gallery']}}" alt="" width="auto" height="auto" />
        <div class="card-body text-center mx-auto">
            <div class='cvp'>
                <h5 class="card-title font-weight-bold">{{$product['name']}}</h5>
                <p class="card-text">
                <h3>Price:{{$product['price']}}</h3>
<h4>Discription:{{$product['description']}}</h4>
<h5>Category:{{$product['category']}}</h5>
</p>
                 <a href="/" class="btn details px-auto">
                Go Back</a><br /> 
                 <form action="/add_to_card" method="post">
                   @csrf
                 <input type="hidden" name="product_id" value="{{$product['id']}}">
                      <button class="btn details px-auto">Add To Cart</button>
                        </form>

                <a href="#" class="btn cart px-auto">Buy Now</a>
            </div>
        </div>
    </div>
</div>
@endsection