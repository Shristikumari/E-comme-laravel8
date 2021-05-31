@extends('master')
@section("content")

<div class="container-fluid my-5 d-flex justify-content-center">
    <div class="card card-1">
        <div class="card-header bg-white">
            <div class="media flex-sm-row flex-column-reverse justify-content-between ">
                <div class="col my-auto">
                    <h4 class="mb-0">Thanks for your Order,<span class="change-color"></span></h4>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row justify-content-between mb-3">
                <div class="col-auto">
                    <h6 class="color-1 mb-0 change-color">Receipt</h6>
                </div>
            </div>
            @foreach ($orders as $item)
            <div class="row">
                <div class="col">
                    <div class="card card-2">
                        <div class="card-body">
                            <div class="media">
                                <div class="sq align-self-center ">
                                <a href="detail/{{$item->id}}">
                                 <img src="{{$item->gallery}}" width="135" height="135"/>
                                 </a>
                                  </div>
                                <div class="media-body my-auto text-right">
                                    <div class="row my-auto flex-column flex-md-row">
                                        <div class="col my-auto">
                                            <h6 class="mb-0">{{$item->name}}</h6>
                                        </div>
                                        <div class="col-auto my-auto"> <small>Golden Rim </small></div>
                                        <div class="col my-auto"> <small>Size : M</small></div>
                                        <div class="col my-auto"> <small>Qty : 1</small></div>
                                        <div class="col my-auto">
                                            <h6 class="mb-0">${{$item->price}}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-3 ">
                            <div class="row">
                                <div class="col-md-3 mb-3"> <small> Track Order 
                                <span><i class=" ml-2 fa fa-refresh" aria-hidden="true"></i></span></small> </div>
                                <div class="col mt-auto">
                                    <div class="progress my-auto">
                                        <div class="progress-bar progress-bar rounded"
                                         style="width: 62%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="media row justify-content-between ">
                                        <div class="col-auto text-right"><span> <small class="text-right mr-sm-2"></small>
                                         <i class="fa fa-circle active"></i> </span></div>
                                        <div class="flex-col"> <span> <small class="text-right mr-sm-2">{{$item->status}}</small><i class="fa fa-circle active"></i></span></div>
                                        <div class="col-auto flex-col-auto"><small class="text-right mr-sm-2">Delivered</small><span> <i class="fa fa-circle"></i></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
              @endforeach
        </div>
    </div>
</div>




@endsection