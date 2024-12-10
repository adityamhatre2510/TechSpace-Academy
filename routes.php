<?php

return [
    '/faqs'             => 'HomeController@faqs',        
    '/about'            => 'HomeController@about',    
    '/contact'          => 'HomeController@contact',
    '/courses/{id}'     => 'CourseController@showCourse',
    '/courses'          => 'CourseController@index',

    '/profile'          => 'UserController@profile',
    '/register'         => 'UserController@register',
    '/forget-password'  => 'UserController@forgetPassword',
    '/logout'           => 'UserController@logout',
    '/login'            => 'UserController@login',    

    '/404'              => 'ErrorController@index',
    '/'                 => 'HomeController@index',
    ''                  => 'HomeController@index'
];

?>