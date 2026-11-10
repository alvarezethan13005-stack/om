<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Olympique de Marseille - Contact</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1><?php Olympique de Marseille ?></h1>
    <p>Droit au but.</p>
    <nav>
      <a href="index.html">Accueil</a>
      <a href="evenements.html">Événements</a>
      <a href="contact.html">Contact</a>
    </nav>
  </header>
  <main>
    <section id="contact">
    <h2>Contact</h2>
      <form action="traitement.php" method="post">
        <div class="ligne-formulaire">
          <label for="nom">Nom :</label>
          <input type="text" id="nom" name="nom" required>
        </div>
        <div class="ligne-formulaire">
          <label for="email">Email :</label>
          <input type="email" id="email" name="email" required>
        </div>
        <div class="ligne-formulaire">
          <label for="sujet">Sujet :</label>
          <select id="sujet" name="sujet">
            <option value="adhesion">Demande d'adhésion</option>
            <option value="evenement">Question sur un événement</option>
            <option value="autre">Autre demande</option>
          </select>
        </div>
        <div class="ligne-formulaire">
          <label for="message">Message :</label>
          <textarea id="message" name="message" rows="5" required minlength="10"></textarea>
        </div>

        <button type="submit">Envoyer</button>
      </form>
    </section>
  </main>
</body>
</html>