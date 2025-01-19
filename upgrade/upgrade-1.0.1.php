<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

function upgrade_module_1_0_1($module)
{
    // No se requieren cambios en la base de datos ni en las configuraciones
    return true;
}
