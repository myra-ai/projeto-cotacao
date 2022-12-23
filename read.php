<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Cotação</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <h1 class="text-center">Cotação</h1>
                <hr style="height: 1px;color: black;background-color: black;">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Transportadora</th>
                            <th>Prazo de Entrega</th>
                            <th>Valor</th>
                            <th>Altura </th>
                            <th>Largura</th>
                            <th>Comprimento</th>
                            <th>Peso</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        Class Model{

                            private $server = "localhost";
                            private $username = "root";
                            private $password;
                            private $db = "cotacao";
                            private $conn;
                            
                            public function __construct(){
                                try {
                                    
                                    $this->conn = new mysqli($this->server,$this->username,$this->password,$this->db);
                                } catch (Exception $e) {
                                    echo "connection failed" . $e->getMessage();
                                }
                            }
                            
                            public function fetch(){
                                $data = null;
                                $cep_inicio=$_POST['cep_inicio'];
                                $cep_final=$_POST['cep_final'];
                            
                            
                                $query = " SELECT nm_transportadora,prazo_entrega, valor FROM cotacao
                                INNER JOIN servicos
                                ON cotacao.id_servico = servicos.`id`
                                INNER JOIN transportadoras
                                ON servicos.id_transportadora = transportadoras.id
                                WHERE ( cep_inicio >= '$cep_inicio' AND cep_final <= '$cep_final') ";
                                if ($sql = $this->conn->query($query)) {
                                    while ($row = mysqli_fetch_assoc($sql)) {
                                        $data[] = $row;
                                    }
                                }
                                return $data;
                            
                            }
                            
                            }

                            $model = new Model();
                            $rows = $model->fetch();
                            $i = 1;
                            if(!empty($rows)){
                            foreach($rows as $row){ 
                         ?>
                        <tr>
                            
                            <td><?php echo $row['nm_transportadora']; ?></td>
                            <td><?php echo $row['prazo_entrega']; ?></td>
                            <td><?php echo $row['valor']; ?></td>
                            <td> <?php echo $_POST['altura'] ;  ?>
                            <td> <?php echo $_POST['largura'] ;  ?>
                            <td> <?php echo $_POST['comprimento'] ;  ?>
                            <td> <?php echo $_POST['peso'] ;  ?>


                        </tr>

                        <?php
                }
              }else{
                echo "Não foi encontrado no banco de dados!";
            }

              ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>