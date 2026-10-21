
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Home | Group Personal Profile</title>
</head>

<body>

    <main>

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

            <!-- MEMBER 1: HAZIRAH -->
            <article id="member-hazirah">

                <img
                    src="<?php echo e(asset('images/Hazirah.png')); ?>"
                    alt="Hazirah Profile Photo"
                    width="180">

                <h3>Hazirah</h3>

                <p>
                    A final-year Computer Science student majoring
                     in Software Engineering at UMPSA. Passionate
                     about developing innovative digital solutions,
                     exploring emerging technologies, and continuously
                     enhancing my technical and problem-solving skills.
                </p>

                <a href="<?php echo e(url('/about/hazirah')); ?>">
                    About Me
                </a>

            </article>


            <!-- MEMBER 2 -->
            <article id="member-two">

                <img
                    src="<?php echo e(asset('images/najwa.jpg')); ?>"
                    alt="Najwa Profile Photo"
                    width="180">

                <h3>Najwa</h3>

                <p>
                    A Software Engineering student
                    interested in technology
                    and software development.
                </p>

                <a href="<?php echo e(url('/about/najwa')); ?>">
                    About Me
                </a>

            </article>


            <!-- MEMBER 3 -->
            <article id="member-three">

                <img
                    src="<?php echo e(asset('images/member3.jpg')); ?>"
                    alt="Member 3 Profile Photo"
                    width="180">

                <h3>Aliyah</h3>

                <p>
                    A Software Engineering student
                    interested in programming
                    and creative problem-solving.
                </p>

                <a href="<?php echo e(url('/about/member3')); ?>">
                    About Me
                </a>

            </article>


            <!-- MEMBER 4 -->
            <article id="member-four">

                <img
                    src="<?php echo e(asset('images/member4.jpg')); ?>"
                    alt="Member 4 Profile Photo"
                    width="180">

                <h3>Maneesha</h3>

                <p>
                    A Software Engineering student
                    interested in developing
                    innovative digital solutions.
                </p>

                <a href="<?php echo e(url('/about/member4')); ?>">
                    About Me
                </a>

            </article>

        </section>
        <div>
            <h3>Feel free to contact us!</h3>
            <button>
                <a href="<?php echo e(url('/contact')); ?>">
                    Contact Us
                </a>
            </button>
        </div>

    </main>

</body>
</html>
<?php /**PATH C:\Users\ctnaj\Projects\IntegratedFramework_Assignment1\resources\views/home.blade.php ENDPATH**/ ?>