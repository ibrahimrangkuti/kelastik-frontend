@extends('layouts.app')

@section('content')
    <div class="header" id="detail">
        <div class="container">
            <div class="row justify-content-center">
                <div style="width: 600px">
                    <h2 class="text-dark fw-bold text-center">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit.
                        Odit soluta atque
                        molestias!</h2>
                    <p class="text-secondary text-center py-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Obcaecati,
                        magni?</p>
                    <div class="row" id="statistic-course">
                        <div class="col-md-4 mb-3">
                            <div class="row">
                                <span>Member</span>
                                <span class="fw-bold">500 <span class="fw-normal">gabung</span></span>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="row">
                                <span>Sertifikat</span>
                                <span><i class="fas fa-check"></i></span>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="row">
                                <span>Konsultasi</span>
                                <span><i class="fas fa-check"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row" style="margin-top: -200px">
            <div class="col-md-8 mb-3">
                <img src="https://plus.unsplash.com/premium_photo-1661964295676-8e76902727ef?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8dHV0b3J8ZW58MHx8MHx8fDA%3D"
                    alt="" width="100%" height="100%" class="rounded shadow" style="object-fit: cover">
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <span class="fs-5 fw-medium">5 Pelajaran</span>
                        <ul class="list-group my-3">
                            <li class="list-group-item"><a href="" class="text-decoration-none text-dark">An item</a>
                            </li>
                            <li class="list-group-item"><a href="" class="text-decoration-none text-dark">Second
                                    item</a></li>
                            <li class="list-group-item"><a href="" class="text-decoration-none text-dark">Third
                                    item</a></li>
                            <li class="list-group-item"><a href="" class="text-decoration-none text-dark">Fourth
                                    item</a></li>
                            <li class="list-group-item"><a href="" class="text-decoration-none text-dark">Fifth
                                    item</a></li>
                        </ul>
                        <a href="" class="btn btn-primary w-100">Ambil Kelas</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row py-4">
            <div class="col-md-7">
                <h4>Deskripsi Kelas</h4>
                <p class="my-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo quasi itaque odit quidem
                    cumque distinctio
                    minus? Nam tempora soluta corrupti dolore cum suscipit quibusdam impedit quo quasi iusto. Ipsum ut odit
                    eveniet laudantium, et odio quae sed rerum at cupiditate, distinctio error excepturi molestias nisi
                    tempora veritatis labore enim ab. Laborum rem doloremque, expedita corrupti blanditiis fugit tenetur
                    sint eveniet aspernatur inventore, magnam temporibus non soluta ullam repellat accusantium nemo quo
                    eligendi debitis facilis nam quibusdam. Maxime tenetur eum officia. Quae temporibus aliquid vel mollitia
                    libero ducimus nostrum excepturi quaerat perspiciatis recusandae, laborum aperiam ullam dicta minus
                    explicabo labore possimus?</p>
            </div>
        </div>

        <div class="row py-4">
            <div class="row">
                <div class="col-md-7 mb-4">
                    <h4 class="my-3">Modul</h4>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    Accordion Item #1
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="list-group">
                                        <a href="#"
                                            class="list-group-item list-group-item-action d-flex justify-content-between"
                                            aria-current="true">
                                            <span>The current link item</span>
                                            <span>04:00</span>
                                        </a>
                                        <a href="#"
                                            class="list-group-item list-group-item-action d-flex justify-content-between"
                                            aria-current="true">
                                            <span>The current link item</span>
                                            <span>04:00</span>
                                        </a>
                                        <a href="#"
                                            class="list-group-item list-group-item-action d-flex justify-content-between"
                                            aria-current="true">
                                            <span>The current link item</span>
                                            <span>04:00</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <h4 class="my-3">Tutor</h4>
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-row align-items-center gap-2">
                                <img src="https://plus.unsplash.com/premium_photo-1671656349322-41de944d259b?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    alt="" class="rounded-circle" width="60" height="60"
                                    style="object-fit: cover">
                                <div class="d-flex flex-column">
                                    <span>Ibrahim Rangkuti</span>
                                    <span class="text-secondary">TI - 1A</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
