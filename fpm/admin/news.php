<?php

class fpm_admin_news extends fpm_base{

    public function init(){}
    // url query /?m=admin&c=news&a=something
    public function something(){
        echo 'Hi, web';
    }

    public function newsAdd(){
        freak_view::render('admin/page/news/newsAdd', []);return;
    }

    public function newsList(){
        freak_view::render('admin/page/news/newsList', []);return;
    }
}