<?php

require_once('./models/modeloUsuario.php');

class ControladorAdministrador
{
    private $modelo;

    public function __CONSTRUCT()
    {
        $this->modelo = new modeloUsuario();
    }
    public function Index()
    {
        //require_once './views/includes/header.php';
        require_once './admin/views/users.php';
    }
    public function Crud()
    {
        $entidadUsuario = new modeloUsuario();
        if (isset($_REQUEST['user_id'])) {
            $entidadUsuario = $this->modelo->Obtener($_REQUEST['user_id']);
        }

        //require_once './views/header.php';
        //require_once './views/users/admin.php';
    }

    public function Guardar()
    {
        $entidadUsuario = new modeloUsuario();

        $entidadUsuario->name  = $_REQUEST['name'];
        $entidadUsuario->email  = $_REQUEST['email'];
        $entidadUsuario->password    = $_REQUEST['password'];
        $entidadUsuario->confirmPassword    = $_REQUEST['confirm_password'];

        $this->modelo->Registrar($entidadUsuario);
        header('Location: ./views/users/login.php');
    }

    public function Eliminar()
    {
        //echo $_REQUEST['user_id'] . 'eliminar';
        //exit();
        $this->modelo->Eliminar($_REQUEST['user_id']);
        header('Location: ./core.php?gui=usuario');
    }
}