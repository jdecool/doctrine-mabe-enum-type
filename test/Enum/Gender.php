<?php
declare(strict_types=1);

namespace JDecool\Test\Doctrine\Enum;

use MabeEnum\Enum;

/**
 * Class Gender
 * @author
 * @link
 *
 * @method static Gender MALE()
 * @method static Gender FEMALE()
 */
class Gender extends Enum
{
    public const MALE = 'male';
    public const FEMALE = 'female';
}
