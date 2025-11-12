<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Meine Bewerbungen - HireMe</title>
  <link rel="stylesheet" href="css/style.css">
  <style>
    body {
      background-color: #f9f9f9;
      font-family: 'Segoe UI', Arial, sans-serif;
      color: #333;
    }

    header {
      background-color: white;
      color: #0066cc;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 40px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }

    .logo {
      font-size: 24px;
      font-weight: bold;
      color: #0066cc;
    }

    nav a {
      color: #0066cc;
      text-decoration: none;
      margin-left: 25px;
      font-weight: 500;
      transition: 0.3s;
    }

    nav a:hover {
      text-decoration: underline;
    }

    main {
      max-width: 900px;
      margin: 60px auto;
      padding: 20px;
      background-color: white;
      border-radius: 10px;
      box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
      text-align: center;
      color: #004b99;
      margin-bottom: 30px;
    }

    .bewerbung {
      border: 1px solid #ddd;
      padding: 15px 20px;
      border-radius: 8px;
      margin-bottom: 20px;
      transition: 0.3s;
    }

    .bewerbung:hover {
      box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
      transform: translateY(-3px);
    }

    .bewerbung h3 {
      color: #0066cc;
      margin-bottom: 8px;
    }

    .bewerbung p {
      margin: 5px 0;
    }

    footer {
      background-color: #004b99;
      color: white;
      text-align: center;
      padding: 15px 0;
      margin-top: 40px;
    }
  </style>
</head>
<body>

  <header>
    <div class="logo">HireMe</div>
    <nav>
      <a href="index.php">Home</a>
      <a href="profil.php">Profil</a>
      <a href="logout.php">Logout</a>
    </nav>
  </header>

  <main>
    <h1>Meine Bewerbungen</h1>

    <div class="bewerbung">
      <h3>Frontend Developer</h3>
      <p><strong>Unternehmen:</strong> WebTech Solutions GmbH</p>
      <p><strong>Status:</strong> Bewerbung eingereicht</p>
      <p><strong>Datum:</strong> 8. November 2025</p>
    </div>

    <div class="bewerbung">
      <h3>IT Support Spezialist</h3>
      <p><strong>Unternehmen:</strong> CodeFactory</p>
      <p><strong>Status:</strong> In Bearbeitung</p>
      <p><strong>Datum:</strong> 6. November 2025</p>
    </div>

    <div class="bewerbung">
      <h3>Software Engineer</h3>
      <p><strong>Unternehmen:</strong> Kreativ AG</p>
      <p><strong>Status:</strong> Abgelehnt</p>
      <p><strong>Datum:</strong> 4. November 2025</p>
    </div>
  </main>

  <footer>
    <p>© 2025 HireMe | Erstellt von Amassi Mohammed & Hmcho Abdalrahmaan</p>
  </footer>

</body>
</html>
