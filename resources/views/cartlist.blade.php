@extends('master')
@section("content")
<div class="container mt-5 mb-5">
    <div class="d-flex justify-content-center row">
        <div class="col-md-10">
        @foreach ($products as $item)
            <div class="row p-2 bg-white border rounded">
                <div class="col-md-3 mt-1">
                <img class="img-fluid img-responsive rounded product-image" src="{{$item->gallery}}" alt="...">
                   </div>
                <div class="col-md-6 mt-1">
                <h3>{{$item->name}}</h3>
                    <p class="text-justify text-truncate para mb-0"><h3>{{$item->description}}</h3></p>
                </div>
                <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                    <div class="d-flex flex-row align-items-center">
                        <h4 class="mr-1">$13.99</h4><span class="strike-text">$<h3>{{$item->price}}</h3></span>
                    </div>
                    <div class="d-flex flex-column mt-4">
                          <button class="btn btn-primary btn-sm" type="button">Details</button>
                          <button class="btn btn-warning"><a href="removecart/{{$item->cart_id}}">Remove from cart</a></button>
                </div>
            </div>

</div>
            @endforeach
            <a href="/ordernow" class="btn btn-warning">Order Now</a>

        </div>
    </div>
</div>
@endsection