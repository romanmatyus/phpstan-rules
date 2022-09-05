<?php

namespace App;

use Efabrica\Cms\Core\Plugin\BasePluginDefinition;
use Efabrica\Cms\Core\Plugin\Config\ChoozerConfigItem;

class PluginWithSetRequiredMin extends BasePluginDefinition
{
    public function pageConfiguration(): array
    {
        return [
            (new ChoozerConfigItem('main_menu_parent_page_id', 'Stránka s hlavným menu', 'page'))->setRequired(),
        ];
    }
}
