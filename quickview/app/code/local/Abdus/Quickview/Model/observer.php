<?php
class Abdus_Quickview_Model_Observer{
    private $request;
    public function ProductQuickView($observer){
        $update = Mage::getSingleton('core/layout')->getUpdate();
        if(Mage::app()->getRequest()->getParam('ProductQuickView')==true){
            if($product=Mage::registry('current_product')){$update->addHandle('abdus_quickview');}
        }
        else{
            $update->addHandle('abdus_quickview_init');
        }
        return;
    }
}
