

<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">

        <!-- HOME INTRODUCTION -->
        <section id="home-introduction">

            <h1>Welcome to Our Personal Profile Website</h1>

            <p>
                Get to know our team of four
                students.
                Explore our backgrounds, skills,
                and interests.
            </p>

        </section>


        <!-- TEAM MEMBERS SECTION -->
        <section id="team-members">

            <h2>Meet Our Team</h2>

            <div class="row g-4">
                <div class="col-md-6">
                    <article id="member-hazirah" class="card h-100">
                        <div class="card-body d-flex flex-column">
                            <img
                                src="<?php echo e(asset('images/Hazirah.png')); ?>"
                                alt="Hazirah Profile Photo"
                                class="img-fluid rounded-circle mx-auto mb-3"
                                width="180"
                                height="180">

                            <h3 class="card-title">Hazirah</h3>

                            <p class="card-text">
                                A final-year Computer Science student majoring
                                in Software Engineering at UMPSA. Passionate
                                about developing innovative digital solutions,
                                exploring emerging technologies, and continuously
                                enhancing my technical and problem-solving skills.
                            </p>

                            <a class="btn-outline-accent mt-auto align-self-start" href="<?php echo e(route('about.hazirah')); ?>">
                                About Me
                            </a>
                        </div>
                    </article>
                </div>

                <div class="col-md-6">
                    <article id="member-najwa" class="card h-100">
                        <div class="card-body d-flex flex-column">
                            <img
                                src="<?php echo e(asset('images/najwa.jpg')); ?>"
                                alt="Najwa Profile Photo"
                                class="img-fluid rounded-circle mx-auto mb-3"
                                width="180"
                                height="180">

                            <h3 class="card-title">Najwa</h3>

                            <p class="card-text">
                                A Software Engineering student
                                interested in technology
                                and software development.
                            </p>

                            <a class="btn-outline-accent mt-auto align-self-start" href="<?php echo e(route('about.najwa')); ?>">
                                About Me
                            </a>
                        </div>
                    </article>
                </div>

                <div class="col-md-6">
                    <article id="member-aliyah" class="card h-100">
                        <div class="card-body d-flex flex-column">
                            <img
                                src="<?php echo e(asset('images/aliyah.jpg')); ?>"
                                alt="Aliyah Profile Photo"
                                class="img-fluid rounded-circle mx-auto mb-3"
                                width="180"
                                height="180">

                            <h3 class="card-title">Aliyah</h3>

                            <p class="card-text">
                                A Computer Systems and Networking student passionate
                                about networking,and practical problem-solving.
                            </p>

                            <a class="btn-outline-accent mt-auto align-self-start" href="<?php echo e(route('about.aliyah')); ?>">
                                About Me
                            </a>
                        </div>
                    </article>
                </div>

                <div class="col-md-6">
                    <article id="member-maneessa" class="card h-100">
                        <div class="card-body d-flex flex-column">
                            <img
                                src="<?php echo e(asset('images/maneessa.jpg')); ?>"
                                alt="Maneessa Profile Photo"
                                class="img-fluid rounded-circle mx-auto mb-3"
                                width="180"
                                height="180">

                            <h3 class="card-title">Maneessa</h3>

                            <p class="card-text">
                                I am a Computer Science student specialising in
                                Computer Systems and Networking at UMPSA,
                                with a strong interest in network
                                configuration, routing, switching, and network security.
                            </p>

                            <a class="btn-outline-accent mt-auto align-self-start" href="<?php echo e(route('about.maneessa')); ?>">
                                About Me
                            </a>
                        </div>
                    </article>
                </div>
            </div>

        </section>
        <div class="mt-5 text-center">
            <h3 class="mb-3">Feel free to contact us!</h3>
            <a class="btn-accent" href="<?php echo e(route('contact')); ?>">
                Contact Us
            </a>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ctnaj\Projects\IntegratedFramework_Assignment1\resources\views/home.blade.php ENDPATH**/ ?>