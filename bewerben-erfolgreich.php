<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Bewerbung erfolgreich - HireMe</title>
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
      max-width: 650px;
      margin: 100px auto;
      background: white;
      padding: 50px;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    h1 {
      color: #004b99;
      margin-bottom: 20px;
      font-size: 28px;
    }

    p {
      font-size: 17px;
      line-height: 1.6;
      margin-bottom: 25px;
    }

    .success-icon {
      font-size: 60px;
      color: #00cc66;
      margin-bottom: 20px;
    }

    a.btn {
      display: inline-block;
      background-color: #0066cc;
      color: white;
      padding: 12px 25px;
      border-radius: 6px;
      font-size: 16px;
      text-decoration: none;
      font-weight: bold;
      transition: 0.3s;
    }

    a.btn:hover {
      background-color: #004b99;
      transform: scale(1.05);
    }

    footer {
      background-color: #004b99;
      color: white;
      text-align: center;
      padding: 15px;
      margin-top: 80px;
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
    <div class="success-icon">✔️</div>
    <h1>Bewerbung erfolgreich!</h1>
    <p>Vielen Dank, dass du dich bei <strong>HireMe</strong> beworben hast.<br>
    Deine Bewerbung wurde erfolgreich gesendet und wird nun geprüft.</p>

    <a href="index.php" class="btn">Zurück zur Startseite</a>
  </main>

  <footer>
    <p>© 2025 HireMe | Erstellt von Amassi Mohammed & Hmcho Abdalrahmaan</p>
  </footer>

</body>
</html>
