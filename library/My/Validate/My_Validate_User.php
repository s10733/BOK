<?php

class My_Validate_User extends Zend_Validate_Abstract
{
    const NOT_FOUND = 'notFound';

    protected $_messageTemplates = array(
        self::NOT_FOUND => 'Brak użytkownika o podanej nazwie i adresie email!'
    );

    public function isValid($value, $context = null)
    {

        $email = $value;
        $this->_setValue($email);

        if (
            is_array($context)
            && isset($context['login'])
            && ($login = $context['login'])
        ) {

            $User = new Application_Model_DbTable_User();
            $select = $User->select()->where('login = ?', $login);
            $u = $User->fetchRow($select);

            if ($u && ($u['email'] === $email)) {
                return true;
            }

        }

        $this->_error(self::NOT_FOUND);
        return false;
    }
}