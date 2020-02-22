@extends('admin.layouts.admin')

@section('title')
    About Us
@endsection

@section('content')

@include('admin.partials.content-header', ['title' => 'About Us'])

<div class="content">
    <div class="container-fluid">
        @include('admin.message.messages')
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-primary card-outline">
                    <div class="card-body">
                        @if (!empty($aboutUs))

                            {!! Form::model($aboutUs, ['route' => 'admin.about-us.store', 'method' => 'post', 'files' => true]) !!}
                        @else
                            {!! Form::open(['route' => 'admin.about-us.store', 'method' => 'post', 'files' => true]) !!}
                        @endif
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        {!! Form::label('title', 'Title') !!}
                                        {!! Form::text('title', null, ['class' => 'form-control']) !!}
                                        @if ($errors->has('title'))
                                            <div class="error text-danger">{{ $errors->first('title') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('description', 'Description') !!}
                                        {!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => 8]) !!}
                                        @if ($errors->has('description'))
                                            <div class="error text-danger">{{ $errors->first('description') }}</div>
                                        @endif
                                    </div>


                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        {!! Form::label('subtitle', 'Subtitle') !!}
                                        {!! Form::text('subtitle', null, ['class' => 'form-control']) !!}
                                        @if ($errors->has('subtitle'))
                                            <div class="error text-danger">{{ $errors->first('subtitle') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="">Image</label>
                                        <input class="form-control dropify" type="file" name="image" data-default-file="{{!empty($aboutUs) ? $aboutUs->getFirstMediaUrl('general') : null}}">
                                        <label class="text-danger">* Image height should be 1170x400 px. </label>
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
