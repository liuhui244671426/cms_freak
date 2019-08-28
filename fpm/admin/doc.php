<?php

class fpm_admin_doc extends fpm_base{

    public function init(){}
    // url query /?m=admin&c=doc&a=something
    public function something(){
        echo 'Hi, web';
    }

    public function addressDoc(){
        freak_view::render('admin/page/doc/addressDoc', []);return;
    }
    public function bodyTabDoc(){
        freak_view::render('admin/page/doc/bodyTabDoc', []);return;
    }
    public function navDoc(){
        freak_view::render('admin/page/doc/navDoc', []);return;
    }
}