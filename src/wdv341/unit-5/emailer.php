<?php
//Emailer Class definition
class Emailer {

	private $sendTo="";
	private $sentFrom="";
	private $emailMsg="";
	private $emailSubject="";

	public function __construct()
	{
	}

	public function setSendTo($inSendTo)
	{
		$this->sendTo = $inSendTo;
	}

	public function setSentFrom($inSentFrom)
	{
		$this->sentFrom = $inSentFrom;
	}

	public function setEmailSubject($inEmailSubject)
	{
		$this->emailSubject = $inEmailSubject;	}

	public function setEmailMsg($inEmailMsg)
	{
		$inEmailMsg = htmlentities($inEmailMsg);
		$inEmailMsg = wordwrap($inEmailMsg,70,"\n");
		$this->emailMsg = $inEmailMsg;
	}

	public function getSendTo()
	{
		return $this->sendTo;
	}

	public function getSentFrom()
	{
	return $this->sentFrom;
	}

	public function getEmailSubject()
	{
		return $this->emailSubject;
	}

	public function getEmailMsg()
	{
		return $this->emailMsg;
	}

	public function sendEmail()
	{
		$headers = "From: $this->sentFrom" . "\r\n";
		echo "<h2>Headers $headers</h2>";
		echo "<h2>Message $this->emailMsg</h2>";
		return mail($this->sendTo,$this->emailSubject,$this->emailMsg,$headers);
	}
	}
?>
