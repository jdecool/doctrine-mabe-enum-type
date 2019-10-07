<?php
declare(strict_types=1);

namespace JDecool\Test\Doctrine\Enum;

use MabeEnum\Enum;

/**
 * Class WithCastingMethods
 * @author
 * @link
 *
 * @method static WithIntegerValues FOO()
 * @method static WithIntegerValues BAR()
 */
class WithIntegerValues extends Enum
{
    public const ONE = 1;
    public const TWO = 2;

    public static function castValueIn($value)
    {
        return (int) $value;
    }
}
