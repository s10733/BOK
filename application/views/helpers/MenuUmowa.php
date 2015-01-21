<?php
class Zend_View_Helper_MenuUmowa  extends Zend_View_Helper_Abstract{
    
     public function  menuUmowa(){
        $DbMenu = new Application_Model_DbTable_Menu();
        $select = $DbMenu->select()
                ->from('menu')
                ->where('dropdown =?', 'umowa')
                ->order('id');
        $menu = $DbMenu->fetchAll($select);
        return $this->view->partial('menu.phtml', array('menu'=>$menu));
        
    }
    }