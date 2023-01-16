<?php

namespace Hummingbird\Mod6\Plugin;

/**
* Class Description
* @package Hummingbird\Mod6\Plugin
*/

class Description
{
       /**
        * @param \Magento\Theme\Block\Html\Breadcrumbs $subject
        * @return array
        */
       public function afterGetProduct(\Magento\Catalog\Block\Product\View\Description $subject, $result)
       {
              $result->setDescription("Sample description");
              return $result;
       }
} 