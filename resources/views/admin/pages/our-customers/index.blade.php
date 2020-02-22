@extends('admin.layouts.admin')

@section('title')
    Our Customers
@endsection


@section('content')
    @include('admin.partials.content-header', ['title' => 'Our Customers'])
  <!-- Main content -->
  <div class="content">
      @include('admin.message.messages')
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h5>{{!empty($ourCustomer) ? 'Update' : 'Add'}} Customer</h5>
                </div>
                {!! Form::open(['route' => !empty($ourCustomer) ? ['admin.our-customers.update', $ourCustomer->id] : 'admin.our-customers.store',
                'method' => !empty($ourCustomer) ? 'PUT' : 'POST', 'files' => true]) !!}
                    <div class="card-body">
                        <div class="form-group">
                            {!! Form::label('ourCustomer Name', null) !!}
                            {!! Form::text('name', old('name') ? old('name') : !empty($ourCustomer) ? $ourCustomer->name : null, ['class' => 'form-control']) !!}
                            @if ($errors->has('name'))
                                <div class="error text-danger">{{ $errors->first('name') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">Logo Image</label>
                            <input class="form-control dropify" type="file" name="logo" data-default-file="{{!empty($ourCustomer) ? $ourCustomer->getFirstMediaUrl('general') : null}}">
                            <label class="text-danger">* Image height should be 170x85 px. </label>
                            @if ($errors->has('logo'))
                                <div class="error text-danger">{{ $errors->first('logo') }}</div>
                            @endif
                        </div>

                        <div class="row">
                            <div class="col-lg-6">

                                <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-save mr-2"></i>Save</button>
                            </div>
                            <div class="col-lg-6">

                                <a href="{{route('admin.our-customers.index')}}" class="btn btn-danger btn-block"><i class="fas fa-backward mr-2"></i> Cancel</a>
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
                           <th> Image </th>
                           <th> Name </th>
                           <th> Actions </th>
                       </thead>
                       <tbody>
                           @foreach ($customers as $customer)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>
                                        <div class="product-img">
                                            <img src="{{$customer->getFirstMediaUrl('general')}}"  alt="Customer Logo" class="img-size-50">
                                        </div>
                                    </td>
                                    <td>{{$customer->name}}</td>
                                    <td>
                                        <a href="{{route('admin.our-customers.edit', $customer->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                        <a href="#" class="btn btn-danger btn-sm"
                                           onclick="if (confirm(&quot;Are you sure you want to delete ?&quot;)) { document.getElementById('deleteForm{{ $customer->id }}').submit(); } event.returnValue = false; return false;"><i
                                                    class="fa fa-trash"></i></a>
                                        {!! Form::open(['method'=>'DELETE', 'action'=>['Admin\OurCustomerController@destroy', $customer->id], 'id'=>'deleteForm'.$customer->id]) !!}
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
    });
</script>
@endsection
