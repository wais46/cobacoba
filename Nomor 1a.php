<?php

class Login{
	function isUsernameStatus($status)
    {
        if ($status == 'active') {
            return TRUE;
        }
    }
    function isUsernameExpired($status)
    {
        if ($status == 'expired') {
            return TRUE;
        }
    }
    function isWrongUsername($status)
    {
        if ($status == 'wrong') {
            return TRUE;
        }
    }

    function main($statusActiveUsername, $statusExpiredUsername, $statusUsername)
    {
        if ($this->isUsernameStatus($statusActiveUsername) == TRUE) {
            if ($this->isUsernameExpired($statusExpiredUsername) == TRUE) {
                return 'Your Username is Expired.';
            } else {
                if ($this->isWrongUsername($statusUsername) == TRUE) {
                    return 'Wrong Username!';
                }
            }
        } else {
            return 'Your Username is Expired / in active. Please Active it !';
        }
    }
}

?>