@extends('admin::layouts.app')
@section('title')
Admin
@endsection
@section('title-content')
Mobil
@endsection
@section('item')
Mobil
@endsection
@section('item-active')
Data Mobil
@endsection
@section('content')
<button data-toggle="modal" data-target="#createMobilModal" type="button" class="btn btn-success">Create</button>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nomor Polisi</th>
            <th scope="col">Jenis Mobil</th>
            <th scope="col">Unit</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @php
        $no =1;
        @endphp
        @forelse ($mobil as $data)
        <tr>
            <th scope="row">{{$no++}}</th>
            <th scope="row">{{$data->nopol}}</th>
            <th scope="row">
            {{$data->jenis_id}}
            </th>
            <th scope="row">
                {{$data->unit_id}}
            </th>
            <th scope="row">
                <button data-toggle="modal" data-target="#updateMobilModal{{$data->id}}" type="button" class="btn btn-warning">Edit</button>
                @include('Admin.mobil.update')
                <button data-toggle="modal" data-target="#confirmationModal{{$data->id}}" type="button" class="btn btn-danger">Delete</button>
                @include('Admin.mobil.delete-confirmation')
            </th>
        </tr>
        @empty
        @endforelse
    </tbody>
</table>
@include('Admin.mobil.create')
@endsection