<?php

declare(strict_types=1);

namespace WeProDev\LaraNav\Enum;

enum NavLinkTypeEnum: string
{
    case PATH = 'PATH';
    case FULL_URL = 'FULL_URL';
    case ROUTE = 'ROUTE';
    case TOGGLE = 'TOGGLE';

    /**
     * Get all possible values of the enum.
     *
     * @return array<int, string> Array of enum values.
     */
    public static function values(): array
    {
        return array_map(fn ($case) => $case->value, NavLinkTypeEnum::cases());
    }
}
