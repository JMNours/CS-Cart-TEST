<?php

use Tygh\Tools\SecurityHelper;

function fn_get_staff($params = array(), $items_per_page = 0) {
    // Set default values to input params
    $default_params = array(
        'page' => 1,
        'items_per_page' => $items_per_page
    );

    $params = array_merge($default_params, $params);

    $condition = $limit = $join = '';

    $sorting = db_sort($params, [], 'id', 'asc');

    if (!empty($params['item_ids'])) {
        $condition .= db_quote(' AND ?:staff.id IN (?n)', explode(',', $params['item_ids']));
    }

    if (!empty($params['first_name'])) {
        $condition .= db_quote(' AND ?:staff.first_name LIKE ?l', '%' . trim($params['first_name']) . '%');
    }

    if (!empty($params['last_name'])) {
        $condition .= db_quote(' AND ?:staff.last_name LIKE ?l', '%' . trim($params['last_name']) . '%');
    }

    if (!empty($params['email'])) {
        $condition .= db_quote(' AND ?:staff.email LIKE ?l', '%' . trim($params['email']) . '%');
    }

    if (!empty($params['function'])) {
        $condition .= db_quote(' AND ?:staff.function LIKE ?l', '%' . trim($params['function']) . '%');
    }

    $fields = array(
        '?:staff.id',
        '?:staff.first_name',
        '?:staff.last_name',
        '?:staff.email',
        '?:staff.function',
        '?:staff.internal_description'
    );

    if (!empty($params['items_per_page'])) {
        $params['total_items'] = db_get_field("SELECT COUNT(*) FROM ?:staff $join WHERE 1 $condition");
        $limit = db_paginate($params['page'], $params['items_per_page'], $params['total_items']);
    }

    $staffs = db_get_hash_array(
            "SELECT ?p FROM ?:staff " .
            $join .
            "WHERE 1 ?p ?p ?p",
            'id', implode(', ', $fields), $condition, $sorting, $limit
    );

    if (!empty($params['item_ids'])) {
        $staffs = fn_sort_by_ids($staffs, explode(',', $params['item_ids']), 'id');
    }

    foreach ($staffs as $id => &$staff) {
        $staff['name'] = $staff['first_name'] . ' ' . $staff['last_name'];
    }

    return array($staffs, $params);
}

function fn_staffs_update_staff($data, $staff_id = '', $lang_code = DESCR_SL) {
    SecurityHelper::sanitizeObjectData('staff', $data);

    if (!empty($staff_id)) {
        db_query("UPDATE ?:staff SET ?u WHERE id = ?i", $data, $staff_id);
    } else {
        $staff_id = $data['$staff_id'] = db_query("REPLACE INTO ?:staff ?e", $data);
    }

    return $staff_id;
}
