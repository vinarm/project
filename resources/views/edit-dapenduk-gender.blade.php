@extends('layout.main')

@section('content')

<div class="container fw-bold" style="background-color: #ffff; margin-top: 100px;">
    <div class="col-10 m-auto">
        
        <form action="Update-Data" method="get">
            @csrf 
            @foreach($dapenduk_jenis_kelamins as $jk
            <div class="mb-3">
                <input type="hidden" name="id" value="{{ $jk->id }}">
            </div>
            <div class="mb-3">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <!-- <select class="form-control" required="required" name="jenis_kelamin" id="jenis_kelamin" value="[Perempuan/Laki-laki]" aria-label="Default select example">
                    <option selected>Jenis Kelamin</option>
                    <option value="Perempuan">P</option>
                    <option value="Laki-laki">L</option>
                </select> -->
                <input type="text" name="jenis_kelamin" class="form-control" id="jenis_kelamin" value="{{ $jk->jenis_kelamin }}" readonly>
            </div>
            <div class="mb-3">
                <label for="jumlah">Jumlah Orang</label>
                <!-- <input type="text" required="required" name="jumlah" value="{{ $jk->jumlah }}"> -->
                <input type="text" name="jumlah" placeholder="Masukkan Jumlah Orang" class="form-control" id="jumlah" required>
            </div>

            <div class="mb-3">
                <button class="btn btn-success btn-sm me-2" type="submit">Edit</button>
            </div>
            @endforeach
        </form>
    </div>
</div>

@endsection