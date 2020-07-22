@extends('master')

@section('main_content')
<div class="row">
    @foreach($area->shops as $index => $shop)
    <div class="col-md-3 mb-3 pb-2">
      <div class="card">
      <span class="py-3"><strong><a href="{{$shop->link}}" style="text-decoration: none;">{{$shop->title}}</a> </strong></span>
        <a href="{{$shop->link}}"><img src="{{ asset('public/img/shop/'.$shop->image)}}"  class="card-img-top" alt="..." style="border-top-left-radius: calc(.0rem - 1px); border-top-right-radius: calc(.0rem - 1px)"></a> 
        <div class="card-body p-1">
          <ul class="list-group list-group-flush">
          <li class="list-group-item">{{$shop->address}}</li>
          <li class="list-group-item"><strong>ফোন: </strong>{{$shop->phone}}</li>
        </ul>
        </div>
      </div>
    </div>
    @endforeach
</div>

@endsection
