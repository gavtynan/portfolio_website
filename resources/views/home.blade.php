@extends('app')

@section('content')
    <nav-bar></nav-bar>
    <section id="hero-section">
        <div class="hero-content">
            <h1>Hello, I'm <span style="color: #FDF0D5;">Gavin</span>.<br>I'm a Web and Software Developer</h1>
        </div>
        <campfire></campfire>
        <div class="button-container">
            <button type="button" id="scrollToAbout">Get to know me</button>
        </div>
    </section>
    


    <section id="additional-section">
    <hr class="separator">
    <div class="content">
            <h2 class="about-heading">About</h2>
            <div class="about-container">
            <div class="about-text">
                <img src="{{ asset('images/about.png') }}" alt="Profile Picture" class="profile-image">
                <div class="text-box">
                    <p>
                    With a decade of experience as a Software Engineer, I excel in creating innovative solutions and leading development teams. My career includes roles such as a Web Developer Intern at Domo, where I improved website SEO and readability, and leading front-end design in a hackathon sponsored by ODevs and Stately. I've also managed a top Code Ninjas center, focusing on IT curriculum, team management, and operational efficiency. Outside of coding, I enjoy skiing, longboarding, hiking, and various water activities like surfing and cliff diving.                </div>
                </div>
                <section class="carousel-section">
                    <image-grid></image-grid>
                </section>
            </div>
        </div>
    </section>


    <section id="experience-section">
    <hr class="separator">
    <h2 class="experience-heading">Experience</h2>
        <div class="experience-grid">
            <div class="experience-item">
                <h3 class="experience-name">Web Developer Intern @ Domo</h3>
                <p class="experience-date">Jun 2023 - Aug 2024</p>
            </div>
            <div class="experience-item">
                <p class="experience-description">
                Front-End Web Developer Intern for a leading data analytics company. Worked closesly with the marketing team in making changes to the company website to improve readability, SEO, and create new pages. Worked in a team of several developers who were great role models and always ready to teach. Learned how to harness new frameworks and softwares to bring ideas to life.                </p>
            </div>
            <div class="experience-item">
                <h3 class="experience-name">Hackathon Participant @ Odevs and Stately</h3>
                <p class="experience-date">Mar 2023</p>
            </div>
            <div class="experience-item">
                <p class="experience-description">
                Front-End Design lead in a Stately sponsored Hackathon. Provided project ideas to a team and spearheaded the front-end. Worked in a four-person team to create a web application that utilizes GPT3 and design frameworks.                </p>
            </div>
            <div class="experience-item">
                <h3 class="experience-name">Assistant Center Director and Operations Consultant @ Code Ninjas</h3>
                <p class="experience-date">Mar 2018 - Jul 2022</p>
            </div>
            <div class="experience-item">
                <p class="experience-description">
                Assistant Director of a top 50 center of the world’s largest and fastest growing kids coding education company. Responsible for managing team of ten employees, strategic direction of IT educational curriculum, remote/live coding instruction, assisting with all technical needs, created innovative marketing campaigns, improved student retention rates, instrumental in launching new python educational program, and improved bottom line by reducing operational costs and increasing revenue.                </p>
            </div>
        </div>
        <hr class="sm-separator">
        <h2 class="experience-heading">Projects</h2>



        <div class="project-grid">
            <div class="project-item-img">
                <img src="/images/projects/chef.png" alt="Project 1 Description" />
            </div>
            <div class="project-item">
                <p class="experience-description">
                ChefGPT<br>One-of-a-kind software developed by a group of students that allows users to input any meal they would like to cook, and the app will return a grocery list and the recipe to cook. Front-End design leader using <span style="color: #FDF0D5;">React</span> and <span style="color: #FDF0D5;">Bootstrap</span> to implement innovativebe ideas that create a well-thought UX.                    </p>
            </div>
            <div class="project-item-img">
                <img src="/images/projects/mips.png" alt="Project 2 Description" />
            </div>
            <div class="project-item">
                <p class="project-description">
                MIPS Compiler<Br>A high-level course project that allows users to compile MIPS code in the <span style="color: #FDF0D5;">C</span> language. Implemented many software engineering concepts that assisted in the project optimization and flow.                    </p>
            </div>
            <div class="project-item-img">
                <img src="/images/projects/maze.png" alt="Project 2 Description" />
            </div>
            <div class="project-item">
                <p class="project-description">
                Maze Analyzer<br>A software that allows users to test the step count of different maze solving algorithms on the given maze. Written entirely in <span style="color: #FDF0D5;">Python</span> with help of <span style="color: #FDF0D5;">Pygame</span> for the graphics.                    </p>
            </div>
            <div class="project-item-img">
                <img src="/images/projects/www.png" alt="Project 1 Description" />
            </div>
            <div class="project-item">
                <p class="experience-description">
                Portfolio Website<br>My personal portfolio website that you are currently on! Created to showcase me as a developer and design abilities as well as an understanding of different web languages and concepts. Written in <span style="color: #FDF0D5;">Blade, Laravel,</span> and <span style="color: #FDF0D5;">Vue</span>.                    </p>
            </div>
        </div>
    </section>

    <section id="contact">
    <hr class="separator">
        <h2>Contact Me</h2>
        <form action="{{ route('contact.send') }}" method="POST">
            @csrf
            <div>
                <input type="text" id="name" name="name" placeholder="Your Name" required>
            </div>
            <div>
                <input type="email" id="email" name="email" placeholder="Your Email" required>
            </div>
            <div>
                <textarea id="message" name="message" placeholder="Message"required></textarea>
            </div>
            <div class="button-container">
                <button type="submit">Send Message</button>
            </div>
        </form>

        @if(session('success'))
            <p>{{ session('success') }}</p>
        @endif
    </section>
@endsection

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const scrollButton = document.getElementById('scrollToAbout');
        const aboutSection = document.querySelector('#additional-section');

        if (scrollButton && aboutSection) {
            scrollButton.addEventListener('click', function() {
                aboutSection.scrollIntoView({ behavior: 'smooth' });
            });
        }
    });
</script>