<?php

$list = [[[1,2],3],[4],[5,6],[7,[8,9]]];


function transformed_list($list){
    if(empty($list))
    {
        return [];
    }

    if (!is_array($list[0])) {
        return array_merge([$list[0]], transformed_list(array_slice($list, 1)));
    }
    return array_merge(transformed_list($list[0]), transformed_list(array_slice($list, 1)));
}

print_r(transformed_list($list));
