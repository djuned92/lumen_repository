<?php

namespace App\Traits;

trait Validation
{
    public function reformatValidationError($keys, $messages)
    {
        for ($i=0; $i < count($keys) ; $i++) { 
            $err[] = [
                $keys[$i] => $messages[$i]
            ];
        }

        return $err;
    }
}