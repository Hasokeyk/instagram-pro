<?php

    namespace Hasokeyk\InstagramPro;

    interface InstagramStatisticsInterface{
        public function get_user_insights();

        public function get_user_post_detail($posts = null);

        public function get_post_insights($post_id = null);

        public function get_post_popular_tags($post_insights = null);

        public function get_my_top_likers();
    }
