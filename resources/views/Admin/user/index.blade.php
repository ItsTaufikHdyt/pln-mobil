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
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
        </tr>
    </tbody>
</table>
@endsection