<?php
//favour composition over inheritance
//if you constantly want to inherit things you should use composition instead
abstract class Mailer {
	public function send($to, $from, $body) {

	}

}

class UserMailer extends Mailer {

	public function sendWelcomeEmail(User $user) {
		return $this->send($user->email);
	}

}

?>