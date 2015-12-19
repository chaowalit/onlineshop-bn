<?php 

if (!function_exists('get_user')) {

	function get_user() {
		$auth = \Auth::user();

		$result = array(
			'id' => $auth->id,
			'prefix' => $auth->prefix,
			'first_name' => $auth->first_name,
			'last_name' => $auth->last_name,
			'tel' => $auth->tel,
			'fax' => $auth->fax,
			'address' => $auth->address,
			'line_id' => $auth->line_id,
			'facebook_url' => $auth->facebook_url,
			'twitter_url' => $auth->twitter_url,
			'instagram_url' => $auth->instagram_url,
			'googleplus_url' => $auth->googleplus_url,
			'email' => $auth->email,
			'user_img' => $auth->user_img,
			'remember_token' => $auth->remember_token,
			'created_at' => date("Y-m-d H:i:s", strtotime($auth->created_at)),
			'updated_at' => date("Y-m-d H:i:s", strtotime($auth->updated_at)),
		);

		return $result;
	}
}

if (!function_exists('showFullMonth')) {
	function showFullMonth($month, $lang = 'en') {
		if ($lang == 'en') {
			switch ($month) {
			case '1':
				$month = 'January';
				break;
			case '2':
				$month = 'February';
				break;
			case '3':
				$month = 'March';
				break;
			case '4':
				$month = 'April';
				break;
			case '5':
				$month = 'May';
				break;
			case '6':
				$month = 'June';
				break;
			case '7':
				$month = 'July';
				break;
			case '8':
				$month = 'August';
				break;
			case '9':
				$month = 'September';
				break;
			case '10':
				$month = 'October';
				break;
			case '11':
				$month = 'November';
				break;
			case '12':
				$month = 'December';
				break;
			}
			return $month;
		} else {
			switch ($month) {
			case '1':
				$month = 'มกราคม';
				break;
			case '2':
				$month = 'กุมภาพันธ์';
				break;
			case '3':
				$month = 'มีนาคม';
				break;
			case '4':
				$month = 'เมษายน';
				break;
			case '5':
				$month = 'พฤษภาคม';
				break;
			case '6':
				$month = 'มิถุนายน';
				break;
			case '7':
				$month = 'กรกฎาคม';
				break;
			case '8':
				$month = 'สิงหาคม';
				break;
			case '9':
				$month = 'กันยายน';
				break;
			case '10':
				$month = 'ตุลาคม';
				break;
			case '11':
				$month = 'พฤศจิกายน';
				break;
			case '12':
				$month = 'ธันวาคม';
				break;
			}
			return $month;
		}
	}
}

if (!function_exists('showYear')) {
	function showYear($year, $lang = 'en'){
		if ($lang == 'en') {
			return $year;
		}else{
			return ($year + 543);
		}
	}
}

if (!function_exists('uploads_image')) {
	function uploads_image($input_file, $file_path){
		try{
			$file = \Input::file($input_file);
			$input = array($input_file => $file);
			$rules = array(
				$input_file => 'required|image|max:5000'
			);
			$validator = \Validator::make($input, $rules);
			if ( $validator->fails() )
			{
				return ['success' => false, 'errors' => $validator->getMessageBag()->toArray()];
			}
			else {
				$tmpFilePath = $file_path;
				$extension = explode('.', $file->getClientOriginalName());
				$tmpFileName = time() . '-users-id-' . get_user()['id'] . '.' . $extension[(count($extension) - 1)];   //$file->getClientOriginalName();
				\Input::file($input_file)->move($tmpFilePath, $tmpFileName);
				$path = $tmpFilePath . $tmpFileName;
				return ['success' => true, 'file' => asset($tmpFilePath . $tmpFileName), 'path' => $path];
			}
		}catch(\Exception $e){
			return ['success' => false, 'errors' => $e->getMessage()];
		}

	}
}

?>