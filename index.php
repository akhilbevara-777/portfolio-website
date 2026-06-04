<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Akhil Portfolio</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

body{
    background:#0f172a;
    color:white;
    line-height:1.7;
}

section{
    padding:80px 10%;
}

h1{
    font-size:4rem;
}

h2{
    font-size:2rem;
    margin-bottom:20px;
    color:#38bdf8;
}

.hero{
    height:100vh;
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
    text-align:center;
}

.hero span{
    color:#38bdf8;
}

.hero p{
    margin-top:20px;
    font-size:1.2rem;
}

.btn{
    display:inline-block;
    margin-top:30px;
    padding:12px 25px;
    background:#38bdf8;
    color:black;
    text-decoration:none;
    border-radius:30px;
    font-weight:bold;
}

.skills{
    display:flex;
    flex-wrap:wrap;
    gap:15px;
}

.skill{
    background:#1e293b;
    padding:12px 25px;
    border-radius:20px;
}

.projects{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
    gap:20px;
}

.card{
    background:#1e293b;
    padding:20px;
    border-radius:15px;
    transition:0.3s;
}

.card:hover{
    transform:translateY(-10px);
}

.contact p{
    margin:10px 0;
}

</style>

</head>
<body>

<section class="hero">
    <h1>Hi, I'm <span>Akhil</span></h1>
    <h2>Computer Science Student</h2>
    <p>AI Developer | Java Developer | Web Developer</p>

    <a href="#projects" class="btn">View Projects</a>
</section>

<section>
    <h2>About Me</h2>

    <p>
        Passionate Computer Science student interested in
        Artificial Intelligence, Java Development,
        Web Development and Problem Solving.
    </p>
</section>

<section>
    <h2>Skills</h2>

    <div class="skills">
        <div class="skill">Java</div>
        <div class="skill">Spring Boot</div>
        <div class="skill">Python</div>
        <div class="skill">HTML</div>
        <div class="skill">CSS</div>
        <div class="skill">JavaScript</div>
        <div class="skill">MySQL</div>
        <div class="skill">GitHub</div>
    </div>
</section>

<section id="projects">
    <h2>Projects</h2>

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

<section class="contact">
    <h2>Contact</h2>

    <p>Email: yourmail@gmail.com</p>
    <p>GitHub: github.com/akhilbevara-777</p>
    <p>LinkedIn: linkedin.com/in/yourprofile</p>
</section>

</body>
</html>