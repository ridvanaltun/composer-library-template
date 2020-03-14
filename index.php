<?php
declare(strict_types=1);

require __DIR__.'/vendor/autoload.php';

use ridvanaltun\ComposerPackageTemplate\Foo;
use ridvanaltun\ComposerPackageTemplate\Bar;

$foo = new Foo();
$bar = new Bar();

$bar->greetings('Bob');

$foo->testGuzzle();
