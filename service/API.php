<?php

require_once("Rest.php");
//require_once("persistence/UserDAO.php");
require_once("model/User.php");

/**
 * This class is a layer which implements REST APIs.
 */
class API extends REST
{
	// codes used in the response
	const CODE_SUCCESS = 1;
	const CODE_FAILURE_GENERAL = -1;
	const CODE_FAILURE_WRONG_GET_METHOD = -2;
	const CODE_FAILURE_WRONG_POST_METHOD = -2;
	const CODE_FAILURE_INVALID_PARAMETERS = -3;
	const CODE_FAILURE_UNAUTHORIZED = -4;

	// consts for status
	const STATUS_SUCCESS = "Success";
	const STATUS_FAILURE = "Failure";

	// HTTP elements constants
	const HTTP_GET = "GET";
	const HTTP_POST = "POST";

	// HTTP code constants
	const HTTP_CODE_NOT_ACCEPTABLE = 406;
	const HTTP_CODE_BAD_REQUEST = 400;
	const HTTP_CODE_UNAUTHORIZED = 401;
	const HTTP_CODE_OK = 200;
	
	public $data = "";

	public function __construct()
	{
		ini_set('html_errors', '0');
		// Init parent contructor
		parent::__construct();
		// instantiate log
		//$this->logger = Logger::getLogger(__CLASS__);
//		if (!file_exists("database/queueManager.sqlite")) {
//			$this->create();
//		}
	}

	/**
	 * Public method to access api.
	 * This method dynamically calls the method based on the query string
	 */
	public function processApi()
	{
		// Array of methods that demands logged admin's permitions to be executed
		$_ADMIN_API = array("");			

		$func = strtolower(trim(str_replace("/","",$_REQUEST['func'])));
		$authorized = false;
		
		// Admin Functions
		//if (in_array($func, $_ADMIN_API) ) {
			$authorized = true;
		//}
		
		
		if($authorized)
		{ 
			if((int)method_exists($this,$func) > 0)
			{
				$this->$func();
			}
			else
			{
				$this->response('',404);
			}
		}
	 	else {
	 		// If the method not exist with in this class, response would be "Page not found".
	 		$this->response($this->json($this->createResponseArrayMessageForUnauthorized()), API::HTTP_CODE_UNAUTHORIZED);
 		}
	}
	
	private function registerUser(){

		if($this->get_request_method() != API::HTTP_POST)
		{
			$this->response($this->json($this->createResponseArrayMessageForPostError()),API::HTTP_CODE_NOT_ACCEPTABLE);
		}
		else
		{
			$user = json_decode($this->_request[0]);
			//|
			//echo "TESTE";
			var_dump($this->_request);
			var_dump($user);
			
			if($user)
			{
				$userDAO = new UserDAO();
				$registeredUser = $userDAO->getByEmail($user->getEmail);

				if($registeredUser)
				{
					$message = $this->createResponseArrayMessage(API::STATUS_FAILURE, "User is already registered", API::CODE_FAILURE_INVALID_PARAMETERS);
					$this->response($this->json($message),API::HTTP_CODE_OK);
				}
				else {

					//$result=$ConnectionFactory->update($guicheDTO);
					$message = $this->createResponseArrayMessage(API::STATUS_SUCCESS, "Success", API::CODE_SUCCESS);
					$this->response($this->json($message), API::HTTP_CODE_OK);
				}
			}
			else
			{
				$message = $this->createResponseArrayMessage(API::STATUS_FAILURE, "User is empty", API::CODE_FAILURE_INVALID_PARAMETERS);
				$this->response($this->json($message),API::HTTP_CODE_OK);
			}
		}

	}



	/**
	 * Creates a standard response message for error
	 * @param array $result content to be included in Error Message
	 */
	private function createResponseArrayMessageForError($result) {
		$error=NULL;
		if(is_array($result->error))
		{
			foreach ($result->error as $value) {
				$error.=$value."\n";
			}
		}
		else
		{
			$error=$result->error;
		}
		// If invalid inputs "Bad Request" status message and reason
		$message = array('status' => API::STATUS_FAILURE, "message" => $error, "code" => API::CDDE_FAILURE_GENERAL);
		$this->response($this->json($message), API::HTTP_CODE_BAD_REQUEST);
	}
	
	/**
	 * Create a standard error message when the request is not authorized.
	 */
	private function createResponseArrayMessageForUnauthorized() {
		return $this->createResponseArrayMessage(API::STATUS_FAILURE, "A requisição não foi autorizada.", API::CODE_FAILURE_UNAUTHORIZED);
	}

	/**
	 * Create a standard error message when GET was supposed to be used to call the service.
	 */
	private function createResponseArrayMessageForGetError() {
		return $this->createResponseArrayMessage(API::STATUS_FAILURE, "A requisição deve ser feita utilizando GET.", API::CODE_FAILURE_WRONG_GET_METHOD);
	}

	/**
	 * Create a standard error message when POST was supposed to be used to call the service.
	 */
	private function createResponseArrayMessageForPostError() {
		return $this->createResponseArrayMessage(API::STATUS_FAILURE, "A requisição deve ser feita utilizando POST.", API::CODE_FAILURE_WRONG_POST_METHOD);
	}

	/**
	 * Create standard array message put in the response.
	 *
	 * @param String $status Status message.
	 * @param String $message Message.
	 * @param int $code Code of the service response.
	 * @param array $items Optional items to be sent with the response.
	 *
	 * @return Returns a message built with the entered parameters.
	 */
	private function createResponseArrayMessage($status, $message, $code, $items = null) {
		$messageArray = array();
		
		$messageArray["status"] = $status;
		$messageArray["message"] = $message;
		$messageArray["code"] = $code;
		if ($items != null) {
			$messageArray["items"] = $items;
		}
		
		return $messageArray;
	}

	//Encode array into JSON
	private function json($data)
	{
		if(is_array($data)){
			return json_encode($data);
		}
	}
}

// Initiate Library
$api = new API;
$api->processApi();