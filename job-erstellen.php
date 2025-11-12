<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Neues Jobangebot - HireMe</title>
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
      max-width: 750px;
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

    input, textarea, select {
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
    <h1>Neues Jobangebot erstellen</h1>

    <form action="job-erstellen.php" method="POST">
      <label for="title">Jobtitel:</label>
      <input type="text" id="title" name="title" placeholder="z.B. Frontend Developer" required />

      <label for="company">Unternehmen:</label>
      <input type="text" id="company" name="company" placeholder="z.B. WebTech Solutions GmbH" required />

      <label for="location">Ort:</label>
      <input type="text" id="location" name="location" placeholder="z.B. Wien, Österreich" required />

      <label for="jobtype">Art der Stelle:</label>
      <select id="jobtype" name="jobtype" required>
        <option value="">Bitte wählen...</option>
        <option value="Vollzeit">Vollzeit</option>
        <option value="Teilzeit">Teilzeit</option>
        <option value="Praktikum">Praktikum</option>
        <option value="Remote">Remote</option>
      </select>

      <label for="salary">Gehalt (optional):</label>
      <input type="text" id="salary" name="salary" placeholder="z.B. 2500 € – 3500 €/Monat" />

      <label for="experience">Erfahrung (optional):</label>
      <input type="text" id="experience" name="experience" placeholder="z.B. 2 Jahre Erfahrung im Web Development" />

      <label for="deadline">Bewerbungsfrist:</label>
      <input type="date" id="deadline" name="deadline" />

      <label for="description">Beschreibung:</label>
      <textarea id="description" name="description" placeholder="Beschreibe das Jobangebot..." required></textarea>

      <button type="submit">Job erstellen</button>
    </form>
  </main>

  <footer>
    <p>© 2025 HireMe | Erstellt von Amassi Mohammed & Hmcho Abdalrahmaan</p>
  </footer>

</body>
</html>
