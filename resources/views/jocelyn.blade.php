@extends('layouts.profile')

@section('person')
    <img src="/img/jocelyn.jpg" alt="jocelyn">
    <p class="profile-name">Jocelyn Wievin</p>
@endsection

@section('address')
    <p class="nama-jalan">Jl. Sunter Hijau X</p>
@endsection
    
@section('phone_num')
    <p class="nomor-telpon">087888002552</p>
@endsection

@section('email')
    <p class="alamat-email">jocelyn.wievin@binus.ac.id</p>
@endsection

@section('about_me')
    <p>
    Saya merupakan seorang mahasiswa semester 6 di Bina Nusantara dengan jurusan 
    Teknik Informatika dan Statistika. Mata kuliah yang paling saya sukai adalah 
    Computer Networks. Saya merupakan orang yang mudah beradaptasi, cepat tangkap, 
    dan memiliki rasa ketertarikan pada hal-hal baru. Saya tertarik untuk bekerja 
    dalam bidang networking.
    </p>
@endsection

@section('experience')
    <p class="mySection">Experience</p>
    <li class="boldFont">2021 - 2022</li>
    <p>Part Time Barista</p>
    <p>Bar Division</p>
    <p>JULY Coffee & Resto</p>
@endsection

@section('soft_skill1')
    <p class="namaSkill">Adaptibility</p>
    <progress class="progress is-info" value="88" max="100"></progress>
@endsection

@section('soft_skill2')
    <p class="namaSkill">Flexibility</p>
    <progress class="progress is-danger" value="75" max="100"></progress>
@endsection

@section('soft_skill3')
    <p class="namaSkill">Teamwork</p>
    <progress class="progress is-info" value="85" max="100"></progress>
@endsection

@section('soft_skill4')
    <p class="namaSkill">Creativity</p>
    <progress class="progress is-success" value="95" max="100"></progress>
@endsection

@section('hard_skill1')
    <p class="namaSkill">Badminton</p>
    <progress class="progress is-success" value="100" max="100"></progress>
@endsection

@section('hard_skill2')
    <p class="namaSkill">SQL</p>
    <progress class="progress is-success" value="95" max="100"></progress>
@endsection

@section('hard_skill3')
    <p class="namaSkill">Cisco</p>
    <progress class="progress is-danger" value="78" max="100"></progress>
@endsection

@section('hard_skill4')
    <p class="namaSkill">Excel</p>
    <progress class="progress is-info" value="85" max="100"></progress>
@endsection

@section('hobby1')
    <p class="namaSkill">Sketching</p>
    <progress class="progress is-info" value="88" max="100"></progress>
@endsection

@section('hobby2')
    <p class="namaSkill">Badminton</p>
    <progress class="progress is-success" value="100" max="100"></progress>
@endsection

@section('hobby3')
    <p class="namaSkill">Watching Movie</p>
    <progress class="progress is-danger" value="78" max="100"></progress>
@endsection