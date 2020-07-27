<?php
namespace Werkraum\EnvironmentToolbar;

use TYPO3\CMS\Backend\Toolbar\ToolbarItemInterface;
use TYPO3\CMS\Core\Core\Environment;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2020 Simon Fischer <simon.fischer@werkraum.net>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

class EnvironmentToolbarItem implements ToolbarItemInterface
{
    public function checkAccess()
    {
        return true;
    }

    public function getItem()
    {
        $context = Environment::getContext();
        $contextDescription = (string)$context;
        if ($context->isDevelopment()) {
            $contextFgColor = '#848402';
            $contextBgColor = '#ffff7b';
        } elseif ($context->isProduction()) {
            $contextFgColor = 'green';
            $contextBgColor = 'lightgreen';
        } else {
            $contextFgColor = 'black';
            $contextBgColor = 'lightgrey';
        }
        return <<<HTML
<a class="toolbar-item-link" href="#">
    <span
     class="toolbar-item-icon"
      style="font-weight: bold; text-transform: uppercase; color: {$contextFgColor}; background: ${contextBgColor}; padding: 5px; border-radius: 4px; border: 1px solid ${contextFgColor};">
        {$contextDescription}
</span>
</a>
HTML;
    }

    public function hasDropDown()
    {
        return false;
    }

    public function getDropDown()
    {
        return null;
    }

    public function getAdditionalAttributes()
    {
        return [];
    }

    public function getIndex()
    {
        return 0;
    }
}
