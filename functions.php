<!-- 

Here's a code snippet in PHP that you can use for adding random characters to the end of a username in WordPress:

You can add this code to your WordPress site's functions.php file or use a plugin such as Code Snippets to add it.

 -->

<?php 

    function generate_username_suffix($username) {
    $characters = 'abcdefghijklmnopqrstuvwxyz0123456789';
    $suffix = '';
    for ($i = 0; $i < 6; $i++) {
        $suffix .= $characters[mt_rand(0, strlen($characters) - 1)];
    }
    return $username . '-' . $suffix;
    }

    add_filter('pre_user_login', function ($username) {
    $suffix = generate_username_suffix($username);
    while (username_exists($suffix)) {
        $suffix = generate_username_suffix($username);
    }
    return $suffix;
    });


    
    ?>