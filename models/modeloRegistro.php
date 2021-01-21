<?php

class modeloRegistro
{
    private $pdo;

    public $id;
    public $user;
    public $event;

    public function __CONSTRUCT()
    {
        try {
            $this->pdo = Database::StartUp();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function Obtener($userEvent_id)
    {
        try {
            $stm = $this->pdo->prepare("select r.userEvent_id as id, u.name as user, e.name as event
                                        from userEvents r, user u, event e where
                                        r.user_id = u.user_id;");

            $stm->execute(array($userEvent_id));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function Eliminar($user_id)
    {

        try {
            $stm = $this->pdo
                ->prepare("DELETE FROM userEvents WHERE userEvents.userEvent_id = ?");

            $stm->execute(array($user_id));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function Listar()
    {
        try {
            $result = array();
            $sql = "select r.userEvent_id as id, u.name as user, e.name as event
            from userEvents r, user u, event e where
            r.user_id = u.user_id;";
            $stm = $this->pdo->prepare($sql);
            $stm->execute();

            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}