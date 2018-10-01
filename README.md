# Remove duplicates and merge arrays by second level key.

### Example:

`removeDuplicates($firstArray, $secondArray, 'idproducts')`

```
$firstArray
(
    [1] => Array
        (
            [idproducts] => 3633
            [name] => Aut et illum.
            [category] => 1
            [subcategory] => 2
            [price] => 262.31
        )

    [2] => Array
        (
            [idproducts] => 3756
            [name] => Eum minima at.
            [category] => 1
            [subcategory] => 1
            [price] => 331.14
        )
)

$secondArray
(
    [1] => Array
        (
            [idproducts] => 3756
            [name] => Eum minima at.
            [category] => 1
            [subcategory] => 1
            [price] => 331.14
        )
    [2] => Array
        (
            [idproducts] => 4485
            [name] => Eugtehnm mingweima aaat.
            [category] => 1
            [subcategory] => 1
            [price] => 331.14
        )
)
```

### Returns

```
Array
(
    [1] => Array
        (
            [idproducts] => 3633
            [name] => Aut et illum.
            [category] => 1
            [subcategory] => 2
            [price] => 262.31
        )

    [2] => Array
        (
            [idproducts] => 3756
            [name] => Eum minima at.
            [category] => 1
            [subcategory] => 1
            [price] => 331.14
        )
    [3] => Array
        (
            [idproducts] => 4485
            [name] => Eugtehnm mingweima aaat.
            [category] => 1
            [subcategory] => 1
            [price] => 331.14
        )
)
```
