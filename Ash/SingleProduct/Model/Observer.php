<?php
/**
 * Single Product Redirection
 *
 * Enables the store administrator the ability to turn on a feature that will
 * re-direct end-users to a product view page when the category browsed only has
 * a single product associated.
 *
 * @category    Ash
 * @package     Ash_SingleProduct
 * @copyright   Copyright (c) 2010 August Ash, Inc. (http://www.augustash.com)
 */

class Ash_SingleProduct_Model_Observer
{
    /**
     * Grab the request action and the selected category from the observer. 
     * Examine if category contains only a single product. If true, get the 
     * product URI and inject into request.
     *
     * @param   Varien_Event_Observer $observer
     * @return  void
     */
    public function initRedirect(Varien_Event_Observer $observer)
    {
        // is redirection enabled
        if (!Mage::getStoreConfigFlag(Ash_SingleProduct_Helper_Data::XML_PATH_ENABLED)) {
            return;
        }
        
        /* @var $category Mage_Catalog_Model_Category */
        $category = $observer->getEvent()->getCategory();
        /* @var $action */
        $action   = $observer->getEvent()->getControllerAction();
        
        // check if product count is one
        if ($category->getProductCount() == 1) {
            $productUrl = $category->getProductCollection()->getFirstItem()->getProductUrl();
            $action->getResponse()->setRedirect($productUrl);
        }
    }
}
