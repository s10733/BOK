<?php

class Zend_View_Helper_MenuKlient  extends Zend_View_Helper_Abstract{
    
    public function menuKlient(){
     
        $DbMenu = new Application_Model_DbTable_Menu();
        $select = $DbMenu->select()
                ->from('menu')
                ->where('dropdown=?','klient')
                ->order('id');
        $menu = $DbMenu->fetchAll($select);
        return $this->view->partial('menu.phtml', array('menu'=>$menu));
    }
   
    
}
