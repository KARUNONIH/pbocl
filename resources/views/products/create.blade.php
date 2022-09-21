@extends('template.dashboard')
@section('content')
    <div id="addEmployeeModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('products.store') }}" method="POST">
                    @csrf
                    <div class="modal-header">						
                        <h4 class="modal-title">Tambah Data Siswa</h4>
                    </div>
                    <div class="modal-body">					
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="name" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label>Detail</label>
                            <input type="text" name="detail" class="form-control" placeholder="Name">
                            
                    </div>
                    <div class="modal-footer">
                        <a href="{{ route('dashboard') }}" class="btn btn-danger">Cancel</a>				
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        </div>
   
    @endsection
    
        
        

{{-- 
        <div id="addEmployeeModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('products.store') }}" method="POST">
                    <div class="modal-header">						
                        <h4 class="modal-title">Tambah Data Siswa</h4>
                    </div>
                    <div class="modal-body">					
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="name" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label>Detail</label>
                            <input type="text" name="detail" class="form-control" placeholder="Name">
                            
                    </div>
                    <div class="modal-footer">
                        <a href="{{ route('dashboard') }}" class="btn btn-danger">Cancel</a>				
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        </div> --}}
    
    
