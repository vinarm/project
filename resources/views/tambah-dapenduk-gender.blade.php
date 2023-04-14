@extends('layout.main')

@section('content')

<div class="container fw-bold" style="background-color: #ffff; margin-top: 100px;">
    <div class="col-10 m-auto">
        <form action="Tambah-Data" method="post" enctype="multipart/form-data">
            @csrf 
            <div class="mb-3">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select class="form-control" name="jenis_kelamin" id="jenis_kelamin" value="[Perempuan/Laki-laki]" aria-label="Default select example">
                    <option selected>Jenis Kelamin</option>
                    <option value="Perempuan">P</option>
                    <option value="Laki-laki">L</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="jumlah">Jumlah Orang</label>
                <input type="text" name="jumlah" placeholder="Masukkan Jumlah Orang" class="form-control" id="jumlah" required>
            </div>

            <div class="mb-3">
                <button class="btn btn-success btn-sm" type="submit">Tambah</button>
                <!-- <input type="button" value="Go Back" onclick="history.back(-1)" /> -->
                <button class="btn btn-danger btn-sm" onclick="history.back(-1)">Batal</button>
            </div>

        </form>
    </div>
</div>

@endsection