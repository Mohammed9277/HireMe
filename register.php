<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Registrieren - HireMe</title>
  <style>
    body {
      background: linear-gradient(to bottom right, #0066cc, #004b99);
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
      font-family: 'Segoe UI', Arial, sans-serif;
    }

    .register-container {
      background: white;
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
      width: 380px;
      text-align: center;
    }

    .register-container h1 {
      color: #004b99;
      margin-bottom: 25px;
    }

    .register-container label {
      display: block;
      text-align: left;
      font-weight: 600;
      color: #333;
      margin-bottom: 5px;
    }

    .register-container input {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 14px;
    }

    .register-container button {
      width: 100%;
      background: #0066cc;
      color: white;
      padding: 10px;
      border: none;
      border-radius: 5px;
      font-weight: bold;
      cursor: pointer;
      font-size: 16px;
      transition: 0.3s;
    }

    .register-container button:hover {
      background: #004b99;
    }

    .register-container p {
      margin-top: 15px;
    }

    .register-container a {
      color: #004b99;
      font-weight: bold;
      text-decoration: none;
    }

    .register-container a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="register-container">
    <h1>Registrieren</h1>

    <form action="register.php" method="POST">
      <label for="username">Benutzername:</label>
      <input type="text" id="username" name="username" placeholder="Benutzername eingeben..." required />

      <label for="email">E-Mail:</label>
      <input type="email" id="email" name="email" placeholder="E-Mail eingeben..." required />

      <label for="password">Passwort:</label>
      <input type="password" id="password" name="password" placeholder="Passwort eingeben..." required />

      <label for="confirm_password">Passwort bestätigen:</label>
      <input type="password" id="confirm_password" name="confirm_password" placeholder="Passwort wiederholen..." required />

      <button type="submit">Registrieren</button>
    </form>

    <p>Schon ein Konto? → <a href="login.php">Einloggen</a></p>
  </div>
</body>
</html>
