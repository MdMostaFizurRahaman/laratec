@extends('admin.layouts.admin')

@section('title')
    Products List
@endsection



@section('content')
@include('admin.partials.content-header', ['title' => 'Products List'])
  <!-- Main content -->
  <div class="content">
    @include('admin.message.messages')
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
          <div class="card card-primary card-outline">
              <div class="card-header">
                  <h5>Products List</h5>
              </div>
              <div class="card-body">
                  <table class="table table-bordered">
                        <thead>
                            <th>#</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>
                                        <div class="product-img">
                                            <img src="{{$product->getFirstMediaUrl('product-image')}}"  alt="Product Image" class="img-size-50">
                                        </div>
                                    </td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->category->name}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>
                                        <a href="{{route('admin.products.edit', $product->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                        <a href="#" class="btn btn-danger btn-sm"
                                           onclick="if (confirm(&quot;Are you sure you want to delete ?&quot;)) { document.getElementById('deleteForm{{ $product->id }}').submit(); } event.returnValue = false; return false;"><i
                                                    class="fa fa-trash"></i></a>
                                        {!! Form::open(['method'=>'DELETE', 'action'=>['Admin\ProductController@destroy', $product->id], 'id'=>'deleteForm'.$product->id]) !!}
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
        $('.dropify').dropify();
        $('.select2').select2();
    });
</script>
@endsection
