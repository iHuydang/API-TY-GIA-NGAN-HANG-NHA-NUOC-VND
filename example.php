<?php
/**
 * Project utils-exchange-rates.
 * Created by PhpStorm.
 * User: iHuydang <huydanginvest@gmail.com>
 2024-02-09
 * Time: 02:00
 */
require_once __DIR__ . '/vendor/autoload.php';

$vcb = new iHuydang\Utils\ExchangeRates\Vietcombank();

// Parse dữ liệu từ API ngân hàng
$parse = $vcb->parseDataExchangeRates();
// Hiển thị dữ liệu dạng JSON
echo $parse->toJson();

// Hiển thị dữ liệu thô

echo "<pre>";
print_r($parse->getResponse());
echo "</pre>";

