@extends('template')
@section('content')
    <section class="main-section">
        <div class="content">
            <h1>Ubah Kontak</h1>
            <hr>
            @if($errors->any())
                <ul>
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li>>{{ $error }}</li>
                    @endforeach
                </div>
                </ul>
            @endif

            @foreach($data as $datas)
            <form action="{{ route('Kontak.update', $data->id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label for="id_barang">id barang:</table>
                    <input type="text" class="form-control" id="id_barang" name="nama" value="{{ $datas->nama }}">
                </div>
                <div class="form-group">
                    <label for="jumlah">Jumlah barang:</label>
                    <input type="text" class="form-control" id="jumlah" name="email" value="{{ $datas->email }}>
                </div>
                <div class="form-group">
                    <label for="total_barang">Total Barang:</label>
                    <input type="text" class="form-control" id="total_barang" name="nohp" value="{{ $datas->nohp }}>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
        </div>
    </section>
@endsection