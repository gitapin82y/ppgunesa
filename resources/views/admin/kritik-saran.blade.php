@extends('master.dashboard')
@section('title','Kritik Saran')
@push('style')
<style>
  .buttons-print{
    background-color: rgb(133, 72, 207) !important; 
    color: white !important;
    border: none !important;
    outline: none !important;
  }
</style>
@endpush
@section('content') 

    <section id="welcome">
      <div class="row">
        <div class="container">
          <h2>
            SELAMAT DATANG DI<br />
            DASHBOARD MALA<span>&#128075;&#127995;</span>
          </h2>

          <nav
            aria-label="breadcrumb"
            class="justify-content-center d-flex pt-3"
          >
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="/admin">Dashboard</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Kritik Saran
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </section>

    <section id="content">
      <div class="container py-4">
        <div class="row justify-content-center text-center">
          <table class="table" id="tableKritikSaran">
            <thead>
                <tr>
                    <th scope="col">No. Table</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Title</th>
                    <th scope="col">Pesan</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                {{-- Loop through data and display rows --}}
                @foreach($tabels as $key => $table)
                    <tr>
                        <th scope="row">{{ $key+1 }}</th>
                        <td>{{ $table->name }}</td>
                        <td>{{ $table->email }}</td>
                        <td>{{ $table->title }}</td>
                        <td>{{ $table->description }}</td>
                        <td class="{{$table->status === 'Diterima' ? 'text-success' : ($table->status === 'Ditolak' ? 'text-danger' : 'text-warning') }} fw-bold">{{ $table->status }}</td>
                        @if ($table->status == 'Pending')
                          <td>
                            <button class="btn btn-success" onclick="updateStatus('{{ $table->id }}', 'Diterima')"><i class="fa-solid fa-check"></i></button>
                            <button class="btn btn-danger" onclick="updateStatus('{{ $table->id }}', 'Ditolak')"><i class="fa-solid fa-xmark"></i></button>
                          </td>
                        @else
                          <td>
                            <button class="btn btn-danger" onclick="deleteStatus('{{ $table->id }}')"><i class="fa-solid fa-trash"></i></button>
                          </td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>
      </div>
    </section>
    
<!-- Modal -->
<div  class="modal fade" id="ubahAkreditasiModal" tabindex="-1" aria-labelledby="ubahAkreditasiModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="ubahAkreditasiModalLabel">Ubah Struktur Organisasi</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <form id="ubahAkreditasiForm" action="{{ route('image.struktur') }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="mb-3">
                      <label for="inputAkreditasi" class="form-label">Gambar Struktur Organisasi</label>
                      <input type="file" class="form-control" id="inputAkreditasi" name="akreditasi_image" accept="image/*" required>
                  </div>
                  <button type="submit" class="btn btn-primary">Simpan</button>
              </form>
          </div>
      </div>
  </div>
</div>
@endsection

@push('script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script>
  function updateStatus(id, status) {
      // Implement AJAX request to update status
      $.ajax({
          url: '/admin/kontak-kami/' + id,
          type: 'PUT',
          data: {status: status, _token: '{{ csrf_token() }}'},
          success: function (data) {
            Swal.fire({
                icon: 'success',
                title: 'Status Berhasil '+status,
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 1500,
                timerProgressBar: true,
            }).then(function() {
                // Reload halaman setelah menutup SweetAlert
                location.reload();
            });
          }
      });
  }

  function deleteStatus(id) {
      // Implement AJAX request to update status
      $.ajax({
          url: '/admin/kontak-kami/' + id,
          type: 'DELETE',
          data: {_token: '{{ csrf_token() }}'},
          success: function () {
            Swal.fire({
                icon: 'success',
                title: 'Berhasil Dihapus',
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 1500,
                timerProgressBar: true,
            }).then(function() {
                // Reload halaman setelah menutup SweetAlert
                location.reload();
            });
          }
      });
  }
  
</script>
@endpush