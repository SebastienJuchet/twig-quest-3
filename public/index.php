<?php

// Get a $twig object from this file.
require_once __DIR__ . '/../config/twig.php';

$title = "Cordes";
$products = ['Guitare', 'Banjo', 'Basse', 'String'];

echo $twig->render('home.html.twig', [
											'title' => $title,
											'products' => $products
										   ]);