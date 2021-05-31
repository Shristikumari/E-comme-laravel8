@extends('master')
@section("content")

<div class="container d-flex justify-content-center">
    <figure class="card card-product-grid card-lg"> 
        <div class="bottom-wrap-payment">
            <figcaption class="info-wrap">
                <div class="row">
                    <div class="col-md-9 col-xs-9"> <a href="#" class="title" data-abc="true">
                    ${{$total}}</a> <span class="rated">Amount</span> </div>
                    <div class="col-md-3 col-xs-3">
                        <div class="rating text-right">Tax<span class="rated">$0</span> </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-9 col-xs-9"> <a href="#" class="title" data-abc="true">
                    $10</a> <span class="rated">delivery</span> </div>
                    <div class="col-md-3 col-xs-3">
                        <div class="rating text-right">Total<span class="rated"> ${{$total+10}}</span> </div>
                    </div>
                </div>
            </figcaption>
        </div>
        <figcaption class="info-wrap">
            <div class="row">
            <form action="/orderplace" method="post">
  @csrf
    <div class="form-group">
      <textarea type="text" class="form-control" id="text" placeholder="Enter Your Address"
       name="address"></textarea>
    </div>
    <div class="form-group">
      <label for="pwd">payment method</label>
      <input type="radio" name="payment"><span>Online payment</span>
      <input type="radio" name="payment"><span>EMI payment</span>
      <input type="radio" name="payment"><span> payment On delivery</span>

    </div>

    <button type="submit" class="btn btn-primary float-right">order now</button>
  </form>
        </figcaption>

        <!-- <div class="bottom-wrap"> <a href="#" class="btn btn-primary float-right" data-abc="true"> Buy now </a>
            <div class="price-wrap"> <a href="#" class="btn btn-warning float-left" data-abc="true"> Cancel </a> </div>
        </div> -->
    </figure>
</div>

@endsection



