@extends('layouts.profile')

@section('person')
    <img src="/img/patrick.jpg" alt="patrick">
    <p class="profile-name">Patrick Jonathan</p>
@endsection

@section('address')
    <p class="nama-jalan">Jalan Salak Barat 6 No.14A</p>
@endsection
    
@section('phone_num')
    <p class="nomor-telpon">081287187138</p>
@endsection

@section('email')
    <p class="alamat-email">pj141299@gmail.com</p>
@endsection

@section('about_me')
    <p>
    Saya merupakan seorang mahasiswa semester 6 di Universitas Bina
    Nusantara dengan jurusan Teknik Informatika dan Statistika. Mata 
    Kuliah yang paling saya sukai adalah Regression Analysis. Saya
    merupakan orang yang memiliki rasa ingin tahu yang tinggi, cepat
    belajar, dan mampu beradaptasi dengan lingkungan. Saya tertarik
    untuk memiliki pengalaman kerja dalam bidang teknik informatika
    </p>
@endsection

@section('experience')
    <p class="mySection">Experience</p>
    <li class="boldFont">2022 - 2023</li>
    <p>Koordinator Divisi Learning, Resouce and Development</p>
    <p>Himpunan Mahasiswa Statistika</p>
    <p>Universitas Bina Nusantara</p>
@endsection

@section('soft_skill1')
    <p class="namaSkill">Teamwork</p>
    <progress class="progress is-info" value="80" max="100"></progress>
@endsection

@section('soft_skill2')
    <p class="namaSkill">Responsibility</p>
    <progress class="progress is-success" value="95" max="100"></progress>
@endsection

@section('soft_skill3')
    <p class="namaSkill">Critical Thinking</p>
    <progress class="progress is-success" value="90" max="100"></progress>
@endsection

@section('soft_skill4')
    <p class="namaSkill">Public Speaking</p>
    <progress class="progress is-danger" value="70" max="100"></progress>
@endsection

@section('hard_skill1')
    <p class="namaSkill">SQL</p>
    <progress class="progress is-success" value="90" max="100"></progress>
@endsection

@section('hard_skill2')
    <p class="namaSkill">R</p>
    <progress class="progress is-info" value="80" max="100"></progress>
@endsection

@section('hard_skill3')
    <p class="namaSkill">Java</p>
    <progress class="progress is-info" value="88" max="100"></progress>
@endsection

@section('hard_skill4')
    <p class="namaSkill">Python</p>
    <progress class="progress is-danger" value="75" max="100"></progress>
@endsection

@section('hobby1')
    <p class="namaSkill">Playing Chess</p>
    <progress class="progress is-danger" value="65" max="100"></progress>
@endsection

@section('hobby2')
    <p class="namaSkill">Swimming</p>
    <progress class="progress is-info" value="85" max="100"></progress>
@endsection

@section('hobby3')
    <p class="namaSkill">Watching Movie</p>
    <progress class="progress is-success" value="95" max="100"></progress>
@endsection