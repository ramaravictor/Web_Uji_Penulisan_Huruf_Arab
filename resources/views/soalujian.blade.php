@extends('layouts.main')

@section('layout')
    <div class="row justify-content-center mb-5">
        <div class="col-md-9">
            <h1 class="my-5">
                <a href="/ujian/{{ $soal->kategori->slug }}">{{ $soal->kategori->jilid }},</a>
                {{ $soal->title }}
            </h1>

            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <form action="{{ route('jawab.upl') }}" method="post">
                @csrf
                <article class="my-3 fs-5">
                    <h2> {!! $soal->body !!} </h2>
                </article>

                <div class="mt-3 fs-5">
                    <label class="" for="">Tulis disini:</label>
                    <input type="text" name="soal_id" style="display: none" class="form-group"
                        value="{!! $soal->id !!}">
                </div>
                <div class="row align-items-md-stretch">
                    <div class="col-md-6">
                        <div id="sign" class="border-2 rounded-3"></div>
                        <br />
                        <textarea id="signature" name="signed" style="display: none"></textarea>
                    </div>
                    <div class="col-md-6">
                        <div class="h-100 border rounded-3 text-center">
                            @if ($soal->image)
                                <img src="{{ asset('storage/' . $soal->image) }}" class="card-img" width="350"
                                    height="315" alt="gambar">
                            @else
                                <img src="https://source.unsplash.com/1200x300?iqra" class="card-img" alt="gambar">
                            @endif
                        </div>
                    </div>
                    <div class="row my-5">
                        <div class="col mx-3" align="left">
                            <button class="btn btn-danger" id="clear"> Hapus </button>
                            <button class="btn btn-success" id="submit"> Simpan </button>
                        </div>
                        <div class="col", align="right">
                            <button class="btn btn-primary"><a href="/ujian/{{ $soal->kategori->slug }}"
                                    class="text-decoration-none text-light">Daftar
                                    Soal</a></button>
                        </div>
                    </div>
                </div>
            </form>

            {{-- <table class="table table-bordered mt-5" id="studentTable">
            <thead>
                <tr class="table-light">
                    <th>Id</th>
                    <th>Image</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($soal as $nilai)
                    <tr>
                        <td>{{ $soal->id }}</td>
                        <td><img src="{{ $soal->jawab_image }}" width='80' height=''></td>
                    </tr>
                @endforeach
            </tbody>
            </table> --}}

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
