<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <form>
    <h1>Générateur de mot de passe</h1>

    <label for="longueur">Longueur de mots :</label>
    <input type="number" id="longueur" name="longueur" min="6" max="10">

    <label for="nombreMots">Nombre de mots :</label>
    <input type="number" id="nombreMots" name="nombreMots" min="4" max="10">

    <label for="complexite">Complexité :</label>
    <select id="complexite" name="complexite">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
    </select>

    <button type="submit">Générer</button>
  </form>

</body>
</html>