[![Contributors][contributors-shield]][contributors-url]
[![Forks][forks-shield]][forks-url]
[![Stargazers][stars-shield]][stars-url]
[![Issues][issues-shield]][issues-url]
[![MIT License][license-shield]][license-url]

<!-- PROJECT LOGO -->
<br />
<p align="center">
<a href="https://github.com/hasokeyk/instagram-pro/">
<img src="https://cdn.cdnlogo.com/logos/i/4/instagram.svg" alt="Logo" width="80" height="80" />
</a>

<h3 align="center">Hasokeyk / Instagram Pro</h3>

<p align="center">
    Bu PHP kütüphanesi ile instagram Mobil Uygulamasının tüm özelliklerini kullanabilirsiniz.
    <br />
    <a href="#">Demo</a>
    ·
    <a href="https://github.com/hasokeyk/instagram-pro/issues">Feedback</a>
    <br>
    <a href="https://github.com/Hasokeyk/instagram-pro/blob/main/README-TR.md" style="font-size:24px">Türkçe doküman için tıklayın</a>
</p>

# Hasan Yüksektepe

[![Linkedin Badge](https://img.shields.io/badge/linkedin-%230077B5.svg?&style=for-the-badge&logo=linkedin&logoColor=white)](https://www.linkedin.com/in/hasan-yuksektepe/)
[![Twitter Badge](https://img.shields.io/badge/twitter-1DA1F2?style=for-the-badge&logo=twitter&logoColor=white)](https://twitter.com/Hasokeyk)
[![Github Badge](https://img.shields.io/badge/github-333?style=for-the-badge&logo=github&logoColor=white)](https://github.com/alihandemirdas)
[![Hasan Yüksetepe][linkedin-shield]][linkedin-url]
[![@hasokeyk][instagram-shield]][instagram-url]
![Visitor Badge](https://visitor-badge.laobi.icu/badge?page_id=hasokeyk.instagram_pro&left_text=Download)

# Lisans Satın Alın

Aylık veya yıllık lisans almak için lütfen <a href="mailto:instagram-pro@hayatikodla.net">instagram-pro@hayatikodla.net</a> iletişime geçin.

## Proje Hakkında

Bu php kütüphanesi ile instagramdaki tüm özellikleri kullanabilirsiniz. Bu yazılım ile yapılacak işlemlerden yazılımı yazan kişi sorumlu değildir. Yazılımı kötü amaçlarla kullanan bir kişi süresiz olarak devre dışı bırakılır.
<!-- GETTING STARTED -->

## Başlarken

Lütfen dikkatlice okuyunuz.

### Gereksinimler

- Bilgisayarınızda "besteci" uygulamasına sahip olmalısınız. İçin
  kurulum https://getcomposer.org/download/
- PHP 7.4 veya üzeri

### Dosya izinleri

Aşağıdaki dosya ve klasörlere chmod 777 ile izin verin.

`/vendor/hasokeyk/`

## Composer ile kurulum

* Çalışma klasörünüzü belirledikten sonra o klasörde terminal açıp aşağıdaki komutu yazıp entere basın.
  ```sh
  composer require hasokeyk/instagram
  ```

## Repoyu indirerek kullanma

1. İlk önce repoyu indirin
   ```sh
   git clone https://github.com/hasokeyk/instagram.git
   ```
2. Gerekli kütüphaneleri indirmek için aşağıdaki komutu kullanın.
   ```sh
   composer install
   ```

<!-- USAGE EXAMPLES -->

## Kullanılabilir Tüm Fonksiyonları Listeleme

Giriş yaptıktan sonra veya giriş yapmadan fonksiyon listesindeki kodları kullanabilirsiniz.

<details>
<summary>Örnek Kod</summary>

```php
<?php

    use Hasokeyk\Interfaces\Instagram;

    set_time_limit(0);

    require "vendor/autoload.php";

    $username = 'USERNAME';
    $password = 'PASSWORD';
    $license  = 'LICENSE';

    $instagram = new Instagram($license, $username, $password);

    $login = $instagram->get_all_function_list;
    print_r($login);
```

</details>

<details>
<summary>Örnek Çıktı</summary>

```output

Array
(
    [login] => Array
        (
            [0] => login
            [1] => two_factor_login
            [2] => logout
            [3] => login_control
            [4] => send_code_with_whatsapp
        )

    [user] => Array
        (
            [0] => generate_two_factor_key
            [1] => get_security_info
            [2] => get_backup_codes
            [3] => get_two_factor_totp_key
            [4] => set_two_factor_totp_seed
            [5] => enable_duo_a2f
            [6] => disable_totp_a2f
            [7] => get_new_backup_codes
            [8] => enable_notification_a2f
            [9] => enable_whatsapp_a2f
            [10] => enable_sms_a2f
            [11] => disable_whatsapp_a2f
            [12] => disable_sms_a2f
            [13] => disable_notification_a2f
            [14] => get_account_facebook_info
            [15] => remove_facebook_account
            [16] => get_my_phone_number
            [17] => get_my_email
            [18] => get_my_fullname
            [19] => get_my_website
            [20] => get_my_biography
            [21] => get_user_id
            [22] => get_user_posts
            [23] => change_profil_pic
            [24] => get_user_info
            [25] => get_user_friendship_show
            [26] => get_multi_user_friendship_show
            [27] => get_my_surfaces
            [28] => get_users_score
            [29] => follow
            [30] => unfollow
            [31] => accept_follow_request
            [32] => unfollow_me
            [33] => send_inbox_text
            [34] => send_inbox_text_heart
            [35] => send_inbox_text_gift
            [36] => send_inbox_text_confetti
            [37] => send_inbox_text_fire
            [38] => send_inbox_heart
            [39] => send_inbox_photo
            [40] => send_inbox_post
            [41] => send_inbox_story
            [42] => send_inbox_link
            [43] => get_inbox_user_thread
            [44] => get_inbox_threads
            [45] => get_create_inbox_thread
            [46] => get_me_least_interacted_with
            [47] => get_me_most_seen_in_feed
            [48] => get_my_statistic
            [49] => get_my_notification
            [50] => get_my_pending_inbox
            [51] => get_my_inbox
            [52] => get_my_followers
            [53] => get_my_following
            [54] => get_user_followers
            [55] => get_user_following
            [56] => get_multiple_accout_detected
            [57] => set_my_status
            [58] => set_status_reply
            [59] => set_my_biography
            [60] => edit_my_profile
            [61] => change_my_password
            [62] => get_me_login_activity
            [63] => logout_activity
            [64] => login_activity_avow_login
        )

    [medias] => Array
        (
            [0] => get_post_likes
            [1] => get_permalink_by_post_id
            [2] => get_user_posts
            [3] => like
            [4] => unlike
            [5] => save
            [6] => unsave
            [7] => pin_timeline_media
            [8] => story_like
            [9] => story_unlike
            [10] => unpin_timeline_media
            [11] => create_collection
            [12] => get_collection
            [13] => edit_collection
            [14] => del_collection
            [15] => send_comment_post
            [16] => delete_comment_post
            [17] => get_comment_post
            [18] => share_media_inbox
            [19] => share_photo
            [20] => del_photo
            [21] => share_photo_story
            [22] => share_video_story
            [23] => get_stories
            [24] => get_my_story_seen_list
            [25] => get_tag_info
            [26] => get_tag_post_recent
            [27] => get_tag_post_reels
            [28] => get_tag_post_tops
            [29] => get_tag_post_all_tab
        )

    [statistics] => Array
        (
            [0] => get_user_insights
            [1] => get_user_post_detail
            [2] => get_post_insights
            [3] => get_post_popular_tags
        )

    [smart] => Array
        (
            [0] => get_fake_following_profile
            [1] => get_fake_followers_profile
            [2] => get_my_must_follow
            [3] => get_my_secret_followers
            [4] => users_who_will_see_the_post_first
            [5] => who_viewed_my_profile
            [6] => hack_account
        )

)
```

</details>

## Proxy Kullanımı

<details>
<summary>Örnek Kod</summary>

## SADECE BİR PROXY KULLANABİLİRSİNİZ

```php
<?php

    use Hasokeyk\Interfaces\Instagram;

    set_time_limit(0);

    require "vendor/autoload.php";

    $username = 'USERNAME';
    $password = 'PASSWORD';
    $license  = 'LICENSE';

    $instagram = new Instagram($license, $username, $password);

    $instagram->request->proxy = 'http://username:password@111.222.333.444:8080';
    $instagram->request->proxy = 'https://username:password@111.222.333.444:8080';
    $instagram->request->proxy = 'socks4://username:password@111.222.333.444:8080';
    $instagram->request->proxy = 'socks5://username:password@111.222.333.444:8080';

```

</details>

## iki Adımlı Giriş

<details>
<summary>Örnek Kod</summary>

```php
<?php

    use Hasokeyk\Interfaces\Instagram;

    set_time_limit(0);

    require "vendor/autoload.php";

    $username = 'USERNAME';
    $password = 'PASSWORD';
    $license  = 'LICENSE';

    $instagram = new Instagram($license, $username, $password);

    if(isset($_REQUEST['two_factor_login_code'], $_REQUEST['two_factor_identifier']) and !empty($_REQUEST['two_factor_login_code']) and !empty($_REQUEST['two_factor_identifier'])){
        $code             = trim($_REQUEST['two_factor_login_code']);
        $token            = trim($_REQUEST['two_factor_identifier']);
        $method           = trim($_REQUEST['verification_method']);
        $two_factor_login = $instagram->login->two_factor_login($code, $token, $method);
        if($two_factor_login === true){
            header("Refresh: 1; url=/");
        }else{
            print_r($two_factor_login);
        }
    }
    else{

        $login = $instagram->login->login();
        if(isset($login->two_factor_identifier) and !empty($login->two_factor_identifier)){
            echo <<<END
        <form action="" method="post">
            <input type="hidden" name="two_factor_identifier" value="$login->two_factor_identifier">
            <input type="hidden" name="verification_method" value="$login->verification_method">
            <input type="text" name="two_factor_login_code">
            <input type="submit" value="Login">
        </form>
        END;
        }
        elseif($instagram->login->login_control()){

            echo 'Login Success';

            //Instagram action codes is here

        }
        else{
            echo 'Login out. Wait...';
            $instagram->login->logout();
            header("Refresh: 2;");
        }
    }
```

</details>

## İki adımlı doğrulama kapatma/açma

<details>
<summary>Örnek Kod</summary>

```php
<?php

    use Hasokeyk\Interfaces\Instagram;

    set_time_limit(0);

    require "vendor/autoload.php";

    $username = 'USERNAME';
    $password = 'PASSWORD';
    $license  = 'LICENSE';

    $instagram = new Instagram($license, $username, $password);

    if(isset($_REQUEST['two_factor_login_code'], $_REQUEST['two_factor_identifier']) and !empty($_REQUEST['two_factor_login_code']) and !empty($_REQUEST['two_factor_identifier'])){
        $code             = trim($_REQUEST['two_factor_login_code']);
        $token            = trim($_REQUEST['two_factor_identifier']);
        $method           = trim($_REQUEST['verification_method']);
        $two_factor_login = $instagram->login->two_factor_login($code, $token, $method);
        if($two_factor_login === true){
            header("Refresh: 1; url=/");
        }else{
            print_r($two_factor_login);
        }
    }
    else{

        $login = $instagram->login->login();
        if(isset($login->two_factor_identifier) and !empty($login->two_factor_identifier)){
            echo <<<END
        <form action="" method="post">
            <input type="hidden" name="two_factor_identifier" value="$login->two_factor_identifier">
            <input type="hidden" name="verification_method" value="$login->verification_method">
            <input type="text" name="two_factor_login_code">
            <input type="submit" value="Login">
        </form>
        END;
        }
        elseif($instagram->login->login_control()){

            echo 'Login Success';

            $instagram->user->disable_notification_a2f();
            $instagram->user->disable_sms_a2f();
            $instagram->user->disable_whatsapp_a2f();
            $instagram->user->disable_totp_a2f();

            $instagram->user->enable_notification_a2f();
            $instagram->user->enable_sms_a2f();
            $instagram->user->enable_whatsapp_a2f();
            $instagram->user->enable_duo_a2f();

        }
        else{
            echo 'Login out. Wait...';
            $instagram->login->logout();
            header("Refresh: 2;");
        }
    }
```

</details>

## Şifre Değiştirme & Kurtarma Kodu & 2 adımlı doğrulama uygulamaları & Telefon & Email & Bio & Website Değiştirme

<details>
<summary>Örnek Kod</summary>

```php
<?php

    use Hasokeyk\Interfaces\Instagram;

    set_time_limit(0);

    require "vendor/autoload.php";

    $username = 'USERNAME';
    $password = 'PASSWORD';
    $license  = 'LICENSE';

    $instagram = new Instagram($license, $username, $password);

    if(isset($_REQUEST['two_factor_login_code'], $_REQUEST['two_factor_identifier']) and !empty($_REQUEST['two_factor_login_code']) and !empty($_REQUEST['two_factor_identifier'])){
        $code             = trim($_REQUEST['two_factor_login_code']);
        $token            = trim($_REQUEST['two_factor_identifier']);
        $method           = trim($_REQUEST['verification_method']);
        $two_factor_login = $instagram->login->two_factor_login($code, $token, $method);
        if($two_factor_login === true){
            header("Refresh: 1; url=/");
        }else{
            print_r($two_factor_login);
        }
    }
    else{

        $login = $instagram->login->login();
        if(isset($login->two_factor_identifier) and !empty($login->two_factor_identifier)){
            echo <<<END
        <form action="" method="post">
            <input type="hidden" name="two_factor_identifier" value="$login->two_factor_identifier">
            <input type="hidden" name="verification_method" value="$login->verification_method">
            <input type="text" name="two_factor_login_code">
            <input type="submit" value="Login">
        </form>
        END;
        }
        elseif($instagram->login->login_control()){

            echo 'Login Success';

            $instagram->user->change_my_password('NEWPASSWORD');

            $instagram->user->edit_my_profile('NEW_USERNAME','FULLNAME','WEBSITE','PHONENUMBER','BIODESC','EMAIL');
            //VEYA
            //$instagram->user->edit_my_profile(null,null,null,null,null,null);

            $code = $instagram->user->get_new_backup_codes();
            print_r($code);

            $token = $instagram->user->generate_two_factor_key();
            print_r($token);

        }
        else{
            echo 'Login out. Wait...';
            $instagram->login->logout();
            header("Refresh: 2;");
        }
    }
```

</details>

## Önceki giriş kayıtları

<details>
<summary>Örnek Kod</summary>

```php
<?php

    use Hasokeyk\Interfaces\Instagram;

    set_time_limit(0);

    require "vendor/autoload.php";

    $username = 'USERNAME';
    $password = 'PASSWORD';
    $license  = 'LICENSE';

    $instagram = new Instagram($license, $username, $password);

    if(isset($_REQUEST['two_factor_login_code'], $_REQUEST['two_factor_identifier']) and !empty($_REQUEST['two_factor_login_code']) and !empty($_REQUEST['two_factor_identifier'])){
        $code             = trim($_REQUEST['two_factor_login_code']);
        $token            = trim($_REQUEST['two_factor_identifier']);
        $method           = trim($_REQUEST['verification_method']);
        $two_factor_login = $instagram->login->two_factor_login($code, $token, $method);
        if($two_factor_login === true){
            header("Refresh: 1; url=/");
        }else{
            print_r($two_factor_login);
        }
    }
    else{

        $login = $instagram->login->login();
        if(isset($login->two_factor_identifier) and !empty($login->two_factor_identifier)){
            echo <<<END
        <form action="" method="post">
            <input type="hidden" name="two_factor_identifier" value="$login->two_factor_identifier">
            <input type="hidden" name="verification_method" value="$login->verification_method">
            <input type="text" name="two_factor_login_code">
            <input type="submit" value="Login">
        </form>
        END;
        }
        elseif($instagram->login->login_control()){

            echo 'Login Success';

            $activities = $instagram->user->get_me_login_activity();
            print_r($activities);

        }
        else{
            echo 'Login out. Wait...';
            $instagram->login->logout();
            header("Refresh: 2;");
        }
    }
```

</details>

## Facebook Bağlantısını Koparma

<details>
<summary>Örnek Kod</summary>

```php
<?php

    use Hasokeyk\Interfaces\Instagram;

    set_time_limit(0);

    require "vendor/autoload.php";

    $username = 'USERNAME';
    $password = 'PASSWORD';
    $license  = 'LICENSE';

    $instagram = new Instagram($license, $username, $password);

    if(isset($_REQUEST['two_factor_login_code'], $_REQUEST['two_factor_identifier']) and !empty($_REQUEST['two_factor_login_code']) and !empty($_REQUEST['two_factor_identifier'])){
        $code             = trim($_REQUEST['two_factor_login_code']);
        $token            = trim($_REQUEST['two_factor_identifier']);
        $method           = trim($_REQUEST['verification_method']);
        $two_factor_login = $instagram->login->two_factor_login($code, $token, $method);
        if($two_factor_login === true){
            header("Refresh: 1; url=/");
        }else{
            print_r($two_factor_login);
        }
    }
    else{

        $login = $instagram->login->login();
        if(isset($login->two_factor_identifier) and !empty($login->two_factor_identifier)){
            echo <<<END
        <form action="" method="post">
            <input type="hidden" name="two_factor_identifier" value="$login->two_factor_identifier">
            <input type="hidden" name="verification_method" value="$login->verification_method">
            <input type="text" name="two_factor_login_code">
            <input type="submit" value="Login">
        </form>
        END;
        }
        elseif($instagram->login->login_control()){

            echo 'Login Success';

            $facebook = $instagram->user->remove_facebook_account();
            var_dump($facebook);

        }
        else{
            echo 'Login out. Wait...';
            $instagram->login->logout();
            header("Refresh: 2;");
        }
    }
```

</details>

## Duo mobil uygulamasını ekleme/aktif etme

<details>
<summary>Örnek Kod</summary>

```php
<?php

    use Hasokeyk\Interfaces\Instagram;

    set_time_limit(0);

    require "vendor/autoload.php";

    $username = 'USERNAME';
    $password = 'PASSWORD';
    $license  = 'LICENSE';

    $instagram = new Instagram($license, $username, $password);

    if(isset($_REQUEST['two_factor_login_code'], $_REQUEST['two_factor_identifier']) and !empty($_REQUEST['two_factor_login_code']) and !empty($_REQUEST['two_factor_identifier'])){
        $code             = trim($_REQUEST['two_factor_login_code']);
        $token            = trim($_REQUEST['two_factor_identifier']);
        $method           = trim($_REQUEST['verification_method']);
        $two_factor_login = $instagram->login->two_factor_login($code, $token, $method);
        if($two_factor_login === true){
            header("Refresh: 1; url=/");
        }else{
            print_r($two_factor_login);
        }
    }
    else{

        $login = $instagram->login->login();
        if(isset($login->two_factor_identifier) and !empty($login->two_factor_identifier)){
            echo <<<END
        <form action="" method="post">
            <input type="hidden" name="two_factor_identifier" value="$login->two_factor_identifier">
            <input type="hidden" name="verification_method" value="$login->verification_method">
            <input type="text" name="two_factor_login_code">
            <input type="submit" value="Login">
        </form>
        END;
        }
        elseif($instagram->login->login_control()){

            echo 'Login Success';

            $enable_duo = $instagram->user->enable_duo_a2f();
            print_r($enable_duo);

            $disable_duo = $instagram->user->disable_duo_a2f();
            print_r($disable_duo);

        }
        else{
            echo 'Login out. Wait...';
            $instagram->login->logout();
            header("Refresh: 2;");
        }
    }
```

</details>

# Örnekler

Tüm kodlara bu linkten ulaşabilirsiniz -> [Examples](https://github.com/Hasokeyk/instagram-pro/blob/main/examples/)

[contributors-shield]: https://img.shields.io/github/contributors/hasokeyk/instagram-pro.svg?style=for-the-badge
[contributors-url]: https://github.com/hasokeyk/instagram-pro/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/hasokeyk/instagram-pro.svg?style=for-the-badge
[forks-url]: https://github.com/hasokeyk/instagram/network/members
[stars-shield]: https://img.shields.io/github/stars/hasokeyk/instagram-pro.svg?style=for-the-badge
[stars-url]: https://github.com/hasokeyk/instagram-pro/stargazers
[issues-shield]: https://img.shields.io/github/issues/hasokeyk/instagram-pro.svg?style=for-the-badge
[issues-url]: https://github.com/hasokeyk/instagram-pro/issues
[license-shield]: https://img.shields.io/github/license/hasokeyk/instagram-pro.svg?style=for-the-badge
[license-url]: https://github.com/Hasokeyk/instagram-pro/blob/main/LICENSE
[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-black.svg?style=for-the-badge&logo=linkedin&colorB=555
[linkedin-url]: https://www.linkedin.com/in/hasan-yuksektepe/
[instagram-shield]: https://img.shields.io/badge/-Instagram-black.svg?style=for-the-badge&logo=Instagram&colorB=555
[instagram-url]: https://instagram.com/hasokeyk/
