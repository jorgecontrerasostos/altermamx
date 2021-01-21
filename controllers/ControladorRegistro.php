<?php

require_once('./models/modeloRegistro.php');

class ControladorRegistro
{
    private $modelo;
    public function __CONSTRUCT()
    {
        $this->modelo = new modeloRegistro();
    }
    public function Index()
    {
        //require_once './views/includes/header.php';
        require_once './admin/views/registeredUsersEvents.php';
    }
    public function Crud()
    {
        $entidadRegistro = new modeloRegistro();
        if (isset($_REQUEST['userEvent_id'])) {
            $entidadRegistro = $this->modelo->Obtener($_REQUEST['userEvent_id']);
        }

        //require_once './views/header.php';
        require_once './views/users/registeredUsersEvents.php';
    }
}