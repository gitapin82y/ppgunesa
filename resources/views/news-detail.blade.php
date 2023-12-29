@extends('master.main')
@section('title','Detail Berita')
@section('content')
    <!-- header -->
    <section id="banner">
      <div class="container">
        <div class="row justify-content-center">
          <h2>Detail Berita</h2>
        </div>
      </div>
    </section>
    <!-- end header -->

    <!-- newsDetails -->
    <section id="newsDetails" class="mb-5">
      <div class="container background-container bt-2">
        <div class="row pt-3">
          <div class="col-12 col-md-8 px-4 content pb-3">
            <img
            src="{{$detail->image}}"
            alt="{{$detail->title}}"
          />

            <h2 class="mt-2">
              {{$detail->title}}
            </h2>
            <div class="d-flex pt-2 information">
              @php
                  use Illuminate\Support\Carbon;
              @endphp
              <p>{{Carbon::parse($detail->date)->isoFormat('D MMMM Y')}}</p>
              <p class="ml-4"><i class="fas fa-eye"></i> {{$detail->total_views}}</p>
            </div>
            <div class="description">
              {!!$detail->description!!}
            </div>
          </div>
          <div class="col-12 col-md-4 latestNews">
            <h4>Berita Terbaru</h4>
            <div class="row">
              @foreach ($news as $new)
              <div class="col-6 mt-3">
                <a href="/berita/{{$new->title}}" style="text-decoration:none;">
                  <img
                  src="{{$new->image}}"
                  alt="{{$new->title}}"
                />
                <h6 class="mb-0 mt-3">
                  {{$new->title}}
                </h6>
                <small>{{Carbon::parse($new->date)->isoFormat('D MMMM Y');}}</small>
                </a>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end newsDetails -->
@endsection