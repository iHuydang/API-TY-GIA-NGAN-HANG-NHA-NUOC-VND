<?php
/**
 * Project utils-exchange-rates.
 * Created by PhpStorm.
 * User: huydanginvest@gmail.com
 * Date: 2024-02-09
 * Time: 02:00
 * Time: 03:06
 */

namespace iHuydang\Utils\ExchangeRates;

/**
 * Trait ResponseTrait
 *
 * @package   iHuydang\Utils\ExchangeRates
 * @author    huydanginvest@gmail.com
 * @copyright iHuydang huydanginvest@gmail.com
 */
trait ResponseTrait
{
    /**
     * Function getResponse
     *
     * @author: iHuydang <huydanginvest@gmail.com>
     * @time  : 2018-12-23 03:07
     *
     * @return mixed
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Function toJson
     *
     * @author: iHuydang<huydanginvest@gmail.com>
     * @time  : 2018-12-23 03:07
     *
     * @return false|string
     */
    public function toJson()
    {
        return json_encode($this->response);
    }
}
