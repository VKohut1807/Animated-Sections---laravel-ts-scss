<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

$routesConfig = config('routes-config');

Breadcrumbs::for('home', function (BreadcrumbTrail $trail): void {
    $trail->push(__('Home'), route('home'));
});

foreach ($routesConfig as $key => $val) {
    $routePath  = $val['route-path'];
    $viewName  = $val['view-name'];
    $routeName  = $val['route-name'];

    Breadcrumbs::for($viewName, function (BreadcrumbTrail $trail) use ($routeName, $routePath): void {
        $trail->parent('home');
        $trail->push(__($routeName), route($routePath));
    });
};