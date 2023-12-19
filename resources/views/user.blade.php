@extends('layouts.mainlayouts')
@section('content')    
<div class="col-lg-12">
  <div class="card">
      <div class="card-body d-flex justify-content-between align-items-center">
          <h5 class="card-title">Data User</h5>
          <a href="{{ route('users.create') }}" class="btn btn-success rounded-pill">Tambah Data</a>
      </div>
      <!-- Table with stripped rows -->
      <table class="table datatable">
          <thead>
              <tr>
                  <th>No</th>
                  <th>Name</th>
                  <th>Nim</th>
                  <th>Aksi</th>
              </tr>
          </thead>
          <tbody>
            @foreach ($users as $user)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                      <td>{{ $user->name }}</td>
                      <td>{{ $user->nim }}</td>
                      <td>
                          <a href="{{ route('user-edit', $user->id) }}" class="btn btn-warning rounded-pill">Edit</a>
                          <a href="{{ route('users.destroy', $user->id) }}" class="btn btn-danger rounded-pill" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $user->id }}').submit();">Hapus</a>
                          <form id="delete-form-{{ $user->id }}" action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: none;">
                              @csrf
                              @method('DELETE')
                          </form>
                      </td>
                  </tr>
              @endforeach
          </tbody>
      </table>
      <!-- End Table with stripped rows -->
  </div>
</div>

@endsection