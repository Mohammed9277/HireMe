<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login - HireMe</title>
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

    .login-container {
      background: white;
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
      width: 350px;
      text-align: center;
    }

    .login-container h1 {
      color: #004b99;
      margin-bottom: 25px;
    }

    .login-container input {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 14px;
    }

    .login-container button {
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

    .login-container button:hover {
      background: #004b99;
    }

    .login-container label {
        display: block;
        text-align: left;
        font-weight: 600;
        color: #333;
        margin-bottom: 0px;
    }


    .login-container p {
      margin-top: 15px;
    }

    .login-container a {
      color: #004b99;
      font-weight: bold;
      text-decoration: none;
    }

    .login-container a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h1>Login</h1>

    <form action="login.php" method="POST">
      <label for="email">E-Mail:</label><br />
      <input type="email" id="email" name="email" placeholder="E-Mail eingeben..." required /><br /><br />

      <label for="password">Passwort:</label><br />
      <input type="password" id="password" name="password" placeholder="Passwort eingeben..." required /><br /><br />

      <button type="submit">Einloggen</button>
    </form>

    <p>Noch kein Konto? → <a href="register.php">Registrieren</a></p>
  </div>
</body>
</html>

