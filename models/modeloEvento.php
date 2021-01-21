<?php
class modeloEvento
{
    private $pdo;

    public $event_id;
    public $name;
    public $description;
    public $venue;
    public $date;

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
            $sql = "SELECT * from event";
            $stm = $this->pdo->prepare($sql);
            $stm->execute();

            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function Obtener($event_id)
    {
        try {
            $stm = $this->pdo->prepare("SELECT * FROM event WHERE event_id = ?");

            $stm->execute(array($event_id));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function Eliminar($event_id)
    {
        try {
            $stm = $this->pdo
                ->prepare("DELETE FROM event WHERE event_id = ?");

            $stm->execute(array($event_id));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function Actualizar($data)
    {
        try {
            $sql = "UPDATE event SET
							    event.name = ?,
								event.description = ?,
								event.venue = ?,
                                event.date = ?
				    WHERE event.event_id = ?";
            $this->pdo->prepare($sql)->execute(
                array(
                    $data->name,
                    $data->description,
                    $data->venue,
                    $data->date,
                    $data->event_id
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

            $sql = "INSERT INTO event (event.name, event.description, event.venue, event.date)
		            VALUES (?, ?, ?, ?)";
            $this->pdo->prepare($sql)->execute(
                array(
                    $data->name,
                    $data->description,
                    $data->venue,
                    $data->date
                )
            );
        } catch (EXCEPTION $e) {
            if ($e) {
                $_SESSION['errMsg'] = 1;
            }
        }
    }
}