<?php
	
	 //Front-end starts

    Route::get('/', 'FrontendController@index');
    Route::get('/brands-groceries', 'FrontendController@brandgroceries');
    // Route::get('/deals', 'FrontendController@deal');


   	Route::group(['prefix' => 'recipes'], function () {
	   	Route::get('/','FrontendController@getRecipesdetail');
	   	Route::get('/add','FrontendController@getAddRecipesdetail');
	   	Route::get('/{id}','FrontendController@getRecipesdetail');	
	   	Route::post('/store','FrontendController@postAdd'); 
	}); 

	Route::group(['prefix' => 'pages'], function () {
	   	Route::get('/aboutus/{id}','FrontendController@getAbout');
	   	Route::get('/product-range','FrontendController@aboutproduct');
	   	Route::get('/trivia','FrontendController@abouttrivia');
	   	Route::get('/customer-reviews','FrontendController@aboutCustomer_review');
	   	Route::get('/customer-service','FrontendController@aboutCustomer_service');
	   	Route::get('/reward-card','FrontendController@aboutReward_card');
	   	Route::get('/reward-card/definition','FrontendController@getDefinition');
	   	Route::get('/gift-card','FrontendController@aboutGift_card');
	});


	 //Front-end ends

	Route::get('/login','UserController@getMain');
	Route::post('/login', 'UserController@postLogin');

    
