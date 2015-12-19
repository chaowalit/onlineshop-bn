<?php

namespace App\Services;
use Illuminate\Support\Facades\Config;

class Template {

	public function settingSideBar($menu_nav, $menu_level){

	}

	public function settingHeaderTitle($menu_nav, $menu_level){
		$menu_name = explode('->', $menu_nav);
		switch ($menu_name[0]) {
		 	case 'profile_setting':
		 	//----------------------------------------------------------
		 		$list_navigator = array(
	 				'profile_setting' => "Profile & Setting",
		 		);
		 		$navigator = array();
		 		foreach ($menu_name as $key => $value) {
		 			array_push($navigator, $list_navigator[$value]);
		 		}
	 		//----------------------------------------------------------
		 		$list_url = array(
	 				'profile_setting' => "/profile_setting",
	 			);
	 			$url = array();
	 			foreach ($menu_name as $key => $value) {
		 			array_push($url, $list_url[$value]);
		 		}
 			//----------------------------------------------------------
		 		$menu = array(
					'title'      => "Profile & Setting",
					'desc'       => "",
					'icon'       => "fa fa-cog",
					'menu_level' => $menu_level,
					'js_path'    => "assets/js/profile_setting.js",
					'css_path'   => "assets/css/profile_setting.css",
					'navigator'  => $navigator,
					'url'        => $url,
	 			);

		 	break;

		 	case 'dashboard':
	 		//----------------------------------------------------------
		 		$list_navigator = array(
	 				'dashboard' => "Dashboard",
		 		);
		 		$navigator = array();
		 		foreach ($menu_name as $key => $value) {
		 			array_push($navigator, $list_navigator[$value]);
		 		}
	 		//----------------------------------------------------------
		 		$list_url = array(
	 				'dashboard' => "/dashboard",
	 			);
	 			$url = array();
	 			foreach ($menu_name as $key => $value) {
		 			array_push($url, $list_url[$value]);
		 		}
 			//----------------------------------------------------------
		 		$menu = array(
					'title'      => "Dashboard",
					'desc'       => "",
					'icon'       => "fa fa-dashboard",
					'menu_level' => $menu_level,
					'js_path'    => "assets/js/dashboard.js",
					'css_path'   => "assets/css/dashboard.css",
					'navigator'  => $navigator,
					'url'        => $url,
	 			);

		 	break;
	 	}

	 	return $menu;
	}

}

?>