@extends('layouts.profile')

@section('person')
    <img src="/img/audrey.jpg" alt="audrey">
    <p class="profile-name">Audrey Tabitha Ariani</p>
@endsection

@section('address')
    <p class="nama-jalan">Jl. Boulevard Raya</p>
@endsection
    
@section('phone_num')
    <p class="nomor-telpon">081288139034</p>
@endsection

@section('email')
    <p class="alamat-email">audrey.ariani@binus.ac.id</p>
@endsection

@section('about_me')
    <p>
    Saya merupakan seorang mahasiswa semester 6 di Universitas Bina Nusantara 
    dengan jurusan Teknik Informatika dan Statistika. Mata kuliah yang paling 
    saya sukai adalah Deep Learning and Optimization. Saya gigih, menyukai tantangan 
    di bidang yang saya minati, dan memiliki tekad serta komitmen yang tinggi untuk 
    meraih tujuan saya. Saya tertarik untuk bekerja di bidang Artificial Intelligence 
    atau Actuarial Science.
    </p>
@endsection

@section('experience')
    <p class="mySection">Experience</p>
    <li class="boldFont">June 2022 - October 2022</li>
    <p>Content Writer Volunteer</p>
    <p>Forest Is Our Friend</p>
@endsection

@section('soft_skill1')
    <p class="namaSkill">Teamwork</p>
    <progress class="progress is-danger" value="78" max="100"></progress>
@endsection

@section('soft_skill2')
    <p class="namaSkill">Problem Solving</p>
    <progress class="progress is-info" value="88" max="100"></progress>
@endsection

@section('soft_skill3')
    <p class="namaSkill">Responsibility</p>
    <progress class="progress is-info" value="85" max="100"></progress>
@endsection

@section('soft_skill4')
    <p class="namaSkill">Flexibility</p>
    <progress class="progress is-success" value="90" max="100"></progress>
@endsection

@section('hard_skill1')
    <p class="namaSkill">Data Analysis</p>
    <progress class="progress is-info" value="88" max="100"></progress>
@endsection

@section('hard_skill2')
    <p class="namaSkill">Math/Statistics</p>
    <progress class="progress is-danger" value="78" max="100"></progress>
@endsection

@section('hard_skill3')
    <p class="namaSkill">Machine Learning</p>
    <progress class="progress is-info" value="88" max="100"></progress>
@endsection

@section('hard_skill4')
    <p class="namaSkill">Drawing</p>
    <progress class="progress is-success" value="95" max="100"></progress>
@endsection

@section('hobby1')
    <p class="namaSkill">Swimming</p>
    <progress class="progress is-info" value="80" max="100"></progress>
@endsection

@section('hobby2')
    <p class="namaSkill">Listen to Music</p>
    <progress class="progress is-success" value="100" max="100"></progress>
@endsection

@section('hobby3')
    <p class="namaSkill">Drawing</p>
    <progress class="progress is-danger" value="77" max="100"></progress>
@endsection
