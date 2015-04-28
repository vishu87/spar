<?php

Route::get('/admin', function(){
	return View::make('admin.layout',["main"=>View::make('admin.main')]);
});

Route::group(['prefix' => 'admin'], function () {
	Route::get('/','RecipeController@getMain');

	Route::group(['prefix' => 'recipes'], function () {
		Route::get('/','RecipeController@getRecipes');
		Route::get('/add','RecipeController@getAdd');
		Route::post('/store','RecipeController@postAdd');
		Route::post('/related/save/{recipe_id}','RecipeController@postAddrelated');
		Route::post('/related-product/save/{product_id}','RecipeController@postAddrelatedpro');
		Route::get('/edit/{recipe_id}','RecipeController@getrecipe');
	    Route::put('/update/{recipe_id}', 'RecipeController@putupdate');
	    Route::get('/delete/{recipe_id}', 'RecipeController@getdelete');
	    Route::get('/related/del/{id}', 'RecipeController@getdel');
	    Route::get('/related-product/del/{id}', 'RecipeController@getdelpro');

	});

    Route::group(['prefix' => 'pages'], function () {
		Route::get('/','PageController@getPages');
		Route::get('/add','PageController@getAdd');
		Route::post('/store','PageController@postAdd');
		Route::get('/edit/{page_id}','PageController@getpage');
	    Route::put('/update/{page_id}', 'PageController@putupdate');
	    Route::get('/delete/{page_id}', 'PageController@getdelete');

	});
	 Route::group(['prefix' => 'brands'], function () {
		Route::get('/','BrandController@getbrands');
		Route::get('/add','BrandController@getAdd');
		Route::post('/store','BrandController@postAdd');
		Route::get('/edit/{brand_id}','BrandController@getbrand');
	    Route::put('/update/{brand_id}', 'BrandController@putupdate');
	    Route::get('/delete/{brand_id}', 'BrandController@getdelete');

	});
	  Route::group(['prefix' => 'kids-corner'], function () {
		Route::get('/','KidsController@getkidscorner');
		Route::get('/add','KidsController@getAdd');
		Route::post('/store','KidsController@postAdd');
		Route::get('/edit/{kids_id}','KidsController@getkids');
	    Route::put('/update/{kids_id}', 'KidsController@putupdate');
	    Route::get('/delete/{kids_id}', 'KidsController@getdelete');

	});
	   Route::group(['prefix' => 'products'], function () {
		Route::get('/','ProductController@getproducts');
		Route::get('/add','ProductController@getAdd');
		Route::post('/store','ProductController@postAdd');
		Route::post('/related/save/{product_id}','ProductController@postAddrelated');
	    Route::get('/related/del/{id}', 'ProductController@getdelpro');
		Route::get('/edit/{product_id}','ProductController@getproduct');
	    Route::put('/update/{product_id}', 'ProductController@putupdate');
	    Route::get('/delete/{product_id}', 'ProductController@getdelete');

	});
	   Route::group(['prefix' => 'deals'], function () {
		Route::get('/','DealController@getdeals');
		Route::get('/add','DealController@getAdd');
		Route::post('/store','DealController@postAdd');
		Route::get('/edit/{deal_id}','DealController@getdeal');
	    Route::put('/update/{deal_id}', 'DealController@putupdate');
	    Route::get('/delete/{deal_id}', 'DealController@getdelete');

	});
	   Route::group(['prefix' => 'banners'], function () {
		Route::get('/','BannerController@getbanners');
		Route::get('/add','BannerController@getAdd');
		Route::post('/store','BannerController@postAdd');
		Route::get('/edit/{banner_id}','BannerController@getbanner');
	    Route::put('/update/{banner_id}', 'BannerController@putupdate');
	    Route::get('/delete/{banner_id}', 'BannerController@getdelete');

	});

	  Route::group(['prefix' => 'side-banners'], function () {
		Route::get('/','SideBannerController@getbanners');
		Route::get('/add','SideBannerController@getAdd');
		Route::post('/store','SideBannerController@postAdd');
	    Route::get('/delete/{side_banner_id}', 'SideBannerController@getdelete');

	});

	   Route::group(['prefix' => 'mid-banners'], function () {
		Route::get('/','MidBannerController@getbanners');
		Route::get('/add','MidBannerController@getAdd');
		Route::post('/store','MidBannerController@postAdd');
	    Route::get('/delete/{mid_banner_id}', 'MidBannerController@getdelete');

	});

    
});

   