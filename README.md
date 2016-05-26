# Usage
```php
<?php

	require './src/Router.php';

	use Gnix\Core\Router as R;

	R::addRoute("GET", "/", ["my_class", "my_function"]);

	R::start("/gnix");
```
