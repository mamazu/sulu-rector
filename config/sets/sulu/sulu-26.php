<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->ruleWithConfiguration(
        RenameMethodRector::class,
        [
            // @see https://github.com/sulu/sulu/pull/8185
            new MethodCallRename(
                'Sulu\Bundle\SecurityBundle\Entity\Role',
                'getRole',
                'getIdentifier',
            ),
        ],
    )
};
