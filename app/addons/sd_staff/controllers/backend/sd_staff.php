<?php

use Tygh\Registry;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($mode === 'update' || $mode === 'add') {
        $staff_id = !empty($_REQUEST['id']) ? $_REQUEST['id'] : 0;

        $mode = empty($_REQUEST['id']) ? 'add' : 'update';

        $result = fn_update_staff(
                $_REQUEST['staff_data'],
                $staff_id
        );

        if ($result) {
            $staff_id = $result;

            if (!empty($_REQUEST['return_url'])) {
                return array(CONTROLLER_STATUS_OK, $_REQUEST['return_url']);
            }
        } else {
            fn_save_post_data('staff_data');
            fn_delete_notification('changes_saved');
        }

        $redirect_params = array(
            'id' => $staff_id
        );

        if (!empty($_REQUEST['return_url'])) {
            $redirect_params['return_url'] = urlencode($_REQUEST['return_url']);
        }

        return array(CONTROLLER_STATUS_OK, 'sd_staff' . (!empty($staff_id) ? '.update' : '.add') . '?' . http_build_query($redirect_params));
    }
}

if ($mode == 'update' || $mode == 'add') {
    $show_storefront_picker = false;

    // copy to add below this line
    $staff_id = !empty($_REQUEST['id'])? ($mode == 'add' ? '': $_REQUEST['id']) : '';
    
    $staff_data = fn_get_staff_info($staff_id);
    
    $saved_staff_data = fn_restore_post_data('staff_data');
    if (!empty($saved_staff_data)) {
        $staff_data = fn_array_merge($staff_data, $saved_staff_data);
    }

    if ($mode == 'update') {
        if (empty($staff_data)) {
            return array(CONTROLLER_STATUS_NO_PAGE);
        }
    }

    $staff_data['id'] = empty($staff_data['id']) ? (!empty($staff_id) ? $staff_id : '') : $staff_data['id'];
    
    Tygh::$app['view']->assign('staff_data', $staff_data);
}

if ($mode == "test") {
    list($staff, $params) = fn_get_staff();
    var_dump($staff);
}

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

        fn_update_staff($data);

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
