@extends('admin::layouts.app')
@section('title')
Admin
@endsection
@section('title-content')
Mobil
@endsection
@section('item')
Jenis
@endsection
@section('item-active')
Data Jenis Kendaraan
@endsection
@section('content')
<button data-toggle="modal" data-target="#createJenisModal" type="button" class="btn btn-success">Create</button>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Jenis Kendaraan</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @php
            $no =1;
        @endphp
        @forelse ($jenis as $data)
        <tr>
        <th scope="row">{{$no++}}</th>
            <th scope="row">{{$data->nama}}</th>
            <th scope="row">
                <button data-toggle="modal" data-target="#updateJenisModal{{$data->id}}" type="button" class="btn btn-warning">Edit</button>
                @include('Admin.jenis_kendaraan.update')
                <button data-toggle="modal" data-target="#confirmationModal{{$data->id}}" type="button" class="btn btn-danger">Delete</button>
                @include('Admin.jenis_kendaraan.delete-confirmation')
            </th>
        </tr>
        @empty
        @endforelse
    </tbody>
</table>
@include('Admin.jenis_kendaraan.create')
@endsection