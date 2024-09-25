<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Gavin Tynan') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    <style>
        html, body {
            margin: 0;
            overflow-x: hidden; /* Prevent horizontal scrolling */
        }

        #app {
            position: relative;
        }


        .snowflakes {
            position: fixed; /* Ensure it stays in place */
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            pointer-events: none;
            z-index: 1000; /* Ensure it's above other content */
            overflow: hidden; /* Ensures snowflakes don't appear outside the viewport */
        }

        .snowflakes .snowflake {
            position: absolute;
            background: #FFF;
            border-radius: 50%;
            opacity: 0.8;
            pointer-events: none;
        }

        @keyframes fall {
            0% {
                transform: translateY(-100vh);
            }
            100% {
                transform: translateY(100vh);
            }
        }

        .snowflakes .snowflake {
            width: 5px;
            height: 5px;
            animation: fall linear infinite;
            animation-duration: 10s; /* Adjust speed */
            animation-delay: calc(-10s * var(--i));
            animation-timing-function: linear;
            background: radial-gradient(circle, #FFF 50%, transparent 50%);
        }

        .snowflakes .snowflake:nth-child(odd) {
            width: 8px;
            height: 8px;
        }

        .snowflakes .snowflake:nth-child(2n) {
            width: 4px;
            height: 4px;
        }



        
        #hero-section {
            display:grid;
            position: relative;
            align-items: center;
            justify-content: center;
            min-height: 100vh; /* Full viewport height */
            background-color: #7C90A0; /* Adjust background color if needed */
        }

        .hero-content {
            padding-top:20%;
            text-align: center;
        }
        campfire {
            display: block;
            margin-top: 50px; /* Adjust the spacing as needed */
        }

        .hero-content h1 {
            font-size: 3rem; /* Adjust font size as needed */
            line-height: 1.2;
            margin: 0;
            color: #333; /* Adjust text color if needed */
        }

        #hero-section button {
            z-index: 10;
            width: auto;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            background-color: #5c7080;
            color: #FDF0D5;
            cursor: pointer;
            transition: background-color 0.3s;
        } 

        #hero-section button:hover{
            background-color: #404e59;
        }








        .separator {
            border: 0;
            height: 10px;
            background-color: #4E5166;
            width: 90%; /* Adjust to fit your design, or use 100% if you want it to span the full width */
            margin: 2rem auto; /* Center the line and provide vertical spacing */
        }

        .sm-separator {
            border: 0;
            height: 5px;
            background-color: #4E5166;
            width: 60%; /* Adjust to fit your design, or use 100% if you want it to span the full width */
            margin: 2rem auto; /* Center the line and provide vertical spacing */
        }








        #additional-section {
            padding: 2rem;
            text-align: center;
            background-color: #7C90A0;
            /* Remove height: 100vh to allow content to determine height */
            min-height: 30vh; /* Optional: Ensure it has at least some height */
        }

        .about-heading {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: #333;
        }

        .about-container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            max-width: 1200px;
            margin: 0 auto;
        }

        .about-text {
            flex: 1;
            padding: 1rem;
            text-align: left;
            color: #333;
            font-weight: 600;
            font-size: 18px;
        }

        .about-extra {
            flex: 1;
            padding: 1rem;
            /* You can style this space as needed */
            background-color: #eaeaea; /* Light background color for distinction */
            height: 300px; /* Optional: Adjust height as needed */
        }
        .text-box {
            text-align: justify; /* Justify text alignment */
            margin-right: 50%;
        }





        #experience-section {
            padding: 2rem;
            background-color: #7C90A0; /* Adjust background color if needed */
        }
        .experience-heading {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 5rem;
            color: #333;
        }

        .experience-grid {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 1rem;
            max-width: 1200px; /* Adjust as needed */
            margin: 0 auto; /* Center the grid */
        }

        .experience-item {
            padding: 1rem;
            box-sizing: border-box;
        }

        .experience-name {
            font-size: 18px;
            font-weight: bold;
            margin: 0;
            color: #333;
        }

        .experience-date {
            font-size: 1rem;
            color: #555; /* Adjust color if needed */
            margin: 0;
            font-weight: bold;
        }

        .experience-description {
            font-size: 18px;
            color: #333; /* Adjust color if needed */
            font-weight: bold;
            text-align: justify;
        }


        

        .project-section {
            padding: 1rem 2rem 2rem;
            background-color: #7C90A0; /* Adjust background color if needed */
        }
        .project-heading {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 5rem;
            color: #333;
        }

        .project-grid {
            display: grid;
            grid-template-columns: 1fr 5fr;
            gap: 1rem;
            max-width: 1200px; /* Adjust as needed */
            margin: 0 auto; /* Center the grid */
        }

        .project-item {
            padding: 1rem;
            sizing: border-box;
        }
        .project-item-img {
            padding: 1rem;
            box-sizing: border-box;
            width: 60%;
        }
        @media (max-width: 768px) {
            .project-item-img {
                display: none;
            }
            .project-grid {
                display: flex;
    flex-direction: column; /* Stack items vertically */
    align-items: center; /* Center items horizontally */
    padding: 20px; /* Add some padding if needed */
            }
        }

        .project-name {
            font-size: 18px;
            font-weight: bold;
            margin: 0;
            color: #333;
        }

        .project-date {
            font-size: 1rem;
            color: #555; /* Adjust color if needed */
            margin: 0;
            font-weight: bold;
        }

        .project-description {
            font-size: 18px;
            color: #333; /* Adjust color if needed */
            font-weight: bold;
            text-align: justify;
        }



        #contact {
            padding: 50px 20px;
            background-color: #7C90A0; /* Adjust as per your theme */
            max-width: 100%;
            margin: 0 auto;
            text-align: center;
        }

        #contact h2 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: #333; /* Match your hero section text color */
        }

        #contact form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }


        #contact input[type="text"],
        #contact input[type="email"],
        #contact textarea {
            width: 30%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
            background-color: #FDF0D5;
            color: #333;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }

        #contact textarea {
            height: 150px;
        }

        .button-container {
            display: flex;
            justify-content: center; /* Centers the button horizontally */
        }

        #contact button {
            width: auto; /* Ensure button doesn't stretch */
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            background-color: #5c7080;
            color: #FDF0D5;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        #contact button:hover {
            background-color: #404e59;
        }

        #contact p {
            color: #28a745
        }


        @media (max-width: 768px) {
            .about-container {
                display: block;
                width: 100%;
                text-align: center;
            }

            .about-text {
                width: 100%;
                margin-bottom: 20px;
            }

            .profile-image {
                display: block;
                margin: 0 auto;
                width: 150px;
                height: 150px;
            }

            .text-box {
                width: 100%;
                text-align: center;
                padding: 0 20px;
            }

            .carousel-section {
                width: 100%;
                margin-top: 20px;
            }

            image-grid {
                display: block;
                width: 10%;
                margin: 0 auto;
            }

            .sphere-container {
                height: 200px; /* Adjust height for mobile screens */
                margin-left: 50%;
            }

            /* Shrink the sphere items (images) on smaller screens */
            .sphere-item img {
                width:5vh !important;  /* Shrink size */
            }
            #contact input[type="text"],
            #contact input[type="email"],
            #contact textarea {
                width: 55% !important;
                padding: 10px;
                border: 1px solid #ddd;
                border-radius: 5px;
                font-size: 1rem;
                background-color: #FDF0D5;
                color: #333;
                box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
            }

            .hero-content h1 {
                
            }
            .hero-content {
            padding-left: 10%;
            padding-right: 10%;
            padding-top:10%;
            text-align: center;
        }
        }


    </style>
</head>
<body class="font-sans antialiased">
    <div id="app">
        @yield('content')
    </div>
    <div class="snowflakes" aria-hidden="true"></div>
    <!-- Scripts -->
    @stack('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const snowflakesContainer = document.querySelector('.snowflakes');
            const numSnowflakes = 100; // Number of snowflakes

            for (let i = 0; i < numSnowflakes; i++) {
                const snowflake = document.createElement('div');
                snowflake.classList.add('snowflake');
                snowflake.style.left = `${Math.random() * 100}vw`;
                snowflake.style.animationDuration = `${Math.random() * 10 + 5}s`; // Random duration
                snowflake.style.opacity = Math.random(); // Random opacity
                snowflake.style.width = `${Math.random() * 10 + 5}px`; // Random width
                snowflake.style.height = `${Math.random() * 10 + 5}px`; // Random height
                snowflake.style.animationDelay = `${Math.random() * 10}s`; // Random delay
                snowflake.style.setProperty('--i', i);
                snowflakesContainer.appendChild(snowflake);
            }
        });
    </script>
</body>
</html>