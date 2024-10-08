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
 * Class Vietcombank
 *
 * @package   iHuydang\Utils\ExchangeRates
 * @author    iHuydang <huydanginvest@gmail.com>
 * @copyright iHuydang <huydanginvest@gmail.com>
 */
class Vietcombank implements VietcombankInterface
{
    use RequestTrait, ResponseTrait;

    /** @var string Endpoint ExchangeRates */
    private $endpoint = 'https://portal.vietcombank.com.vn/Usercontrols/TVPortal.TyGia/pXML.aspx';

    /** @var array|bool Response Data */
    private $response = null;

    /**
     * Function parseDataExchangeRates
     *
     * @author: iHuydang <huydanginvest@gmail.com>
     * @time  : 2024-02-09
 * Time: 02:00
     *
     * @return $this
     */
    public function parseDataExchangeRates()
    {
        $xmlData = null;
        $p       = xml_parser_create();
        xml_parse_into_struct($p, $this->sendRequest($this->endpoint), $xmlData);
        xml_parser_free($p);
        $data = array();
        if ($xmlData) {
            $data['status'] = 0;
            foreach ($xmlData as $value) {
                if (isset($value['attributes'])) {
                    $data[] = $value['attributes'];
                }
            }
            $this->response = $data;
        }
        $this->response = $data;

        return $this;
    }
}
