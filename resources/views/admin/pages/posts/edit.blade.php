@extends('admin.layouts.admin')

@section('title')
    Edit Post
@endsection



@section('content')
@include('admin.partials.content-header', ['title' => 'Edit Post'])
  <!-- Main content -->
  <div class="content">
    @include('admin.message.messages')
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
          <div class="card card-primary card-outline">
              <div class="card-header">
                  <h5>Update Post Details</h5>
              </div>
              {!! Form::model($post, ['route' => ['admin.posts.update', $post->id],'method' =>  'PUT', 'files' => true]) !!}
                  <div class="card-body">
                      <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    {!! Form::label('Post Title', null) !!}
                                    {!! Form::text('title',  null, ['class' => 'form-control']) !!}
                                    @if ($errors->has('title'))
                                        <div class="error text-danger">{{ $errors->first('title') }}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    {!! Form::label('Description', null) !!}
                                    {!! Form::textarea('description',  null, ['class' => 'form-control', 'rows' => 8]) !!}
                                    @if ($errors->has('description'))
                                        <div class="error text-danger">{{ $errors->first('description') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    {!! Form::label('Subtitle', null) !!}
                                    {!! Form::text('subtitle',  null, ['class' => 'form-control']) !!}
                                    @if ($errors->has('subtitle'))
                                        <div class="error text-danger">{{ $errors->first('subtitle') }}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="">Post Image</label>
                                    <input class="form-control dropify" type="file" name="image" data-default-file="{{$post->getFirstMediaUrl('posts')}}">
                                    <label class="text-danger">* Image height should be 900x600 px. </label>
                                    @if ($errors->has('image'))
                                        <div class="error text-danger">{{ $errors->first('image') }}</div>
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
