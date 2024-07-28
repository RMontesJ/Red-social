<?php 

class DB
{
    private $dbhost = 'localhost';
    private $dbuser = 'Rafa';
    private $dbpasswd = "1234";
    private $dbname = "red_social";

    private $conexion;

    public function __construct()
    {
        $this->conexion = new mysqli($this->dbhost, $this->dbuser, $this->dbpasswd, $this->dbname);
        $this->conexion->select_db($this->dbname);
        $this->conexion->query("SET NAMES 'utf8'");
        if (!$this->conexion) {
            die("Error de conexion: " . mysqli_connect_error());
        }

    }

    public function login($user, $passwd)
    {
        $query = mysqli_query($this->conexion, "SELECT * FROM usuario where nombre = $user and contrasena = $passwd");
        $num = mysqli_num_rows($query);
        if ($num == 1) {
            $row = mysqli_fetch_assoc($query);
            $id = $row['id'];
            return $id;
        } else {
            header("Location: ../pages/login.php");
        }
    }

    public function createUser($user,$password, $status){
        $insertar = "INSERT INTO usuario (nombre, contrasena, estado) VALUES ('$user', '$password', '$status')";

        if (mysqli_query($this->conexion, $insertar)) {
            header("Location: ../pages/login.php");
            exit();
        } else {
            echo "Error: " .mysqli_error($this->conexion);
        }
    }
//metodo borrar
    public function deleteUser($id){
        $borrar = "DELETE FROM usuario WHERE id= '$id'";

        if (mysqli_query($this->conexion, $borrar)) {
            header("Location: ../pages/login.php");
            exit();
        } else {
            echo "Error: " .mysqli_error($this->conexion);
        }
    }

}

?>