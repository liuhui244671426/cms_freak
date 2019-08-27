<?php

class fpm_admin_index extends fpm_base{
    public function init(){

    }

    public function index(){
        freak_view::render('admin/page/index', array());
        return;
    }

    public function main(){
        freak_view::render('admin/page/main', array());
        return;
    }

    public function notFound(){
        freak_view::render('admin/page/404', array());
        return;
    }
}