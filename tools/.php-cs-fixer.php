<?php

$finder = PhpCsFixer\Finder::create()
    ->in(dirname(__DIR__) . '/src')->exclude([
        'Symfony/Component/DependencyInjection/Tests/Fixtures',
        'Symfony/Component/Routing/Tests/Fixtures/dumper',
        'Symfony/Component/Templating/Tests/Fixtures/templates',
        'Symfony/Bundle/FrameworkBundle/Tests/Templating/Helper/Resources/Custom',
        'Symfony/Component/VarDumper/Tests/Fixtures',
        'Symfony/Bundle/FrameworkBundle/Resources/views/Form',
        'Symfony/Bridge/PhpUnit/Tests/DeprecationErrorHandler',
    ]);

$config = new PhpCsFixer\Config();

return $config
    ->setRules([
        '@Symfony' => true,
        'yoda_style' => false,
    ])
    ->setParallelConfig(PhpCsFixer\Runner\Parallel\ParallelConfigFactory::detect())
    ->setFinder($finder);