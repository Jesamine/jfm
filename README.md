# JFM | Jeugdforum Moere

#### "count(): Parameter must be an array or an object that implements Countable"
###### vendor -> backpack -> crud -> src -> crudtrait.php
`if(count($column_contents))`

**Fix:**

`if (count((array)$column_contents)) {`
