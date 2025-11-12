<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Jetzt bewerben - HireMe</title>
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
      margin: 60px auto;
      background: white;
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
      color: #004b99;
      margin-bottom: 25px;
      text-align: center;
    }

    label {
      display: block;
      margin-bottom: 6px;
      font-weight: 600;
    }

    input, textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 15px;
    }

    textarea {
      resize: vertical;
      height: 120px;
    }

    input[type="file"] {
      border: 1px dashed #aaa;
      padding: 15px;
      background-color: #fafafa;
    }

    input[type="file"]:hover {
      background-color: #f0f0f0;
      border-color: #0066cc;
    }

    button {
      width: 100%;
      background-color: #0066cc;
      color: white;
      padding: 12px;
      border: none;
      border-radius: 6px;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
      transition: 0.3s;
    }

    button:hover {
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
    <h1>Jetzt bewerben</h1>

    <form action="bewerben-erfolgreich.php" method="POST" enctype="multipart/form-data">
      <label for="name">Vollständiger Name:</label>
      <input type="text" id="name" name="name" placeholder="z. B. Amassi Mohammed" required />

      <label for="email">E-Mail:</label>
      <input type="email" id="email" name="email" placeholder="E-Mail-Adresse" required />

      <label for="message">Nachricht / Motivation:</label>
      <textarea id="message" name="message" placeholder="Warum möchtest du dich für diese Stelle bewerben?" required></textarea>

      <label for="cv">Lebenslauf (PDF hochladen):</label>
      <input type="file" id="cv" name="cv" accept=".pdf" required />

      <button type="submit">Bewerbung absenden</button>
    </form>
  </main>

  <footer>
    <p>© 2025 HireMe | Erstellt von Amassi Mohammed & Hmcho Abdalrahmaan</p>
  </footer>

</body>
</html>
