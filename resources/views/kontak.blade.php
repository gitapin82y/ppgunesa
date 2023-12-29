@extends('master.main')
@section('title','Kontak')
@push('before_style')
  <style>
    .card-kontak {
    border-radius: 10px;
    outline: none;
    box-shadow: #aaaaaa14 0px 10px 40px;
    padding: 20px;
    background-color: white;
    border: 1px solid #4d4d4d14;
    margin-top: 10px
}
.card-kontak img{
  width: 100px;
}
#kontak{
  margin-top: -70px;
}
.maps{
  margin-top: 50px;
  width: 90%;
  height: 400px;
  border-radius: 20px;
}
.form-kontak{
  padding: 20px 50px;
  border-radius: 20px;
  background: white;
  box-shadow: #aaaaaa14 0px 10px 40px;
}
.form-kontak input{
 height: 60px;
 border-radius: 10px;
 border: 1px solid rgb(227, 227, 227);
}
  </style>
@endpush
@section('content')
    <!-- header -->
    <section id="banner">
      <div class="container">
        <div class="row justify-content-center">
          <h2>Kontak Kami</h2>
        </div>
      </div>
    </section>
    <!-- end header -->

    <!-- allNews -->
    <section id="kontak" class="mb-5">
      <div class="row col-12 justify-content-around">
      <div class="card-kontak col-md-5 col-12">
        <div class="row">
          <div class="col-7 d-flex align-items-center">
            <img src="{{asset('assets/icon/email.png')}}" class="mr-3" alt="">
            <h4>Email</h4>
          </div>
          <div class="col-5 align-items-center d-flex">
            <p class="mt-2">ppg@unesa.ac.id</p>
          </div>
        </div>
      </div>

      <div class="card-kontak col-md-5 col-12">
        <div class="row">
          <div class="col-7 d-flex align-items-center">
            <img src="{{asset('assets/icon/telepone.png')}}" class="mr-3" alt="">
            <h4>Telepone</h4>
          </div>
          <div class="col-5 align-items-center d-flex">
            <p class="mt-2">031 - 51169397</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row justify-content-center mt-5">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1136.8373091743308!2d112.67204581113637!3d-7.30220779809262!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fc523ce2877f%3A0xbbdf6bcf0f54adf1!2sLP3M%20UNESA!5e0!3m2!1sen!2sid!4v1702217572939!5m2!1sen!2sid" class="maps" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div class="row justify-content-center my-5">
      <div class="form-kontak col-12 col-md-8 my-4">
        <h4 class="text-center mb-5 mt-4">Kritik Saran</h4>
        <form action="{{url('admin/kontak-kami')}}" method="post">
          @csrf
          <div class="row">
            <div class="col">
            <div class="form-group">
              <label for="nama_lengkap">Nama Lengkap <small class="text-danger">*</small></label>
              <input type="text" class="form-control" id="nama_lengkap" name="name" required>
            </div>
          </div>
          <div class="col">
            <div class="form-group">
              <label for="email">Email <small class="text-danger">*</small></label>
              <input type="email" class="form-control" name="email" id="email" required>
            </div>
          </div>
          </div>
          <div class="form-group">
            <label for="subjek">Subjek <small class="text-danger">*</small></label>
            <input type="text" name="title" class="form-control" id="subjek" required>
          </div>
          <div class="form-group">
            <label for="pesan">Pesan<small class="text-danger">*</small></label>
            <textarea class="form-control" id="pesan" name="description" rows="5"></textarea>
          </div>
          <div class="row my-5 justify-content-center text-center">
            <button type="submit" class="btn btn-main">Kirim</button>
          </div>
        </form>
      </div>
    </div>
    </section>
    <!-- end allNews -->
@endsection