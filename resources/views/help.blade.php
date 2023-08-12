@extends('layouts.main')

@section('container')
    <!-- Start Hero -->
    <div class="hero hero-bantuan">
        <div class="hero__inner container">
          <div class="hero-description m-auto p-5">
              <h2>Petunjuk Peminjaman Ruangan</h2>
          </div>
        </div>
      </div>
      <!-- End Hero -->
      <!-- Start How To Use peminjaman ruangan -->
      <div class="how-use-peminjaman ruangan my-4 container">
          <h2>TAHAPAN PEMINJAMAN RUANGAN</h2>
          <div class="list-tahapan p-5">
              <ul>
                  <li><b>Untuk melakukan peminjaman, Anda diharuskan melakukan login terlebih dahulu sesuai dengan username yang telah disediakan oleh admin.</b></li>
                  <li><b>Jika ingin mengetahui ruangan yang tersedia, silakan menuju ke menu Daftar Ruangan. Secara default, tampilan akan langsung ke menu Daftar Ruangan.</b></li>
                  <li><b>Jika ingin meminjam ruangan, silakan menuju ke menu Daftar Ruangan. Cek ketersediaan ruangan dan daftar peminjam pada sub-menu Daftar Ruangan dan Daftar Peminjam. Jika ruangan tersedia, silakan klik tombol Pinjam dan isi form peminjaman.</b></li>
                  <li><b>Pastikan data yang Anda masukkan sudah sesuai. Jika sudah sesuai, klik Kirim.</b></li>
                  <li><b>Proses pengajuan peminjaman sedang diproses, silakan tunggu pemberitahuan lebih lanjut.</b></li>
                  <li><b>Untuk mengecek status peminjaman apakah diterima atau ditolak, silakan menuju sub-menu Daftar Peminjaman.</b></li>
              </ul>
          </div>
      </div>
      <!-- End How to use -->
@endsection