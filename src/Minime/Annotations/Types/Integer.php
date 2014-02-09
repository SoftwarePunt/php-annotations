<?php

namespace Minime\Annotations\Types;

use Minime\Annotations\Interfaces\TypeInterface;
use Minime\Annotations\ParserException;

class Integer implements TypeInterface
{

    /**
     * Filter a value to be an Integer
     *
     * @param  string          $value
     * @throws ParserException If $value is not an integer
     * @return integer
     */
    public function parse($value, $annotation = null)
    {
        if (false === ($value = filter_var($value, FILTER_VALIDATE_INT))) {
            throw new ParserException("Raw value must be integer. Invalid value '{$value}' given.");
        }

        return $value;
    }

}
