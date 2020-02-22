@extends('admin.layouts.admin')

@section('title')
    Company Details
@endsection

@section('content')

@include('admin.partials.content-header', ['title' => 'Company Details'])

<div class="content">
    <div class="container-fluid">
        @include('admin.message.messages')
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-primary card-outline">
                    <div class="card-body">
                        @if (!empty($settings))

                            {!! Form::model($settings, ['route' => 'admin.company.details.store', 'method' => 'post', 'files' => true]) !!}
                        @else
                            {!! Form::open(['route' => 'admin.company.details.store', 'method' => 'post', 'files' => true]) !!}
                        @endif
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        {!! Form::label('company_name', 'Company Name') !!}
                                        {!! Form::text('company_name', null, ['class' => 'form-control']) !!}
                                        @if ($errors->has('company_name'))
                                            <div class="error text-danger">{{ $errors->first('company_name') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('mobile', 'Mobile') !!}
                                        {!! Form::text('mobile', null, ['class' => 'form-control']) !!}
                                        @if ($errors->has('mobile'))
                                            <div class="error text-danger">{{ $errors->first('mobile') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('email', 'Email') !!}
                                        {!! Form::text('email', null, ['class' => 'form-control']) !!}
                                        @if ($errors->has('email'))
                                            <div class="error text-danger">{{ $errors->first('email') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('description', 'Description') !!}
                                        {!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => 3]) !!}
                                        @if ($errors->has('description'))
                                            <div class="error text-danger">{{ $errors->first('description') }}</div>
                                        @endif
                                    </div>


                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        {!! Form::label('telephone', 'Telephone') !!}
                                        {!! Form::text('telephone', null, ['class' => 'form-control']) !!}
                                        @if ($errors->has('telephone'))
                                            <div class="error text-danger">{{ $errors->first('telephone') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('hotline', 'Hotline') !!}
                                        {!! Form::text('hotline', null, ['class' => 'form-control']) !!}
                                        @if ($errors->has('hotline'))
                                            <div class="error text-danger">{{ $errors->first('hotline') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('footer_text', 'Footer Text') !!}
                                        {!! Form::text('footer_text', null, ['class' => 'form-control']) !!}
                                        @if ($errors->has('footer_text'))
                                            <div class="error text-danger">{{ $errors->first('footer_text') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('address', 'Address') !!}
                                        {!! Form::textarea('address', null, ['class' => 'form-control', 'rows' => 3]) !!}
                                        @if ($errors->has('address'))
                                            <div class="error text-danger">{{ $errors->first('address') }}</div>
                                        @endif
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6" style="margin: auto">
                                    <div class="form-group">
                                        <label for="">Logo Image</label>
                                        <input class="form-control dropify" type="file" name="logo" data-default-file="{{!empty($settings) ? $settings->getFirstMediaUrl('general') : null}}">
                                        <label class="text-danger">* Image height should be 179x58 px. </label>
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
