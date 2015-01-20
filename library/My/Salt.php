<?php

class My_Salt {
      public static function getSalt()
    {
        $salt = '';
        for ($i = 0; $i < 32; $i++) {
            $salt .= chr(rand(33, 126));
        }
        return $salt;
    }
}
