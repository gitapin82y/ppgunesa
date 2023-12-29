@extends('master.main')
@section('title','PPG Dalam Jabatan')
@section('content')
    <!-- header -->
    <section id="banner">
      <div class="container">
        <div class="row justify-content-center">
          <h2>PPG Dalam Jabatan</h2>
        </div>
      </div>
    </section>
    <!-- end header -->

    <!-- visimisi -->
    <section id="visiMisi" class="mb-5">
      <div class="container background-container bt-2">
        <div class="row">
          <div class="col-12">
            @if ($content)
              {!! $content->information !!}
            @endif
          </div>
        </div>
      </div>
    </section>
    <!-- end visimisi -->

  @endsection