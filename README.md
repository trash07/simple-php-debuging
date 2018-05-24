# simple-php-debuging

> Simple PHP debuging tools and utils

Simple handy manual debuging utils

## Install

```bash
composer require trash07/simple-php-debuging --dev
```

## Load dependencies

```php
require 'vendor/autoload.php'
```

## Usage

* Dumping

```php
$people = array('marc', 'john', 'liman');
// what is the structure of $people ?
_dump($people);
```

* Debug

```php
$info = array('marc', 'john', 1);
// readable $info array echo
_debug($people);
```

* Stopping execution

```php
// simple stop
_stop();
// stop with message
_stop("Sorry we must stop");
```

* Testing condition 

```php
$r = 10; $s = 11;
// test the condition of the if statement
_condition($r > $s && $r < $s);
if ($r > $s && $r < $s) {
    // do something ...
}
```

```php
$r = 10; $s = 11;
// test the condition of the if statement with message
_condition($r > $s && $r < $s, "The $r, $s equality testing if");
if ($r > $s && $r < $s) {
    // do something ...
}
```

* Seing if a line was executed
```php
// simple test
_line();
// _line() with message
_line("Are we realy here ?");
```


## License

GPL-3.0 © [trash07](https://it-consulting.890m.com)
