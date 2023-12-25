<?php 

function randomString($n)
    {
           $characters = "0123456789abcdefghijklmnopqrstyvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
           $str = '';
           for($i = 0; $i < $n; $i++){
            $randomIndex = rand(0, strlen($characters) -1);
            $str .= $characters[$randomIndex];
           }

           return $str;
    }