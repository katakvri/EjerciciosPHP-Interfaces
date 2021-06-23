<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<body>
    <?php
    // Clase Padre
    abstract class Operacion {
        protected $valor1;
        protected $valor2;
        protected $resultado;

        public function __construct($v1,$v2)
        {
            $this->valor1 = $v1;
            $this->valor2 = $v2;
        }

        public function imprimirResult() 
        {
            echo $this->resultado."<br>";
        }
    }
    // Suma Extension
    class Suma extends Operacion {
        protected $titulo;

        public function __construct($v1,$v2,$tit)
        {
            Operacion::__construct($v1,$v2);
            $this->titulo = $tit;
        }
        public function operar() 
        {
            echo $this->titulo;
            echo "El resultado de la suma entre ".$this->valor1." + ". $this->valor2." es: ";
            $this->resultado = $this->valor1 + $this->valor2;
        }
    }

    $suma = new Suma(15, 10, "Suma de valores: ");
    $suma->operar();
    $suma->imprimirResult();
    
    ?>
</body>
</html>