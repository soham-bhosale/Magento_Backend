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
class AddVendorToBreadcrumbPlugin
{
 /**
 * @param \Magento\Theme\Block\Html\Breadcrumbs $subject
 * @param $crumbName
 * @param $crumbInfo
 * @return array
 */
 public function beforeAddCrumb(\Magento\Theme\Block\Html\Breadcrumbs $subject,
$crumbName, $crumbInfo)
 {
 $crumbInfo['label'] = 'Hummingbird '.$crumbInfo['label'];
 return [$crumbName, $crumbInfo];
 }
} 