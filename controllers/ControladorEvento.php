<?php

require_once('./models/modeloEvento.php');

class ControladorEvento
{
    private $modelo;

    public function __CONSTRUCT()
    {
        $this->modelo = new modeloEvento();
    }
    public function Index()
    {
        //require_once './views/includes/header.php';
        require_once './admin/views/events.php';
    }
    public function Crud()
    {
        $entidadEvento = new modeloEvento();
        if (isset($_REQUEST['event_id'])) {
            $entidadUsuario = $this->modelo->Obtener($_REQUEST['event_id']);
        }

        //require_once './views/header.php';
        //require_once './views/users/admin.php';
    }
    public function Guardar()
    {
        $entidadEvento = new modeloEvento();

        $entidadEvento->name  = $_REQUEST['name'];
        $entidadEvento->description  = $_REQUEST['description'];
        $entidadEvento->venue    = $_REQUEST['venue'];
        $entidadEvento->date    = $_REQUEST['date'];

        $this->modelo->Registrar($entidadEvento);
        header('Location: ./views/users/login.php');
    }

    public function Eliminar()
    {
        //echo $_REQUEST['user_id'] . 'eliminar';
        //exit();
        $this->modelo->Eliminar($_REQUEST['event_id']);
        header('Location: ./Core.php?c=evento');
    }
}