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

    function main($status) {
        if ($this->isUsernameStatus($status) == TRUE) {
            return 'Your Username is Expired / in active. Please Active it !';
        }
        if ($this->isUsernameExpired($status) == TRUE) {
            return 'Your Username is expired.';
        }
        if ($this->isWrongUsername($status) == TRUE) {
            return 'Wrong Username !';
        }
    }
}

?>