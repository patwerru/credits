<?php
/**
 * Created by PhpStorm.
 * User: pat
 * Date: 5/16/2017
 * Time: 1:48 PM
 */

function mystery($a= '4TEST', $b= 'testb', $c = 'testc') {
    $result = null;
    if (strlen(trim($a)) == 0) {
        $result = $c;
    }

    else {
        if (strtolower(trim($b)) == "n") {
            if (!is_numeric($a)) {
                $result = $c;
            }
            else {
                $result = trim($a);
            }
        }
        else {

            if (strtolower(trim($b)) == "d") {
                if (!isdate($a)) {
                    $result = $c;
                }
                else {
                    $result = trim($a);
                }
            }
            else {
                $result = $a;
            }
        }
    }
   return $result;
}