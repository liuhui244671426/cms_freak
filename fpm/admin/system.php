<?php

class fpm_admin_system extends fpm_base{

    public function init(){}
    // url query /?m=admin&c=system&a=something
    public function something(){
        echo 'Hi, web';
    }
}