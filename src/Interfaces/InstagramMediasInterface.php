<?php

    namespace Hasokeyk\InstagramPro;

    interface InstagramMediasInterface{

        public function get_post_likes($post_id);

        public function get_permalink_by_post_id($post_id);

        public function get_user_posts($username);

        public function like($post_id);

        public function unlike($post_id);

        public function save($post_id);

        public function unsave($post_id);

        public function pin_timeline_media($post_id);

        public function story_like($post_id);

        public function story_unlike($post_id);

        public function unpin_timeline_media($post_id);

        public function create_collection($name, $post_id);

        public function get_collection($collection_id);

        public function edit_collection($collection_id, $new_name);

        public function del_collection($collection_id);

        public function send_comment_post($post_id);

        public function delete_comment_post($post_id, $comment_id);

        public function get_comment_post($post_id);

        public function share_media_inbox($post_id);

        public function share_photo($post_id, $desc);

        public function del_photo($post_id);

        public function share_photo_story($image_path);

        public function share_video_story($image_path);

        public function get_stories($username);

        public function get_my_story_seen_list($media_id);

        public function get_tag_info($tag);

        public function get_tag_post_recent($tag);

        public function get_tag_post_reels($tag);

        public function get_tag_post_tops($tag);

        public function get_tag_post_all_tab($tag);

    }
