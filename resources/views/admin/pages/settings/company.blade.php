@extends('admin.layouts.admin')

@section('title')
    Company Details
@endsection

@section('content')

@include('admin.partials.content-header', ['title' => 'Company Details'])

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-primary card-outline">
                    <div class="card-body">
                    {!! Form::open(['route' => 'admin.company.details.store', 'method' => 'post']) !!}
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    {!! Form::label('company_name', 'Company Name') !!}
                                    {!! Form::text('company_name', null, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                            <div class="col-lg-6">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
