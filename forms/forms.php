
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios</title>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <h1>Formulário</h1>
    <form class="form" action="form.php" method="POST">
        <div class="form-group">
            <input type="text" name="nome" placeholder="Nome:" class="form-control">
        </div>

        <div class="form-group">
            <input type="password" name="senha" placeholder="Senha:" class="form-control">
        </div>
        <div class="form-group">
            <input type="email" name="email" placeholder="E-mail:" class="form-control">
        </div>
        
    <div class="form-group">
        <label>
            <input type="checkbox" name="Concordo" value="SIM" class="form-control">Concordo
        </label>
    </div>

    <div class="form-group">
        <label>
            <input type="name" name="sexo" value="F">Feminino
        </label>
        <label>
            <input type="name" name="sexo" value="M">Masculino
        </label>
    </div>

    <div class="form-group">
        <select name="Estado" class="form-control">
            <option value="">Escolha o Estado</option>
            <option value="GO">Goias</option>
            <option value="SP">Sao Paulo</option>
            <option value="RJ">Rio de Janeiro</option>
        </select>
    </div>

    <div class="form-group">
        <textarea name="descricao" placeholder="descricao" cols="30" rows="10" class="form-control"></textarea>
    </div>

    <div class="form-group">
        <!-- <button type="submit" class="btn btn-sucess">Enviar</button> -->
        <input type="submit" value="Enviar"  class="btn btn-sucess">
    </div>
    </form>    
    </div>
</body>
</html>

