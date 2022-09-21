
@extends('template.dashboard')
@section('content')
    

    
<div id="addEmployeeModal">


    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('products.update',$product->id) }}" method="POST">
                @csrf
    @method('PUT')
                <div class="modal-header">						
                    <h4 class="modal-title">Edit Data Barang</h4>
                </div>
                <div class="modal-body">					
                    <div class="form-group">
                        <label>Nama Barang</label>
                        <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label>Detail Barang</label>
                        <input class="form-control" style="height:150px" name="detail" placeholder="Detail" type="text" value="{{ $product->detail }}">
                        
                </div>
                <div class="modal-footer">
                    <a href="{{ route('products.index') }}" class="btn btn-danger">Cancel</a>				
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        </div>
</div>

{{-- <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('products.update',$product->id) }}" method="POST">
    @csrf
    @method('PUT')

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Detail:</strong>
                <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail">{{ $product->detail }}</textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form> --}}
@endsection