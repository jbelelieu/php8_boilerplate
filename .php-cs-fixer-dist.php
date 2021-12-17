<?php

declare(strict_types=1);

/*
 * Modern PHP Boilterplate
 * (c) 2022 Jon Belelieu <@jbelelieu>
 */

$header = <<<'EOF'
    Modern PHP Boilterplate
    (c) 2022 Jon Belelieu <@jbelelieu>
    EOF;

$finder = PhpCsFixer\Finder::create()
    ->ignoreVCSIgnored(true)
    // ->exclude('tests')
    ->in(__DIR__)
    ->append([
        __DIR__.'/dev-tools/doc.php',
        __FILE__,
    ]);

$config = new PhpCsFixer\Config();
$config
    ->setRiskyAllowed(true)
    ->setRules([
        '@PSR12' => true,
        '@PHP80Migration:risky' => true,
        '@PHP81Migration' => true,
        '@PHPUnit75Migration:risky' => true,
        '@PhpCsFixer' => true,
        '@PhpCsFixer:risky' => true,
        'clean_namespace' => true,
        'combine_nested_dirname' => true,
        'declare_strict_types' => false,
        'general_phpdoc_annotation_remove' => ['annotations' => ['expectedDeprecation']],
        'header_comment' => ['header' => $header],
        'modernize_strpos' => true,
        'multiline_whitespace_before_semicolons' => false,
        'no_unset_cast' => true,
        'non_printable_character' => false,
        'phpdoc_to_comment' => true,
        'pow_to_exponentiation' => true,
        'random_api_migration' => true,
        'void_return' => true,
    ])
    ->setFinder($finder);

// special handling of fabbot.io service if it's using too old PHP CS Fixer version
if (false !== getenv('FABBOT_IO')) {
    try {
        PhpCsFixer\FixerFactory::create()
            ->registerBuiltInFixers()
            ->registerCustomFixers($config->getCustomFixers())
            ->useRuleSet(new PhpCsFixer\RuleSet($config->getRules()))
        ;
    } catch (PhpCsFixer\ConfigurationException\InvalidConfigurationException $e) {
        $config->setRules([]);
    } catch (UnexpectedValueException $e) {
        $config->setRules([]);
    } catch (InvalidArgumentException $e) {
        $config->setRules([]);
    }
}

return $config;
