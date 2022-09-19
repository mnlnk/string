## String Helper 0.1.0


##### Требования:
+ `PHP >= 5.6`


##### Установка:
```
composer require mnlnk/string
```


##### Примеры:

```php
require __DIR__.'/vendor/autoload.php';

use Manuylenko\StringHelper\Str;
```

```php
$length = Str::length('string'); // 6
```

```php
$str = Str::toLower('StRing'); // string
```

```php
$str = Str::toUpper('StRing'); // STRING
```

```php
$str = Str::toCamel('some_string'); // someString
```

```php
$str = Str::toSnake('someString'); // some_string
```
