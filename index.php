<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Projeto Cotação</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="jquery-1.2.6.pack.js"></script>
    <script type="text/javascript" src="jquery.maskedinput-1.1.4.pack.js"></script>

</head>

<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js">
    </script>
    <div class="container bg-primary" style="width:5000px;height:100px;">
        <h4 class="display-4 text-white">Clube envios</h4><br> <br>
    </div>
    <form action="read.php" method="POST">
        <div class="container" style=" box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2);">

            <div class="row">
                <div class="form-group col">
                    <label for="cep_inicio"><strong>CEP inicial:</strong></label>
                    <input type="text" class="form-control" id="cep_inicio" name="cep_inicio" required>
                </div>
                <div class="form-group col">
                    <label for="cep_final"><strong>CEP final:</strong></label>
                    <input type="text" class="form-control" id="cep_final" name="cep_final" required>
                </div>
            </div>

            <div class="row">
                <div class="form-group col">
                    <label for="altura"><strong>Altura:</strong></label>
                    <input type="number" class="form-control" id="altura" name="altura" step=0.01 required>
                </div>
                <div class="form-group col">
                    <label for="largura"><strong>Largura:</strong></label>
                    <input type="number" class="form-control" id="largura" name="largura" step=0.01 required>
                </div>
                <div class="form-group col">
                    <label for="comprimento"><strong>Comprimento:</strong></label>
                    <input type="number" class="form-control" id="comprimento" name="comprimento" step=0.01 required>
                </div>
                <div class="form-group col">
                    <label for="peso"><strong>Peso:</strong></label>
                    <input type="number" class="form-control" id="peso" name="peso" step=0.01 required>
                </div>
                <div class="form-group col">
                    <label for="valor"><strong>Valor declarado:</strong></label>
                    <input type="number" class="form-control" id="valor" name="valor" step=0.01 required>
                </div>
            </div>
            <input class="btn btn-primary w-100" type="submit" name="calcular" step=0.01 value="Calcular" required>
        </div>
    </form>


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js">


    </script>
    <script>
    $(document).ready(function() {
        var $seuCampoCepInicio = $("#cep_inicio");
        var $seuCampoCepFim = $("#cep_final");

        $seuCampoCepInicio.mask('000000000', {
            reverse: true
        });

        $seuCampoCepFim.mask('000000000', {
            reverse: true
        });
    });
    </script>
</body>

</html>