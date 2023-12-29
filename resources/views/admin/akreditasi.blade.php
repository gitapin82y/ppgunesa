@extends('master.dashboard')
@section('title','Akreditasi')
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
                Akreditasi
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </section>

    <section id="content">
      <div class="container py-4">
        <div class="row justify-content-center">
          <button type="button" class="btn btn-primary col-12 col-md-3 py-3" data-bs-toggle="modal" data-bs-target="#ubahAkreditasiModal">
            Ubah Akreditasi
        </button>
    
        </div>
        <div class="row justify-content-center text-center">
          @if ($akreditasi)
          <img id="akreditasiImage" class="w-75 mt-4" src="{{ Storage::url($akreditasi->image) }}" alt="">
          @endif
          
         
        </div>
      </div>
    </section>
    
<!-- Modal -->
<div  class="modal fade" id="ubahAkreditasiModal" tabindex="-1" aria-labelledby="ubahAkreditasiModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="ubahAkreditasiModalLabel">Ubah Akreditasi</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <form id="ubahAkreditasiForm" action="{{ route('image.upload') }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="mb-3">
                      <label for="inputAkreditasi" class="form-label">Gambar Akreditasi</label>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
@endpush