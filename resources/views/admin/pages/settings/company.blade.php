@extends('admin.layouts.admin')

@section('title')
    Company Details
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
                    @if(!empty($company))
                    {!! Form::model($company, ['id' => 'company_form', 'route' => 'admin.company.details.update', 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
                    @else
                    {!! Form::model($company, ['id' => 'company_update_form', 'route' => 'admin.company.details.store', 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
                    @endif
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    {{-- @csrf --}}
                                    {!! Form::label('company_name', 'Company Name') !!}
                                    {!! Form::text('company_name', null, ['class' => 'form-control']) !!}
                                </div>
                                @error('company_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    {!! Form::label('telephone', 'Phone') !!}
                                    {!! Form::text('telephone', null, ['class' => 'form-control']) !!}
                                </div>
                                @error('telephone')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    {!! Form::label('mobile', 'Mobile') !!}
                                    {!! Form::text('mobile', null, ['class' => 'form-control']) !!}
                                </div>
                                @error('mobile')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    {!! Form::label('hotline', 'Hotline') !!}
                                    {!! Form::text('hotline', null, ['class' => 'form-control']) !!}
                                </div>
                                @error('title')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    {!! Form::label('address', 'Address') !!}
                                    {!! Form::text('address', null, ['class' => 'form-control']) !!}
                                </div>
                                @error('address')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    {!! Form::label('email', 'Email') !!}
                                    {!! Form::email('email', null, ['class' => 'form-control']) !!}
                                </div>
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6" style="margin: auto">
                                <div class="form-group">
                                    <label for="">Logo Image</label>
                                    <input class="form-control dropify"  data-allowed-file-extensions="png jpg" type="file" name="logo" data-default-file="@if(!empty($company)){{asset('public').$company->getFirstMediaUrl('logo')}}@endif">
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
                success: function(response){
                    if(response.status){
                        responseToast(response)
                    } else {
                        responseToast(response)
                    }
                }
            });
        });

        function responseToast(response){
            $.toast({
                heading: response.status,
                text: response.message,
                icon: response.status,
                loader: true,
                loaderBg: '#9EC600',  // To change the background
                position: 'bottom-right',
                hideAfter : 2000,
                showHideTransition: 'slide',
                // transition : 'slide',
            })
            setTimeout(function(){
                window.location.reload(true);
                // window.location.replace("http://logicbag.com.bd/backend/products");
            }, 2000)
        }

    </script>

@endpush
