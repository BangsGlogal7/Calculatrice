<?php

// Démarre ou reprend la session
session_start();

// Initialise l'historique si nécessaire
if (!isset($_SESSION["history"])) {
    $_SESSION["history"] = [];
}