<?php

class Vl_Worker_Model_Mysql4_Blogpost_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract {
    protected function _construct()
    {
        $this->_init('vl_worker/blogpost');
    }
}