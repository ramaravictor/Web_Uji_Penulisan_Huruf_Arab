@extends('layouts.main')

@section('layout')
    <div class="container">
        <h1 class="my-5">Materi Pembelajaran : {{ $kategori }}</h1>
        {{-- <h1 class="my-5">Materi Pembelajaran : <a href="/kategorimateri/{{ $kategori}}"
            class="text-decoration-none text-dark">{{ $kategori}}</a></h1> --}}

        @foreach ($materi as $materi)
            <div class="card bg-light border-dark mb-5">
                <img src="https://source.unsplash.com/1200x150?iqra" class="card-img-top" alt="gambar">
                <div class="card-body">
                    <h2 class="card-title"><a href="/materi/{{ $materi->slug }}"
                            class="text-decoration-none text-dark">{{ $materi->title }}</a></h2>
                    <p>
                        <small class="card-muted">
                            {{ $materi->created_at->diffForHumans() }}
                        </small>
                    </p>
                    <a href="/materi/{{ $materi->slug }}" class="btn btn-secondary">Selengkapnya &raquo;</a>
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
