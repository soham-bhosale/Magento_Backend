<?php
/**
 *
* Copyright © 2019 Magento. All rights reserved.
* See COPYING.txt for license details.
*/
namespace Hummingbird\Mod2\Plugins;

/**
* Class AddVendorToBreadcrumbPlugin
* @package Humage\Test\Plugins
*/

use Magento\Framework\Phrase;
class ChangeWelcomeMsgPlugin
{
 /**
 * @param \Magento\Theme\Block\Html\Breadcrumbs $subject
 * @return array
 */
 public function afterGetWelcome(\Magento\Theme\Block\Html\Header $subject, $result)
 {
    $new_text = new Phrase("Welcome Hummingbird", $result->getArguments());

    return __($new_text);
 }
} 