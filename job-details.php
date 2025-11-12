<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Jobdetails - HireMe</title>
  <style>
    body {
      background-color: #f9f9f9;
      font-family: 'Segoe UI', Arial, sans-serif;
      margin: 0;
      padding: 0;
      color: #333;
    }

    header {
      background-color: white;
      color: #0066cc;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 40px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .logo {
      font-size: 24px;
      font-weight: bold;
      color: #0066cc;
    }

    nav a {
      color: #0066cc;
      text-decoration: none;
      margin-left: 20px;
      font-weight: 500;
    }

    nav a:hover {
      text-decoration: underline;
    }

    main {
      max-width: 850px;
      margin: 60px auto;
      background: white;
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
      color: #004b99;
      margin-bottom: 20px;
      text-align: center;
    }

    .job-info {
      margin-bottom: 20px;
      line-height: 1.8;
    }

    .job-info p {
      margin: 5px 0;
    }

    .description {
      margin-top: 25px;
      line-height: 1.7;
    }

    .description h2, .description h3 {
      color: #004b99;
      margin-bottom: 10px;
      margin-top: 20px;
    }

    ul {
      margin-left: 25px;
    }

    .apply-btn {
      display: block;
      width: 100%;
      background-color: #0066cc;
      color: white;
      text-align: center;
      padding: 12px 0;
      border-radius: 8px;
      font-size: 16px;
      font-weight: bold;
      text-decoration: none;
      margin-top: 35px;
      transition: 0.3s;
    }

    .apply-btn:hover {
      background-color: #004b99;
      transform: scale(1.03);
    }

    footer {
      background-color: #004b99;
      color: white;
      text-align: center;
      padding: 15px;
      margin-top: 60px;
      font-size: 14px;
    }
  </style>
</head>
<body>

  <header>
    <div class="logo">HireMe</div>
    <nav>
      <a href="index.php">Home</a>
      <a href="login.php">Login</a>
    </nav>
  </header>

  <main>
    <h1>Frontend Developer</h1>

    <div class="job-info">
      <p><strong>Unternehmen:</strong> WebTech Solutions GmbH</p>
      <p><strong>Ort:</strong> Wien, Österreich</p>
      <p><strong>Art der Stelle:</strong> Vollzeit</p>
      <p><strong>Gehalt:</strong> 2500 € – 3500 € / Monat</p>
      <p><strong>Erfahrung:</strong> 2 Jahre</p>
      <p><strong>Bewerbungsfrist:</strong> 30. November 2025</p>
      <p><strong>Veröffentlicht am:</strong> 7. November 2025</p>
    </div>

    <div class="description">
      <h2>Jobbeschreibung</h2>
      <p>
        Wir suchen einen motivierten <strong>Frontend Developer</strong>, der moderne und
        benutzerfreundliche Webanwendungen erstellt. Du arbeitest eng mit unserem
        Design- und Backend-Team zusammen, um innovative digitale Produkte zu entwickeln.
      </p>

      <h3>Deine Aufgaben:</h3>
      <ul>
        <li>Entwicklung und Pflege von Weboberflächen mit HTML, CSS und JavaScript</li>
        <li>Zusammenarbeit mit Backend-Entwicklern</li>
        <li>Optimierung für Performance und Benutzererlebnis</li>
      </ul>

      <h3>Dein Profil:</h3>
      <ul>
        <li>Erfahrung mit modernen Frontend-Technologien</li>
        <li>Teamfähigkeit und Kommunikationsstärke</li>
        <li>Gute Deutsch- oder Englischkenntnisse</li>
      </ul>
    </div>

    <a href="bewerben.php" class="apply-btn">Jetzt bewerben</a>
  </main>

  <footer>
    <p>© 2025 HireMe | Erstellt von Amassi Mohammed & Hmcho Abdalrahmaan</p>
  </footer>

</body>
</html>
