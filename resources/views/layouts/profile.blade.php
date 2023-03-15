<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="/css/profile.css">
    <script src="https://kit.fontawesome.com/b75608f116.js" crossorigin="anonymous"></script>
    <title>Jocelyn's Profile</title>
</head>
<body>
    <div class="navbar-container">
        <nav class="navbar is-transparent is-black" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                </a>
            </div>

            <div id="navbarBasicExample" class="navbar-menu">
                <div class="navbar-start">
                    <a href="../home" class="navbar-item">
                        Home
                    </a>

                    <a href="../aboutUs" class="navbar-item">
                        About Us
                    </a>
                </div>
            </div>
        </nav>
    </div>

    <div class="profile-container">
        <div class="left-profile">
            @yield('person')
            <div class="icon-container">
                <div class="location">
                    <p class="fa-2xl fa-sharp fa-solid fa-location-dot"></p>
                    @yield('address')
                </div>
                <div class="phone">
                    <p class="fa-xl fa-solid fa-phone-volume"></p>
                    @yield('phone_num')
                </div>
                <div class="email">
                    <p class="fa-xl fa-sharp fa-solid fa-envelope"></p>
                    @yield('email')
                </div>
            </div>
        </div>

        <div class="center-profile">
            <div class="aboutMe">
                <p class="mySection">About Me</p>
                @yield('about_me')
            </div>

            <div class="exp">
                @yield('experience')
            </div>

            <div class="edu">
                <p class="mySection">Education</p>
                <li class="boldFont">Universitas Bina Nusantara</li>
                <p>2020 - Sekarang (Semester 6)</p>
                <p>Jurusan Teknik Informatika dan Statistika</p>
            </div>
        </div>

        <div class="right-profile">
            <div class="soft-skill">
                <p class="mySection">Soft Skill</p>
                <div class="bar">
                    @yield('soft_skill1')
                </div>
                <div class="bar">
                    @yield('soft_skill2')
                </div>
                <div class="bar">
                    @yield('soft_skill3')
                </div>
                <div class="bar">
                    @yield('soft_skill4')
                </div>
            </div>

            <div class="hard-skill">
                <p class="mySection">Hard Skill</p>
                <div class="bar">
                    @yield('hard_skill1')
                </div>
                <div class="bar">
                    @yield('hard_skill2')
                </div>
                <div class="bar">
                    @yield('hard_skill3')
                </div>
                <div class="bar">
                    @yield('hard_skill4')
                </div>
            </div>

            <div class="hobby">
                <p class="mySection">Hobbies</p>
                <div class="bar">
                    @yield('hobby1')
                </div>
                <div class="bar">
                    @yield('hobby2')
                </div>
                <div class="bar">
                    @yield('hobby3')
                </div>
            </div>
        </div>
    </div>
</body>
</html>