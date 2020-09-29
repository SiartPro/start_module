<?php

use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

if (class_exists('siart_simple')) {
    return;
}


Class siart_simple extends CModule
{
    var $MODULE_ID = 'siart.simple';
    var $MODULE_VERSION;
    var $MODULE_VERSION_DATE;
    var $MODULE_NAME;
    var $MODULE_DESCRIPTION;
    var $PARTNER_NAME;
    var $PARTNER_URI;
    var $MODULE_GROUP_RIGHTS = 'N';

    function __construct()
    {
        $arModuleVersion = array();
        include(dirname(__FILE__) . '/version.php');

        $this->MODULE_VERSION = $arModuleVersion['VERSION'];
        $this->MODULE_VERSION_DATE = $arModuleVersion['VERSION_DATE'];
        $this->MODULE_NAME = Loc::getMessage('SIART_SIMPLE_NAME');
        $this->MODULE_DESCRIPTION = Loc::getMessage('SIART_SIMPLE_DESCRIPTION');

        $this->PARTNER_NAME = Loc::getMessage('SIART_SIMPLE_PARTNER_NAME');
        $this->PARTNER_URI = Loc::getMessage('SIART_SIMPLE_PARTNER_URI');
    }

    function DoInstall()
    {
        RegisterModule($this->MODULE_ID);
        return true;
    }

    function DoUninstall()
    {
        UnRegisterModule($this->MODULE_ID);
        return true;
    }
}
