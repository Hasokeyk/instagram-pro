<?php

    interface InstagramUserInterface{

        public function generate_two_factor_key();

        public function get_security_info();

        public function get_backup_codes();

        public function set_two_factor_totp_seed($secret = null, $time_slice = null);

        public function enable_duo_a2f();

        public function disable_totp_a2f();

        public function get_new_backup_codes();

        public function enable_notification_a2f();

        public function enable_whatsapp_a2f();

        public function enable_sms_a2f();

        public function disable_whatsapp_a2f();

        public function disable_sms_a2f();

        public function disable_notification_a2f();

        public function get_account_facebook_info();

        public function remove_facebook_account();

        public function get_my_phone_number($username = null);

        public function get_my_email($username = null);

        public function get_my_fullname($username = null);

        public function get_my_website($username = null);

        public function get_my_biography($username = null);

        public function get_user_id($username = null);

        public function get_user_posts($username = null);

        public function change_profil_pic($image_path = null);

        public function get_user_info($username = null);

        public function get_user_friendship_show($username = null);

        public function get_multi_user_friendship_show($user_ids = []);

        public function get_my_surfaces();

        public function get_users_score();

        public function follow($username);

        public function unfollow($username);

        public function accept_follow_request($username);

        public function unfollow_me($username);

        public function send_inbox_text($username, $text = 'Hello', $style = null);

        public function send_inbox_text_heart($username, $text = 'Hello');

        public function send_inbox_text_gift($username, $text = 'Hello');

        public function send_inbox_text_confetti($username, $text = 'Hello');

        public function send_inbox_text_fire($username, $text = 'Hello');

        public function send_inbox_heart($username);

        public function send_inbox_photo($username, $image_path = null);

        public function send_inbox_post($username, $post_id = null);

        public function send_inbox_story($username, $story_post_id = null);

        public function send_inbox_link($username, $link = 'https://hayatikodla.net', $style = null);

        public function get_inbox_user_thread($username = null, $group = false);

        public function get_inbox_threads();

        public function get_create_inbox_thread($username);

        public function get_me_least_interacted_with();

        public function get_me_most_seen_in_feed();

        public function get_my_statistic();

        public function get_my_notification();

        public function get_my_pending_inbox();

        public function get_my_inbox();

        public function get_my_followers();

        public function get_my_following();

        public function get_user_followers($username = null);

        public function get_user_following($username = null);

        public function get_multiple_accout_detected($username = null);

        public function set_my_status($status_text = 'I love ', $emoji = '😍');

        public function set_status_reply($status_id = 'I love ', $thread_id = '', $message = 'Status Message');

        public function set_my_biography($biography = 'Hi instagram');

        public function edit_my_profile($username = null, $full_name = null, $website = null, $phone_number = null, $biography = null, $email = null);

        public function change_my_password($new_password = null);

        public function get_me_login_activity();

        public function logout_activity($device_id = null, $session_id = null);

        public function login_activity_avow_login($login_timestamp = null, $device_id_uuid = null, $login_id = null);

        public function username_delete($dir);

        public function get_all_followers($username = null, $contiune = true);
    }
