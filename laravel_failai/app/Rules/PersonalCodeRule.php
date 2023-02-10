<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\DB;

class PersonalCodeRule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        //
//    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    protected $code;

    public function passes($attribute, $value): bool
    {
        $this->code = 0;

        if (!$this->isCorrectLength($value)) {
            $this->code = 5;
            return false;
        }

        if (!$this->isFirstDigitValid($value)) {
            $this->code = 1;
            return false;
        }

        if (!$this->isDateValid($value)) {
            $this->code = 3;
            return false;
        }

        if (!$this->isUnique($value)) {
            $this->code = 4;
            return false;
        }

        if (!$this->isEighteenYearsOld($value)) {
            $this->code = 6;
            return false;
        }

        return true;
    }
    // Patikriname, ar asmens kodo ilgis yra 11 skaitmenų
    protected function isCorrectLength($value)
    {
        return preg_match('/^\d{11}$/', $value);
    }

    protected function isFirstDigitValid($value)
    {    // Patikriname, ar pirma skaitmenys yra tarp 1 ir 6
        $firstDigit = (int) substr($value, 0, 1);
        return in_array($firstDigit, [1, 2, 3, 4, 5, 6]);
    }

    // Patikriname, ar data yra teisinga
    protected function isDateValid($value)
    {
        $yearDigits = (int) substr($value, 1, 2);
        $monthDigits = (int) substr($value, 3, 2);
        $dayDigits = (int) substr($value, 5, 2);

        // Tikriname, ar metai gimimo yra po 2000-ųjų
        if ($value[0] >= 5 && $yearDigits > 23) {
            return false;
        }

        $year = 1900 + $yearDigits;
        return checkdate($monthDigits, $dayDigits, $year);
    }
    // Patikriname, ar toks asmens kodas dar neegzistuoja duomenų bazėje
        protected function isUnique($value)
    {
        $exists = DB::table('people')->where('personal_code', $value)->exists();

        return !$exists;
    }

//tikrina ar yra 18 metu
    protected function isEighteenYearsOld($value): bool
    {
        $yearDigits = (int) substr($value, 1, 2);
        $year = 1900 + $yearDigits;
        $currentYear = (int) date('Y');

        if ($currentYear - $year >= 18) {
            return true;
        }

        return false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return match ($this->code) {
            1 => 'Pirmas skaitmuo turi būti 1, 2, 3, 4, 5 ar 6.',
            3 => 'Neteisingi gimimo datos duomenis',
            5 => 'Asmens kodas turi būti sudarytas iš 11 skaitmenų.',
            4 => 'Toks asmens kodas egzistuoja',
            6 => 'Esi jaunas ir grazus, grizk butinai kai sukaks 18 metu',
            default => 'Neteisingas asmens kodas.',
        };
    }
}
