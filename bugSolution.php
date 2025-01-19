```php
function calculateSum($numbers) {
  $sum = 0;
  foreach ($numbers as $number) {
    if (is_numeric($number)) {
      $sum += floatval($number); //Convert to float to handle potential decimals
    } else {
      // Handle non-numeric values appropriately, e.g., throw an exception or skip them.
      trigger_error('Non-numeric value encountered in array: ' . $number);
    }
  }
  return $sum;
}

$numbers = [1, 2, 3, '4a', 4.5, '5.6']; 
$sum = calculateSum($numbers);
echo "Sum: " . $sum; 
```