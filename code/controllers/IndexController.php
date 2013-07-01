<?php
/**
 * Snowdog_AjaxButton_IndexController
 *
 * @author maciek@snowdog
 */

class Snowdog_AjaxButton_IndexController extends Mage_Core_Controller_Front_Action {

  public function indexAction() {
    $result = Mage::getModel('snowdogajaxbutton/logic')->priceThreshold($this->getRequest()->getParam('price'));

    $this->loadLayout();    
    $this->getLayout()->getBlock('root')->setResult($result);
    $this->renderLayout();
  }

} // end class
