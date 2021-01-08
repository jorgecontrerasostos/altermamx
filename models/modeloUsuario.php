<?php
//echo 'Modelo Usuario';
class modeloUsuario
{


	private $pdo;

	public $user_id;
	public $name;
	public $email;
	public $password;

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
			$sql = "SELECT user_id, name, email FROM user;";
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
			$stm = $this->pdo->prepare("SELECT * FROM user WHERE user_id = ?");

			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function Eliminar($id)
	{
		echo 'Eliminar';
		/*try {
			$stm = $this->pdo
				->prepare("DELETE FROM user WHERE user.user_id = ?");

			$stm->execute(array($id));
		} catch (Exception $e) {
			die($e->getMessage());
		}
		*/
	}
	public function Actualizar($data)
	{
		try {
			$sql = "UPDATE user SET
							  user.name = ?,
								user.email = ?,
								user.password = ?
				    WHERE user.user_id = ?";
			$this->pdo->prepare($sql)->execute(
				array(
					$data->name,
					$data->email,
					$data->password,
					$data->user_id
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

			$sql = "INSERT INTO user (user.name, user.email, user.password)
		        VALUES (?, ?, ?)";
			$this->pdo->prepare($sql)->execute(
				array(
					$data->name,
					$data->email,
					md5($data->pwd)
				)
			);
		} catch (EXCEPTION $e) {
			if ($e) {
				$_SESSION['errMsg'] = 1;
			}
		}
	}
}