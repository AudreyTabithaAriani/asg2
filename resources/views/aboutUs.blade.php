@extends('layouts.main')

@section('container')
    <div class="p-container">
        <p>Our Profile</p>
    </div>

    <div class="card-container">
        @foreach ($datas as $data)
            <div class="card">
                <div class="card-image">
                    <figure class="image is-square">
                        <img src="{{ $data["src"] }}" alt="{{ $data["alt"] }}">
                    </figure>
                </div>

                <div class="card-content">
                    <div class="media">
                        <div class="media-content">
                            <p class="title is-5">
                                <a href="/aboutUs/{{ $data["alt"] }}">
                                    {{ $data["nama"] }}
                                </a>
                            </p>
                            <p class="keterangan">{{ $data["nim"] }}</p>
                            @switch($data["tempat"])
                                @case("Jakarta")
                                <p class="keterangan">
                                    <i class="fa-solid fa-venus"></i>
                                    Jakarta
                                </p>
                                @break

                                @case("Pontianak")
                                <p class="keterangan">
                                    <i class="fa-solid fa-venus"></i>
                                    Pontianak
                                </p>
                                @break
                            @endswitch
                            <p class="keterangan">{{ $data["tanggal-lahir"] }}</p>
                            <p class="keterangan">{{ $data["gender"] }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
