<?php

class fpm_admin_user extends fpm_base{

    public function init(){}
    // url query /?m=admin&c=user&a=something
    public function something(){
        echo 'Hi, web';
    }

    public function changePwd(){
        freak_view::render('admin/page/user/changePwd', []);return;
    }

    public function userGrade(){
        freak_view::render('admin/page/user/userGrade', []);return;
    }

    public function userList(){
        freak_view::render('admin/page/user/userList', []);return;
    }

    public function userAdd(){
        freak_view::render('admin/page/user/userAdd', []);return;
    }
    public function userInfo(){
        freak_view::render('admin/page/user/userInfo', []);return;
    }

}