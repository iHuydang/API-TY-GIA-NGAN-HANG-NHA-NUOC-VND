# utils-exchange-rates-maste
 Dữ liệu từ website ngân hàng Vietcombank: https://portal.vietcombank.com.vn/Personal/TG/Pages/ty-gia.aspx
<?php
require_once __DIR__ . '/vendor/autoload.php';
$vcb = new \iHuydang\Utils\ExchangeRates\Vietcombank();

// Parse dữ liệu từ API ngân hàng
$parse = $vcb->parseDataExchangeRates();
// Hiển thị dữ liệu dạng JSON
echo $parse->toJson();

// Hiển thị dữ liệu thô

echo "<pre>";
print_r($parse->getResponse());
echo "</pre>";
