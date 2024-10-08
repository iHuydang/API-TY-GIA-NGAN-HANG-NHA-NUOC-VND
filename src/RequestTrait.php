<?php
/**
 * Project utils-exchange-rates.
 * Created by PhpStorm.
 * User: iHuydang <huydanginvest@gmail.com>
 * Date: 2024-02-09
 * Time: 02:00
 */

namespace iHuydang\Utils\ExchangeRates;

/**
 * Trait RequestTrait
 *
 * @package   iHuydang\Utils\ExchangeRates
 * @author    iHuydang <huydanginvest@gmail.com>
 * @copyright iHuydang <huydanginvest@gmail.com>
 */
trait RequestTrait
{
    /**
     * Function sendRequest
     *
     * @author: iHuydang <huydanginvest@gmail.com>
     * @time  : 2024-02-09
 * Time: 02:00
     *
     * @param string $url
     * @param array  $data
     *
     * @return bool|string
     */
    public function sendRequest($url = '', $data = [])
    {
        $endpoint = is_array($data) && count($data) > 0 ? $url . '?' . http_build_query($data) : $url;

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL            => $endpoint,
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_ENCODING       => "",
            CURLOPT_MAXREDIRS      => 10,
            CURLOPT_TIMEOUT        => 30,
            CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST  => "GET",
            CURLOPT_POSTFIELDS     => "",
            CURLOPT_HTTPHEADER     => array(),
        ));
        $response = curl_exec($curl);
        $err      = curl_error($curl);
        curl_close($curl);
        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            return $response;
        }
    }
}
