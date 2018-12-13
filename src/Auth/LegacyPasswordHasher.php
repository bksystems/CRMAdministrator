<?php

namespace App\Auth;

use Cake\Auth\AbstractPasswordHasher;
use Cake\Utility\Security;

class LegacyPasswordHasher extends AbstractPasswordHasher
{
    public function hash($password)
    {
        return Security::hash($password, 'sha256', false);
        //return sha256($password);
    }

    public function check($password, $hashedPassword)
    {
        $sha256 = Security::hash($password, 'sha256', false);
        return $sha256 === $hashedPassword;
        //return sha256($password) === $hashedPassword;
    }
}

?>