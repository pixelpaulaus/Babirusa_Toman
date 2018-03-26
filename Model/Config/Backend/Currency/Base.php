<?php
namespace Magcurrency\Bitcoin\Model\Config\Backend\Currency;

class Base extends \Magento\Config\Model\Config\Backend\Currency\Base
{
    protected function _getInstalledCurrencies()
    {
        $_installed = parent::_getInstalledCurrencies();
        array_unshift($_installed , 'BTC');
        return $_installed;
    }
}
