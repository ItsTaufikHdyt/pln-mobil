@extends('admin::layouts.app')
@section('title')
Admin
@endsection
@section('title-content')
Mobil
@endsection
@section('item')
Unit
@endsection
@section('item-active')
Data Unit
@endsection
@section('content')
<button data-toggle="modal" data-target="#createUnitModal" type="button" class="btn btn-success">Create</button>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama ULP</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @php
            $no =1;
        @endphp
        @forelse ($unit as $data)
        <tr>
        <th scope="row">{{$no++}}</th>
            <th scope="row">{{$data->nama}}</th>
            <th scope="row">
                <button data-toggle="modal" data-target="#updateUnitModal{{$data->id}}" type="button" class="btn btn-warning">Edit</button>
                @include('Admin.unit.update')
                <button data-toggle="modal" data-target="#confirmationModal{{$data->id}}" type="button" class="btn btn-danger">Delete</button>
                @include('Admin.unit.delete-confirmation')
            </th>
        </tr>
        @empty
        @endforelse
    </tbody>
</table>
@include('Admin.unit.create')
@endsection