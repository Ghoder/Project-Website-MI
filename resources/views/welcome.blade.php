@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    <section class="join-section">
        <div class="strip"></div>
        <div class="join-content">
            <div class="join-text-container">
                <h2 class="join-text slide-in-left">Gabung bersama kami <br> mewujudkan generasi <br> bangsa</h2>
                <p class="join-description slide-in-left">
                    Madrasah Ibtidaiyah (MI) adalah satuan pendidikan formal jenjang dasar yang setara dengan Sekolah Dasar (SD).
                    MI dikelola oleh Kementerian Agama (Kemenag).
                </p>
            </div>
            <img src="{{ asset('assets/images/MI memiliki.png') }}" alt="Gabung bersama kami" class="join-image slide-in-right">
        </div>
    </section>
@endsection