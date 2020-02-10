@extends('admin.layouts.admin')

@section('title')
    Company Details
@endsection

@push('styles')

    <link rel="stylesheet" href="{{asset('admin')}}/dist/css/dropzone.css">

    <style>
        .dropzone {
            padding: 0;
        }

        .dropzone .dz-preview .dz-image {
            width: 100%;
            height: 100%;
            border-radius: 5px;
        }

        .dropzone .dz-preview .dz-image img{
            width: 440px;
            height: 220px;
        }
        .dropzone .dz-preview .dz-progress .dz-upload { background: green; }
        .dropzone .dz-preview .dz-remove {
            position: absolute;
            left: 45%;
            bottom: -18px;
        }
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
                    @if(!$company->count)
                    {!! Form::model($company, ['id' => 'company_form', 'route' => 'admin.company.details.store', 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
                    @else
                    {!! Form::model($company, ['id' => 'company_form', 'route' => 'admin.company.details.update', 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
                    @endif
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
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
                            <div class="col-md-6" style="margin: 0 auto;">
                                <div class="form-group">
                                    <div id="myDropzone" class="dropzone text-center @error('logo') is-invalid @enderror">
                                        <div class="dz-message dz-default needsclick">
                                            <h3 class="sbold">Drop files here to upload</h3>
                                            <i class="far fa-images fa-4x" aria-hidden="true"></i>

                                            <div>You can also click to open file browser</div>
                                        </div>
                                    </div>
                                </div>
                                @error('logo')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        {{-- <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('logo', 'Logo') !!}
                                    {!! Form::file('logo', null, ['class' => 'form-control']) !!}
                                </div>
                                @error('logo')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <img id="selectedImage" class="" style="margin-bottom: 10px;" src="" alt="">
                            </div>
                        </div> --}}
                        <div class="row">
                            <div class="col-lg-12 text-right">
                                <div class="form-group">
                                    {!! Form::submit('Submit', ['class' => 'form-control btn btn-info']) !!}
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

    <script src="{{asset('admin')}}/dist/js/dropzone.js"></script>

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


        // Dropzone
        Dropzone.autoDiscover = false;
        var url = $('#company_form').attr('action');

        $('#myDropzone').dropzone({
            url: url,
            paramName: 'logo',
            autoProcessQueue: false,
            uploadMultiple: false,
            maxFiles: 1,
            maxFilesize: 2,
            acceptedFiles: 'image/jpeg,image/png,image/gif',
            addRemoveLinks: true,
            thumbnailWidth: 300,
            thumbnailHeight: 200,
            init: function() {
                myDropzone = this;
                @if($company)

                    var oldLogo = {name: {{$company->getFirstMedia('logo')->name}}, size: {{$company->getFirstMedia('logo')->size}} };
                    myDropzone.options.addedfile.call(myDropzone, oldLogo);
                    myDropzone.options.thumbnail.call(myDropzone, oldLogo, "{{asset('public').$company->getFirstMediaUrl('logo')}}");
                    myDropzone.emit("complete", oldLogo);
                        // myDropzone.on("sending", function(data, xhr, formData) {
                        //     $("form").find("input").each(function(){
                        //         var dataName = $(this).attr("name");
                        //         var dataValue = $(this).val();
                        //         formData.append(dataName, dataValue);
                        //     });
                        // });
                @endif
                myDropzone.on('success', function (file, response) {
                    var imgName = response;
                    file.previewElement.classList.add("dz-success");
                    responseToast(response)
                });

                myDropzone.on('error', function (file, response) {
                    file.previewElement.classList.add("dz-error");
                    responseToast(response)
                });
            },
        });

        $("#company_form").submit(function(e) {
            e.preventDefault();
            e.stopPropagation();
            myDropzone.processQueue();
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
