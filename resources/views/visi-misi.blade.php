@extends('master.main')
@section('title','Visi Misi')
@section('content')
  <!-- header -->
  <section id="banner">
    <div class="container">
      <div class="row justify-content-center">
        <h2>Visi & Misi</h2>
      </div>
    </div>
  </section>
  <!-- end header -->

  <!-- visimisi -->
  <section id="visiMisi" class="mb-5">
    <div class="container background-container bt-2">
      <div class="row justify-content-around">
        <div class="col-11 col-md-5 mt-4 p-4 bg-white border-radius10">
          <img
            src="{{asset('assets/icon/visi.svg')}}"
            class="mb-3"
            alt="visi smk ypm 1 taman sidoarjo"
          />
          <h2>Visi PPG UNESA :</h2>
          <p>
            Unggul dalam Penyelenggaraan Pendidikan Profesi Guru dan Kukuh
            dalam Pengembangan Keilmuan Pendidikan Profesi Guru.
          </p>
        </div>
        <div class="col-11 col-md-5 mt-4 p-4 bg-white border-radius10">
          <img
            src="{{asset('assets/icon/misi.svg')}}"
            class="mb-3"
            alt="misi smk ypm 1 taman sidoarjo"
          />
          <h2>Misi PPG UNESA :</h2>
          <p>
            1. Melaksanakan tata kelola pendidikan profesi guru yang
            bermutu.<br />
            2. Melaksanakan perencanaan, penyelenggaraan, dan pengevaluasian
            pendidikan profesi guru yang bermutu. <br />3. Melaksanakan
            pengembangan sistem penjaminan mutu yang akuntabel untuk
            menghasilkan lulusan/output yang bermutu.<br />
            4. Melaksanakan jejaring dalam pengembangan profesi guru yang
            bermutu.
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- end visimisi -->

  @endsection