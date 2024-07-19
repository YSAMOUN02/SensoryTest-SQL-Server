<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function calculateAge($dob)
    {
        try {
            // Parse the date of birth using Carbon
            $dateOfBirth = Carbon::parse($dob);
            
            // Calculate age
            $age = $dateOfBirth->age;
            
            return $age;
        } catch (\Exception $e) {
            // Handle invalid date format gracefully
            return 'Invalid date format';
        }
    }
}
