<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Markus Stuefer Portfolio</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Markus Stuefer</h1>
        <nav>
            <ul>
                <li><a href="#about">Über mich</a></li>
                <li><a href="#skills">Fähigkeiten</a></li>
                <li><a href="/html/beruf.html">Erfahrungen</a></li>
                <li><a href="#education">Ausbildung</a></li>
                <li><a href="#contact">Kontakt</a></li>
                <li><a href="/games">Spiele</a></li>
                <li><a href="impressum.html">Impressum</a></li>

            </ul>
        </nav>
    </header>
    
    <section id="about">
        <h2>Über mich</h2>
        <p>Hallo, ich bin Markus Stuefer, ein leidenschaftlicher Entwickler mit über 10 Jahren Erfahrung in der Softwareentwicklung. Ich habe an zahlreichen Projekten gearbeitet, die von kleinen Startups bis hin zu großen Unternehmen reichen. Meine Hauptkompetenzen liegen in der Webentwicklung, aber ich habe auch Erfahrung in der mobilen App-Entwicklung und der Datenanalyse.</p>
        <p>Ich bin stets bestrebt, meine Fähigkeiten zu erweitern und auf dem neuesten Stand der Technik zu bleiben. In meiner Freizeit experimentiere ich gerne mit neuen Technologien und arbeite an Open-Source-Projekten.</p>
        <p>Ich glaube fest daran, dass Technologie die Kraft hat, unser Leben zu verbessern, und ich strebe danach, innovative Lösungen zu entwickeln, die echten Mehrwert bieten.</p>
    </section>
    
    <section id="projects">
        <h2>Projekte</h2>
        <div class="project">
        </div>
        <div class="project">
        </div>
        <div class="project">
        </div>
        <div class="project">
        </div>
    </section>
    
    <section id="skills">
        <h2>Fähigkeiten</h2>
        <ul>
            <li>HTML & CSS</li>
            <li>JavaScript (React, Vue.js, Angular)</li>
            <li>Backend-Entwicklung (Node.js, Express, Django)</li>
            <li>Mobile Entwicklung (React Native, Flutter)</li>
            <li>Datenbanken (SQL, MongoDB)</li>
            <li>Version Control (Git, GitHub)</li>
            <li>Cloud Services (AWS, Azure)</li>
            <li>Automatisierung und CI/CD (Jenkins, GitHub Actions)</li>
            <li>Testing (Jest, Mocha, Selenium)</li>
        </ul>
    </section>
    <section id="education">
        <h2>Ausbildung</h2>
        <div class="education">
            <h3>Wirtschaftsfachoberschule Franz Kafka in Meran</h3>
            <p>Zeitraum: 2015-2022</p>
        </div>
        <div class="education">
            <h3>Schulsprengel Meran/Obermais in Schenna</h3>
            <p>Zeitraum: 2012 - 2015</p>
        </div>
    </section>
    
    <section id="contact">
        <h2>Kontakt</h2>
        <form action="https://formspree.io/f/mvgpadrb" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="message">Nachricht:</label>
            <textarea id="message" name="message" required></textarea>
            
            <button type="submit">Absenden</button>
        </form>
        <p>Oder kontaktieren Sie mich direkt per Email: <a href="mailto:markus.stuefer@example.com">markus.stuefer@example.com</a></p>
    </section>
    
    <footer>
        <p>&copy; 2024 Markus Stuefer</p>
        <p>Folgen Sie mir auf <a href="https://www.linkedin.com/in/markusstuefer" target="_blank">LinkedIn</a> und <a href="https://github.com/markusstuefer" target="_blank">GitHub</a></p>
    </footer>
</body>
</html>
