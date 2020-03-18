# Неочевидные фишки Bitrix


**Если при добавлении товара в козину не указать PRODUCT_PROVIDER_CLASS то при оформлении заказа не будет происходить резервирование товара и вычитание остатков**
```php
$item = $basket->createItem('catalog', $offerId);
$item->setFields(
    [
        'QUANTITY' => $quantity,
        'CURRENCY' => CurrencyManager::getBaseCurrency(),
        'LID' => Context::getCurrent()->getSite(),
        'PRICE' => $this->getPrice($offerId),
        'CUSTOM_PRICE' => 'Y',
        // Если не указать PRODUCT_PROVIDER_CLASS то при оформлении заказа
        // не будет происходить резервирование товара и вычитание остатков
        'PRODUCT_PROVIDER_CLASS' => '\CCatalogProductProvider'
    ]
);
```
------------
