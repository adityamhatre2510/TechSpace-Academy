<?php

return [
    '/courses/edit/{id}' => 'CourseController@editCourse',
    '/courses/add'       => 'CourseController@addCourse',
    '/courses'           => 'CourseController@index',

    '/logout'            => 'UserController@logout',
    '/login'             => 'UserController@login',

    '/404'               => 'ErrorController@index',
    '/'                  => 'DashboardController@index',
    ''                   => 'DashboardController@index'
];

?>