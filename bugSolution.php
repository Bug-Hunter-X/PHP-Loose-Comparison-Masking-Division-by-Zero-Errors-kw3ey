```php
function myFunction($a, $b) {
  if ($a === 0 || $b === 0) {
    // Handle the division by zero or zero-value appropriately.
    return 'Division by zero or zero value encountered.'; // Or throw an exception 
  } else {
    return $a / $b;
  }
}

$result = myFunction(10, 0);
echo $result; // Output: Division by zero or zero value encountered.

$result2 = myFunction(10, 2);
echo $result2; // Output: 5.0
```