<?php


namespace Valitron\Rules;

/**
 * Validate the length of a string (max)
 *
 * Class LengthMaxRule
 * @package Valitron\Rules
 */
class LengthMaxRule extends LengthRule
{

    /**
     * Run validation and return boolean result
     * @param string $field
     * @param mixed $value
     * @param array $params
     * @param array $data
     * @return bool
     */
    public function validate($field, $value, $params = array(), $data = array())
    {
        $length = $this->stringLength($value);

        return ($length !== false) && $length <= $params[0];
    }
}