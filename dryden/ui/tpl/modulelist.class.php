<?php

/**
 * @package zpanelx
 * @subpackage dryden -> ui -> tpl
 * @author Bobby Allen (ballen@zpanelcp.com)
 * @copyright ZPanel Project (http://www.zpanelcp.com/)
 * @link http://www.zpanelcp.com/
 * @license GPL (http://www.gnu.org/licenses/gpl.html)
 */

class ui_tpl_modulelist {

    function Template() {
        global $controller;
        if (!$controller->GetControllerRequest('URL', 'module')) {
            return ui_moduleloader::GetModuleCats();
        }
    }

}

?>
