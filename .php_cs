<?php
$config = new M6Web\CS\Config\Php72;

$config->getFinder()
->in([
__DIR__.'/src'
])->exclude([
'Tests'
]);

return $config;
