@extends('template')
@section('content')
    <section class="main-section">
        <div class="content">
            <h1>Tabel Penjualan</h1>
            <hr>
            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li><strong>{{ $error }}</strong>
                    @endforeach
                </div>
            @endif

            <form action="{{ route('Kontak.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="id">id :</table>
                    <input type="text" class="form-control" id="id_barang" name="nama" value="{{ $datas->id }}">
                </div>
                <div class="form-group">
                    <label for="jumlah">id_barang:</label>
                    <input type="text" class="form-control" id="id_barang" name="email" value="{{ $datas->id_barang }}>
                </div>
                <div class="form-group">
                    <label for="jumlah">Jumlah barang:</label>
                    <input type="text" class="form-control" id="jumlah" name="email" value="{{ $datas->jumlah }}">
                </div>
                <div class="form-group">
                    <label for="total_barang">Total Harga:</label>
                    <input type="text" class="form-control" id="total_barang" name="nohp" value="{{ $datas->total_harga }}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
        </div>
    </section>
@endsection