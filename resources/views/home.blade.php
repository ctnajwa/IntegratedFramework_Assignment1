
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Hazirah Portfolio</title>
</head>

<body>

    <!-- HOME PAGE -->
    <main>

        <!-- INTRODUCTION SECTION -->
        <section id="introduction">

            <h1>Hello, I'm Hazirah</h1>

            <h2>Software Engineering Student</h2>

            <p>
                Welcome to my personal portfolio!
                I am a Software Engineering student
                who is passionate about technology,
                programming, and web development.
            </p>

            <!-- Navigation to About Page -->
            <a href="/about">
                Get to Know Me
            </a>

            <!-- Profile Picture -->
            <div>
                <img
                    src="{{ asset('images/profile.jpg') }}"
                    alt="Hazirah's Profile Photo"
                    width="250">
            </div>

        </section>


        <!-- SHORT ABOUT SECTION -->
        <section id="about-preview">

            <h2>A Little About Me</h2>

            <p>
                I enjoy exploring new technologies,
                developing creative solutions,
                and continuously improving my skills.
            </p>

            <a href="/about">
                More About Me
            </a>

        </section>


        <!-- CONTACT SECTION -->
        <section id="contact-preview">

            <h2>Let's Connect!</h2>

            <p>
                Interested in knowing more about me?
                Feel free to get in touch!
            </p>

            <a href="/contact">
                Contact Me
            </a>

        </section>

    </main>

</body>
</html>
