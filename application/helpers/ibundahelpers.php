<?php

function hashpassword($password = '')
    {
        
        return hash('sha1', $password . config_item('encryption key'));
    }