<?php

class fpm_admin_login extends fpm_base{

    public function init(){}
    // url query /?m=admin&c=login&a=something
    public function something(){
        echo 'Hi, web';
    }
    public function login(){
        freak_view::render('admin/page/login/login', []);return;
    }
}