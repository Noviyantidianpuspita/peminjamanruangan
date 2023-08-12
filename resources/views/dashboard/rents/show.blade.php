@extends('dashboard.layouts.main')

@section('container')
<!-- Main Content -->
<div class="col-md-10 p-0">
    <h2 class="content-title text-center mb-3">Daftar {{ $title }}</h2>
    <article class='explore-detail d-flex flex-wrap' style="margin-left: 20px;" tabindex='0'>
    <div class='img-container'>
          <img
            class='explore-item__thumbnail'
            src='{{ asset('GSG.png' . $rent->img) }}'
            tabindex='0'
            style="width: 18rem;"
          />
        </div>
        <ul class='detail-explore__info'>
            <table class="table table-borderless table-sm">
                <thead>
                </thead>
                <tbody>
                    <tr>
                        <th scope="col">Nama Ruangan</th>
                        <td>: {{$rent->room->code}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Nama</th>
                        <td>: {{$rent->user->name}}</td>
                    </tr>
                    <tr>
                        <th scope="col">No Wa</th>
                        <td>: {{$rent->no_wa}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Kegiatan</th>
                        <td>: {{$rent->purpose}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Note</th>
                        <td>: {{$rent->note}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Waktu Peminjaman</th>
                        <td>: {{ $rent->time_start_use }}</td>
                    </tr>
                </tbody>
            </table>
        </ul>
    </article>
@endsection