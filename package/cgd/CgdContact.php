<?php
    class CgdContact {
        public function __construct(){}


        static public function saveContact( $contact )
        {
            $query = <<<SQL
                insert into
                  tcc_contact (id_car,
                              email,
                              subject,
                              message,
                              reg_time)
                  values(:id_car,
                          :email,
                          :subject,
                          :message,
                          :reg_time)
SQL;
            $database = (new Database())->getConn();
            $statement = $database->prepare($query);
            $statement->bindValue(':id_car', $contact->car->id, PDO::PARAM_INT);
            $statement->bindValue(':email', $contact->email, PDO::PARAM_INT);
            $statement->bindValue(':subject', $contact->subject, PDO::PARAM_INT);
            $statement->bindValue(':message', $contact->message, PDO::PARAM_INT);
            $statement->bindValue(':reg_time', $contact->regTime, PDO::PARAM_INT);
            $statement->execute();
            $database = null;

            return( $statement->rowCount() > 0 );
        }

    }