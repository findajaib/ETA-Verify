<?php

namespace App;

class Constants
{
    const DATABASE_USER = 1;
    const VERIFICATION_EXPERT = 2;
    const FEMALE = "Female";
    const MALE = "Male";
    const USER_TYPE = [
        Constants::DATABASE_USER => 'Database User',
        Constants::VERIFICATION_EXPERT => 'Verification Expert',
    ];
}
