@extends('master.main')
@section('title','Semua Berita')
@push('before_style')
<link rel="stylesheet" href="{{ asset('assets/paginationjs/dist/pagination.css') }}">
@endpush
@section('content')
  <!-- header -->
  <section id="banner">
      <div class="container">
        <div class="row justify-content-center">
          <h2>Berita Terbaru</h2>
        </div>
      </div>
    </section>
    <!-- end header -->

    <!-- allNews -->
    <section id="allNews" class="mb-5">
      <div class="container background-container bt-2">
        {{-- <div class="row pt-3 content">
          @foreach ($news as $new)
          <div class="col-md-4 mt-4">
            <a href="{{$new->title}}">
              <div class="card">
                <div class="eye">
                  <img
                    src="{{$new->image}}"
                    alt="{{$new->title}}"
                  />
                </div>
                <h5>
                  {{$new->title}}
                </h5>
                <small class="my-1">
                  {{$new->date}}
                </small>
                <p>
                  {{$new->description}}
                </p>
              </div>
            </a>
          </div>
          @endforeach
        </div>

        <nav aria-label="Page navigation example" class="mt-5">
          <ul class="pagination">
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
              </a>
            </li>
            <li class="page-item active">
              <a class="page-link" href="#">1</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
              </a>
            </li>
          </ul>
        </nav> --}}
        <div class="data-container">
        
        </div>
    <div id="demo"></div>
      </div>
    </section>
    <!-- end allNews -->
@endsection

@push('before_script')
<script src="{{ asset('assets/paginationjs/dist/pagination.js') }}"></script>


<script>
  var container = $('#demo');
  
  container.pagination({
    dataSource: '/getDataBerita',
    locator: 'data',
    totalNumberLocator: (response) => {
    return response.total
  },
    pageSize: 6,
    callback: function(response, pagination) {
      var dataHtml = '<div class="row content pt-2">';
      var pageStart = (pagination.pageNumber - 1) * pagination.pageSize;
      var pageEnd = pageStart + pagination.pageSize;
      var pageItems = response.slice(pageStart, pageEnd);
      $.each(pageItems, function(index, item) {
        var limitedDescription = item.description.length > 30 ? item.description.substring(0, 30) + '...' : item.description;

        var formattedDate = new Date(item.date);
        // Buat array untuk nama bulan
        var monthNames = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
        // Ambil komponen tanggal, bulan, dan tahun
        var day = formattedDate.getDate();
        var monthIndex = formattedDate.getMonth();
        var year = formattedDate.getFullYear();
        // Format tanggal
        var formattedDateString = day + ' ' + monthNames[monthIndex] + ' ' + year;


        dataHtml += '<div class="col-md-4 mb-4 col-12 apin">';
        dataHtml += '<a href="berita/'+item.title+'">';
        dataHtml += '<div class="card"><div class="eye">';
        dataHtml += '<img src="'+item.image+'" alt="berita smk ypm 1 taman sidoarjo"></div>';
        dataHtml += '<h4 class="mt-2">'+item.title+'</h4>';
        dataHtml += '<small class="p14 mb-1">'+formattedDateString+'<i class="fas fa-eye ml-3"></i>'+item.total_views+'</small>';
        dataHtml += '<p>'+limitedDescription+'</p></div></a>';
        dataHtml += '</div>';
      });
  
      dataHtml += '</div>';
  
      container.prev().html(dataHtml);
    }
  });
  </script>

@endpush