@extends('admin.layouts.admin')

@section('title')
    Post List
@endsection

@section('content')
@include('admin.partials.content-header', ['title' => 'Post List'])
  <!-- Main content -->
  <div class="content">
    @include('admin.message.messages')
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
          <div class="card card-primary card-outline">
              <div class="card-header">
                  <h5>Posts List</h5>
              </div>
              <div class="card-body">
                  <table class="table table-bordered">
                        <thead>
                            <th>#</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Subtitle</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>
                                        <div class="product-img">
                                            <img src="{{$post->getFirstMediaUrl('posts')}}"  alt="Post Image" class="img-size-50">
                                        </div>
                                    </td>
                                    <td>{{$post->title}}</td>
                                    <td>{{$post->subtitle}}</td>
                                    <td>{{Str::limit($post->description, 30)}}</td>
                                    <td>
                                        <a href="{{route('admin.posts.edit', $post->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                        <a href="#" class="btn btn-danger btn-sm"
                                           onclick="if (confirm(&quot;Are you sure you want to delete ?&quot;)) { document.getElementById('deleteForm{{ $post->id }}').submit(); } event.returnValue = false; return false;"><i
                                                    class="fa fa-trash"></i></a>
                                        {!! Form::open(['method'=>'DELETE', 'action'=>['Admin\PostController@destroy', $post->id], 'id'=>'deleteForm'.$post->id]) !!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                  </table>
              </div>
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
        $('.select2').select2();
    });
</script>
@endsection
