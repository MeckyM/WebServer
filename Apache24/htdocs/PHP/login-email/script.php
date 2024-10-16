<?php


    extract($_POST);
    if(isset($_POST["Entrar"]))
    {
        include_once("conect.php");
        $obj = new conect();
        $resultado = $obj->ConectarBanco();

        echo $sql = "SELECT * FROM Usuario WHERE login  = '".$_POST["usuario"]."' AND Senha = '".$_POST["senha"]."';";
		
		$query = $resultado->prepare($sql);
		$indice = 0;
		if($query->execute())
		{
            while($linha = $query->fetch(PDO::FETCH_ASSOC))
			{
				$linhas[$indice] = $linha;
                print_r($linhas);
            }
        }


        header("location: style.css");
    }

?>