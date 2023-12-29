@extends('master.main')
@section('title','Akreditasi')
@section('content')
    <!-- header -->
    <section id="banner">
      <div class="container">
        <div class="row justify-content-center">
          <h2>Akreditasi</h2>
        </div>
      </div>
    </section>
    <!-- end header -->

    <!-- visimisi -->
    <section id="visiMisi" class="mb-5">
      <div class="container background-container bt-2">
        <div class="row">
          <div class="col-12 justify-content-center text-center">
            @if ($akreditasi)
            <img id="akreditasiImage" class="w-75 mt-4" src="{{ Storage::url($akreditasi->image) }}" alt="">
            <br>
            <a
              href="{{ Storage::url($akreditasi->image) }}"
              class="btn btn-info btn-large my-4"
              download
            >
              Download Akreditasi
            </a>
            @endif
           
          </div>
        </div>
      </div>
    </section>
    <!-- end visimisi -->
@endsection