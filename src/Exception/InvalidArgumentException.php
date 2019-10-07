<?php
declare(strict_types=1);

namespace JDecool\Doctrine\Exception;

use InvalidArgumentException as SplInvalidArgumentException;

class InvalidArgumentException extends SplInvalidArgumentException implements ExceptionInterface
{
}
