<?php
declare(strict_types=1);

namespace JDecool\Test\Doctrine\Enum;

use MabeEnum\Enum;

/**
 * Class Action
 * @author Alejandro Celaya Alastrué
 * @link http://www.alejandrocelaya.com
 *
 * @method static Action CREATE()
 * @method static Action READ()
 * @method static Action UPDATE()
 * @method static Action DELETE()
 */
class Action extends Enum
{
    public const CREATE = 'create';
    public const READ = 'read';
    public const UPDATE = 'update';
    public const DELETE = 'delete';
}
