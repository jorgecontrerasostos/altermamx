<?php

require_once('./models/modeloUsuario.php');

class ControladorUsuario
{

    private $modelo;

    public function __CONSTRUCT()
    {
        $this->modelo = new modeloUsuario();
    }

    public function Index()
    {
        //require_once './views/includes/header.php';
        require_once './views/users/register.php';
    }

    public function Crud()
    {
        $entidadUsuario = new modeloUsuario();
        if (isset($_REQUEST['id'])) {
            $entidadUsuario = $this->modelo->Obtener($_REQUEST['id']);
        }

        require_once './views/header.php';
        require_once './views/users/admin.php';
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
        $this->modelo->Eliminar($_REQUEST['user_id']);
        //header('Location: ./Core.php?c=usuario');
    }
}