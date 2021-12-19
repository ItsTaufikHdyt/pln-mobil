@extends('admin::layouts.app')
@section('title')
User
@endsection
@section('title-content')
Peminjaman
@endsection
@section('item')
User
@endsection
@section('item-active')
Peminjaman
@endsection
@section('content')
<button data-toggle="modal" data-target="#createPeminjamanModal" type="button" class="btn btn-success">Create</button>
<table class="table table-responsive table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Keperluan</th>
            <th scope="col">Nama</th>
            <th scope="col">Bagian</th>
            <th scope="col">Jumlah Penumpang</th>
            <th scope="col">Tanggal Berangkat</th>
            <th scope="col">Tanggal Kembali</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @php
        $no = 1;
        @endphp
        @forelse ($peminjaman as $data)
        <tr>
            <th scope="row">{{$no++}}</th>
            <th scope="row">
                @if ($data->keperluan_id == 1)
                <span class="badge badge-primary">Dinas</span>
                @elseif ($data->keperluan_id == 2)
                <span class="badge badge-secondary">Non Dinas</span>
                @endif
            </th>
            <th scope="row">{{$data->nama}}</th>
            <th scope="row">{{$data->bagian}}</th>
            <th scope="row">{{$data->jumlah_penumpang}}</th>
            <th scope="row">{{$data->tgl_berangkat}}</th>
            <th scope="row">{{$data->tgl_kembali}}</th>
            <th scope="row">
                @if ($data->status == 0)
                <span class="badge badge-danger">Ditolak</span>
                @elseif ($data->status == 1)
                <span class="badge badge-warning">Proses</span>
                @elseif ($data->status == 2)
                <span class="badge badge-success">Diterima</span>
                @elseif ($data->status == 3)
                <span class="badge badge-primary">Selesai</span>
                @endif
            </th>
            <th scope="row">
                <button  data-toggle="modal" data-target="#showPeminjamanModal{{$data->id}}" type="button" class="btn btn-secondary">View</button>
                @include('User.peminjaman.show')
                @if ($data->status !== 2 && $data->status !== 3)
                <button data-toggle="modal" data-target="#updatePeminjamanModal{{$data->id}}" type="button" class="btn btn-warning">Edit</button>
                @include('User.peminjaman.update')
                @endif
                <button data-toggle="modal" data-target="#confirmationModal{{$data->id}}" type="button" class="btn btn-danger">Delete</button>
                @include('User.peminjaman.delete-confirmation')
                @if ($data->status == 2)
                <button class="btn btn-primary">Selesai</button>
                @endif
            </th>
        </tr>
        @empty

        @endforelse
    </tbody>
</table>
@include('User.peminjaman.create')
@endsection