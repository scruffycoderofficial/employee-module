<?php

require_once __DIR__ . '/vendor/autoload.php';

$header = <<<'EOF'
Copyright (c) 2022 Luyanda Siko <sikoluyanda@gmail.com>,
All rights reserved.

This file is part of Beyond Capable.

This program and the accompanying materials are made available under
the terms of the BSD 2-Clause License which accompanies this
distribution, and is available at http://opensource.org/licenses/BSD-2-Clause
EOF;

$finder = PhpCsFixer\Finder::create()
    ->in([
        __DIR__ . '/module',
        __DIR__ . '/spec',
    ])
    ->exclude([]);

$config = new PhpCsFixer\Config();

return $config
    ->setRules([
        '@PSR12' => true,
        'full_opening_tag' => false,
        'header_comment' => ['header' => $header],
        'array_syntax' => ['syntax' => 'short'],
        'ternary_operator_spaces' => true,
    ])
    ->setFinder($finder);