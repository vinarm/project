@extends('layout.main')

@section('content')

<div class="card" style="margin-top: 70px;">
    <div class="card-body">
        <table class="table table-bordered table-responsive" style="text-align:center;">

            <a href="/Tambah-Data" class="btn btn-sm" style="background-color: #75ACFF; margin-bottom: 20px; color:white;">
            Tambah Data <i class="bi bi-file-earmark-plus-fill"></i> </a>

                <tr style="font-weight: bold; background-color: #9F3434; color:white;">
                    <th scope="col">No</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Jumlah Orang</th>
                    <th scope="col">Aksi</th>
                </tr>
                <tbody>

                @foreach($dapenduk_jenis_kelamins as $jk)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $jk->jenis_kelamin }}</td>
                    <td>{{ $jk->jumlah }}</td>
                    <td><a href="/Update-Data/{{ $jk->id }}" class="btn btn-sm" style="background-color: #1C891A; margin-bottom: 20px; color:white;">
            Edit Data <i class="bi bi-pencil-square"></i> </a></td>
                </tr>
                @endforeach
                </tbody>
        </table>
    </div>
</div>
</div>
@endsection