<?php
    class CgdCar {
        public function __construct(){}


        static public function getCars( $car )
        {
            $data = [];
            $data[0] = '';
            if( !empty($car->id) && !$car->isNewer ){
                $data[0] = 'and id < :id';
            }
            else if( !empty($car->id) && $car->isNewer ){
                $data[0] = 'and id > :id';
            }
            $data[1] = $car->isNewer ? 'asc' : 'desc';
            $data[2] = Car::MAX_CARS;

            $query = <<<SQL
                select
                  id,
                  category,
                  model,
                  brand,
                  description,
                  tel,
                  url_photo
                from
                  tcc_car
                  where
                    (
                      category = :category
                      OR
                      0 = :category
                    )
                {$data[0]}
                order by
                  id {$data[1]}
                limit
                  {$data[2]}
SQL;
            //exit( $query );

            $database = (new Database())->getConn();
            $statement = $database->prepare($query);
            $statement->bindValue(':category', $car->category, PDO::PARAM_INT);
            if( !empty($car->id) ){
                $statement->bindValue(':id', $car->id, PDO::PARAM_INT);
            }
            $statement->execute();
            $database = null;

            $carArray = [];
            while( ( $data = $statement->fetchObject() ) !== false ){
                $c = new Car();
                $c->id = $data->id;
                $c->category = $data->category;
                $c->model = $data->model;
                $c->brand = $data->brand;
                $c->description = $data->description;
                $c->tel = $data->tel;
                $c->urlPhoto = $data->url_photo;
                $c->generateImageWebPath();
                $carArray[] = $c;
            }

            return($carArray);
        }

        static public function getCarsSearch( $car, $search )
        {
            $data = [];
            $data[] = !empty($car->id) ? 'and id < :id' : '';
            //$data[] = 'limit '.Car::MAX_CARS;

            $query = <<<SQL
                select
                  *
                from
                (
                    (select
                      id,
                      category,
                      model,
                      brand,
                      description,
                      tel,
                      url_photo
                    from
                      tcc_car
                    where
                      model like :search)

                    union

                    (select
                      id,
                      category,
                      model,
                      brand,
                      description,
                      tel,
                      url_photo
                    from
                      tcc_car
                    where
                      brand like :search)
                  ) as aux
SQL;
            //exit( $query );
            $database = (new Database())->getConn();
            $statement = $database->prepare($query);
            $statement->bindValue(':search', $search->term."%", PDO::PARAM_STR);
            if( !empty($car->id) ){
                $statement->bindValue(':id', $car->id, PDO::PARAM_INT);
            }
            $statement->execute();
            $database = null;

            $carArray = [];
            while( ( $data = $statement->fetchObject() ) !== false ){
                $c = new Car();
                $c->id = $data->id;
                $c->category = $data->category;
                $c->model = $data->model;
                $c->brand = $data->brand;
                $c->description = $data->description;
                $c->tel = $data->tel;
                $c->urlPhoto = $data->url_photo;
                $c->generateImageWebPath();
                $carArray[] = $c;
            }

            return($carArray);
        }
    }