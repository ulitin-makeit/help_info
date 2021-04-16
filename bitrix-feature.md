# Неочевидные фишки Bitrix


**Если при добавлении товара в козину не указать PRODUCT_PROVIDER_CLASS то при оформлении заказа не будет происходить резервирование товара и вычитание остатков, так же у товара в корзине не будет названия**
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
        // так же у товара в корзине не будет названия
        'PRODUCT_PROVIDER_CLASS' => '\CCatalogProductProvider'
    ]
);
```
------------

### Получение сущности hlblock по названию таблицы

```php
<?
$propHlBlockInfo = HighloadBlockTable::getList(
	[
		'filter' => ['=TABLE_NAME' => $prop['USER_TYPE_SETTINGS']['TABLE_NAME']]
	]
)
	->fetch();

$propClass = HighloadBlockTable::compileEntity($propHlBlockInfo)->getDataClass();
```
