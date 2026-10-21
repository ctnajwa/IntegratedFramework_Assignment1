
@extends('master')

@section('title', 'About Me')

@section('content')

<div class="container">

    <!-- PERSONAL INTRODUCTION -->
    <section id="about-maneessa" class="mb-5">

        <div class="row align-items-center g-4">

            <!-- PROFILE PHOTO -->
            <div class="col-md-4 text-center">
                <img
                    src="{{ asset('images/maneessa.jpg') }}"
                    alt="Maneessa A/P Chandrasekaran"
                    class="img-fluid rounded-circle"
                    width="250"
                    height="250"
                >
            </div>

            <!-- INTRODUCTION -->
            <div class="col-md-8">

                <h1>Hello! I'm Maneessa A/P Chandrasekaran</h1>

                <p>
                    I am a Computer Science student at Universiti Malaysia
                    Pahang Al-Sultan Abdullah (UMPSA), pursuing a Bachelor
                    of Computer Science (Computer Systems and Networking)
                    with Honours.
                </p>

                <p>
                    I am interested in computer networking and information
                    technology, particularly in understanding how devices
                    communicate and how networks are designed and configured.
                    Through my studies, I am developing my technical
                    knowledge, problem-solving abilities and practical skills
                    in networking and web development.
                </p>

            </div>

        </div>

    </section>


    <!-- EDUCATIONAL BACKGROUND -->
    <section id="education" class="mb-5">

        <h2>Educational Background</h2>

        <article class="card mb-3">
            <div class="card-body">

                <h3 class="card-title">
                    Universiti Malaysia Pahang Al-Sultan Abdullah (UMPSA)
                </h3>

                <p class="card-text">
                    Bachelor of Computer Science
                    (Computer Systems and Networking) with Honours
                </p>

                <p class="card-text">
                    Faculty of Computing
                </p>

                <p class="card-text">
                    2023 – Present
                </p>

                <p class="card-text">
                    Expected Graduation: 2027
                </p>

            </div>
        </article>

       

    </section>


    <!-- TECHNICAL SKILLS -->
    <section id="skills" class="mb-5">

        <h2>My Skills</h2>

        <div class="row g-4">

            <div class="col-md-6 col-lg-4">
                <article class="card h-100">
                    <div class="card-body">

                        <h3 class="card-title">Networking</h3>

                        <ul class="card-text">
                            <li>Network Device Configuration</li>
                            <li>Routing and Switching</li>
                            <li>IP Addressing and Subnetting</li>
                        </ul>

                    </div>
                </article>
            </div>

            <div class="col-md-6 col-lg-4">
                <article class="card h-100">
                    <div class="card-body">

                        <h3 class="card-title">Web Development</h3>

                        <ul class="card-text">
                            <li>HTML and CSS</li>
                            <li>PHP and Laravel</li>
                            <li>Bootstrap</li>
                        </ul>

                    </div>
                </article>
            </div>

            <div class="col-md-6 col-lg-4">
                <article class="card h-100">
                    <div class="card-body">

                        <h3 class="card-title">Tools</h3>

                        <ul class="card-text">
                            <li>Cisco Packet Tracer</li>
                            <li>Visual Studio Code</li>
                            <li>GitHub</li>
                        </ul>

                    </div>
                </article>
            </div>

        </div>

    </section>


    <!-- HOBBIES AND INTERESTS -->
    <section id="hobbies" class="mb-4">

        <h2>My Hobbies &amp; Interests</h2>

        <article class="card">
            <div class="card-body">

                <h3 class="card-title">
                    Reading Fictional Storybooks
                </h3>

                <p class="card-text">
                    Reading fictional storybooks is one of my favourite
                    hobbies. I enjoy exploring imaginative worlds,
                    following interesting characters and discovering
                    different stories. Reading allows me to relax,
                    use my imagination and experience different
                    perspectives through the stories I read.
                </p>

            </div>
        </article>

    </section>

</div>

@endsection
