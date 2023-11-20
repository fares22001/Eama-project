<?php

require '../config/function.php';

$pararesult = checkparamid('id');
if (is_numeric($pararesult)) {
    $userid = validate($pararesult);
    $user = getbyid('user', $userid);
    if ($user['status'] == 200) {
        $userdelete = deleteQuery('user', $userid);
        if ($userdelete) {
            redirect('users.php', 'deleting done ');
        } else {
            redirect('users.php', 'something went wrong');
        }
    } else {
        redirect('users.php', $user['message']);
    }
} else {
    redirect('user.php', $pararesult);
}
