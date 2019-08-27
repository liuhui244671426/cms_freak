<?php

class fpm_admin_index extends fpm_base{
    public function init(){

    }

    public function index(){
        freak_view::layout_render('admin/index/index', array());
        return;
    }

}