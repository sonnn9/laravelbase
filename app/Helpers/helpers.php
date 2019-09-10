<?php

// convert url to array, after admin /admin/users/edit/1 => ["admin", "users", "edit", "1"]
function setActiveMenu($nameTab, $child = false)
{
    $arr = explode('/', request()->path());


    if ($child) {
        $style = (isset($arr[1]) && $arr[1] == $nameTab) ? " m-menu__item--active" : "";

    } else {
        if ($arr[1] == "permissions" || $arr[1] == "roles")
            $arr[1] = 'users';

        $style = (isset($arr[1]) && $arr[1] == $nameTab) ? " m-menu__item--active  m-menu__item--active-tab" : "";
    }

    return $style;
}


