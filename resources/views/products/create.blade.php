@extends('templates.app')

@section('content-dinamis')
    <form action="{{route('store')}}" method="POST">
        @if (Session::get('failed'))
            <div class="alert alert-danger">{{Session::get('failed')}}</div>
        @endif
        @csrf
        <div class="form-group mb-3">
            <label for="name" class="form-label">Nama Pesanan</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Masukkan Nama Makanan / Minuman" value="{{ old('name') }}" required>
        </div>
        <div class="form-group mb-3">
            <label for="price" class="form-label">Harga</label>
            <input type="number" name="price" id="price" class="form-control" placeholder="Masukkan Harga" value="{{ old('price') }}" required>
        </div>
        <div class="form-group mb-3">
            <label for="price" class="form-label">Stok</label>
            <input type="number" name="stock" id="stock" class="form-control" placeholder="Masukkan Stock" value="{{ old('price') }}" required>
        </div>
        <div class="form-group mb-3">
            <label for="type" class="form-label" class="form-control" placeholder="Tipe">Tipe</label>
            <select name="type" id="type">
                <option value="Makanan {{old('Makanan')}}">Makanan</option>
                <option value="Minuman {{old('Minuman')}}">Minuman</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Masukkan Kedalam Daftar</button>
        
    </form>
@endsection