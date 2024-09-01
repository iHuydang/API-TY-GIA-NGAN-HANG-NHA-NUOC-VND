<?php
/**
 * Project utils-exchange-rates.
 * Created by PhpStorm.
 * User: iHuydang <huydanginvest@gmail.com>
 * Date: 2024-02-09
 * Time: 02:00
 */

namespace nguyenanhung\Utils\ExchangeRates;

/**
 * Interface VietcombankInterface
 *
 * @package   iHuydang\Utils\ExchangeRates
 * @author    iHuydang <dev@nguyenanhung.com>
 * @copyright iHuydang <huydanginvest@gmail.com>
 */
interface VietcombankInterface
{
    /**
     * Function parseDataExchangeRates
     *
     * @author: iHuydang <huydanginvest@gmail.com>
     * @time  : 2024-02-09
 * Time: 02:00
     *
     * @return $this
     */
    public function parseDataExchangeRates();
}
