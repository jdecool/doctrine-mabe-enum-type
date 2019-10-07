<?php
declare(strict_types=1);

namespace JDecool\Test\Doctrine\Type;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use JDecool\Doctrine\Type\PhpEnumType;
use function call_user_func;
use function implode;
use function sprintf;

class MyCustomEnumType extends PhpEnumType
{
    /**
     * {@inheritdoc}
     */
    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform)
    {
        $values = call_user_func([$this->enumClass, 'getConstants']);

        return sprintf(
            'ENUM("%s") COMMENT "%s"',
            implode('", "', $values),
            $this->getName()
        );
    }
}
