@extends('admin.layouts.admin')

@section('title')
    Carousel Settings
@endsection

@push('styles')

    <link href="{{asset('admin')}}/dist/css/dropify.css" rel="stylesheet" >

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
                                <div class="card-header bg-light" role="tab" id="headingOne">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#addCarousel" aria-expanded="false" aria-controls="addCarousel" class="tx-gray-800 transition collapsed">
                                        <small><span class="fa fa-plus"></span></small> Add Carousel
                                    </a>
                                </div><!-- Carousel-header -->

                                {{-- Add Carousel --}}
                                <div id="addCarousel" class="collapse" role="tabpanel" aria-labelledby="headingOne" style="">
                                    <div class="card-body">
                                        <div class="text-danger alert-solid" style="display:none"></div>
                                            {!! Form::open(['id' => 'addCarousel', 'route' => 'admin.carousel.store', 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group @error('title'){{'is-invalid'}}@enderror @error('title'){{'is-invalid'}}@enderror">
                                                        {!! Form::label('title', 'Title') !!}
                                                        {!! Form::text('title', null, ['class' => 'form-control']) !!}
                                                        @error('title')
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                    <div class="form-group @error('subtitle'){{'is-invalid'}}@enderror">
                                                        {!! Form::label('subtitle', 'Subtitle') !!}
                                                        {!! Form::text('subtitle', null, ['class' => 'form-control']) !!}
                                                        @error('subtitle')
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                    <div class="form-group @error('link'){{'is-invalid'}}@enderror">
                                                        {!! Form::label('link', 'Link') !!}
                                                        {!! Form::text('link', null, ['class' => 'form-control']) !!}
                                                        @error('link')
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group @error('slider'){{'is-invalid'}}@enderror">
                                                        <label for="">Slider Image</label>
                                                        <input class="form-control dropify"  data-allowed-file-extensions="png jpg" type="file" name="slider" data-default-file="">
                                                        @error('slider')
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                        <small class="text-info">* Image height should be 200x42 px. </small>
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
                                @if (!empty($carousels))
                                @foreach ($carousels as $carousel)

                                <div class="card-header bg-light" role="tab" id="{{'heading'.$carousel->id}}">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#{{'carousel'.$carousel->id}}" aria-expanded="false" aria-controls="{{'carousel'.$carousel->id}}" class="tx-gray-800 transition collapsed">
                                        <small><span class="fas fa-image"></span></small> {{'Carousel ' . $carousel->id}}
                                    </a>
                                </div><!-- card-header -->
                                <div id="{{'carousel'.$carousel->id}}" class="collapse" role="tabpanel" aria-labelledby="{{'heading'.$carousel->id}}" style="">
                                    <div class="card-body">
                                        <div class="text-danger alert-solid" style="display:none"></div>
                                            {!! Form::model($carousel, ['id' => '{{"carousel-".$carousel->id}}', 'route' => 'admin.carousel.update', 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
                                            <div class="row">
                                                {!! Form::hidden('id', null, ['class' => 'form-control']) !!}
                                                <div class="col-sm-6">
                                                <div class="form-group @error('title'){{'has-error'}}@enderror">
                                                        {!! Form::label('title', 'Title') !!}
                                                        {!! Form::text('title', null, ['class' => 'form-control']) !!}
                                                        @error('title')
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                    <div class="form-group @error('subtitle'){{'is-invalid'}}@enderror">
                                                        {!! Form::label('subtitle', 'Subtitle') !!}
                                                        {!! Form::text('subtitle', null, ['class' => 'form-control']) !!}
                                                        @error('subtitle')
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                    <div class="form-group @error('link'){{'is-invalid'}}@enderror">
                                                        {!! Form::label('link', 'Link') !!}
                                                        {!! Form::text('link', null, ['class' => 'form-control']) !!}
                                                        @error('link')
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                </div>
                                                <div class="col-sm-6">
                                                        <div class="form-group @error('slider'){{'is-invalid'}}@enderror">
                                                        <label for="">Slider Image</label>
                                                        <input class="form-control dropify"  data-allowed-file-extensions="png jpg" type="file" name="slider" data-default-file="{{asset('public').$carousel->getFirstMediaUrl('carousels')}}">
                                                        @error('slider')
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                        <label class="text-danger">* Image height should be 200x42 px. </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 text-right">
                                                    <div class="form-group">
                                                        {!! Form::submit('Submit', ['class' => 'form-control btn btn-primary']) !!}
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

        // Dropify
        $('.dropify').dropify();
        //Override form submit
        function dropify(){

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
                    success: function(response){
                        if(response.status){
                            responseToast(response)
                        } else {
                            responseToast(response)
                        }
                    }
                });
            });

        }

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
