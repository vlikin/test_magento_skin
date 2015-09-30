<?php

class Vl_Worker_Model_Mysql4_Blogpost extends Mage_Core_Model_Mysql4_Abstract {
    protected function _construct()
    {
        $this->_init('vl_worker/blogpost', 'blogpost_id');
    }


    /**
     * Attribute getter (deprecated)
     *
     * @param string $var
     * @return mixed
     */

    public function __get($var)
    {
        $var = $this->_underscore($var);
        return $this->getData($var);
    }

    /**
     * Attribute setter (deprecated)
     *
     * @param string $var
     * @param mixed $value
     */
    public function __set($var, $value)
    {
        $var = $this->_underscore($var);
        $this->setData($var, $value);
    }
}