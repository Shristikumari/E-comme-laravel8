@extends('master')
@section("content")
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
  @foreach ($products as $item)
    <div class="carousel-item active {{$item['id']==1?'active':''}}">
    <a href="detail/{{$item['id']}}">
    <img class="slider_img" src="{{$item['gallery']}}" alt="...">
      <div class="carousel-caption">
      <h3>{{$item['name']}}</h3>
      <p>{{$item['description']}}</p>
      </div> 
      </a>  
    </div>
    @endforeach

  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<!----==========================trending product====================------------------>

<div class="container-fluid">
<h3>Trending Products</h3>
<div class="row">
@foreach ($products as $item)
<div class="col-md-3 trending_product">
<div class="card">
<div class="card-body">
<div class="jumbotron">
  <div class="container">
    <a href="detail/{{$item['id']}}">
      <img class="trending_img" src="{{$item['gallery']}}" alt="...">
    <p class="lead" >
      {{$item['name']}}</p>
      <p class="lead1">
      {{$item['description']}}</p>
     </a>
  </div>
</div>

</div>
</div>
</div>
@endforeach
</div>
<!---================----------------------============------------->
<div class="bbb_viewed">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="bbb_main_container">
                    <div class="bbb_viewed_title_container">
                        <h3 class="bbb_viewed_title">Best selling products</h3>
                        <div class="bbb_viewed_nav_container">
                            <div class="bbb_viewed_nav bbb_viewed_prev"><i class="fas fa-chevron-left"></i></div>
                            <div class="bbb_viewed_nav bbb_viewed_next"><i class="fas fa-chevron-right"></i></div>
                        </div>
                    </div>
                    <div class="bbb_viewed_slider_container">
                        <div class="owl-carousel owl-theme bbb_viewed_slider">
                        @foreach ($products as $item)

                            <div class="owl-item">
                                <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="bbb_viewed_image">
                                    <img src="{{$item['gallery']}}" alt=""></div>
                                    <div class="bbb_viewed_content text-center">
                                        <div class="bbb_viewed_price">${{$item['price']}}</div>
                                        <div class="bbb_viewed_name"><a href="#">{{$item['name']}}</a></div>
                                    </div>
                                    <ul class="item_marks">
                                        <li class="item_mark item_discount">-25%</li>
                                        <li class="item_mark item_new">new</li>
                                    </ul>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!----======================card product=====================================---------------------->
<div class="container-fluid">
<div class="row">
@foreach($products as $item)
<div class="col-md-3">    
<div class="card">
<div class="card-body">
<img src="{{$item['gallery']}}" alt="" style="width:100%;height:200px;">
<h4>{{$item['name']}}</h4>
<p>{{$item['price']}}</p>
</div>
</div>
</div>
@endforeach
</div>
</div>
@endsection