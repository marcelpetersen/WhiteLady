<?php
$url = 'http://localhost/ss2015/api/v1/api.php/Gps/3';
$data = array('username' => 'TestUser',
              'password' => 'TestPassword');
              /*
              $data = array('acl_password' => 'Koppe123',
                            'username' => 'TestUser',
                            'password' => 'TestPassword');*/
// use key 'http' even if you send the request to https://...
$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'DELETE',
        'content' => http_build_query($data),
    ),
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
$json =json_decode($result, true);
echo("GPS - Deleting gps at position 3: ");
echo($result); ?>
