@extends('admin.layouts.admin')

@section('title')
    Categories
@endsection


@section('content')
    @include('admin.partials.content-header', ['title' => 'Categories'])
  <!-- Main content -->
  <div class="content">
      @include('admin.message.messages')
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h5>{{!empty($category) ? 'Update' : 'Create'}} Categories</h5>
                </div>
                {!! Form::open(['route' => !empty($category) ? ['admin.categories.update', $category->id] : 'admin.categories.store',
                'method' => !empty($category) ? 'PUT' : 'POST']) !!}
                    <div class="card-body">
                        <div class="form-group">
                            {!! Form::label('Category Name', null) !!}
                            {!! Form::text('name', old('name') ? old('name') : !empty($category) ? $category->name : null, ['class' => 'form-control']) !!}
                            @if ($errors->has('name'))
                                <div class="error text-danger">{{ $errors->first('name') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            {!! Form::label('Description', null) !!}
                            {!! Form::textarea('description', old('description') ? old('description') : !empty($category) ? $category->description : null, ['class' => 'form-control', 'rows' => 3]) !!}
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
                {!! Form::close() !!}
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card card-primary card-outline">
               <div class="card-body">
                   <table class="table table-hover">
                       <thead>
                           <th> No </th>
                           <th> Name </th>
                           <th> Description </th>
                           <th> Actions </th>
                       </thead>
                       <tbody>
                           @foreach ($categories as $category)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$category->name}}</td>
                                    <td>{{$category->description}}</td>
                                    <td>
                                        <a href="{{route('admin.categories.edit', $category->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                        <a href="#" class="btn btn-danger btn-sm"
                                           onclick="if (confirm(&quot;Are you sure you want to delete ?&quot;)) { document.getElementById('deleteForm{{ $category->id }}').submit(); } event.returnValue = false; return false;"><i
                                                    class="fa fa-trash"></i></a>
                                        {!! Form::open(['method'=>'DELETE', 'action'=>['Admin\CategoryController@destroy', $category->id], 'id'=>'deleteForm'.$category->id]) !!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                           @endforeach
                       </tbody>
                   </table>
               </div>
               <div class="card-footer">
                   {{$categories->links()}}
               </div>
            </div>
        </div>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->

@endsection
