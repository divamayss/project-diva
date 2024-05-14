<?php
// PHP code to generate info cards with images
$info_cards = array(
    array("img/Personal training.jpg", "Personal training", "Lorem ipsum dolor sit amet consectetur, adipisicing elit."),
    array("img/Yoga sessions.jpg", "Yoga sessions", "Lorem ipsum dolor sit amet consectetur, adipisicing elit."),
    array("img/food.jpg", "Daily check-in", "Lorem ipsum dolor sit amet consectetur, adipisicing elit.")
);

foreach ($info_cards as $card) {
    echo "<div class='info-card'>";
    echo "<div class='container-info-photo'>";
    echo "<img src='{$card[0]}' alt=''>";
    echo "</div>";
    echo "<h2>{$card[1]}</h2>";
    echo "<p>{$card[2]}</p>";
    echo "</div>";
}
?>
