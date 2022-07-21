<?php

    interface InstagramSmartEventsInterface{

        public function get_fake_following_profile($username);

        public function get_fake_followers_profile($username = null, $page = 1);

        public function get_my_must_follow();

        public function get_my_secret_followers();

        public function users_who_will_see_the_post_first();

        public function who_viewed_my_profile();

    }
