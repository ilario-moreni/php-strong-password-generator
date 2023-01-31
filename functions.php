<?php 
$selected_num = $_GET['num'];
$characters_list = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';

function generatePassword($selected_num, $characters_list)
{
    if (!$selected_num) {
        return null;
    }
    return substr(str_shuffle($characters_list), 0, $selected_num);
}
