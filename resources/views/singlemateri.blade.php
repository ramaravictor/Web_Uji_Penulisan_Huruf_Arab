@extends('layouts.main')

@section('layout')
    <div class="mx-5">
        <h1 class="mt-5">
            <a href="/kategorimateri/{{ $materi->kategori->slug }}">{{ $materi->kategori->jilid }}</a>
            {{ $materi->title }}
        </h1>
        <div class="row g-5">
            <div class="col-md-7">
                <div class="row mb-5">
                    <div class="col-md-12">
                        <article class="mt-5 fs-5">
                            <p class="text-justify"> {!! $materi->body !!} </p>
                        </article>
                        @if ($materi->image)
                            <img src="{{ asset('storage/' . $materi->image) }}" alt="gambar">
                        @else
                        @endif

                        <a href="/kategorimateri/{{ $materi->kategori->slug }}"
                            class="text-decoration-none d-block mt-5">Kembali ke
                            Materi..</a>
                    </div>
                </div>
            </div>
            <div class="col-md-5 my-5">
                <div class="position-sticky" style="top: 2rem;">
                    <div class="p-4 mb-3 bg-light rounded">
                        <h4 class="fst-italic mb-4">Latihan Menulis</h4>
                        <div id="sign" class="border-2 rounded-3"></div>
                        <br />
                        <textarea id="signature" name="signed" style="display: none"></textarea>
                        <div class="row mt-3">
                            <div class="col" align="right">
                                <button class="btn btn-danger" id="clear"> Hapus </button>
                                {{-- <button class="btn btn-success" id="submit"> Simpan </button> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var sign = $('#sign').signature({
            syncField: '#signature',
            syncFormat: 'PNG'
        });
        $('#clear').click(function(e) {
            e.preventDefault();
            sign.signature('clear');
            $("#signature").val('');
        });
    </script>
    <span id="res" style="color: green;"></span>
@endsection
