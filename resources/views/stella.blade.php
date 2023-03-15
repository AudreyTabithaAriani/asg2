@extends('layouts.profile')

@section('person')
    <img src="/img/stella.jpg" alt="stella">
    <p class="profile-name">Stella Elviana</p>
@endsection

@section('address')
    <p class="nama-jalan">Jl. Tanjung Duren Utara VI No. 220</p>
@endsection
    
@section('phone_num')
    <p class="nomor-telpon">089515402808</p>
@endsection

@section('email')
    <p class="alamat-email">stella.elviana@binus.ac.id</p>
@endsection

@section('about_me')
    <p>
    Saya merupakan mahasiswi aktif di Universitas Bina Nusantara dengan jurusan 
    Sistem Informasi dan Akuntansi. Mata kuliah yang paling saya sukai adalah 
    User Experience. Saya merupakan seorang yang cepat dalam mempelajari sesuatu 
    dan mampu berkerjasama dalam tim.
    </p>
@endsection

@section('experience')
    <p class="mySection">Experience</p>
    <li class="boldFont">2021 - 2022</li>
    <p>Accountant</p>
    <p>PT. Rejeki Jaya Baik</p>
@endsection

@section('soft_skill1')
    <p class="namaSkill">Communication</p>
    <progress class="progress is-info" value="80" max="100"></progress>
@endsection

@section('soft_skill2')
    <p class="namaSkill">Time Management</p>
    <progress class="progress is-success" value="90" max="100"></progress>
@endsection

@section('soft_skill3')
    <p class="namaSkill">Active Learning</p>
    <progress class="progress is-success" value="90" max="100"></progress>
@endsection

@section('soft_skill4')
    <p class="namaSkill">Adaptibility</p>
    <progress class="progress is-danger" value="75" max="100"></progress>
@endsection

@section('hard_skill1')
    <p class="namaSkill">HTML</p>
    <progress class="progress  is-danger" value="70" max="100"></progress>
@endsection

@section('hard_skill2')
    <p class="namaSkill">CSS</p>
    <progress class="progress is-link" value="65" max="100"></progress>
@endsection

@section('hard_skill3')
    <p class="namaSkill">Java</p>
    <progress class="progress is-link" value="60" max="100"></progress>
@endsection

@section('hard_skill4')
    <p class="namaSkill">PHP</p>
    <progress class="progress is-info" value="80" max="100"></progress>
@endsection

@section('hobby1')
    <p class="namaSkill">Watching Movie</p>
    <progress class="progress is-success" value="90" max="100"></progress>
@endsection

@section('hobby2')
    <p class="namaSkill">Singing</p>
    <progress class="progress is-info" value="80" max="100"></progress>
@endsection

@section('hobby3')
    <p class="namaSkill">Reading</p>
    <progress class="progress is-danger" value="78" max="100"></progress>
@endsection