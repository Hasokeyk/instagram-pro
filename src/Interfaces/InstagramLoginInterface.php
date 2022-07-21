<?php

    interface InstagramLoginInterface{

        public function login();

        public function two_factor_login($code,$two_factor_identifier);

        public function logout();

        public function login_control();

    }
