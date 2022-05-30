<?php

function isMail($mail){
    return (filter_var($mail,FILTER_VALIDATE_EMAIL)) ? true : false ;
}