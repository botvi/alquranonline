@extends('template.layout')
@section('content')
    <div class=" layout_padding2">
        <div class="row">
            @foreach ($surat as $item)
            <div class="col-lg-4">
                    <a href="{{ url('ayat/' . $item->nomor) }}" class="text-dark shadow-lg">
                    <div class="card mb-5 shadow">
                        <h1 class="mt-3">{{ $item->nama }}</h1>
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->nama_latin }}</h5>
                            <p class="card-text">
                                {{ $item->arti }}
                            </p>
                        </div>
                    </div>
                </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
