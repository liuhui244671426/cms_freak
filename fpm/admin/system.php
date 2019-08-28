<?php

class fpm_admin_system extends fpm_base{

    public function init(){}
    // url query /?m=admin&c=system&a=something
    public function something(){
        echo 'Hi, web';
    }
    public function basicParameter(){
        freak_view::render('admin/page/system/basicParameter', []);return;
    }

    public function icons(){
        freak_view::render('admin/page/system/icons', []);return;
    }

    public function linkList(){
        freak_view::render('admin/page/system/linkList', []);return;
    }
    public function linksAdd(){
        freak_view::render('admin/page/system/linksAdd', []);return;
    }
    public function logs(){
        freak_view::render('admin/page/system/logs', []);return;
    }
}