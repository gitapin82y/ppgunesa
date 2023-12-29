@extends('master.main')
@section('title','Home')
@section('content')
    <!-- header -->
    <section id="header">
        <div class="container pt-3">
          <div class="row pt-5 mt-5">
            <div class="col-md-6 align-self-center col-12 description">
              <h1>
                Lembaga Pencetak Guru
                <span class="txt-brown font-italic">Profesional</span>
              </h1>
              <p>
                Program Studi Pendidikan Profesi Guru Universitas Negeri Surabaya
                menjadikan guru sebagai pembelajar mandiri, inovatif, agen
                perubahan, berkompetensi unggul dalam pendidikan profesi baik di
                tingkat nasional maupun internasional
              </p>
              <a
                href="https://siakaduppg.unesa.ac.id/"
                target="_blank"
                class="btn btn-brown"
                >Lapor Diri</a
              >
            </div>
            <div
              class="col-md-6 mt-5 mt-md-0 col-12 justify-content-end text-right align-items-center"
            >
              <img src="{{asset('assets/image/header.png')}}" class="w-100" alt="" />
            </div>
          </div>
        </div>
      </section>
      <!-- end header -->
  
      <!-- why us -->
      <section id="whyUs">
        <img
          src="{{asset('assets/image/bg1.png')}}"
          class="backgroundSection"
          alt="background layer"
        />
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6 col-12 ssd">
              <img
                src="{{asset('assets/image/ssd people.png')}}"
                alt="prestasi smk ypm 1 taman sidoarjo"
              />
            </div>
            <div class="col-lg-6 col-12 content">
              <div class="animation1">
                <h2>
                  Mengapa <span class="txt-brown font-italic">Harus Kami?</span>
                </h2>
                <p>Memberikan Layanan Terbaik dan Berkualitas Unggul</p>
              </div>
              <ul class="pl-0">
                <li>
                  <img
                    src="{{asset('assets/icon/laptop.svg')}}"
                    alt="fasilitas lengkap smk ypm 1"
                  />
                  <div class="ml-3">
                    <h4>Terpadu</h4>
                    <p>Sistem pembelajaran dilaksanakan menggunakan LMS</p>
                  </div>
                </li>
                <li>
                  <img src="{{asset('assets/icon/gedung.svg')}}" alt="kerja sama smk ypm 1" />
                  <div class="ml-3">
                    <h4>Terbimbing</h4>
                    <p>
                      Proses pembelajaran dibimbing oleh instruktur dosen dan guru
                      pamong
                    </p>
                  </div>
                </li>
                <li>
                  <img
                    src="{{asset('assets/icon/people.svg')}}"
                    alt="siswa berprestasi smk ypm 1"
                  />
                  <div class="ml-3">
                    <h4>Mitra Kerjasama</h4>
                    <p>
                      Menjalin kerjasama dengan berbagai mitra untuk mendukung
                      proses pembelajaran
                    </p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!-- end why us -->
  
      <!-- total students -->
      <section id="totalStudents">
        <div class="container text-center">
          <div class="row justify-content-center text-left">
            <div class="col-md-2 col-6 mt-4">
              <h1
                data-purecounter-start="0"
                data-purecounter-end="232"
                data-purecounter-duration="2"
                class="purecounter t1"
              ></h1>
              <h6>Alumni Mahasiswa</h6>
            </div>
            <div class="col-md-2 col-6 mt-4">
              <h1
                data-purecounter-start="0"
                data-purecounter-end="232"
                data-purecounter-duration="2"
                class="purecounter t2"
              ></h1>
              <h6>Dosen Instruktur</h6>
            </div>
            <div class="col-md-2 col-6 mt-4">
              <h1
                data-purecounter-start="0"
                data-purecounter-end="232"
                data-purecounter-duration="2"
                class="purecounter t3"
              ></h1>
              <h6>Guru Pamong</h6>
            </div>
            <div class="col-md-2 col-6 mt-4">
              <h1
                data-purecounter-start="0"
                data-purecounter-end="232"
                data-purecounter-duration="2"
                class="purecounter t4"
              ></h1>
              <h6>Mitra Kerjasama</h6>
            </div>
          </div>
        </div>
      </section>
      <!-- end total students -->
  
      <!-- about us -->
      <section id="aboutUs">
        <img
          src="{{asset('assets/image/bg2.png')}}"
          class="backgroundSection"
          alt="background layer"
        />
        <div class="container">
          <div class="row justify-content-center">
            <h2>
              Tentang
              <span class="txt-brown font-italic">Kami</span>
            </h2>
          </div>
          <div class="row content justify-content-center">
            <div class="col-lg-4 col-md-6 col-6">
              <a href="about-us/profileSekolah.html">
                <div class="card">
                  <img
                    src="{{asset('assets/icon/sekolah.svg')}}"
                    alt="profile sekolah smk ypm 1 taman sidoarjo"
                  />
                  <h4>Profil</h4>
                </div>
              </a>
            </div>
            <div class="col-lg-4 col-md-6 col-6">
              <a href="about-us/sejarah.html">
                <div class="card">
                  <img
                    src="{{asset('assets/icon/sejarah.svg')}}"
                    alt="visi misi  sekolah smk ypm 1 taman sidoarjo"
                  />
                  <h4>Akreditasi</h4>
                </div>
              </a>
            </div>
            <div class="col-lg-4 col-md-6 col-6">
              <a href="about-us/visiMisi.html">
                <div class="card">
                  <img
                    src="{{asset('assets/icon/list.svg')}}"
                    alt="visi misi  sekolah smk ypm 1 taman sidoarjo"
                  />
                  <h4>Visi Misi</h4>
                </div>
              </a>
            </div>
  
            <div class="col-lg-4 col-md-6 col-6">
              <a href="http://lsp.smkypm1taman.sch.id" target="_blank">
                <div class="card">
                  <img
                    src="{{asset('assets/icon/lsp.svg')}}"
                    alt="lsp  sekolah smk ypm 1 taman sidoarjo"
                  />
                  <h4>Struktur Pengelola</h4>
                </div>
              </a>
            </div>
          </div>
        </div>
      </section>
      <!-- end about us -->
  
      <!-- majors -->
      <section id="majors">
        <img
          src="{{asset('assets/image/bg3.png')}}"
          class="backgroundSection"
          alt="background layer"
        />
        <div class="container">
          <div class="row justify-content-center">
            <h2>Layanan <span class="txt-brown font-italic">Kami</span></h2>
          </div>
          <div class="row content justify-content-center">
            <div class="col-lg-4 col-6">
              <a href="majors/tkj.html">
                <div class="card">
                  <img
                    src="{{asset('assets/icon/tkj.svg')}}"
                    alt="jurusan teknik komputer dan jaringan sekolah smk ypm 1 taman sidoarjo"
                  />
                  <h4>PPG Prajabatan</h4>
                </div>
              </a>
            </div>
            <div class="col-lg-4 col-6">
              <a href="majors/titl.html">
                <div class="card">
                  <img
                    src="{{asset('assets/icon/pengelasan.svg')}}"
                    alt="jurusan teknik instalasi tenaga listrik sekolah smk ypm 1 taman sidoarjo"
                  />
                  <h4>PPG Dalam Jabatan</h4>
                </div>
              </a>
            </div>
            <div class="col-lg-4 col-6">
              <a href="majors/tpm.html">
                <div class="card">
                  <img
                    src="{{asset('assets/icon/mesin.svg')}}"
                    alt="jurusan teknik pemesinan sekolah smk ypm 1 taman sidoarjo"
                  />
                  <h4>Siakad PPG</h4>
                </div>
              </a>
            </div>
            <div class="col-lg-4 col-6">
              <a href="majors/tei.html">
                <div class="card">
                  <img
                    src="{{asset('assets/icon/elektronika industri.svg')}}"
                    alt="jurusan teknik elektronika industri sekolah smk ypm 1 taman sidoarjo"
                  />
                  <h4>LMS</h4>
                </div>
              </a>
            </div>
          </div>
        </div>
      </section>
      <!-- end majors -->
  
      <!-- news -->
      <section id="news">
        <div class="container py-4">
          <div class="row justify-content-center pt-4">
            <h2 class="mb-0">
              Berita <span class="txt-brown font-italic">Terbaru</span>
            </h2>
          </div>
          <div class="row content p-5">
            <div class="owl-carousel owl-theme">
              @php
              use Illuminate\Support\Carbon;
          @endphp
              @foreach ($news as $new)
              <a href="berita/{{$new->title}}">
                <div class="card">
                  <div class="eye">
                    <img
                      src="{{$new->image}}"
                      alt="{{$new->title}}"
                    />
                  </div>
  
                  <h5>{{$new->title}}</h5>
                  <div class="d-flex my-1">
                    <small>{{Carbon::parse($new->date)->isoFormat('D MMMM Y');}}</small>
                    &nbsp;&nbsp;
                    <small><i class="fas fa-eye"></i> {{$new->total_views}}</small>
                  </div>
                  <p>
                    {!!Str::limit($new->description, 30)!!}
                  </p>
                </div>
              </a>
              @endforeach
  
            </div>
          </div>
          <div class="row justify-content-center mb-5">
            <a href="/berita" class="btn btn-brown">Selengkapnya</a>
          </div>
        </div>
      </section>
      <!-- end news -->
  
      <!-- alumni -->
      <section id="alumni">
        <img src="{{asset('assets/image/quote-left.png')}}" class="backgroundSection" alt="" />
        <div class="container">
          <div class="row justify-content-center">
            <h2>
              Apa Kata <span class="txt-brown font-italic">Alumni PPG</span>
            </h2>
          </div>
          <div class="row content p-5">
            <div class="owl-carousel owl-theme">
              <div class="item">
                <img
                  src="{{asset('assets/image/people1.png')}}"
                  alt="Alumni smk ypm 1 taman sidoarjo"
                />
                <h4>Cindy Wijaya</h4>
                <p>
                  Pengalaman lapangan selama pendidikan profesi guru benar-benar luar biasa. Saya mendapatkan kesempatan untuk mengajar di berbagai lingkungan dan merasakan tantangan seorang guru sejak dini. Ini memberi saya kepercayaan diri yang besar saat memasuki dunia mengajar.
                </p>
              </div>
              <div class="item">
                <img
                  src="{{asset('assets/image/people2.jpg')}}"
                  alt="Alumni smk ypm 1 taman sidoarjo"
                />
                <h4>Budi Santoso</h4>
                <p>
                  Pendidikan profesi guru ini tidak hanya mengajarkan metode-metode konvensional, tetapi juga memberi kami wawasan tentang inovasi dalam pendidikan. Saya merasa siap untuk menghadapi perubahan dan menantang diri saya untuk terus berkembang sebagai seorang pendidik.
                </p>
              </div>
              <div class="item">
                <img
                  src="{{asset('assets/image/people3.jpg')}}"
                  alt="Alumni smk ypm 1 taman sidoarjo"
                />
                <h4>Ani Setiawan</h4>
                <p>
                  Saya merasa sangat beruntung dapat memiliki mentor yang peduli selama masa pendidikan profesi guru saya. Mentor ini membimbing saya tidak hanya dalam hal akademis, tetapi juga memberi inspirasi dan dorongan moral. Ini adalah salah satu aspek yang membuat pengalaman saya begitu berkesan.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- end alumni -->
@endsection