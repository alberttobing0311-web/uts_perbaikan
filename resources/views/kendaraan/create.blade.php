@extends('layout')

@section('content')

<h1>Tambah Kendaraan</h1>

<form action="/kendaraan" method="POST">

    @csrf

    <input type="text"
           name="plat_nomor"
           placeholder="Plat Nomor">

    <br><br>

    <input type="text"
           name="nama_pemilik"
           placeholder="Nama Pemilik">

    <br><br>

    <input type="text"
           name="merk_kendaraan"
           placeholder="Merk Kendaraan">

    <br><br>

    <textarea name="keluhan"
              placeholder="Keluhan"></textarea>

    <br><br>

    <button type="submit">

        Simpan

    </button>

</form>

@endsection