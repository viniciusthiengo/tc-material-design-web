<?php
/**
 * Created by PhpStorm.
 * User: viniciusthiengo
 * Date: 8/2/15
 * Time: 8:22 PM
 */

class Contact {
    public $id;
    public $car;
    public $email;
    public $subject;
    public $message;
    public $regTime;

    const METHOD_CONTACT = 'send-contact';

    public function __construct($id=0,
                                $car=null,
                                $email=null,
                                $subject=null,
                                $message=null,
                                $regTime=0)
    {
        $this->id = $id;
        $this->car = $car;
        $this->email = $email;
        $this->subject = $subject;
        $this->message = $message;
        $this->regTime = $regTime;
    }


    public function setAllData( $jsonObject ){
        $this->car = new Car($jsonObject->car->id);
        $this->email = !empty($jsonObject->contact->email) ? $jsonObject->contact->email : 'viniciusthiengo@gmail.com' ;
        //$this->email = $jsonObject->contact->email;
        $this->subject = $jsonObject->contact->subject;
        $this->message = $jsonObject->contact->message;
        $this->regTime = time();
    }
}