<?php
namespace App\Http\Controllers\profile_setting;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\OshController;

class ProfileSettingController extends OshController
{

    public function __construct()
    {
        
    }

    public function index(){

    	$data = array(

		);
    	parent::render_view('profile_setting.profile_setting', $data, 'profile_setting', 1);
    }

    public function uploads_img_profile(){
        $res = uploads_image('profile_img', 'uploads/users/');
        if($res['success']){
            //dd($res['path']); die;
        }
        return \Response::json($res);
    }
}

?>