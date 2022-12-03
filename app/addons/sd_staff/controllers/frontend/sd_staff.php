<?php

if (!defined('BOOTSTRAP')) { die('Access denied'); }

if($mode == 'list')
{
    list($staff, $params)= fn_get_staff();
    Tygh::$app['view']->assign('staff',$staff);
}
