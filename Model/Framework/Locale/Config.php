<?php
namespace Magcurrency\Bitcoin\Model\Framework\Locale;

class Config extends \Magento\Framework\Locale\Config
{
    /**
     * @inheritdoc
     */
    public function getAllowedCurrencies()
    {
        $this->_allowedCurrencies[] = 'BTC';
        return $this->_allowedCurrencies;
    }
}
