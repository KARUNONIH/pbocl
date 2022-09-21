{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Document</title>
</head>
<body>
    ini home
    <div class="btn btn-dark"><a href="{{ route('products.index') }}">data produk</a></div>
</body>
</html> --}}
@extends('template.dashboard')
@section('content')
    

    
    
        <!-- Page content-->
        <div class="container-fluid konten">
            <h1 class="text-center ">Selamat Datang di ....</h1>
            <p class="text-center p">Disini kita dapat melakukan beberapa hal seperti </p>

            <div class="i">
              <div class="isi">
                <div class="isi1">
                    <div class="atas">
                        <p><i class="fa-solid fa-right-to-bracket"></i><span> Login / Logout</span></p>
                    </div>
                    <div class="bawah">
                       <p>Terdapat fitur login yang dapat digunakan oleh user</p> 
                    </div>
                </div>
                <div class="isi1">
                    <div class="atas">
                        <p><i class="fa-solid fa-table"></i><span> Menampilkan Data</span></p>
                    </div>
                    <div class="bawah">
                       <p>Semua data akan ditampilkan pada halaman Data Barang</p> 
                    </div>
                </div>
                <div class="isi1">
                    <div class="atas">
                        <p><i class="fa-solid fa-pen-to-square"></i><span> Edit Data</span></p>
                    </div>
                    <div class="bawah">
                       <p>Dapat Membuat, Mengubah, serta Menghapus data</p> 
                    </div>
                </div>
            </div>  
            </div>
            
        </div> 
    

@endsection