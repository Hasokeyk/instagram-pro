<?php

    use Hasokeyk\Interfaces\Instagram;

    set_time_limit(0);

    require "vendor/autoload.php";

    $username = 'USERNAME';
    $password = 'PASSWORD';
    $license  = 'LICENSE';

    $instagram = new Instagram($license, $username, $password);

    if(isset($_REQUEST['type']) and $_REQUEST['type'] == 'two_factor'){

        $code             = trim($_REQUEST['two_factor_login_code']);
        $token            = trim($_REQUEST['two_factor_identifier']);
        $method           = trim($_REQUEST['verification_method']);
        $two_factor_login = $instagram->login->two_factor_login($code, $token, $method);
        if($two_factor_login === true){
            header("Refresh: 1; url=/");
        }
        else{
            print_r($two_factor_login);
        }

    }
    else if(isset($_REQUEST['type']) and $_REQUEST['type'] == 'challenge_send_code'){

        $code            = trim($_REQUEST['challenge_code']);
        $user_id         = trim($_REQUEST['user_id']);
        $nonce_code      = trim($_REQUEST['nonce_code']);
        $challenge_login = $instagram->login->challenge_verify_code($code, $user_id, $nonce_code);
        if($challenge_login === true){
            header("Refresh: 1; url=/");
        }
        else{
            print_r($challenge_login);
        }

    }
    else{

        $login = $instagram->login->login();
        if(isset($login->status) and $login->status == 'two_factor'){

            echo '
        <h5>Two Factor</h5>
        <br>
        <form action="" method="get">
            <input type="hidden" name="type" value="'.$login->status.'">
            <input type="hidden" name="two_factor_identifier" value="'.$login->two_factor_identifier.'">
            <input type="hidden" name="verification_method" value="'.$login->verification_method.'">
            <input type="text" name="two_factor_login_code">
            <input type="submit" value="Login">
        </form>
        ';

        }
        else if(isset($login->status) and $login->status == 'challenge_send_code'){

            echo '
        <h5>Challenge</h5>
        <br>
        <form action="" method="get">
            <input type="hidden" name="type" value="'.$login->status.'">
            <input type="hidden" name="user_id" value="'.$login->user_id.'">
            <input type="hidden" name="nonce_code" value="'.$login->nonce_code.'">
            <input type="text" name="challenge_code">
            <input type="submit" value="Login">
        </form>
        ';

        }
        else if($login === false){
            echo 'Login Fail';
        }
        else{
            print_r($login);
        }

    }
