<?php

$folder_path = $_SERVER['HTTP_HOST'] . preg_replace('@/+$@', '', dirname($_SERVER['SCRIPT_NAME']) == "\\" ? "" : dirname($_SERVER['SCRIPT_NAME'])) . '/';

if ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
    || $_SERVER['SERVER_PORT'] == 443
) {
    $base_url = 'https://' . $folder_path;
} else {
    $base_url = 'http://' . $folder_path;
}
