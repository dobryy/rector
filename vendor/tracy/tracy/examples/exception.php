<?php

declare (strict_types=1);
namespace RectorPrefix20211109;

require __DIR__ . '/../src/tracy.php';
use RectorPrefix20211109\Tracy\Debugger;
// For security reasons, Tracy is visible only on localhost.
// You may force Tracy to run in development mode by passing the Debugger::DEVELOPMENT instead of Debugger::DETECT.
\RectorPrefix20211109\Tracy\Debugger::enable(\RectorPrefix20211109\Tracy\Debugger::DETECT, __DIR__ . '/log');
?>
<!DOCTYPE html><link rel="stylesheet" href="assets/style.css">

<h1>Tracy: exception demo</h1>

<?php 
class DemoClass
{
    public function first($arg1, $arg2)
    {
        $this->second(\true, \false);
    }
    public function second($arg1, $arg2)
    {
        self::third([1, 2, 3]);
    }
    public static function third($arg1)
    {
        throw new \Exception('The my exception', 123);
    }
}
\class_alias('RectorPrefix20211109\\DemoClass', 'DemoClass', \false);
function demo($a, $b)
{
    $demo = new \RectorPrefix20211109\DemoClass();
    $demo->first($a, $b);
}
if (\RectorPrefix20211109\Tracy\Debugger::$productionMode) {
    echo '<p><b>For security reasons, Tracy is visible only on localhost. Look into the source code to see how to enable Tracy.</b></p>';
}
\RectorPrefix20211109\demo(10, 'any string');
