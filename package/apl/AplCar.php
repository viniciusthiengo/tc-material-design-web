<?php
    /*@include_once('conf/conf.php');
    @include_once('../../conf/conf.php');
    require_once(__PATH__.'/autoload.php');*/


    class AplCar {
        public function __construct(){}
        public function __destruct(){}


        static public function getCars($car )
        {
            return( CgdCar::getCars( $car ) );
        }


        static public function getCarsSearch( $car, $search )
        {
            return( CgdCar::getCarsSearch( $car, $search ) );
        }
    }