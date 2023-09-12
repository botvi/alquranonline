@extends('template.layoutayat')
@section('content')
    <div class="col-md-4 col-12 text-left mb-3">
        <div class="d-grid gap-2"><a href="/" class="btn btn-success btn-md border-0 text-white shadow rounded-3"><i
                    class="fa fa-long-arrow-alt-left"></i> Kembali</a></div>
    </div>
    <div class="col-md-12">
        <div class="card border-0 rounded-3 shadow mt-1">
            <div class="card-body">
                <div class="row justify-content-between">
                    <div class="col-md-10 col-12 text-start">
                        <h3><strong>{{ $api_response->nama_latin }} — {{ $api_response->nama }}</strong></h3> <small
                            class="me-4"><i class="fa fa-list-ol"></i>
                            Jumlah Ayat : <strong>{{ $api_response->jumlah_ayat }}</strong></small> <small><i
                                class="fa fa-map-marker"></i> Tempat Turun :
                            <strong>{{ $api_response->tempat_turun }}</strong></small>
                    </div>
                    <div class="col-md-2 col-12 text-end">
                        <div class="d-grid gap-2">
                            <audio id="audio" src="{{ $api_response->audio }}"></audio>
                            <!-- Tambahkan tombol untuk memutar dan memberhentikan -->
                            <button id="playPauseBtn" class="btn btn-md border-0 shadow mt-3 rounded-3 btn-primary"><i
                                    class="fa fa-play"></i>&nbsp;&nbsp;&nbsp;Play Audio</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @foreach ($api_response->ayat as $item)
        <div class="col-md-12 mt-3">
            <div class="card border-0 rounded-3 shadow mt-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            {{ $item->surah }} : {{ $item->nomor }}
                            <p class="mt-2"><i>{{ $item->idn }}</i></p>
                        </div>
                        <div class="col-md-6 col-12 text-end">
                            <h3> ۚ{{ $item->ar }}</h3> <small>{!! $item->tr !!}</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
