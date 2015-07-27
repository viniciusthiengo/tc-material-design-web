<?php

    class Car {
        const MAX_CARS = 4;

        const METHOD_GET = 'get-cars';
        const METHOD_SEARCH = 'get-cars-search';

        const WEB_PATH = 'http://192.168.25.221:8888/TCMaterialDesign/';

        public $id;
        public $model;
        public $brand;
        public $description;
        public $category;
        public $tel;
        public $photo;
        public $urlPhoto;
        public $isNewer;


        public function __construct($id=0,
                                    $model='',
                                    $brand='',
                                    $description='',
                                    $category=0,
                                    $tel='',
                                    $photo=0,
                                    $urlPhoto='',
                                    $isNewer=false)
        {
            $this->id = $id;
            $this->model = $model;
            $this->brand = $brand;
            $this->description = $description;
            $this->category = $category;
            $this->tel = $tel;
            $this->photo = $photo;
            $this->urlPhoto = $urlPhoto;
            $this->isNewer = $isNewer;
        }


        public function generateImageWebPath()
        {
            $this->urlPhoto = Car::WEB_PATH . 'img/car/__w-395-593-790-1185__/' . $this->urlPhoto;
        }
    }