```php
function myFunction($a, $b) {
  if ($a === 0 || $b === 0) {
    return 0; // This is the problematic line
  } else {
    return $a / $b;
  }
}

$result = myFunction(10, 0);
echo $result; // This will output 0, not a division by zero error.
```