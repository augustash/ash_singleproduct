<?php
/**
 * Single Product Redirection
 *
 * Enables the store administrator the ability to turn on a feature that will
 * re-direct end-user to a product view page when the category browsed only has
 * a single product associated.
 *
 * @category    Ash
 * @package     Ash_SingleProduct
 * @copyright   Copyright (c) 2010 August Ash, Inc. (http://www.augustash.com)
 */

 /**
  * Data helper
  *
  * @category   Ash
  * @package    Ash_SingleProduct
  */
 class Ash_SingleProduct_Helper_Data extends Mage_Core_Helper_Abstract
 {
     /**
      * Module enabled path
      *
      * @var string
      */
     const XML_PATH_ENABLED = 'catalog/ash_singleproduct/enabled';
 }