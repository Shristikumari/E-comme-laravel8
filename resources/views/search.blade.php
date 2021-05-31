@extends('master')
@section("content")
<div class="search-wrapper">
<div class="col-sm-4">
<a href="">Filter</a>
</div>
<div class="col-sm-4">
<h3> Products Result</h3>
@foreach ($products as $item)
    <div class="search_item">
    <a href="detail/{{$item['id']}}">
      <img class="search_img" src="{{$item['gallery']}}" alt="...">
      <div class="search_text">
      <h3>{{$item['name']}}</h3>
      </div>
      </a>
    </div>
    @endforeach

</div>
</div>
@endsection