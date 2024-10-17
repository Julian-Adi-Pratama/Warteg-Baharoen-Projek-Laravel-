@extends('templates.app')

@section('content-dinamis')
    <form action="{{ route('update_user', $user['id']) }}" method="POST">
        @method('PATCH')
        @csrf
        
        
        <div class="mb-3 row">
            <div class="form-group mb-3">
                <label for="name" class="form-label">Nama User</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Masukkan Nama Produk" value="{{ $user['name'] }}">
            </div>
        </div>

        <div class="mb-3 row">
            <div class="form-group mb-3">
                <label for="name" class="form-label">Gmail</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan Email" value="{{ $user['email'] }}">
            </div>
        </div>

        <div class="mb-3 row">
            <div class="form-group mb-3">
                <label for="name" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Password" value="{{ $user['password'] }}">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Perbarui Akun</button>
    </form>
@endsection
