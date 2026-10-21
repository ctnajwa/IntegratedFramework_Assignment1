

<?php $__env->startSection('title', 'About Aliyah'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">

        <section id="about-aliyah" class="mb-5">
            <article>
                <div>
                    <div class="row align-items-center g-4">
                        <div class="col-md-4 text-center">
                            <img
                                src="<?php echo e(asset('images/aliyah.jpg')); ?>"
                                alt="Aliyah Jannah"
                                class="img-fluid rounded-circle"
                                width="250"
                                height="250"
                            >
                        </div>

                        <div class="col-md-8">
                            <h1 >Hello! I'm Aliyah Jannah</h1>

                            <p class="card-text">
                                I am a final year student at Universiti Malaysia Pahang
                                Al-Sultan Abdullah (UMPSA), pursuing a Bachelor of Computer
                                Science (Computer Systems &amp; Networking) with Honours.
                            </p>

                            <p class="card-text">
                                My interest in networking began with a curiosity about how
                                devices connect and communicate. Over time, this interest has grown
                                into a passion for designing and configuring networks using Cisco
                                technologies. I enjoy developing practical skills in network
                                design and configuration while continuing to build my
                                foundation in web development.
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
                        (Computer Systems &amp; Networking) with Honours
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
                            <h3 class="card-title">Networking</h3>
                            <ul class="card-text">
                                <li>Configuration Devices</li>
                                <li>Routing and Switching</li>
                                <li>IP Addressing and Subnetting</li>
                            </ul>
                        </div>
                    </article>
                </div>

                <div class="col-md-6 col-lg-4">
                    <article class="card h-100">
                        <div class="card-body">
                            <h3 class="card-title">Coding</h3>
                            <ul class="card-text">
                                <li>HTML and CSS</li>
                                <li>PHP and Laravel</li>
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

        <section id="hobbies" class="mb-4">
            <h2>My Hobbies &amp; Interests</h2>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <article class="card h-100">
                        <div class="card-body">
                            <h3 class="card-title">Reading</h3>
                            <p class="card-text">
                                Reading lets me escape into new worlds
                                and pick up new ideas. I enjoy getting lost in a
                                good book on a quiet day.
                            </p>
                        </div>
                    </article>
                </div>

                <div class="col-md-6 col-lg-4">
                    <article class="card h-100">
                        <div class="card-body">
                            <h3 class="card-title">Listening to Music</h3>
                            <p class="card-text">
                                Music is part of my everyday routine.
                                I love discovering new songs
                                and having the right playlist for every mood.
                            </p>
                        </div>
                    </article>
                </div>

                <div class="col-md-6 col-lg-4">
                    <article class="card h-100">
                        <div class="card-body">
                            <h3 class="card-title">Cooking</h3>
                            <p class="card-text">
                                Cooking is how I get creative. I enjoy trying new recipes
                                and sharing the food I make with the people around me.
                            </p>
                        </div>
                    </article>
                </div>
            </div>
        </section>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\OneDrive\Documents\GitHub\IntegratedFramework_Assignment1\resources\views/about-aliyah.blade.php ENDPATH**/ ?>