<?php

namespace App\Enums;

use App\Enums\Traits\InvokableCases;
use Illuminate\Support\Collection;

enum StudentQuranAbility: int
{
    use InvokableCases;

    case DEFICIENT = 1;
    case ENOUGH = 2;
    case CAPABLE = 3;
    case VERY_CAPABLE = 4;

    public function label(): string
    {
        return match ($this) {
            self::DEFICIENT => 'Kurang',
            self::ENOUGH => 'Cukup',
            self::CAPABLE => 'Mampu',
            self::VERY_CAPABLE => 'Sangat Mampu'
        };
    }

    public static function labels(): Collection
    {
        return collect(self::cases())->map(function (self $value): array {
            return [
                'value' => $value->value,
                'label' => $value->label(),
            ];
        });
    }
}
