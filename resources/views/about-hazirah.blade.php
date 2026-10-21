@extends('master')

@section('title', 'About Hazirah')

@section('content')
    <div class="container">

        <section id="about-hazirah" class="mb-5">
            <article >
                <div >
                    <div class="row align-items-center g-4">
                        <div class="col-md-4 text-center">
                            <img
                                src="{{ asset('images/Hazirah.png') }}"
                                alt="Hazirah"
                                class="img-fluid rounded-circle"
                                width="250"
                                height="250"
                            >
                        </div>

                        <div class="col-md-8">
                            <h1 >Hello! I'm Hazirah</h1>

                            <p>
                                I am currently pursuing a Bachelor
                                of Computer Science (Software Engineering)
                                at Universiti Malaysia Pahang
                                Al-Sultan Abdullah (UMPSA).
                            </p>

                            <p>
                                I am passionate about web development,
                                programming, and learning new technologies.
                                I enjoy building websites and improving
                                my problem-solving skills through
                                software development projects.
                            </p>
                        </div>
                    </div>
                </div>
            </article>
        </section>

        <section id="education" class="mb-5">
            <h2>Educational Background</h2>

            <article class="card">
                <div class="card-body">
                    <h3 class="card-title">
                        Universiti Malaysia Pahang
                        Al-Sultan Abdullah (UMPSA)
                    </h3>

                    <p class="card-text">
                        Bachelor of Computer Science
                        (Software Engineering)
                    </p>

                    <p class="card-text">Faculty of Computing</p>
                </div>
            </article>
        </section>

        <section id="skills" class="mb-5">
            <h2>My Skills</h2>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <article class="card h-100">
                        <div class="card-body">
                            <h3 class="card-title">Programming Languages</h3>
                            <ul class="card-text">
                                <li>Java</li>
                                <li>JavaScript</li>
                                <li>Python</li>
                                <li>SQL</li>
                            </ul>
                        </div>
                    </article>
                </div>

                <div class="col-md-6 col-lg-4">
                    <article class="card h-100">
                        <div class="card-body">
                            <h3 class="card-title">Web Development</h3>
                            <ul class="card-text">
                                <li>HTML</li>
                                <li>CSS</li>
                                <li>JavaScript</li>
                            </ul>
                        </div>
                    </article>
                </div>

                <div class="col-md-6 col-lg-4">
                    <article class="card h-100">
                        <div class="card-body">
                            <h3 class="card-title">Tools</h3>
                            <ul class="card-text">
                                <li>Visual Studio Code</li>
                                <li>GitHub</li>
                            </ul>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section id="hobbies" class="mb-4">
            <h2>My Hobbies &amp; Interests</h2>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <article class="card h-100">
                        <div class="card-body">
                            <h3 class="card-title">Jogging &amp; Running</h3>
                            <p class="card-text">
                                I enjoy jogging and running during
                                my free time to stay active and healthy.
                            </p>
                        </div>
                    </article>
                </div>

                <div class="col-md-6 col-lg-4">
                    <article class="card h-100">
                        <div class="card-body">
                            <h3 class="card-title">Exploring Technology</h3>
                            <p class="card-text">
                                I enjoy discovering new technologies
                                and learning about software development.
                            </p>
                        </div>
                    </article>
                </div>

                <div class="col-md-6 col-lg-4">
                    <article class="card h-100">
                        <div class="card-body">
                            <h3 class="card-title">Listening to Music</h3>
                            <p class="card-text">
                                I love listening to music during my free time.
                                Music helps me relax, improve my mood,
                                and enjoy my daily activities.
                            </p>
                        </div>
                    </article>
                </div>
            </div>
        </section>

    </div>
@endsection
