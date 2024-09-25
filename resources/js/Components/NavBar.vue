<template>
    <nav>
        <ul>
            <li>
                <a
                    href="#hero-section"
                    @click.prevent="scrollToSection('hero-section')"
                    >Home</a
                >
            </li>
            <li>
                <a
                    href="#additional-section"
                    @click.prevent="scrollToSection('additional-section')"
                    >About</a
                >
            </li>
            <li>
                <a
                    href="#experience-section"
                    @click.prevent="scrollToSection('experience-section')"
                    >Projects</a
                >
            </li>
            <li>
                <a href="#contact" @click.prevent="scrollToSection('contact')"
                    >Contact</a
                >
            </li>
        </ul>
    </nav>
</template>

<script>
export default {
    methods: {
        scrollToSection(sectionId) {
            const element = document.getElementById(sectionId);
            if (element) {
                window.scrollTo({
                    top: element.offsetTop,
                    behavior: "smooth",
                });
            }
        },
    },
};
</script>

<style>
nav {
    position: fixed; /* Fixes the nav to the top */
    top: 0; /* Positions it at the top */
    left: 0; /* Aligns it to the left */
    width: 100%; /* Full width */
    height: 2.5rem;
    z-index: 1000; /* Ensures it stays above other elements */
    background-color: #4e5166; /* Change this to match your theme */
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Optional shadow for visibility */
}

nav ul {
    display: flex;
    list-style-type: none;
    gap: 1%;
}

nav ul li a {
    color: #fdf0d5;
    text-decoration: none;
}

nav li {
    transition: transform 0.3s ease; /* Smooth transition for transform */
    padding: 10px 15px; /* Adjust the padding as needed */
    margin: 0 5px; /* Add horizontal spacing between links */
}

nav li:hover {
    transform: scale(1.1); /* Scale the text to 110% */
}
</style>
