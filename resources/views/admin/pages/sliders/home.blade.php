@extends('admin.layouts.admin')

@section('title')
    Home Slider
@endsection


@section('content')

@include('admin.partials.content-header', ['title' => 'Home Slider'])

<div class="content">
    <div class="container-fluid">
        @include('admin.message.messages')
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h5>Add Slider</h5>
                    </div>
                    <div class="card-body">
                        {!! Form::open(['id' => 'addCarousel', 'route' => 'admin.slider.home.store', 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        {!! Form::label('title', 'Title') !!}
                                        {!! Form::text('title', null, ['class' => 'form-control']) !!}
                                        @if ($errors->has('title'))
                                            <div class="error text-danger">{{ $errors->first('title') }}</div>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('subtitle', 'Subtitle') !!}
                                        {!! Form::text('subtitle', null, ['class' => 'form-control']) !!}
                                        @if ($errors->has('subtitle'))
                                            <div class="error text-danger">{{ $errors->first('subtitle') }}</div>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('link', 'Link') !!}
                                        {!! Form::text('link', null, ['class' => 'form-control']) !!}
                                        @if ($errors->has('link'))
                                            <div class="error text-danger">{{ $errors->first('link') }}</div>
                                        @endif
                                    </div>

                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">Slider Image</label>
                                        <input class="form-control dropify"  data-allowed-file-extensions="png jpg jpeg" type="file" name="image">
                                        <small class="text-danger">* Image height should be 1920x480 px. </small>
                                        @if ($errors->has('image'))
                                            <div class="error text-danger">{{ $errors->first('image') }}</div>
                                        @endif
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
                    </div>
                </div>
            </div>
        </div>

        @foreach ($sliders as $slider)
            <div class="row">
                <div class="col-lg-12">
                    <div class="card bg-dark text-white">
                        <img src="{{$slider->getFirstMediaUrl('slider')}}" class="card-img" alt="...">
                        <div class="card-img-overlay">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                          <p class="card-text">Last updated 3 mins ago</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function () {
        $('.dropify').dropify();
    });
</script>
@endsection
