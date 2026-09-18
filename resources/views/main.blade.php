@extends('layout.app')

@section('title', 'Beranda — Pusat Kajian Pariwisata Nusantara')

@section('content')
    <section id="beranda">
        @include('sections.beranda')
    </section>

    <section id="tentang">
        @include('sections.tentang')
    </section>

    <section id="perjalanan">
        @include('sections.perjalanan')
    </section>

    <section id="galeri">
        @include('sections.galeri')
    </section>

    <section id="tim">
        @include('sections.tim')
    </section>
@endsection