@extends('admin::layouts.app')
@section('title')
Admin
@endsection
@section('title-content')
Data Atasan
@endsection
@section('item')
User
@endsection
@section('item-active')
Data Atasan
@endsection
@section('content')
<button data-toggle="modal" data-target="#createAtasanModal" type="button" class="btn btn-success">Create</button>
<br><br>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($atasan as $data)
        <tr>
            <th scope="row">{{$data->nip}}</th>
            <th scope="row">{{$data->nama}}</th>
            <th scope="row">
                <button data-toggle="modal" data-target="#updateAtasanModal{{$data->id}}" type="button" class="btn btn-warning">Edit</button>
                @include('Admin.atasan.update')
                <button data-toggle="modal" data-target="#confirmationModal{{$data->id}}" type="button" class="btn btn-danger">Delete</button>
                @include('Admin.atasan.delete-confirmation')
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
@include('Admin.atasan.create')
@endsection