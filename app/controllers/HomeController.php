<?php
use Postmark\PostmarkClient;

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function post() {
		$input['first_name'] = Input::get('first_name');
		$input['last_name'] = Input::get('last_name');
		$input['email'] = Input::get('email');
		User::create($input);
		$message = "Hello " . $input['first_name'] . ". Thanks for filling out the form. You entered the following details. First Name: " . $input['first_name'] . ". Last Name: " . $input['last_name'] . ". Email ID: " . $input['email'];
		$client = new PostmarkClient("bcaa4d98-c097-4390-a628-aec62160103d");

		$sendResult = $client->sendEmail(
  		"test@perk.com", 
  		$input['email'], 
  		"Perk offers",
  		$message);
		return 'success';
	}

}
