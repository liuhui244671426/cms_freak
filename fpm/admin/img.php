<?php

class fpm_admin_img extends fpm_base{

    public function init(){}
    // url query /?m=admin&c=img&a=something
    public function something(){
        echo 'Hi, web';
    }

    public function images(){
        freak_view::render('admin/page/img/images', []);return;
    }
}