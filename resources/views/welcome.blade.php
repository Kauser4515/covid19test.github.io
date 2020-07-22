@extends('master')

@section('main_content')
<div class="row">
    @foreach($shops as $index => $shop)
    <div class="col-sm-12 col-md-6 col-lg-4 mb-3 pb-2">
      <div class="card" id="location">
      <span class="py-3"><strong><a href="{{$shop->link}}">{{$shop->title}}</a> </strong></span>
        <a href="{{$shop->link}}"><img src="{{ asset('public/img/shop/'.$shop->image)}}"  class="card-img-top" alt="..." style="border-top-left-radius: calc(.0rem - 1px); height: 150px; border-top-right-radius: calc(.0rem - 1px)"></a> 
        <div class="card-body p-1">
          <ul class="list-group list-group-flush">
            <li class="list-group-item">{{$shop->address}}</li>
            <li class="list-group-item"><strong>ফোন: </strong>{{$shop->phone}}</li>
          </ul>
        </div>
      </div>
    </div>
    @endforeach
    <div class="col-12">
      <footer style="padding-left: 50px" aria-label="Page navigation example">
        <ul class="pagination">
          {{ $shops->links()}}
        </ul>
      </footer>
    </div>
</div>
@endsection