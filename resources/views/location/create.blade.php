 @extends('layouts.backend.app')

@section('title','Location')

@push('css')

    <!-- Bootstrap Select Css -->
    <link href="{{ asset('assets/backend/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />
@endpush

@section('content')
     <div class="container">
            <!-- Inline Layout | With Floating Label -->
             <form action="{{ route('admin.location.store')}}" method="post" enctype="multipart/form-data" autocomplete="off">
             @csrf
             <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>
                                    ADD NEW LOCATIONS
                                </h2>
                            </div>
                            <div class="body">
                                    <div class="row clearfix">
                                        <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 ">

                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" required>
                                                    <label class="form-label" for="name">Location Name</label>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <a type="button" href="{{ route('admin.location.index')}}" class="btn btn-danger m-t-15 waves-effect">Back</a>
                                    <button type="submit" class="btn btn-primary m-t-15 waves-effect">Save</button>
                            </div>
                        </div>
                    </div>


                    <!-- <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>
                                     Location's Shop
                                </h2>
                            </div>
                            <div class="body">
                                    <div class="row clearfix">
                                        <div class="form-group form-float">
                                            <div class="form-line {{ $errors->has('shop') ? 'focused error' : ''}}">
                                               <label for="shop">Select Shop</label>
                                                <select name="shops[]" id="shop" class="form-control show-tick" data-live-search="true" multiple> 
                                                      @foreach($shops as $index => $shop)
                                                     <option value="{{$shop->id}}">{{$shop->title}}</option>
                                                     @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div> -->
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