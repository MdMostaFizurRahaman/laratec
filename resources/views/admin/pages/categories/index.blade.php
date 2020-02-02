@extends('admin.layouts.admin')

@section('title')
    Categories
@endsection


@section('content')

<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Categories</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
  <!-- /.content-header -->
  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h5>Create Categories</h5>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        {!! Form::label('Category Name', null) !!}
                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                        @if ($errors->has('name'))
                            <div class="error text-danger">{{ $errors->first('name') }}</div>
                        @endif
                    </div>
                    <div class="form-group">
                        {!! Form::label('Description', null) !!}
                        {!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => 3]) !!}
                        @if ($errors->has('description'))
                            <div class="error text-danger">{{ $errors->first('description') }}</div>
                        @endif
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            
                            <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-save mr-2"></i>Save</button>
                        </div>
                        <div class="col-lg-6">

                            <a href="{{route('admin.categories.index')}}" class="btn btn-danger btn-block"><i class="fas fa-backward mr-2"></i> Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
    
@endsection