@extends('layouts.main')

@section('layout')
    <div class="container py-5">
        <h1 class="mb-5">Laporan Hasil Ujian Santri</h1>

        <div class="card">
            <div class="card-header py-4">
                <h4>Nama Santri: {{ auth()->user()->name }}</h4>
                <div class="card-block py-4">
                    <div class="table-responsive">
                        <table class="table table table-striped table-hover">
                            <thead>
                                <tr class="table-light">
                                    <th scope="col">No</th>
                                    <th scope="col">Soal</th>
                                    <th scope="col">Jawaban</th>
                                    <th scope="col">tgl_menjawab</th>
                                    <th scope="col">Ustadz</th>
                                    <th scope="col">Nilai</th>
                                    <th scope="col">Kompetensi</th>
                                    <th scope="col">tgl_dinilai</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($nilai as $nilai)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        {{-- <td>
                                            @if ($nilai->soal)
                                                <img src="{{ asset('storage/' . $nilai->soal->image) }}" width='80'
                                                    height=''>
                                            @else
                                                <img src="https://source.unsplash.com/80x30?iqra" class="card-img-top"
                                                    alt="Soal">
                                            @endif
                                        </td> --}}
                                        <td><img src="{{ asset('storage/' . $nilai->soal->image) }}" width='80' height=''></td>
                                        <td>
                                            <img src="{{ $nilai->jawab_image }}" width='80' height=''>
                                        </td>
                                        <td>{{ $nilai->created_at }}</td>
                                        <td>{{ $nilai->ustadz }}</td>
                                        <td>{{ $nilai->nilai }}</td>
                                        <td>{{ $nilai->kompetensi }}</td>
                                        <td>{{ $nilai->updated_at }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FOOTER -->
    <footer class="container py-5">
        <p class="float-end"><a href="#">Back to top</a></p>
        <p>&copy; 2022 TPA UMY. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>
@endsection
