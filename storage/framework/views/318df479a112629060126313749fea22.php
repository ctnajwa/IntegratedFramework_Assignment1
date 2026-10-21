

<?php $__env->startSection('title', 'About Najwa'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">

        <section id="about-najwa" class="mb-5">
            <article>
                <div>
                    <div class="row align-items-center g-4">
                        <div class="col-md-4 text-center">
                            <img
                                src="<?php echo e(asset('images/najwa.jpg')); ?>"
                                alt="Najwa"
                                class="img-fluid rounded-circle"
                                width="250"
                                height="250"
                            >
                        </div>

                        <div class="col-md-8">
                            <h1>Hello! I'm Najwa</h1>

                            <p>
                                I am currently pursuing a Bachelor
                                of Computer Science (Software Engineering)
                                at Universiti Malaysia Pahang
                                Al-Sultan Abdullah (UMPSA).
                            </p>

                            <p>
                                I am proficient in software development,
                                database management and system design,
                                built up from my experience in developing
                                academic projects.
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
                            <h3 class="card-title">Reading</h3>
                            <p class="card-text">
                                I enjoy reading books and articles during
                                my free time to expand my knowledge and stay informed.
                            </p>
                        </div>
                    </article>
                </div>

                <div class="col-md-6 col-lg-4">
                    <article class="card h-100">
                        <div class="card-body">
                            <h3 class="card-title">Sudoku</h3>
                            <p class="card-text">
                                I enjoy solving Sudoku puzzles as a way to challenge my mind
                                and improve my logical thinking skills.
                            </p>
                        </div>
                    </article>
                </div>

                <div class="col-md-6 col-lg-4">
                    <article class="card h-100">
                        <div class="card-body">
                            <h3 class="card-title">Aerodance</h3>
                            <p class="card-text">
                                I love joining aerobic dance classes
                                to stay fit and have fun while exercising.
                            </p>
                        </div>
                    </article>
                </div>
            </div>
        </section>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\OneDrive\Documents\GitHub\IntegratedFramework_Assignment1\resources\views/about-najwa.blade.php ENDPATH**/ ?>