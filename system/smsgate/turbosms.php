<?php
final class Turbosms extends SmsGate {
	public function send() {
		$client = new SoapClient ('http://turbosms.in.ua/api/wsdl.html');

		$credentials = Array ( 
			'login' => $this->username, 
			'password' => $this->password 
		); 

		$auth = $client->Auth($credentials); 
		
		if($this->to && $this->copy){
			$numbers = $this->to . ',' . $this->copy;
		}elseif($this->to){
			$numbers = $this->to;
		}else{
			$this->log->write('Error: Turbo SMS Phone destination not found!');
			$numbers = false;
		}

		if($this->from){
			$sender = $this->from;
		}else{
			$sender = false;
			$this->log->write('Error: Sender not set!');
		}

		if($auth && $numbers){
			$sms = Array ( 
				'sender' => $sender, 
				'destination' => $numbers, 
				'text' => $this->message 
			); 

			$result = $client->SendSMS($sms);
			
		return $result;
		
		}else{
			$this->log->write('Error: Turbo SMS Authentication failed!');
		}
	}
}
?>