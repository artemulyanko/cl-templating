<?php

use ClTemplating\PathResolver;
use ClTemplating\Renderer;
use ClTemplating\Templating;

require_once '../vendor/autoload.php';

$templating = new Templating(
    new Renderer(
        new PathResolver([
            __DIR__ . '/templates/'
        ])
    )
);


try {
    echo $templating->render(
        'index.template.php',
        [
            'sidebar' => [
                'About' => '/#',
                'Home' => '/#',
                'Contact us' => '/#'
            ],
            'h1' => 'Test template'
        ]
    );
} catch (\ClTemplating\PathNotFoundException $e) {
    echo $e->getMessage();
}
