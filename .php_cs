<?php

$finder = PhpCsFixer\Finder::create()
    ->exclude('vendor')
    ->in(__DIR__)
;

return PhpCsFixer\Config::create()
    ->setRules([
        '@PSR2' => true,
        'strict_param' => true,
        'array_syntax' => ['syntax' => 'short'],
        'trim_array_spaces' => true,
        'no_empty_statement' => true,
        'trailing_comma_in_multiline_array' => true,
        'no_unused_imports' => true,
        'no_short_echo_tag' => true,
        'no_multiline_whitespace_before_semicolons' => true,
        'no_extra_blank_lines' => true,
        'no_whitespace_in_blank_line' => true,
        ])
    ->setFinder($finder)
    ;