@extends('layouts.main')

@section('container')
    <!-- Start Hero -->
    <div class="hero">
      <div class="hero__inner container">
        <div class="hero-description">
            <h2>Peminjaman Ruangan Mahasiswa LPKIA</h2>
            <h4>Biro Administrasi Akademik</h4>
        </div>
      </div>
    </div>
    <!-- End Hero -->
    <!-- Start Daftar Ruangan -->
    <div class="daftar-ruangan my-5 container">
        <h3 class="title-daftar-ruangan text-center">
            Daftar Ruangan
        </h3>
        <div class="list-ruangan d-flex flex-wrap justify-content-center">
            <div class="card m-3" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title text-center">Ruang Kelas</h5>
                  <p class="card-text">Ruang kelas ini memiliki kapasitas 15-30 orang dan biasanya dipakai untuk perkuliahan.</p>
                </div>
              </div>
              <div class="card m-3" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title text-center">Ruang Lab</h5>
                  <p class="card-text">Ruang lab berisi komputer yang biasanya dipakai untuk praktikum. Kapasitas ruangan ini biasanya mencapai 30 orang</p>
                </div>
              </div>
              <div class="card m-3" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title text-center">Ruang GSG</h5>
                  <p class="card-text">Ruang ini digunakan oleh seluruh mahasiswa untuk kegiatan/acara besar yang diadakan dikampus.</p>
                </div>
              </div>
        </div>
    </div>
@endsection