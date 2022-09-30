@extends('layouts.main')

@section('layout')
    <div class="container">
        <h1 class="my-5">Soal Ujian : {{ $kategori }}</h1>
        {{-- <h1 class="my-5">Materi Pembelajaran : <a href="/kategorimateri/{{ $kategori}}"
            class="text-decoration-none text-dark">{{ $kategori}}</a></h1> --}}

        @foreach ($soal as $soal)
            <div class="card mb-2">
                <div class="card-body mx-5">
                    <div class="row">
                        <div class="col">
                            <h2 class="card-title">
                                <a href="/soalujian/{{ $soal->id }}"
                                    class="text-decoration-none text-dark">{{ $soal->title }}</a>
                            </h2>
                        </div>
                        <div class="col", align="right" >
                            <button class="btn btn-primary"><a href="/soalujian/{{ $soal->id }}" class="text-decoration-none text-light">Jawab</a></button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
    <!-- FOOTER -->
    <footer class="container mt-5">
        <p class="float-end"><a href="#">Back to top</a></p>
        <p>&copy; 2022 TPA UMY. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>
@endsection
