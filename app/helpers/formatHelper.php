<?php

namespace App\Helpers;

/**
 * formatHelper Helper
 * ----------------
 * Leaf API Helpers basically contain static methods
 * that you can call from your controllers
 */
class formatHelper
{
    public static function rendersStudioLegaleBocchietti()
    {
        return htmlentities('<b>Studio Legale Bocchietti</b>');
    }
}
