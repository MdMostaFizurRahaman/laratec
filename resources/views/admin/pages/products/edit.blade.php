@extends('admin.layouts.admin')

@section('title')
    Edit Product
@endsection



@section('content')
@include('admin.partials.content-header', ['title' => 'Edit Product'])
  <!-- Main content -->
  <div class="content">
    @include('admin.message.messages')
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
          <div class="card card-primary card-outline">
              <div class="card-header">
                  <h5>Edit Product</h5>
              </div>
              {!! Form::model($product, ['route' => ['admin.products.update', $product->id],'method' =>  'PUT', 'files' => true]) !!}
                  <div class="card-body">
                      <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    {!! Form::label('Product Name', null) !!}
                                    {!! Form::text('name',  null, ['class' => 'form-control']) !!}
                                    @if ($errors->has('name'))
                                        <div class="error text-danger">{{ $errors->first('name') }}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    {!! Form::label('Product Price', null) !!}
                                    {!! Form::text('price',  null, ['class' => 'form-control']) !!}
                                    @if ($errors->has('price'))
                                        <div class="error text-danger">{{ $errors->first('price') }}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    {!! Form::label('Description', null) !!}
                                    {!! Form::textarea('description',  null, ['class' => 'form-control', 'rows' => 3]) !!}
                                    @if ($errors->has('description'))
                                        <div class="error text-danger">{{ $errors->first('description') }}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    {!! Form::label('Configuration', null) !!}
                                    {!! Form::textarea('configuration',  null, ['class' => 'form-control', 'rows' => 3]) !!}
                                    @if ($errors->has('configuration'))
                                        <div class="error text-danger">{{ $errors->first('configuration') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    {!! Form::label('Product Code', null) !!}
                                    {!! Form::text('code',  null, ['class' => 'form-control']) !!}
                                    @if ($errors->has('code'))
                                        <div class="error text-danger">{{ $errors->first('code') }}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    {!! Form::label('Category', null) !!}
                                    {!! Form::select('category_id',  ['' => 'Choose an option'] + $categoryList, null, ['class' => 'form-control select2']) !!}
                                    @if ($errors->has('category_id'))
                                        <div class="error text-danger">{{ $errors->first('category_id') }}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    {!! Form::label('Features', null) !!}
                                    {!! Form::textarea('features',  null, ['class' => 'form-control', 'rows' => 3]) !!}
                                    @if ($errors->has('features'))
                                        <div class="error text-danger">{{ $errors->first('features') }}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    {!! Form::label('Specification', null) !!}
                                    {!! Form::textarea('specification',  null, ['class' => 'form-control', 'rows' => 3]) !!}
                                    @if ($errors->has('specification'))
                                        <div class="error text-danger">{{ $errors->first('specification') }}</div>
                                    @endif
                                </div>
                            </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6" style="margin: auto">
                            <div class="form-group">
                                <label for="">Product Image</label>
                                <input class="form-control dropify" type="file" name="image" data-default-file="{{$product->getFirstMediaUrl('product-image')}}">
                                <label class="text-danger">* Image height should be 900x600 px. </label>
                                @if ($errors->has('image'))
                                    <div class="error text-danger">{{ $errors->first('image') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-6" style="margin: auto">
                            <div class="form-group">
                                <label for="">Home Image</label>
                                <input class="form-control dropify" type="file" name="home" data-default-file="{{$product->getFirstMediaUrl('product-home')}}">
                                <label class="text-danger">* Image height should be 576x536 px. </label>
                                @if ($errors->has('home'))
                                    <div class="error text-danger">{{ $errors->first('home') }}</div>
                                @endif
                            </div>
                        </div>
                    </div>
                      <div class="row">
                          <div class="col-lg-12">
                              <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-save mr-2"></i>Save</button>
                          </div>
                      </div>
                  </div>
              {!! Form::close() !!}
          </div>
      </div>
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function () {
        $('.dropify').dropify();
        $('.select2').select2();
    });
</script>
@endsection
