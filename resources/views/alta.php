    <?php
        use App\Models\User;

        $username = $_REQUEST['username'];
        $nombre = $_REQUEST['nombre'];
        $apellidos = $_REQUEST['apellidos'];
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];

        $user = new User;
        $user->username=$username;
        $user->nombre=$nombre;
        $user->apellido=$apellidos;
        $user->email=$email;
        $user->password=$password;
        $user->save();

        header("Location: /");
        die();

    ?>
