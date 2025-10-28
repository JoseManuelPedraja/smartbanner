<?php

if (!defined('_PS_VERSION_')) {
    exit;

$sql = array();

foreach ($sql as $query) {
    if (Db::getInstance()->execute($query) == false) {
        return false;
    }
}
