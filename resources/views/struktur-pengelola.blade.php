@extends('master.main')
@section('title','Struktur Pengelola')
@section('content')
    <!-- header -->
    <section id="banner">
      <div class="container">
        <div class="row justify-content-center">
          <h2>Struktur Pengelola</h2>
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
            @endif
          </div>
        </div>
      </div>
    </section>
    <!-- end visimisi -->

  @endsection