<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Akhil Portfolio</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
    scroll-behavior:smooth;
}

body{
    background:#0f172a;
    color:white;
}

/* Navbar */

nav{
    position:fixed;
    top:0;
    width:100%;
    background:#1e293b;
    padding:20px 10%;
    display:flex;
    justify-content:space-between;
    align-items:center;
    z-index:1000;
}

.logo{
    font-size:24px;
    font-weight:bold;
    color:#38bdf8;
}

nav ul{
    display:flex;
    list-style:none;
}

nav ul li{
    margin-left:25px;
}

nav ul li a{
    text-decoration:none;
    color:white;
    transition:.3s;
}

nav ul li a:hover{
    color:#38bdf8;
}

/* Sections */

section{
    padding:100px 10%;
}

/* Hero */

.hero{
    height:100vh;
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
    text-align:center;
}

.hero h1{
    font-size:4rem;
}

.hero span{
    color:#38bdf8;
}

.hero h2{
    color:#38bdf8;
    margin-top:15px;
}

.hero p{
    margin-top:20px;
    font-size:1.2rem;
}

.btn{
    display:inline-block;
    margin-top:30px;
    padding:12px 30px;
    background:#38bdf8;
    color:black;
    text-decoration:none;
    border-radius:30px;
    font-weight:bold;
}

/* Headings */

.section-title{
    text-align:center;
    margin-bottom:40px;
    color:#38bdf8;
    font-size:2rem;
}

/* Skills */

.skills{
    display:flex;
    flex-wrap:wrap;
    gap:15px;
    justify-content:center;
}

.skill{
    background:#1e293b;
    padding:12px 25px;
    border-radius:20px;
}

/* Projects */

.projects{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
    gap:20px;
}

.card{
    background:#1e293b;
    padding:25px;
    border-radius:15px;
    transition:.3s;
}

.card:hover{
    transform:translateY(-10px);
}

/* Education */

.education{
    background:#1e293b;
    padding:25px;
    border-radius:15px;
}

/* Contact Form */

form{
    max-width:600px;
    margin:auto;
}

input,
textarea{
    width:100%;
    padding:12px;
    margin-bottom:15px;
    border:none;
    border-radius:8px;
}

button{
    padding:12px 25px;
    background:#38bdf8;
    border:none;
    border-radius:25px;
    font-weight:bold;
    cursor:pointer;
}

/* Footer */

footer{
    text-align:center;
    padding:20px;
    background:#1e293b;
}

.socials a{
    color:#38bdf8;
    margin:0 10px;
    text-decoration:none;
}

/* Responsive */

@media(max-width:768px){

nav{
    flex-direction:column;
}

nav ul{
    margin-top:10px;
}

.hero h1{
    font-size:2.5rem;
}

}

</style>
</head>

<body>

<nav>
    <div class="logo">Akhil</div>

    <ul>
        <li><a href="#about">About</a></li>
        <li><a href="#skills">Skills</a></li>
        <li><a href="#projects">Projects</a></li>
        <li><a href="#education">Education</a></li>
        <li><a href="#contact">Contact</a></li>
    </ul>
</nav>

<section class="hero">

    <h1>Hi, I'm <span>Akhil</span></h1>

    <h2>Computer Science Student</h2>

    <p>AI Developer | Java Developer | Web Developer</p>

    <a href="#projects" class="btn">View Projects</a>

</section>

<section id="about">

    <h2 class="section-title">About Me</h2>

    <p>
        Passionate Computer Science student interested in Artificial Intelligence,
        Java Development, Web Development and Problem Solving.
    </p>

</section>

<section id="skills">

    <h2 class="section-title">Skills</h2>

    <div class="skills">

        <div class="skill">Java</div>
        <div class="skill">Spring Boot</div>
        <div class="skill">Python</div>
        <div class="skill">HTML</div>
        <div class="skill">CSS</div>
        <div class="skill">JavaScript</div>
        <div class="skill">MySQL</div>
        <div class="skill">Git & GitHub</div>

    </div>

</section>

<section id="projects">

    <h2 class="section-title">Projects</h2>

    <div class="projects">

        <div class="card">
            <h3>AI Java Chatbot</h3>
            <p>Multilingual chatbot built using Spring Boot and AI.</p>
        </div>

        <div class="card">
            <h3>Medical OCR System</h3>
            <p>OCR and anomaly detection platform.</p>
        </div>

        <div class="card">
            <h3>Portfolio Website</h3>
            <p>Personal portfolio showcasing skills and projects.</p>
        </div>

    </div>

</section>

<section id="education">

    <h2 class="section-title">Education</h2>

    <div class="education">

        <h3>B.Tech - Computer Science Engineering</h3>

        <p>
            Currently pursuing B.Tech in Computer Science Engineering
            with focus on AI, Java Development and Full Stack Development.
        </p>

    </div>

</section>

<section id="contact">

    <h2 class="section-title">Contact Me</h2>

    <form>

        <input type="text" placeholder="Your Name">

        <input type="email" placeholder="Your Email">

        <textarea rows="5" placeholder="Your Message"></textarea>

        <button type="submit">Send Message</button>

    </form>

</section>

<footer>

    <p>© 2026 Akhil Portfolio</p>

    <div class="socials">
        <a href="#">GitHub</a>
        <a href="#">LinkedIn</a>
        <a href="#">Email</a>
    </div>

</footer>

</body>
</html>