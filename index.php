<?php

$om = "Olympique de Marseille";
$histoireclub = "Histoire du club";
$clubpopulaire = "Un club populaire";
$droitaubut = "Droit au but.";
$date1 = 1899;
$monument1 = "Stade Vélodrome";
$date2 = 1937;

$tuto_txt = "Comment suivre un match ?";
$tuto_match = ["Consulter le calendrier des matchs", "Reserver sa place en ligne", "Arriver au Vélodrome avant le coup d'envoi"]; 

?>

<!DOCTYPE html>
<html lang="fr">
  <head>
  <meta charset="UTF-8">
  <title>Olympique de Marseille</title>
  <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <header class="entete-club">
      <h1><?php echo $om?></h1>
      <p><?php echo $droitaubut?></p>
    </header>
    <nav>
      <a href="#histoire">Histoire</a>
      <a href="#effectif">Effectif</a>
      <a href="evenements.html">Événements</a>
      <a href="#palmares">Palmarès</a>
      <a href="contact.html">Contact</a>
    </nav>
    <main>
      <section id="histoire">
        <h2><?php echo $histoireclub ?></h2>
        <p>
        Fondé en <strong><?php echo $date1 ?></strong>, l'Olympique de Marseille est l'un des clubs
        historiques du football français. Le club évolue au sein du
        <em><?php echo $monument1 ?></em>, son stade emblématique depuis <?php echo $date2 ?>.
        </p>
        <h3><?php echo $clubpopulaire ?></h3>
        <p>
        L'OM est connu pour la ferveur de son public, notamment lors des matchs
        disputés au Vélodrome.
        </p>
      </section>
      <section id="effectif">
        <h2>Effectif professionnel (extrait)</h2>
        <h3>Gardiens</h3>
        <div class="grille-effectif">
          <div class="carte carte-joueur">Gardien n°1</div>
          <div class="carte carte-joueur">Gardien n°2</div>
        </div>

        <h3><?php echo $tuto_txt ?></h3>
        <?php
        echo"<cul>";
        foreach($tuto_match as $etapes) {
            echo "<li>" . $etapes . "</li>";
        }
        echo"</ol>";
        ?>
      </section>
      <!-- <section id="calendrier">
        <h2>Prochains matchs</h2>
        <table>
          <thead>
            <tr>
            <th>Date</th>
            <th>Adversaire</th>
            <th>Compétition</th>
            <th>Lieu</th>
            </tr>
          </thead>
          <tbody>
            <tr>
            <td>12/10/2026</td>
            <td>AS Monaco</td>
            <td>Ligue 1</td>
            <td>Domicile</td>
            </tr>
            <tr>
            <td>19/10/2026</td>
            <td>Olympique Lyonnais</td>
            <td>Ligue 1</td>
            <td>Extérieur</td>
            </tr>
          </tbody>
        </table>
      </section> -->
      <section id="palmares">
        <h2>Palmarès</h2>
        <div class="bloc-logo carte">
          <img src="img/logo-om.png" alt="Logo de l'Olympique de Marseille" width="120"
          height="120">
          <p>
          Statut européen : <span>vainqueur de la Ligue des Champions 1993</span>.
          </p>
        </div>
        <p>Le club compte de nombreux titres de champion de France et de vainqueur de la
        Coupe de France.</p>
      </section>
      <!-- <section id="contact">
        <h2>Contact</h2>
        <p>
          Pour toute question, écrivez-nous :
          <a href="mailto:contact@om-fansite.fr">contact@om-fansite.fr</a>
        </p>
      </section> -->
    </main>
    <footer>
      <p>&copy; 2026 Site non-officiel dédié à l'Olympique de Marseille — projet
      pédagogique.</p>
    </footer>

  </body>
</html> 