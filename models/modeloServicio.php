<?php

class modeloServicio
{
    private $pdo;

    public $service_id;
    public $name;
    public $description;
    public $price;

    public function __CONSTRUCT()
    {
        try {
            $this->pdo = Database::StartUp();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Listar()
    {
        try {
            $result = array();
            $sql = "SELECT * from service;";
            $stm = $this->pdo->prepare($sql);
            $stm->execute();

            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Obtener($id)
    {
        try {
            $stm = $this->pdo->prepare("SELECT * FROM service WHERE service_id = ?");

            $stm->execute(array($id));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Eliminar($id)
    {
        try {
            $stm = $this->pdo
                ->prepare("DELETE FROM service WHERE service_id = ?");

            $stm->execute(array($id));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Actualizar($data)
    {
        try {
            $sql = "UPDATE service SET
							  service.name = ?,
								service.description = ?,
								service.price = ?
				    WHERE service.service_id = ?";
            $this->pdo->prepare($sql)->execute(
                array(
                    $data->name,
                    $data->description,
                    $data->price,
                    $data->service_id
                )
            );
        } catch (EXCEPTION $e) {
            $error = $e->getMessage();
            echo "<h2>" . $error . "</h2>";
            die($e->getMessage());
        }
    }

    public function Registrar($data)
    {
        //print_r($data);
        //exit();
        $_SESSION['errMsg'] = 0;

        try {

            $sql = "INSERT INTO service (service.name, service.description, service.price)
		        VALUES (?, ?, ?)";
            $this->pdo->prepare($sql)->execute(
                array(
                    $data->name,
                    $data->description,
                    $data->price
                )
            );
        } catch (EXCEPTION $e) {
            if ($e) {
                $_SESSION['errMsg'] = 1;
            }
        }
    }
}