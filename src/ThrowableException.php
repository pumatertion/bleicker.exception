<?php

namespace Bleicker\Exception;

use Exception;

/**
 * Class ThrowableException
 *
 * @package Bleicker\Exception
 */
class ThrowableException extends Exception implements ThrowableExceptionInterface {

	const STATUS = 500;
}
