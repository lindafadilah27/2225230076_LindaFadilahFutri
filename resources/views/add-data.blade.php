@extends('layouts.mainlayouts')
@section('content')   
<div class="col-lg-12">
    <div class="card">
        <div class="card-body d-flex justify-content-between align-items-center">
            <h5 class="card-title">Tambah Data User</h5>
            <a href="/" class="btn btn-primary rounded-pill">Kembali ke Daftar</a>
        </div>
        
        <!-- Form tambah data -->
        <form action="{{ route('users.store') }}" method="POST" class="card-body">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Nama:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="mb-3">
                <label for="nim" class="form-label">NIM:</label>
                <input type="text" class="form-control" id="nim" name="nim" required>
            </div>

            <button type="submit" class="btn btn-success rounded-pill">Simpan</button>
        </form>
        <!-- End Form tambah data -->
    </div>
</div>

@endsection