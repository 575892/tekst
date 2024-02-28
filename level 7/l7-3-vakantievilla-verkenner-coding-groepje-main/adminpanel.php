<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel</title>
    <link href="css/styles.css" rel="stylesheet"> 
    <style>
:root {
  --gray: #88898C;
  --white:#F2F2F2;
  --green:#535925;
  --green2:#59562E;
  --orange:#BF4F26;
  --lightgray: #ECECEC;
  --black:#000;
}

.main-content {
  display: flex;
  flex-wrap: wrap;
  justify-content: left;
  align-items: left;
  height: 75%;
  margin-top: 200px;
  margin-left: 2rem;
  margin-right: 2rem;
  gap: 2rem;
}

.main-content form {
  width: 100%;
  max-width: 400px;
}

.main-content input[type="text"],
.main-content input[type="email"],
.main-content input[type="file"],
.main-content textarea {
  width: 100%;
  padding: 0.5rem;
  margin-bottom: 1rem;
}

.main-content button {
  width: 100%;
  padding: 0.5rem;
  background-color: var(--green2);
  color: var(--lightgray);
  border: none;
  cursor: pointer;
}

.main-content button:hover {
  background-color: var(--green2);
}
.image-content,
.form-content {
  flex: 1;
}
.image-content img {
  max-width: 100%; 
}
.form-content form {
  width: 100%;
  max-width: 400px;
}

</style>
</head>
<body>
<div class="header">
    <div class="header__logo">
      <img src="images/logos.png" alt="Home Villa Logo">
    </div>
    <div class="header__buttons">
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Villa's</a></li>
        <li><a href="#">Login</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </div>
  </div>
  <div class="main-content">
    <h1>Woning Toevoegen</h1>
    
    <form action="submit_form.php" method="post">
        <label for="woningnaam">Woning Naam:</label>
        <input type="text" id="woningnaam" name="woningnaam" required>

        <label for="locatie">Locatie:</label>
        <input type="text" id="locatie" name="locatie" required>

        <label for="prijs">Prijs:</label>
        <input type="text" id="prijs" name="prijs" required>

        <label for="foto">Foto Uploaden:</label>
        <input type="file" id="foto" name="foto" accept="image/*" required>

        <button type="submit">Woning Toevoegen</button>
    </form>
    <div class="image-content">
      <img src="images/omgevingtje.png" alt="Mountain Villa">
    </div>
</div>
</body>
</html>