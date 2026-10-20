<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    
</head>
<body>

    <div class="about-container container my-5">
        
        <h1 class="about-title">About Me</h1>
        <br>

        <div class="profile-section">
            <img src="{{ asset('images/profile.png') }}" 
                 alt="Profile Picture" 
                 class="profile-img rounded-circle shadow-sm" 
                 width="150" 
                 height="150" 
                 style="object-fit: cover;">
        </div>
        <br>

        <div class="background-section">
            <h3 class="section-title">Background</h3>
            <p class="about-text">
                I'm a final year student at Universiti Malaysia Pahang Al-Sultan Abdullah (UMPSA),
                studying Software Engineering. I became interested in software development
                because I enjoy solving problems and seeing my code turn
                into something people can use.
            </p>
            <p class="about-text">
                Through my coursework, I have learned programming, databases and web
                development, and I'm always looking for projects that let me practise
                what I learn.
            </p>
        </div>
        <br>

        <div class="education-section">
            <h3 class="section-title">Education</h3>
            <ul class="education-list">
                <li class="education-item">
                    <strong>Bachelor of Computer Science (Software Engineering) with Honours</strong> (2023 - Present)<br>
                    Universiti Malaysia Pahang Al-Sultan Abdullah
                </li>
                <br>
                <li class="education-item">
                    <strong>Matriculation in Pure Science</strong> (August 2022 - May 2023)<br>
                    Kolej Matrikulasi Selangor  
                </li>
                <br>
                <li class="education-item">
                    <strong>Secondary School</strong> (2017 - 2022)<br>
                    SMK Sri Permata
                </li>
            </ul>
        </div>
        <br>

        <div class="personal-details-section">
            <h3 class="section-title">Personal Details</h3>
            <p class="detail-item"><strong>University:</strong> Universiti Malaysia Pahang Al-Sultan Abdullah</p>
            <p class="detail-item"><strong>Location:</strong> Petaling Jaya, Selangor</p>
            <p class="detail-item"><strong>Email:</strong> hazirah@gmail.com</p>
        </div>
        <br>

        <div class="skills-section">
            <h3 class="section-title">My Skills</h3>
            <ul class="skills-list">
                <li class="skill-item"><strong>Web Development:</strong> Laravel, PHP, HTML, CSS &amp; Bootstrap, JavaScript</li>
                <li class="skill-item"><strong>Programming:</strong> Java, Python, C / C++</li>
                <li class="skill-item"><strong>Tools I Use:</strong> Git &amp; GitHub, VS Code, MySQL, Composer</li>
            </ul>
        </div>
        <br>

        <div class="hobbies-section">
            <h3 class="section-title">My Hobbies</h3>
            <ul class="hobbies-list">
                <li class="hobby-item"><strong>Fishing:</strong> Fishing is my favourite way to unwind. I enjoy the calm of being by the water and the excitement when something finally bites.</li>
                <li class="hobby-item"><strong>Running:</strong> Running keeps me active and energised. I enjoy the feeling of pushing a little further each time and finishing with a clear mind.</li>
                <li class="hobby-item"><strong>Music:</strong> Music is part of my everyday routine. I love discovering new songs and having the right playlist for every mood.</li>
            </ul>
        </div>
        <br>

        <div class="contact-button">
            <a href="{{ route('contact') }}" class="btn btn-primary contact-btn">Contact Me</a>
        </div>

    </div>

</body>
</html>