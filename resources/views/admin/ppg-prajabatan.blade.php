@extends('master.dashboard')
@section('title','PPG Prajabatan')
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
                PPG Prajabatan
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </section>

    <section id="content">
      <div class="container py-4">
        <div class="row justify-content-center">
          @if(session('success'))
          <p style="color:green;">{{ session('success') }}</p>
      @endif
      <form action="{{ route('content.ppg.update') }}" method="post">
          @csrf
          @method('patch')
          <textarea name="information" id="editor">@if($content){!! $content->information !!}@endif</textarea>
          <button type="submit" class="btn btn-primary mt-3 px-5">Simpan</button>
      </form>
  
        </div>
      </div>
    </section>
    
@endsection

@push('script')
<script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>

<script>
  ClassicEditor
      .create( document.querySelector( '#editor' ) )
      .catch( error => {
          console.error( error );
      } );
      
</script>
@endpush