Route::group(['prefix' => 'admin','before' => 'auth'], function () {

	Route::get('/dashboard','BannerController@getbanners');
	Route::get('/','BannerController@getbanners');
	Route::post('/get_images','SidebarController@getImages');

	Route::group(['prefix' => 'recipes'], function () {
		Route::get('/','RecipeController@getRecipes');
		Route::get('/add','RecipeController@getAdd');
		Route::post('/store','RecipeController@postAdd');
		Route::post('/related/save/{recipe_id}','RecipeController@postAddrelated');
		Route::post('/related-product/save/{recipe_id}','RecipeController@postAddrelatedpro');
		Route::get('/edit/{recipe_id}','RecipeController@getrecipe');
	    Route::put('/update/{recipe_id}', 'RecipeController@putupdate');
	    Route::get('/delete/{recipe_id}',array('before'=>'authadmin', 'uses'=>'RecipeController@getdelete'));
	    Route::get('/related/del/{id}', 'RecipeController@getdel');
	    Route::get('/related-product/del/{id}', 'RecipeController@getdelpro');

	    Route::get('/categories','RecipeController@getCategories');
	    Route::get('/categories/add','RecipeController@addCategory');
	    Route::get('/categories/delete/{id}','RecipeController@deleteCategory');
	    Route::put('/categories/update/{id}', 'RecipeController@updateCategory');
	    Route::get('/categories/edit/{id}','RecipeController@editCategory');
	    Route::post('/categories/store','RecipeController@postCategory');
	});

	Route::group(['prefix' => 'homepage'], function () {
		Route::get('/offers','HomepageController@getOffers');
		Route::post('/offers/add','HomepageController@addOffer');
		Route::post('/offers/order','HomepageController@orderOffer');
		Route::get('/offers/delete/{id}','HomepageController@getdelete');
	});

    Route::group(['prefix' => 'pages'], function () {
		Route::get('/','PageController@getPages');
		Route::get('/add','PageController@getAdd');
		Route::post('/store','PageController@postAdd');
		Route::get('/edit/{page_id}','PageController@getpage');
	    Route::put('/update/{page_id}', 'PageController@putupdate');
	    Route::get('/delete/{page_id}',array('before'=>'authadmin', 'uses'=>'PageController@getdelete'));

	    Route::put('/addlink/{page_id}', 'PageController@postAddLink');


	});
	 Route::group(['prefix' => 'brands'], function () {
		Route::get('/','BrandController@getbrands');
		Route::get('/add','BrandController@getAdd');
		Route::post('/store','BrandController@postAdd');
		Route::get('/edit/{brand_id}','BrandController@getbrand');
	    Route::put('/update/{brand_id}', 'BrandController@putupdate');
	    Route::get('/delete/{brand_id}',array('before'=>'authadmin', 'uses'=>'BrandController@getdelete'));

	});
	  Route::group(['prefix' => 'kids-corner'], function () {
		Route::get('/','KidsController@getkidscorner');
		Route::get('/add','KidsController@getAdd');
		Route::post('/store','KidsController@postAdd');
		Route::get('/edit/{kids_id}','KidsController@getkids');
	    Route::put('/update/{kids_id}', 'KidsController@putupdate');
	    Route::get('/delete/{kids_id}',array('before'=>'authadmin', 'uses'=>'KidsController@getdelete'));

	});
	   Route::group(['prefix' => 'products'], function () {
		Route::get('/','ProductController@getproducts');
		Route::get('/add','ProductController@getAdd');
		Route::post('/store','ProductController@postAdd');
		Route::post('/related/save/{product_id}','ProductController@postAddrelated');
	    Route::get('/related/del/{id}', 'ProductController@getdelpro');
		Route::get('/edit/{product_id}','ProductController@getproduct');
	    Route::put('/update/{product_id}', 'ProductController@putupdate');
	    Route::get('/delete/{product_id}',array('before'=>'authadmin', 'uses'=>'ProductController@getdelete'));

	    Route::get('/categories','ProductController@getCategories');
	    Route::get('/categories/add','ProductController@addCategory');
	    Route::get('/categories/delete/{id}','ProductController@deleteCategory');
	    Route::put('/categories/update/{id}', 'ProductController@updateCategory');
	    Route::get('/categories/edit/{id}','ProductController@editCategory');
	    Route::post('/categories/store','ProductController@postCategory');
	});
	   Route::group(['prefix' => 'deals'], function () {
		Route::get('/','DealController@getdeals');
		Route::get('/add','DealController@getAdd');
		Route::post('/store','DealController@postAdd');
		Route::get('/edit/{deal_id}','DealController@getdeal');
	    Route::put('/update/{deal_id}', 'DealController@putupdate');
	    Route::get('/delete/{deal_id}',array('before'=>'authadmin', 'uses'=>'DealController@getdelete'));

	});

	  Route::group(['prefix' => 'stores'], function () {
		Route::get('/','StoreController@getStores');
		Route::get('/add','StoreController@getAdd');
		Route::post('/store','StoreController@postAdd');
		Route::get('/edit/{store_id}','StoreController@getStore');
	    Route::put('/update/{store_id}', 'StoreController@putupdate');
	    Route::get('/delete/{store_id}',array('before'=>'authadmin', 'uses'=>'StoreController@getdelete'));

	});


	    Route::group(['prefix' => 'banners'], function () {
		Route::get('/','BannerController@getbanners');
		Route::get('/add','BannerController@getAdd');
		Route::post('/store','BannerController@postAdd');
		Route::post('/saveorder','BannerController@postOrder');
		Route::get('/edit/{banner_id}','BannerController@getbanner');
	    Route::put('/update/{banner_id}', 'BannerController@putupdate');
	    Route::get('/delete/{banner_id}',array('before'=>'authadmin', 'uses'=>'BannerController@getdelete'));

	});

	  Route::group(['prefix' => 'side-banners'], function () {
		Route::get('/','SideBannerController@getbanners');
		Route::get('/add','SideBannerController@getAdd');
		Route::post('/store','SideBannerController@postAdd');
		Route::post('/saveorder','SideBannerController@postOrder');
	    Route::get('/delete/{side_banner_id}',array('before'=>'authadmin', 'uses'=>'SideBannerController@getdelete'));

	});

	   Route::group(['prefix' => 'mid-banners'], function () {
		Route::get('/','MidBannerController@getbanners');
		Route::get('/add','MidBannerController@getAdd');
		Route::post('/store','MidBannerController@postAdd');
		Route::post('/saveorder','MidBannerController@postOrder');
	    Route::get('/delete/{mid_banner_id}',array('before'=>'authadmin', 'uses'=>'MidBannerController@getdelete'));

	});

	Route::group(['prefix' => 'media'], function () {
		Route::get('/','MediaController@getAll');
		Route::get('/add','MediaController@getAdd');
		Route::post('/store','MediaController@postAdd');
	    Route::get('/delete/{media_id}',array('before'=>'authadmin', 'uses'=>'MediaController@getdelete'));

	});

	Route::group(['prefix' => 'carousels'], function () {
		Route::get('/','CarouselController@getAll');
		Route::get('/add','CarouselController@getAdd');
		Route::post('/store','CarouselController@postAdd');
		Route::get('/{id}','CarouselController@getEdit');
		Route::put('/update/{id}','CarouselController@putUpdate');
		Route::post('/media/{id}','CarouselController@postImage');
		Route::post('/media/order/{id}','CarouselController@postSave');
	    Route::get('/delete/{media_id}',array('before'=>'authadmin', 'uses'=>'CarouselController@getdelete'));
	    Route::get('/media/delete/{media_id}',array('before'=>'authadmin', 'uses'=>'CarouselController@getdeleteImage'));
	});

	Route::group(['prefix' => 'sidebars'], function () {
		Route::get('/','SidebarController@getAll');
		Route::get('/{sidebar_id}','SidebarController@getEdit');
		Route::post('/store','SidebarController@postAdd');
		Route::post('/save/{sidebar_id}','SidebarController@postSave');
	    Route::get('/delete/{sidebar_id}',array('before'=>'authadmin', 'uses'=>'SidebarController@getdelete'));

	    //ajax
	    Route::post('/add_link/{sidebar_id}','SidebarController@addLink');
	    Route::post('/add_title/{sidebar_id}','SidebarController@addTitle');
	    Route::post('/add_image/{sidebar_id}','SidebarController@addImage');
	    Route::post('/add_html/{sidebar_id}','SidebarController@addHTML');
	    Route::post('/add_carousel/{sidebar_id}','SidebarController@addCarousel');
	    Route::post('/remove/{sidebar_id}','SidebarController@removeItem');

	});

	Route::group(['prefix' => 'members'], function () {
		Route::get('/','MemberController@getMembers');
		Route::get('/add','MemberController@getAdd');
		Route::post('/store','MemberController@postAdd');
		Route::get('/edit/{member_id}','MemberController@getmember');
	    Route::put('/update/{member_id}', 'MemberController@putupdate');
	    Route::get('/delete/{member_id}',array('before'=>'authadmin', 'uses'=>'MemberController@getdelete'));

	});

    Route::get('/logout', function(){
		Auth::logout();
		return Redirect::to('/');
	});

    
});

Route::get('/{page_slug}', 'FrontendController@pages');

   