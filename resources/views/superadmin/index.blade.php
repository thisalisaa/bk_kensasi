<!-- resources/views/dashboard.blade.php -->

@extends('layouts.app')
@section('content')
@yield('content')

<div class="click-box-container mb-8 " >
            <div class="click-box">
                <img src="{{ asset('dash\img1.gif') }}" alt="Image 1" class="box-image">
                <b class="box-label">Buat data</b>
                <hr class="horizontal-line">
                <a href="{{ url('/informasi') }}" class="click-text">Klik disini</a>
            </div>
            <!-- <div class="click-box">
                <img src="{{ asset('dash\img2.gif') }}" alt="Image 2" class="box-image">
                <b class="box-label">Biodata Saya</b>
                <hr class="horizontal-line">
                <a href="#" class="click-text">Klik disini</a>
            </div>
            <div class="click-box">
                <img src="{{ asset('dash\img3.gif') }}" alt="Image 3" class="box-image">
                <b class="box-label">Perbaharui Biodata</b>
                <hr class="horizontal-line">
                <a href="#" class="click-text">Klik disini</a>
            </div> -->
        </div>
        @endsection