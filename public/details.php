<?php

require_once __DIR__ . '/../config/twig.php';

$title = "Nouvelle page qui hérite du layout";
echo $twig->render( 'details.html.twig', ['title' => $title ]);