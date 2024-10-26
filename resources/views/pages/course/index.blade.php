@extends('layouts.app')

@section('content')
    <div class="header" id="course_list">
        <div class="container">
            <div class="row justify-content-center">
                <div style="width: 600px">
                    <h2 class="text-dark fw-bold text-center">Daftar Kelas Tersedia</h2>
                    <p class="text-secondary text-center py-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Obcaecati,
                        magni?</p>
                    <div class="row">
                        <div class="col-md-12">
                            <form action="">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control search-input" placeholder="Cari kelas...">
                                    <button class="btn btn-primary" type="button">Cari</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center gap-3 py-4" id="category-button-section">
                        <a href="" class="btn btn-outline-primary" style="font-size: 12px">Pemrograman dasar</a>
                        <a href="" class="btn btn-outline-primary" style="font-size: 12px">Pemrograman dasar</a>
                        <a href="" class="btn btn-outline-primary" style="font-size: 12px">Pemrograman dasar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section>
        <div class="container">
            <h3>Kursus Terbaru</h3>
            <div class="row py-4">
                @for ($i = 1; $i <= 5; $i++)
                    <div class="col-md-3 mt-3">
                        <div class="card" style="border: none">
                            <img src="https://plus.unsplash.com/premium_photo-1661964295676-8e76902727ef?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of
                                    the
                                    card's content.</p>
                                <a href="#" class="btn btn-primary">Detail Kursus</a>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>
@endsection
