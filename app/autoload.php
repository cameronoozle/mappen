<?php

use Doctrine\Common\Annotations\AnnotationRegistry;

$loader = require __DIR__.'/../vendor/autoload.php';
// intl
if (!function_exists('intl_get_error_code')) {
    require_once __DIR__.'/../vendor/symfony/symfony/src/Symfony/Component/Locale/Resources/stubs/functions.php';

    $loader->add('', __DIR__.'/../vendor/symfony/symfony/src/Symfony/Component/Locale/Resources/stubs');
}
$loader->add('SfTuts', __DIR__.'/../src');
$loader->add('Doctrine\\Common\\DataFixtures', __DIR__.'/../vendor/doctrine-data-fixtures/lib');
AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

return $loader;
