@extends('master.dashboard')
@section('title','Dashboard Admin')
@push('style')
<link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css" rel="stylesheet">

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
        DASHBOARD PPG UNESA<span>&#128075;&#127995;</span>
      </h2>
    </div>
  </div>
</section>

<section id="content">
  <div class="container">
    <div class="row justify-content-around">
      <a href="/admin/ubah-akreditasi" class="col-12 card-item col-md-4">
        <div class="child">
          <div class="circle">
            <i class="fa-solid fa-calendar-days"></i>
          </div>
          <h4>Ubah Akreditasi</h4>
          <p>Anda dapat mengubah kapanpun akreditasi</p>
        </div>
      </a>
      <a href="/admin/ubah-struktur-organisasi" class="col-12 card-item col-md-4">
        <div class="child">
          <div class="circle">
            <i class="fa-solid fa-magnifying-glass-minus"></i>
          </div>
          <h4>Ubah Struktur Organisasi</h4>
          <p>Anda dapat mengubah kapanpun struktur organisasi</p>
        </div>
      </a>
      <a
        href="{{route('news.index')}}"
        class="col-12 card-item col-md-4"
      >
        <div class="child">
          <div class="circle">
            <i class="fa-solid fa-book"></i>
          </div>
          <h4>Kelola Berita</h4>
          <p>Anda dapat menambah, mengubah dan menghapus berita</p>
        </div>
      </a>
      <a
        href="{{url('/admin/upload-dokumen')}}"
        class="col-12 card-item col-md-4"
      >
        <div class="child">
          <div class="circle">
            <i class="fa-solid fa-newspaper"></i>
          </div>
          <h4>Upload Dokumen PPG</h4>
          <p>Anda dapat upload dan mengelola dokumen panduan untuk ppg</p>
        </div>
      </a>
      <a href="/admin/kontak-kami" class="col-12 card-item col-md-4">
        <div class="child">
          <div class="circle">
            <i class="fa-solid fa-book-medical"></i>
          </div>
          <h4>Kelola Kritik Saran</h4>
          <p>Anda dapat mengelola kritik dan saran dari pengguna website ppg</p>
        </div>
      </a>
      <a href="/admin/ppg-dalam-jabatan" class="col-12 card-item col-md-4">
        <div class="child">
          <div class="circle">
            <i class="fa-solid fa-comments"></i>
          </div>
          <h4>PPG Dalam Jabatan</h4>
          <p>Anda dapat mengubah kapanpun informasi pada halaman PPG Dalam Jabatan</p>
        </div>
      </a>
      <a
        href="/admin/ppg-prajabatan"
        class="col-12 card-item col-md-4"
        style="background-color: #9463e3"
      >
        <div class="child">
          <div class="circle">
            <i class="fa-solid fa-comments"></i>
          </div>
          <h4>PPG Prajabatan</h4>
          <p>Anda dapat mengubah kapanpun informasi pada halaman PPG Prajabatan</p>
        </div>
      </a>
    </div>
  </div>
</section>
@endsection
