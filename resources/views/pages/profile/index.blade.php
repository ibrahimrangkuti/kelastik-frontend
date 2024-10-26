@extends('layouts.app')

@section('content')
    <div class="header py-5" id="profile">
        <div class="container">
            <div class="d-flex flex-column align-items-center gap-3">
                <img src="https://plus.unsplash.com/premium_photo-1671656349322-41de944d259b?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="" class="rounded-circle shadow-sm" width="250px" height="250px" style="object-fit: cover">
                <h4>Lorem, ipsum dolor.</h4>
                <span class="text-secondary">Teknik Informatika</span>
            </div>
        </div>
    </div>

    <section id="course">
        <div class="container">
            <h3>Kursus Terbaru</h3>
            <div class="row py-4">
                @for ($i = 1; $i <= 8; $i++)
                    <div class="col-md-3 mb-3">
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
