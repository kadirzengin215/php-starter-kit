<?php

declare(strict_types=1);

arch()->preset()->php();
arch()->preset()->security();

arch()
    ->expect('src')
    ->toUseStrictTypes()
    ->not->toUse(['die', 'exit', 'var_dump', 'dd', 'dump']);
