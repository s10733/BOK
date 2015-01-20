<?php

class Zend_View_Helper_Menu  extends Zend_View_Helper_Abstract{
    
    public function menu(){
     
        $DbMenu = new Application_Model_DbTable_Menu();
        $select = $DbMenu->select()
                ->from('menu')
                ->order('id');
        $menu = $DbMenu->fetchAll($select);
        return $this->view->partial('menu.phtml', array('menu'=>$menu));
    }
    
}
