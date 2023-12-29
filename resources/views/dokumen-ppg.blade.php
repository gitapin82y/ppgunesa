@extends('master.main')
@section('title','Dokumen Panduan PPG')
@section('content')
    <!-- header -->
    <section id="banner">
      <div class="container">
        <div class="row justify-content-center">
          <h2>Dokumen Panduan PPG</h2>
        </div>
      </div>
    </section>
    <!-- end header -->

    <!-- visimisi -->
    <section id="visiMisi" class="mb-5">
      <div class="container background-container bt-2">
        <div class="row">
          <div class="col-12">
            @foreach ($items as $item)
            <div class="row my-4">
              <div class="col-9 align-self-center">
                <h5>
                  {{$item->name}}
                </h5>
              </div>
              <div class="col-3">
                <a href="{{$item->file}}" class="btn btn-main w-100" target="_blank">Lihat Panduan</a>
              </div>
            </div>
            <hr>
            @endforeach
          </div>
        </div>
      </div>
    </section>
    <!-- end visimisi -->

  @endsection