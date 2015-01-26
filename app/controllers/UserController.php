<?php
class UserController extends BaseController {

	public function loginAccess()
	{
		$input = Input::only('email', 'nickname', 'password');
		$rules = array(
	        'email' => 'required|email',
	        'password' => 'required|min:6'
	  	);
	    	$messages = array(
	        'email' => '올바른 형태의 이메일이 아닙니다.',
	        'min' => '비밀번호는 6자리 이상 입력해야합니다.',
	        'email_required' => '이메일을 입력하세요.',
	        'password_required' => '비밀번호를 입력하세요.'
	    	);
	    	$validation = Validator::make(Input::all(), $rules, $messages);
	    	if($validation->fails())
	    	{
	        return Redirect::to('login')->withErrors($validation)->withInput(); 
	    	} 
	    	else {
	    		if(Auth::attempt(array('email'=>$input['email'], 'password'=>$input['password'])))
	    		{
	    			return Redirect::intended('loginResult');	
	    		}
	    		else 
	    		{
	    			echo "<script>";
	    			echo "alert('비밀번호가 틀립니다.');";
	    			echo "history.back(-1);";
	    			echo "</script>";
	    		}
	    		
	    	}
	}

	public function signupUser()
	{
		$input = Input::only('email', 'nickname', 'password');
		$rules = array(
	        'email' => 'required|email',
	        'nickname' => 'required|min:6',
	        'password' => 'required|min:6'
	    );
	    $messages = array(
	        'required' => ':attribute을 입력하세요.',
	        'min' => ':attribute는 6자리 이상 입력해야합니다.',
	        'email' => '올바른 형태의 이메일이 아닙니다.',
	        'email_unique' => '이메일이 중복되었습니다.',
	        'nickname_unique' => '닉네임이 중복되었습니다.'
	    );
	    $validation = Validator::make(Input::all(), $rules, $messages);
	    	if($validation->fails())
	    	{
	     		return Redirect::to('signup')->withErrors($validation)->withInput(); 
	    	}
	    	else {
	    		$user = new myUser;
	    		$user->email = $input['email'];
	    		$user->name = $input['nickname'];
	    		$user->password = Hash::make($input['password']);
	    		$user->save();
	    		return Redirect::to('login');	
	    	} 
	}

	public function findPassword()
	{
		$input = Input::only('email', 'nickname', 'password');
		$rules = array(
	        'email' => 'required|email',
	    	);
	    	$messages = array(
	        'required' => ':attribute을 입력하세요.',
	        'email' => '올바른 형태의 이메일이 아닙니다.',
	    	);
	    	$validation = Validator::make(Input::all(), $rules, $messages);
	    	if($validation->fails())
	    	{
	     		return Redirect::to('findpassword')->withErrors($validation)->withInput(); 
	    	}
	    	else {
	    	 	return Redirect::to('findpassword');
		}
	}
	public function logoutUser()
	{
		Auth::logout();
		return Redirect::to('login');
	}
}
