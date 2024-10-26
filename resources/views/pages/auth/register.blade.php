@extends('layouts.app')

@section('content')
    <section id="auth">
        <div class="row justify-content-center px-3">
            <div class="col-md-4">
                <div class="card shadow-sm" style="border: none">
                    <div class="card-body p-4">
                        <h2 class="mb-3">Daftar</h2>
                        <form action="">
                            <div class="form-group mb-3">
                                <label for="name" class="form-label">Nama</label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Nama">
                            </div>
                            <div class="form-group mb-3">
                                <label for="prodi" class="form-label">Program Studi</label>
                                <select name="prodi" id="prodi" class="form-control">
                                    <option hidden>Pilih Program Studi</option>
                                    <option value="TI">TI</option>
                                    <option value="TKJ">TKJ</option>
                                    <option value="TMD">TMD</option>
                                    <option value="TMJ">TMJ</option>
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" name="email" id="email" class="form-control"
                                    placeholder="Email">
                            </div>
                            <div class="form-group mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" id="password" class="form-control"
                                    placeholder="Password">
                            </div>
                            <div class="form-group mb-3">
                                <label for="confirm_password" class="form-label">Konfirmasi Password</label>
                                <input type="password" name="confirm_password" id="confirm_password" class="form-control"
                                    placeholder="Konfirmasi password">
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <span>Sudah punya akun? <a href="{{ url('/login') }}" class="text-dark">Masuk</a></span>
                                <button type="submit" class="btn btn-primary btn-signin float-end">Daftar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
