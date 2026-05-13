@extends('layout')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>
        <h2 class="fw-bold">
            🚘 Data Kendaraan
        </h2>

        <p class="text-secondary">
            Monitoring kendaraan servis realtime
        </p>
    </div>

    <a href="/kendaraan/create" class="btn-neon text-decoration-none">
        + Tambah Kendaraan
    </a>

</div>

<div class="table-responsive">

<table class="table align-middle">

    <thead>

        <tr>
            <th>No</th>
            <th>Plat</th>
            <th>Pemilik</th>
            <th>Merk</th>
            <th>Keluhan</th>
            <th>Aksi</th>
        </tr>

    </thead>

    <tbody>

    @foreach($kendaraans as $k)

    <tr>

        <td>{{ $loop->iteration }}</td>

        <td>
            <span class="plate">
                {{ $k->plat_nomor }}
            </span>
        </td>

        <td>{{ $k->nama_pemilik }}</td>

        <td>{{ $k->merk_kendaraan }}</td>

        <td>{{ $k->keluhan }}</td>

        <td>

            <a href="/kendaraan/{{ $k->id }}/edit"
               class="btn-edit text-decoration-none">

               Edit

            </a>

            <form action="/kendaraan/{{ $k->id }}"
                  method="POST"
                  class="d-inline">

                @csrf
                @method('DELETE')

                <button class="btn-delete">

                    Hapus

                </button>

            </form>

        </td>

    </tr>

    @endforeach

    </tbody>

</table>

</div>

@endsection