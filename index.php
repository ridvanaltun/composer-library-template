<?php
declare(strict_types=1);

require __DIR__.'/vendor/autoload.php';

use ridvanaltun\ComposerLibraryTemplate\Foo;
use ridvanaltun\ComposerLibraryTemplate\Bar;

$foo = new Foo();
$bar = new Bar();

$bar->greetings('Bob');

$foo->testGuzzle();
