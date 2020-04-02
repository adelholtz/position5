# Fool use this instead!! => https://laravel.com/docs/7.x/helpers#method-array-get


# position5
php helper library mainly for private use

## Available functions so far

```php
p5::getValueFromArray($dataArray, $valuePath, $defaultValue);
//example
p5::getValueFromArray(["a"=>["b"=>"c"]], 'a.b', 'x');

p5::setValueInArray($dataArray, $valuePath, $value);
//example
p5::setValueInArray(["a"=>["b"=>"c"]], 'a.b', 'x');
```

more to come???
