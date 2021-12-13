@extends('admin::layouts.app')
@section('title')
Admin
@endsection
@section('title-content')
Data Pegawai
@endsection
@section('item')
User
@endsection
@section('item-active')
Data Pegawai
@endsection
@section('content')
<button data-toggle="modal" data-target="#createPegawaiModal" type="button" class="btn btn-success">Create</button>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Jabatan</th>
            <th scope="col">Bagian</th>
            <th scope="col">NIP Atasan</th>
            <th scope="col">Atasan</th>
            <th scope="col">Role</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($pegawai as $data)
        <tr>
            <th scope="row">{{$data->nip}}</th>
            <th scope="row">{{$data->nama}}</th>
            <th scope="row">{{$data->jabatan}}</th>
            <th scope="row">{{$data->bagian}}</th>
            <th scope="row">fgfj</th>
            <th scope="row">sfafa</th>
            <th scope="row">
                @if ($data->role_id == 1)
                <span class="badge badge-primary">Admin</span>
                @elseif ($data->role_id == 2)
                <span class="badge badge-secondary">User</span>
                @endif
            </th>
            <th scope="row">
                <button data-toggle="modal" data-target="#updatePegawaiModal{{$data->id}}" type="button" class="btn btn-warning">Edit</button>
                @include('Admin.user.update')
                <button data-toggle="modal" data-target="#confirmationModal{{$data->id}}" type="button" class="btn btn-danger">Delete</button>
                @include('Admin.user.delete-confirmation')
            </th>
        </tr>
        @empty

        @endforelse
    </tbody>
</table>
@include('Admin.user.create')
@endsection