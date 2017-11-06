<?php

function getAllCurrencies()
{
    header('Content-Type: application/json');
    echo json_encode(['test' => 'get all currencies']);
}

function getCurrency($currency)
{
    header('Content-Type: application/json');
    echo json_encode([
        'currency' => $currency,
        'value' => 1.1612
    ]);
}
