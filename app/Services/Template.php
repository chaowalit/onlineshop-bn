<?php

namespace App\Services;
use Illuminate\Support\Facades\Config;

class Template {

	public function settingSideBar($menu_name){

	}

	public function settingHeaderTitle($menu_name){

		switch ($menu_name) {
		 	case 'profile_setting':
		 		$menu = array(
					'title' => "Profile & Setting",
					'desc'  => "",
					'icon'  => "fa fa-cog",
					'navigator' =>array(
						0 => 'Profile & Setting',
					),
	 			);

		 	break;
		 	case 'dashboard':
		 		$menu = array(
					'title' => "Dashboard",
					'desc'  => "",
					'icon'  => "fa fa-dashboard",
					'navigator' =>array(
						0 => 'Dashboard',
					),
	 			);

		 	break;
	 	}

	 	return $menu;
	}

}

?>