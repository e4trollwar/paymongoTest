<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class ValidCustomText implements ValidationRule
{
     public function passes($attribute, $value)
    {
        return strlen($value) >= 8 && preg_match('/(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]/', $value);
    }

    /**
     * Get the validation error message for the rule.
     *
     * @param  string  $attribute
     * @return string
     */
    public function message($attribute)
    {
        return 'The :attribute must be at least 8 characters and include at least one uppercase letter, lowercase letter, number, and special character.';
    }
}
