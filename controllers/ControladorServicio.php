<?php

require_once('./models/modeloServicio.php');

class ControladorServicio
{
    private $modelo;

    public function __CONSTRUCT()
    {
        $this->modelo = new modeloServicio();
    }

    public function Index()
    {
        //require_once './views/includes/header.php';
        require_once './admin/views/services.php';
    }

    public function Crud()
    {
        $entidadServicio = new modeloServicio();
        if (isset($_REQUEST['service_id'])) {
            $entidadServicio = $this->modelo->Obtener($_REQUEST['service_id']);
        }

        require_once './admin/views/updateServices.php';
    }

    public function Guardar()
    {
        $entidadServicio = new modeloServicio();

        $entidadServicio->name  = $_REQUEST['name'];
        $entidadServicio->description  = $_REQUEST['description'];
        $entidadServicio->price    = $_REQUEST['price'];

        $this->modelo->Registrar($entidadServicio);
        header('Location: ./Core.php?gui=servicio');
    }
    public function Actualizar()
    {
        $entidadServicio = new modeloServicio();
        $entidadServicio->name = $_REQUEST['name'];
        $entidadServicio->description  = $_REQUEST['description'];
        $entidadServicio->price    = $_REQUEST['price'];
        $entidadServicio->service_id = $_REQUEST['service_id'];

        $this->modelo->Actualizar($entidadServicio);
        header('Location: ./Core.php?gui=servicio');
    }

    public function Eliminar()
    {
        $this->modelo->Eliminar($_REQUEST['service_id']);
        header('Location: ./Core.php?gui=servicio');
    }
}