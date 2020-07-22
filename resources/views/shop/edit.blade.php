 @extends('layouts.backend.app')

@section('title','Shop')

@push('css')

    <!-- Bootstrap Select Css -->
    <link href="{{ asset('assets/backend/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />
@endpush

@section('content')
     <div class="container-fluid">
            <!-- Inline Layout | With Floating Label -->
             <form action="{{ route('admin.shop.update', $shop->id )}}" method="post" enctype="multipart/form-data" autocomplete="off">
             @csrf
              @method('PATCH')
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>
                                    ADD NEW SHOPS
                                </h2>
                            </div>
                            <div class="body">
                                    <div class="row clearfix">
                                        <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 ">

                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" id="title" value="{{$shop->title}}" name="title" class="form-control @error('title') is-invalid @enderror" required="">
                                                    <label class="form-label" for="title">Shop Name</label>
                                                    @error('title')
                                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" id="link" name="link" value="{{$shop->link}}" class="form-control @error('link') is-invalid @enderror" required="">
                                                    <label class="form-label" for="link">Link</label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="image">Post Image</label>
                                                <input type="file" name="image">
                                            </div>

                                             <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" id="address" value="{{$shop->address}}" name="address" class="form-control @error('address') is-invalid @enderror" required>
                                                    <label class="form-label" for="address">Address</label>
                                                    @error('address')
                                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" id="phone" value="{{$shop->phone}}" name="phone" class="form-control @error('phone') is-invalid @enderror" required>
                                                    <label class="form-label" for="phone">Phone</label>
                                                    @error('phone')
                                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <a type="button" href="{{ route('admin.shop.index')}}" class="btn btn-danger m-t-15 waves-effect">Back</a>
                                    <button type="submit" class="btn btn-primary m-t-15 waves-effect">Save</button>
                            </div>
                        </div>
                    </div>



                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>
                                     Location's Shop
                                </h2>
                            </div>
                            <div class="body">
                                <div class="form-group form-float">
                                    <div class="form-line {{ $errors->has('locations') ? 'focused error' : ''}}">
                                       <label for="location">Select Shop</label>
                                        <select name="locations[]" id="location" class="form-control show-tick" date-live-search="true" multiple>
                                              @foreach($locations as $index => $location)
                                             <option 

                                             @foreach($shop->locations as $v_location)
                                                {{ $v_location->id == $location->id ? 'selected' : '' }}
                                             @endforeach
                                             value="{{$location->id}}">{{$location->name}}</option>
                                             @endforeach
                                        </select>
                                    </div>
                    </div> 
                            </div>
                        </div>
                    </div>
                </div>
            <!-- #END# Inline Layout | With Floating Label -->
        </div>
@endsection 

@push('js')
    <!-- Select Plugin Js -->
    <script src="{{ asset('assets/backend/plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>

    <!-- TinyMCE -->
    <script src="{{ asset('assets/backend/plugins/tinymce/tinymce.js')}}"></script>

    <!-- Custom Js -->
   
@endpush