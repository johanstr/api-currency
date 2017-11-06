<?php
@include_once('app/HttpStatus.php');
@include_once('app/apifunctions.php');

if(!$_SERVER['REQUEST_METHOD'] == 'POST') {
    // We geven hier een HTTP status terug
    // We stoppen het programma
    HttpStatus::http_return(403);
}

if(!isset($_POST['cmd'])) {
    // We geven een HTTP status terug
    // We stoppen het programma.
    HttpStatus::http_return(405);
}

switch($_POST['cmd']) {
    case 'all':
        getAllCurrencies();
        break;

    case 'one':
        if(!isset($_POST['currency'])) {
            // Stuur een HTTP status code terug
            // Stop het programma
            HttpStatus::http_return(400);
        }
        getCurrency($_POST['currency']);
        break;

    case 'calc':
        if(!isset($_POST['value']) || !isset($_POST['from']) || !isset($_POST['to'])) {
            // Stuur een HTTP status terug
            // Stop het programma
            HttpStatus::http_return(400);
        }
        calculateValue($_POST['value'], $_POST['from'], $_POST['to']);
        break;

    default:
        // Onbekende command
        // Sturen een HTTP status code terug
        // En beeindingen het programma.
        HttpStatus::http_return(404);
}







