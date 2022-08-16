<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__)
;

$config = new PhpCsFixer\Config();
return $config->setRules([
        'no_closing_tag' => true,
        'no_extra_blank_lines' => true,
    ])
    ->setFinder($finder)
;
