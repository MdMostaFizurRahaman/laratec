@extends('admin.layouts.admin')

@section('title')
    Featured Section
@endsection

@section('content')

@include('admin.partials.content-header', ['title' => 'Featured Section'])

<div class="content">
    <div class="container-fluid">
        @include('admin.message.messages')
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-primary card-outline">
                    <div class="card-body">
                        @if (!empty($feature))
                            {!! Form::model($feature, ['route' => 'admin.feature-section.store', 'method' => 'post', 'files' => true]) !!}
                        @else
                            {!! Form::open(['route' => 'admin.feature-section.store', 'method' => 'post', 'files' => true]) !!}
                        @endif
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        {!! Form::label('title', 'Title') !!}
                                        {!! Form::text('title', null, ['class' => 'form-control']) !!}
                                        @if ($errors->has('title'))
                                            <div class="error text-danger">{{ $errors->first('title') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        {!! Form::label('sub_title', 'Subtitle') !!}
                                        {!! Form::text('sub_title', null, ['class' => 'form-control']) !!}
                                        @if ($errors->has('sub_title'))
                                            <div class="error text-danger">{{ $errors->first('sub_title') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        {!! Form::label('price', 'Price') !!}
                                        {!! Form::text('price', null, ['class' => 'form-control']) !!}
                                        @if ($errors->has('price'))
                                            <div class="error text-danger">{{ $errors->first('price') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        {!! Form::label('shop_now_link', 'Shop Now Link') !!}
                                        {!! Form::text('shop_now_link', null, ['class' => 'form-control']) !!}
                                        @if ($errors->has('shop_now_link'))
                                            <div class="error text-danger">{{ $errors->first('shop_now_link') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        {!! Form::label('details_link', 'Details Link') !!}
                                        {!! Form::text('details_link', null, ['class' => 'form-control']) !!}
                                        @if ($errors->has('details_link'))
                                            <div class="error text-danger">{{ $errors->first('details_link') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8" style="margin: auto">
                                    <div class="form-group">
                                        <label for="">Featured Image</label>
                                        <input class="form-control dropify" type="file" data-height="250" name="image" data-default-file="{{!empty($feature) ? $feature->getFirstMediaUrl('general') : null}}">
                                        <label class="text-danger">* Image height should be 1920x960 px. </label>
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
