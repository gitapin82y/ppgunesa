<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img
        src="{{asset('assets/logo/unesa.png')}}"
        height="50"
        alt="Logo Universitas Negeri Surabaya"
      />
    </a>
    <button
      class="navbar-toggler"
      type="button"
      data-toggle="collapse"
      data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item {{Request::is('/') ? 'active' : ''}}">
          <a class="nav-link" href="{{url('/')}}">Beranda</a>
        </li>
        <li class="nav-item dropdown {{Request::is('tentang-kami/*') ? 'active' : ''}}">
          <a
            class="nav-link dropdown-toggle"
            href="#"
            id="dropdownAboutUs"
            role="button"
            data-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
          >
            Tentang Kami
          </a>
          <div class="dropdown-menu" aria-labelledby="dropdownAboutUs">
            <a class="dropdown-item {{Request::is('tentang-kami/profil') ? 'active' : ''}}" href="/tentang-kami/profil">Profil</a>
            <a class="dropdown-item {{Request::is('tentang-kami/akreditasi') ? 'active' : ''}}" href="/tentang-kami/akreditasi"
              >Akreditasi</a
            >
            <a class="dropdown-item {{Request::is('tentang-kami/visi-misi') ? 'active' : ''}}" href="/tentang-kami/visi-misi"
              >Visi Misi</a
            >
            <a
              class="dropdown-item {{Request::is('tentang-kami/struktur-pengelola') ? 'active' : ''}}"
              href="/tentang-kami/struktur-pengelola"
              >Struktur Pengelola</a
            >
          </div>
        </li>
        <li class="nav-item dropdown {{Request::is('layanan-kami/*') ? 'active' : ''}}">
          <a
            class="nav-link dropdown-toggle"
            href="#"
            id="dropdownMajors"
            role="button"
            data-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
          >
            Layanan Kami
          </a>
          <div class="dropdown-menu" aria-labelledby="dropdownMajors">
            <a class="dropdown-item {{Request::is('layanan-kami/ppg-prajabatan') ? 'active' : ''}}" href="/layanan-kami/ppg-prajabatan"
              >PPG Prajabatan</a
            >
            <a class="dropdown-item {{Request::is('layanan-kami/ppg-dalam-jabatan') ? 'active' : ''}}" href="/layanan-kami/ppg-dalam-jabatan"
              >PPG Dalam Jabatan</a
            >
            <a class="dropdown-item {{Request::is('layanan-kami/dokumen-panduan-ppg') ? 'active' : ''}}" href="/layanan-kami/dokumen-panduan-ppg"
              >Dokumen Panduan PPG</a
            >
            <a class="dropdown-item" href="http://siakaduppg.unesa.ac.id/" target="_blank"
              >Siakad PPG</a
            >
            <a
              class="dropdown-item"
              href="https://ppg.kemdikbud.go.id/"
              target="_blank"
              >LMS</a
            >
          </div>
        </li>
        <li class="nav-item {{Request::is('/berita') ? 'active' : ''}}">
          <a class="nav-link" href="/berita">Berita</a>
        </li>
        <li class="nav-item {{Request::is('/kontak-kami') ? 'active' : ''}}">
          <a class="nav-link navScroll" href="{{route('kontak-kami.public')}}"
            >Kontak Kami</a
          >
        </li>
      </ul>
    </div>
  </div>
</nav>