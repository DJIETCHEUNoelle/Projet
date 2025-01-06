<?php

include 'Config.php';

//requette pour configurer les donnees
$recuperation = $pdo->query("select * FROM features");
$Features = $recuperation->fetchAll(PDO::FETCH_ASSOC);

//generer le contenu html

foreach($Features as $features)
{
    echo '<div class="feature">';
    echo '<img src="' . htmlspecialchars($feature['image']) . '" alt="' . htmlspecialchars($feature['title']) . '">';
    echo '<h3>' . htmlspecialchars($feature['title']) . '</h3>';
    echo '<p>' . htmlspecialchars($feature['description']) . '</p>';
    echo '</div>';
}
?>