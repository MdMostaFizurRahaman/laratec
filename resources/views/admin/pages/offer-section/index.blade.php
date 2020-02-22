@extends('admin.layouts.admin')

@section('title')
    Offer Section
@endsection

@section('content')

@include('admin.partials.content-header', ['title' => 'Offer Section'])

<div class="content">
    <div class="container-fluid">
        @include('admin.message.messages')
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-primary card-outline">
                    <div class="card-body">
                        @if (!empty($featureSection))
                            {!! Form::model($featureSection, ['route' => 'admin.offer-section.store', 'method' => 'post', 'files' => true]) !!}
                        @else
                            {!! Form::open(['route' => 'admin.offer-section.store', 'method' => 'post', 'files' => true]) !!}
                        @endif
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        {!! Form::label('title', 'Title') !!}
                                        {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Your offer title']) !!}
                                        @if ($errors->has('title'))
                                            <div class="error text-danger">{{ $errors->first('title') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        {!! Form::label('link', 'Link') !!}
                                        {!! Form::text('link', null, ['class' => 'form-control', 'placeholder' => 'https://yourdomain.com/offer']) !!}
                                        @if ($errors->has('link'))
                                            <div class="error text-danger">{{ $errors->first('link') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        {!! Form::label('last_date', 'Last Date') !!}
                                        {!! Form::date('last_date', null, ['class' => 'form-control']) !!}
                                        @if ($errors->has('last_date'))
                                            <div class="error text-danger">{{ $errors->first('last_date') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        {!! Form::label('description', 'Description') !!}
                                        {!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => 8, 'placeholder' => 'Your offer description goes here...']) !!}
                                        @if ($errors->has('description'))
                                            <div class="error text-danger">{{ $errors->first('description') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Offer Image</label>
                                        <input class="form-control dropify" type="file" name="image" data-default-file="{{!empty($offer) ? $offer->getFirstMediaUrl('general') : null}}">
                                        <label class="text-danger">* Image height should be 618x131 px. </label>
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
