@extends('layouts.main')

@section('layout')
    <div class="container bg-light">
        <section class="pt-5 text-center container">
            <div class="row py-lg-3">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light">Ujian Pembelajaran Santri</h1>
                    <p class="lead text-muted">“Ya Rabb-ku, lapangkanlah dadaku, dan ringankanlah segala urusanku, dan
                        lepaskanlah kekakuan dari lidahku, agar mereka mengerti perkataanku”</p>
                    <p class="lead text-muted">– Q.S. Thaha: 25-28 –</p>
                    <br>
                    <br>
                    <h1 class="fw-dark">Kategori Ujian:</h1>
                </div>
            </div>
        </section>
        <div class="container px-5">
            <div class="container px-5">
                <div class="container px-5">
                    <div class="container px-3">
                        <div class="album pb-5 ">
                            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 g-5">
                                @foreach ($ujian as $kategori)
                                    <div class="col-4">
                                        <div class="card shadow-sm">
                                            <img src="/img/ujian.png" class="bd-placeholder-img card-img-top" width="100%"
                                                height="100%">

                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h2 class="card-title"><a href="/ujian/{{ $kategori->slug }}"
                                                            class="text-decoration-none text-dark">{{ $kategori->jilid }}</a>
                                                    </h2>
                                                    <small
                                                        class="text-muted">{{ $kategori->created_at->diffForHumans() }}</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FOOTER -->
        <footer class="container mt-5">
            <p class="float-end"><a href="#">Back to top</a></p>
            <p>&copy; 2022 TPA UMY. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
        </footer>
    </div>
@endsection
