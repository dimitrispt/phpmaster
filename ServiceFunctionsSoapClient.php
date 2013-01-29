<?php
/**
 * @service ServiceFunctionsSoapClient
 */
class ServiceFunctionsSoapClient{
	/**
	 * The WSDL URI
	 *
	 * @var string
	 */
	public static $_WsdlUri='http://localhost/phpmaster/phpmaster/api/wsdlCreate_1.php?WSDL';
	/**
	 * The PHP SoapClient object
	 *
	 * @var object
	 */
	public static $_Server=null;

	/**
	 * Send a SOAP request to the server
	 *
	 * @param string $method The method name
	 * @param array $param The parameters
	 * @return mixed The server response
	 */
	public static function _Call($method,$param){
		if(is_null(self::$_Server))
			self::$_Server=new SoapClient(self::$_WsdlUri);
		return self::$_Server->__soapCall($method,$param);
	}

	/**
	 * @param string $paragraph
	 * @return int
	 */
	public function countWords($paragraph){
		return self::_Call('countWords',Array(
			$paragraph
		));
	}
}