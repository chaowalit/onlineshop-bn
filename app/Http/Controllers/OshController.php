<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class OshController extends Controller
{
	
	public function __construct()
    {
        
    }

    public function render_view($view_path = '', $data = array(), $menu_name = '', $menu_level = 1){
		$sidebar      = app()->make('App\Services\Template')->settingSideBar($menu_name);
		$header_title = app()->make('App\Services\Template')->settingHeaderTitle($menu_name);

		$template_data = [
			"view_data"  => $data,
			"menu_name"  => $menu_name,
			"menu_level" => $menu_level,
		];
		echo view($view_path, $template_data);
    }
}
?>