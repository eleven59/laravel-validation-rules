<?php

namespace Eleven59\LaravelValidationRules\Rules;

use Illuminate\Contracts\Validation\Rule;

class Slug implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return preg_match('/^[a-z0-9]+(?:-[a-z0-9]+)*$/', $value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Je kunt voor de pagina URL alleen kleine letters, cijfers of het "-" teken gebruiken.';
    }
}
