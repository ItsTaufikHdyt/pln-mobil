@extends('admin::layouts.app')
@section('title')
Admin
@endsection
@section('title-content')
Data Supir
@endsection
@section('item')
User
@endsection
@section('item-active')
Data Supir
@endsection
@section('content')
<button data-toggle="modal" data-target="#createSupirModal" type="button" class="btn btn-success">Create</button>
<br><br>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @php
        $no = 1;
        @endphp
        @forelse ($supir as $data)
        <tr>
            <th scope="row">{{$no++}}</th>
            <th scope="row">{{$data->nama}}</th>
            <th scope="row">
                @if ($data->status == 0)
                <span class="badge badge-danger">Tidak Aktif</span>
                @elseif ($data->status == 1)
                <span class="badge badge-success">Aktif</span>
                @endif
            </th>
            <th scope="row">
                <button data-toggle="modal" data-target="#updateSupirModal{{$data->id}}" type="button" class="btn btn-warning">Edit</button>
                @include('Admin.supir.update')
                <button data-toggle="modal" data-target="#confirmationModal{{$data->id}}" type="button" class="btn btn-danger">Delete</button>
                @include('Admin.supir.delete-confirmation')
            </th>
        </tr>
        @empty
        <tr>
            <th colspan="3">
                <center>
                    Data Not Found
                </center>
            </th>
        </tr>
        @endforelse
    </tbody>
</table>
@include('Admin.supir.create')
@endsection