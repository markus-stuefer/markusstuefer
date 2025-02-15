<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Markus Stuefer Portfolio</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- Start of LiveChat (www.livechat.com) code -->
    <script>
    window.__lc = window.__lc || {};
    window.__lc.license = 18962346;
    window.__lc.integration_name = "manual_channels";
    window.__lc.product_name = "livechat";;
    (function(n, t, c) {
        function i(n) {
            return e._h ? e._h.apply(null, n) : e._q.push(n)
        }
        var e = {
            _q: [],
            _h: null,
            _v: "2.0",
            on: function() {
                i(["on", c.call(arguments)])
            },
            once: function() {
                i(["once", c.call(arguments)])
            },
            off: function() {
                i(["off", c.call(arguments)])
            },
            get: function() {
                if (!e._h) throw new Error("[LiveChatWidget] You can't use getters before load.");
                return i(["get", c.call(arguments)])
            },
            call: function() {
                i(["call", c.call(arguments)])
            },
            init: function() {
                var n = t.createElement("script");
                n.async = !0, n.type = "text/javascript", n.src = "https://cdn.livechatinc.com/tracking.js",
                    t.head.appendChild(n)
            }
        };
        !n.__lc.asyncInit && e.init(), n.LiveChatWidget = n.LiveChatWidget || e
    }(window, document, [].slice))
    </script>
    <noscript><a href="https://www.livechat.com/chat-with/18962346/" rel="nofollow">Chat with us</a>, powered by <a
            href="https://www.livechat.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>
    <!-- End of LiveChat code -->

</head>

<body>
    <header>
        <h1>Markus Stuefer</h1>
        <div class="center">
        <div class="dropdown">
  <span>Mmenu</span>
  <div class="dropdown-content">
    <a href="#">Home</a>
    <a href="/html/beruf.html">Berufserfarung</a>
    <a href="/games/">Spiele</a>
  </div>
</div>
        </div>

    </header>
    <div class="content">
        <section id="about">
            <h2>Über mich</h2>
                <p>Hallo, ich bin Markus Stuefer, ein erfahrener Softwareentwickler mit einer Leidenschaftf&uuml;r
                    innovative Technologien.
                    <br>Seit &uuml;ber zehn Jahren arbeite ich in der Softwareentwicklung und habe Projekte f&uuml;r
                    Startups sowie etablierte Unternehmen erfolgreich umgesetzt.
                    <br />Meine Expertise liegt in der Webentwicklung, erg&auml;nzt durch fundierte Kenntnisse in der
                    mobilen App-Entwicklung und Datenanalyse.
                    <br>Ich liebe es, mich st&auml;ndig weiterzuentwickeln und neue Technologien zu erforschen, um stets
                    auf
                    dem neuesten Stand zu bleiben.
                    <br />Mein Ziel ist es, durch kreative und effiziente L&ouml;sungen echten Mehrwert zu schaffen.
                    <br>Technologie ist f&uuml;r mich ein Werkzeug, um Prozesse zu optimieren und das Leben der Menschen
                    zu
                    verbessern.
                    <br /><br />
                </p>
            <section id="projects">
                <h2>Projekte</h2>
                <div class="project">
                    <h1>Rocky Staging Env</h1>
                    <p>
                        Rocky Staging Env ist mein Open-Source-Projekt zur Einrichtung einer staging Umgebung auf Rocky
                        Linux.
                        Es bietet eine optimierte Infrastruktur für Entwickler, um Anwendungen vor der Produktion in
                        einer realitätsnahen Umgebung zu testen.
                        Das Projekt enthält Skripte und Konfigurationen zur schnellen Bereitstellung einer stabilen und
                        skalierbaren Testumgebung.
                    </p>
                    <a href="https://github.com/markus-stuefer/rocky-staging-env">Github</a>
                </div>
                <div class="project">
                    <h1>Home Lab Projekt</h1>
                    <p>Dieses Projekt dient dem Aufbau eines leistungsfähigen Home Labs zur Verwaltung von Servern,
                        Containern und Netzwerkinfrastrukturen. Es integriert moderne Technologien wie Proxmox, Docker,
                        Kubernetes und pfSense, um eine sichere und flexible Entwicklungsumgebung zu schaffen.</p>
                    <a href="/html/homelab.html">Mehr infos</a>

                </div>
                <div class="project">
                </div>
                <div class="project">
                </div>
            </section>

            <section id="skills">
                <h2 class="animate__animated animate__bounce">Fähigkeiten</h2>
                <ul class="ce">
                    <li>HTML & CSS</li>
                    <li>JavaScript (React, Vue.js, Angular)</li>
                    <li>Backend-Entwicklung (Node.js, Express, Django)</li>
                    <li>Datenbanken (SQL, MongoDB)</li>
                    <li>Version Control (Git, GitHub)</li>
                    <li>Cloud Services (AWS, Azure)</li>
                    <li>Automatisierung und CI/CD (Jenkins, GitHub Actions)</li>
                    <li>Server verwaltung</li>
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
                    <div class=button>
                        <button type="submit">Absenden</button>
                    </div>
                </form>
                <p>Oder kontaktieren Sie mich direkt per Email: <a
                        href="mailto:markus.stu@outlook.de">markus.stu@outlook.de</a></p>
            </section>
    </div>
    <footer>
        <p>&copy; 2024 Markus Stuefer</p>
        <p>Folgen Sie mir auf <a href="https://www.linkedin.com/in/markusstuefer" target="_blank">LinkedIn</a> und <a
                href="https://github.com/markusstuefer" target="_blank">GitHub</a></p>
    </footer>
</body>

</html>