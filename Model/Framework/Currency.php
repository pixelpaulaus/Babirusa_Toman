<?php
namespace Magcurrency\Bitcoin\Model\Framework;

use Magento\Framework\App\CacheInterface;

class Currency extends \Magento\Framework\Currency
{
    public function __construct(
        CacheInterface $appCache,
        $options = null,
        $locale = null
    ) {
        if($options=="BTC") {
            $options = array();
            $options["precision"] = 0;
            $options["name"] = "Bitcoin";
            $options["currency"] = "BTC";
            $options["symbol"] = "B";
            $options["format"] = "#.00000000";
            //$options["format"] = "#,##0.00 ¤";
            //if($locale=="fa"||$locale=="fa_IR"){
            //    $options["symbol"] = "تومان";
            //}
        }

        parent::__construct($appCache, $options, $locale);
    }
    public function toCurrency($value = null, array $options = array())
    {
        if($this->_options['currency']=='BTC') {
            $options["precision"] = 0;
        }
        $currencyStr = trim(parent::toCurrency($value, $options));
        //$currencyStr = str_replace(",", "،", $currencyStr);
        return $currencyStr;
    }
}
