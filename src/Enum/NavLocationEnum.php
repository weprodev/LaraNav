<?php

declare(strict_types=1);

namespace WeProDev\LaraPanel\Core\User\Enum;

enum NavLocationEnum: string
{
    case MAIN = 'MAIN';
    case SIDE_NAV = 'SIDE_NAV';
    case FOOTER = 'FOOTER';
    case SIDE_NAV_BOTTOM = 'SIDE_NAV_BOTTOM';
    case TOP_NAV = 'TOP_NAV';
    case PROFILE_NAV = 'PROFILE_NAV';

    /**
     * Get all possible values of the enum.
     *
     * @return array<int, string> Array of enum values.
     */
    public static function values(): array
    {
        return array_map(fn ($case) => $case->value, NavLocationEnum::cases());
    }
}
