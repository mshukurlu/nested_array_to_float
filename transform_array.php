<?php
/* 30.03.2023 - Murad Shukurlu */

$list = [[[1,2],3],[4],[5,6],[7,[8,9]]];

function transform_array($list)
{
    $transformed_list = [];

    foreach ($list as $iterator){

        if(is_array($iterator)){
            $transformed_list = array_merge($transformed_list,transform_array($iterator));
        }else{
            array_push($transformed_list,$iterator);
        }
    }

    return $transformed_list;
}


print_r(transform_array($list));
