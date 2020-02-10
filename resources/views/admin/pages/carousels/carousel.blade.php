@extends('admin.layouts.admin')

@section('title')
    Carousel Settings
@endsection

@push('styles')

    <link href="{{asset('admin')}}/dist/css/dropify.css" rel="stylesheet" >

    <style>

    </style>
@endpush

@section('content')

@include('admin.partials.content-header', ['title' => 'Company Details'])

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-primary card-outline" id="company_deails">
                    <div class="card-body">
                        <div id="accordion" class="accordion-one" role="tablist" aria-multiselectable="true">
                            <div class="card">
                                <div class="card-header bg-gray" role="tab" id="headingOne">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#addCarousel" aria-expanded="false" aria-controls="addCarousel" class="tx-gray-800 transition collapsed">
                                        <small><span class="fa fa-plus"></span></small> Add Carousel
                                    </a>
                                </div><!-- Carousel-header -->

                                {{-- Add Carousel --}}
                                <div id="addCarousel" class="collapse" role="tabpanel" aria-labelledby="headingOne" style="">
                                    <div class="card-body">
                                        <div class="alert alert-danger alert-solid" style="display:none"></div>
                                            {!! Form::open(['id' => 'addCarousel', 'route' => 'admin.carousel.store', 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        {!! Form::label('title', 'Title') !!}
                                                        {!! Form::text('title', null, ['class' => 'form-control']) !!}
                                                    </div>
                                                    @error('title')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                    <div class="form-group">
                                                        {!! Form::label('subtitle', 'Subtitle') !!}
                                                        {!! Form::text('subtitle', null, ['class' => 'form-control']) !!}
                                                    </div>
                                                    @error('subtitle')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                    <div class="form-group">
                                                        {!! Form::label('link', 'Link') !!}
                                                        {!! Form::text('link', null, ['class' => 'form-control']) !!}
                                                    </div>
                                                    @error('link')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="">Slider Image</label>
                                                        {{-- <input class="form-control dropify"  data-allowed-file-extensions="png jpg" type="file" name="game_logo" data-default-file="{{asset('application/public')}}/{{$settings->game_logo}}"> --}}
                                                        <input class="form-control dropify"  data-allowed-file-extensions="png jpg" type="file" name="slider" data-default-file="">
                                                        <label class="text-danger">* Image height should be 200x42 px. </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 text-right">
                                                    <div class="form-group">
                                                        {!! Form::submit('Submit', ['class' => 'form-control btn btn-info']) !!}
                                                    </div>
                                                </div>
                                            </div>
                                            {!! Form::close() !!}
                                        </form>
                                    </div>
                                </div>
                                {{-- Add Carousel --}}

                                {{-- Carousels --}}
                                @if ($carousels)
                                @foreach ($carousels as $carousel)

                                <div class="card-header bg-gray" role="tab" id="{{'heading'.$carousel->id}}">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#{{'carousel'.$carousel->id}}" aria-expanded="false" aria-controls="{{'carousel'.$carousel->id}}" class="tx-gray-800 transition collapsed">
                                        <small><span class="fas fa-image"></span></small> {{'Carousel ' . $carousel->id}}
                                    </a>
                                </div><!-- card-header -->
                                <div id="{{'carousel'.$carousel->id}}" class="collapse" role="tabpanel" aria-labelledby="{{'heading'.$carousel->id}}" style="">
                                    <div class="card-body">
                                        <div class="alert alert-danger alert-solid" style="display:none"></div>
                                            {!! Form::model($carousel, ['id' => '{{"carousel-".$carousel->id}}', 'route' => 'admin.carousel.update', 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        {!! Form::label('title', 'Title') !!}
                                                        {!! Form::text('title', null, ['class' => 'form-control']) !!}
                                                    </div>
                                                    @error('title')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                    <div class="form-group">
                                                        {!! Form::label('subtitle', 'Subtitle') !!}
                                                        {!! Form::text('subtitle', null, ['class' => 'form-control']) !!}
                                                    </div>
                                                    @error('subtitle')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                    <div class="form-group">
                                                        {!! Form::label('link', 'Link') !!}
                                                        {!! Form::text('link', null, ['class' => 'form-control']) !!}
                                                    </div>
                                                    @error('link')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-sm-6">
                                                        <div class="form-group">
                                                        <label for="">Slider Image</label>
                                                        <input class="form-control dropify"  data-allowed-file-extensions="png jpg" type="file" name="slider" data-default-file="{{asset('public').$carousel->getFirstMediaUrl('carousels')}}">
                                                        <label class="text-danger">* Image height should be 200x42 px. </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 text-right">
                                                    <div class="form-group">
                                                        {!! Form::submit('Submit', ['class' => 'form-control btn btn-info']) !!}
                                                    </div>
                                                </div>
                                            </div>
                                            {!! Form::close() !!}
                                        </form>
                                    </div>
                                </div>
                                @endforeach
                                @endif
                                {{-- Carousels --}}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')

    <script src="{{asset('admin')}}/dist/js/dropify.js"></script>

    <script>
        // $('#logo').change(function readURL()
        // {
        //     if (this.files && this.files[0]) {
        //     var reader = new FileReader();

        //     reader.onload = function (e) {
        //         $('#selectedImage')
        //         .attr('src', e.target.result)
        //         .width(120)
        //         .height(80);
        //     };

        //     reader.readAsDataURL(this.files[0]);
        //     }
        // });


        // Dropify
        // $(function(){
        $('.dropify').dropify();
          //Override form submit
        $("form").on("submit", function (event) {
            event.preventDefault();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: $(this).attr('action'), // Get the action URL to send AJAX to
                type: "post",
                data: new FormData(this), // get all form variables
                cache:false,
                contentType: false,
                processData: false,
                success: function(data){
                    if(data.success){
                        $.toast({
                                heading: 'Success',
                                text: data.success,
                                showHideTransition: 'fade',
                                position: 'bottom-right',
                                icon: 'success',
                            })
                    }
                    if(data.errors){
                        $.each(data.errors, function(key, value){
                            $.toast({
                                heading: 'Error',
                                text: value,
                                showHideTransition: 'fade',
                                position: 'bottom-right',
                                icon: 'error',
                            })
                        });
                    }
                }
            });
        });

    // })

        function responseToast(response){
            $.toast({
                heading: response.status,
                text: response.message,
                icon: response.status,
                loader: true,
                loaderBg: '#9EC600',  // To change the background
                position: 'bottom-right',
                transition : 'slide',  // It can be plain, fade or slide
            })
            setTimeout(function(){
                window.location.reload(true);
                // window.location.replace("http://logicbag.com.bd/backend/products");
            }, 2000)
        }

    </script>

@endpush
