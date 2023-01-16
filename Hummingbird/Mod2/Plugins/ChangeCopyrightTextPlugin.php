<?php
/**
 *
* Copyright © Magento. All rights reserved.
* See COPYING.txt for license details.
*/
namespace Hummingbird\Mod2\Plugins;
/**
* Class AfterFooterPlugin
* @package Unit1\Plugins\Plugin
*/
class ChangeCopyrightTextPlugin
{
 /**
 * @param \Magento\Theme\Block\Html\Footer $subject
 * @param $result
 * @return string
 */
 public function afterGetCopyright(\Magento\Theme\Block\Html\Footer $subject, $result)
 {
 return 'Customized copyright!';
 }
} 