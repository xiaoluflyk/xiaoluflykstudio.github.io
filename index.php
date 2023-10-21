<?php
/*
  PHP version 5
  Copyright (c) 2002-2020 ECISP.CN、EarcLink.COM
  警告：这不是一个免费的软件，请在许可范围内使用，请尊重知识产权，侵权必究，举报有奖
  作者：黄祥云 E-mail:6326420@qq.com  QQ:6326420 TEL:18665655030 / 13797552220
*/
error_reporting(0);
ini_set('magic_quotes_runtime', 0);
ini_set('magic_quotes_sybase', 0);
ini_set('magic_quotes_gpc', 1);
ini_set('memory_limit', '640M');
ini_set('default_charset', 'utf-8');
define('ESPCMS_WEB_PATH', dirname(__FILE__) . '/');
define('ESPCMS_WEB_PATH_FILE', dirname(__FILE__));
define('ESPCMS_FILE_ROOT', dirname(__FILE__) . '/');
define('ESPCMS_ROOT_STATE', true);
require_once(ESPCMS_FILE_ROOT . 'espcms_web/espcms_load.php');
