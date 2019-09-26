<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('admin.home');

    $router->resources([
        'products'=>ProductController::class,
        'clients'=>ClientController::class,
        'blogs'=>BlogController::class,
        'testimonials'=>TestimonialController::class,
        'awards'=>AwardController::class,
        'homebanner'=>SliderController::class,
        'homeproduct'=>HomeProductController::class,
        'frontmenus'=>FrontMenuController::class,
        'aboutus'=>AboutusController::class,
        'pages'=>PageController::class,
        'careerpage'=>CareerController::class,
        'contactpage'=>ContactPageController::class,
        'homepage'=>HomePageController::class,
        'category'=> CategoryController::class,
    ]);

});
