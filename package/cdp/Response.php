<?php
/**
 * Created by PhpStorm.
 * User: viniciusthiengo
 * Date: 8/2/15
 * Time: 9:21 PM
 */

class Response {
    public $code;
    public $status;
    public $message;


    function __construct($code=0, $status=false, $message=null)
    {
        $this->code = $code;
        $this->status = $status;
        $this->message = $message;
    }


}