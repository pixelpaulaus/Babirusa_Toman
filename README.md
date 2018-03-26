# Magcurrency_Bitcoin

Forked from Babirusa_Toman
Special thanks to aminlatif

Adding Bitcoin to magento 2
- Magento 2 uses PHP ICUData for currency values so adding a new currency to Magento 2 is not that easy.
- This module is using custom resource files to add a new currency to Magento 2.
- I've added Bitcoin to Magento 2 by this module.
- You can also install this module in your own project using composer, but use it at you own risk.
- note: Use composer to install this module, because without proper autoload configuration this module won't work.


Install Guide:
- composer config repositories.magcurrency/bitcoin vcs https://github.com/pixelpaulaus/Magcurrency_bitcoin.git
- composer require magcurrency/bitcoin:dev-master
- php bin/magento module:enable Magcurrency_bitcoin
