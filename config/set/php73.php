<?php

declare(strict_types=1);

use Rector\Php73\Rector\BinaryOp\IsCountableRector;
use Rector\Php73\Rector\ConstFetch\SensitiveConstantNameRector;
use Rector\Php73\Rector\FuncCall\ArrayKeyFirstLastRector;
use Rector\Php73\Rector\FuncCall\JsonThrowOnErrorRector;
use Rector\Php73\Rector\FuncCall\RegexDashEscapeRector;
use Rector\Php73\Rector\FuncCall\RemoveMissingCompactVariableRector;
use Rector\Php73\Rector\FuncCall\SensitiveDefineRector;
use Rector\Php73\Rector\FuncCall\StringifyStrNeedlesRector;
use Rector\Php73\Rector\String_\SensitiveHereNowDocRector;
use Rector\Renaming\Rector\Function_\RenameFunctionRector;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();

    $services->set(IsCountableRector::class);

    $services->set(ArrayKeyFirstLastRector::class);

    $services->set(SensitiveDefineRector::class);

    $services->set(SensitiveConstantNameRector::class);

    $services->set(SensitiveHereNowDocRector::class);

    $services->set(RenameFunctionRector::class)
        ->call('configure', [[
            RenameFunctionRector::OLD_FUNCTION_TO_NEW_FUNCTION => [
                # https://wiki.php.net/rfc/deprecations_php_7_3
                'image2wbmp' => 'imagewbmp',
                'mbregex_encoding' => 'mb_regex_encoding',
                'mbereg' => 'mb_ereg',
                'mberegi' => 'mb_eregi',
                'mbereg_replace' => 'mb_ereg_replace',
                'mberegi_replace' => 'mb_eregi_replace',
                'mbsplit' => 'mb_split',
                'mbereg_match' => 'mb_ereg_match',
                'mbereg_search' => 'mb_ereg_search',
                'mbereg_search_pos' => 'mb_ereg_search_pos',
                'mbereg_search_regs' => 'mb_ereg_search_regs',
                'mbereg_search_init' => 'mb_ereg_search_init',
                'mbereg_search_getregs' => 'mb_ereg_search_getregs',
                'mbereg_search_getpos' => 'mb_ereg_search_getpos',
            ],
        ]]);

    $services->set(StringifyStrNeedlesRector::class);

    $services->set(JsonThrowOnErrorRector::class);

    $services->set(RegexDashEscapeRector::class);

    $services->set(RemoveMissingCompactVariableRector::class);
};