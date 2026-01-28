<?php

declare(strict_types=1);

arch()->preset()->php();
arch()->preset()->strict();
arch()->preset()->security();

arch()
    ->expect('Kadirzengin215\\PhpStarterKit')
    ->toUseStrictTypes()
    ->not->toUse(['die', 'dd', 'dump']);