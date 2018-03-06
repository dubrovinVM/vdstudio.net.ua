<?php 
$code = $_GET['code'];
$redirect_url = 'http://vdstudio.net.ua/inst2.php';
$access_url =  'https://api.instagram.com/oauth/access_token';
$auth_config = array(
    'client_id'         => '624ca4e6bf9d43eaacff473c87e24f32',
    'client_secret'     => 'f763a372a905462bad23c824714b91bd',
    'grant_type'        => 'authorization_code',
    'redirect_uri'      =>  $redirect_url,
    'code'             =>   $code
);
echo '<a href="'.$access_url.'?'. urldecode(http_build_query($auth_config)).'">AccessToken</a> ';

?>
