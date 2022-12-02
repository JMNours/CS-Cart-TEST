<?php

use Tygh\Registry;

if ($mode == "manage") {

    $params = $_REQUEST;

    list($staffs, $params) = fn_get_staff($params, 0);

    Tygh::$app['view']->assign('staff_tree', $staffs);
}

if ($mode == "list") {
    $staffs = fn_get_staffs();
    ?>
    <pre>
        <?php
        var_dump($staffs);
        ?>
    </pre>
    <?php
}

if ($mode == "add_test_set") {

    $params = $_REQUEST;
    for ($counter = 0; $counter < (!empty($params['count']) ? $params['count'] : 10); $counter++) {

        $data = [
            'first_name' => 'first_name_' . $counter,
            'last_name' => 'last_name_' . $counter,
            'email' => 'email_' . $counter,
            'function' => 'function_' . $counter,
            'internal_description' => 'internal_description_' . $counter
        ];

        fn_staffs_update_staff($data);

        if ($counter >= 100) {
            break;
        }
    }
}

//if ($mode == "manage") {
//
//    $params = $_REQUEST;
//
//    $page_type = !empty($params['page_type']) ? $params['page_type'] : '';
//
//    $params['simple'] = true;
//
//    list($pages, $params) = fn_get_pages($params, 0);
//
//    Tygh::$app['view']->assign('pages_tree', $pages);
//}

//Tygh::$app['view']->assign('usergroups', fn_get_usergroups(array('type' => 'C', 'status' => array('A', 'H')), DESCR_SL));
