<?php
    session_start();
    require_once('../../autoload.php');


    if( $_SERVER['REQUEST_METHOD'] === 'POST' ){
        $jsonObject = json_decode($_POST['jsonObject']);

        if( strcasecmp($jsonObject->method, Car::METHOD_GET) == 0 ){


            $car = new Car( is_numeric( $jsonObject->car->id ) ? $jsonObject->car->id : 0 );
            $car->category = $jsonObject->car->category;
            $car->isNewer = $jsonObject->isNewer;
            $carsArray = AplCar::getCars( $car, $search );

            $handle = fopen('data.txt', 'a');
            fwrite($handle, 'Test Retry'."\n" );
            fclose($handle);
            sleep(2);

            /*if( !$jsonObject->isNewer ){
                array_shift($carsArray);
            }*/

            header('Content-Type: application/json; charset=utf-8');
            echo json_encode( $carsArray );
        }


        else if( strcasecmp($jsonObject->method, Car::METHOD_SEARCH) == 0 ){

            $car = new Car( is_numeric( $jsonObject->car->id ) ? $jsonObject->car->id : 0 );
            $search = new Search( $jsonObject->term );
            $carsArray = AplCar::getCarsSearch( $car, $search );

            header('Content-Type: application/json; charset=utf-8');
            echo json_encode( $carsArray );
        }
    }