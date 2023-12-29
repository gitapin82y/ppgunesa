<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <meta
      name="keywords"
      content="PPG, PPG UNESA, UNESA, Pendidikan Profesi Guru Unesa, Universitas Negeri Surabaya"
    />
    <meta
      name="description"
      content="Program Studi Pendidikan Profesi Guru (PPG) Universitas Negeri Surabaya"
    />
    <meta image="{{asset('assets/logo/unesa.png')}}" />
    <meta property="og:type" content="article" />
    <meta
      property="og:image"
      content="{{asset('assets/logo/unesa.png')}}"
    />
    <meta property="og:title" content="PPG UNESA" />
    <meta property="og:site_name" content="PPG UNESA" />
    <meta property="og:url" content="link-web-ppg" />
    <meta
      property="og:description"
      content="Program Studi Pendidikan Profesi Guru (PPG) Universitas Negeri Surabaya"
    />
    <meta name="author" content="Apin" />

    @include('layouts.style')
    @stack('before_style')

    <title>@yield('title') | PPG UNESA</title>
  </head>
  <body>
    
    @include('layouts.navbar')

    @yield('content')

    @include('layouts.footer')

    @include('sweetalert::alert')
    
    @include('layouts.script')
    @stack('before_script')
  </body>
</html>
