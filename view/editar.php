<!DOCTYPE HTML>
<html>
<?php include("head.php") ?>

<body>
    <?php include("menu.php") ?>
    <?php require_once("../controller/ControllerEditar.php");?>
    <div class="row">
        <form method="post" action="../controller/ControllerEditar.php" id="form" name="form" onsubmit="validar(document.form); return false;" class="col-10">
            <div class="form-group">
                <input class="form-control" type="text" id="nome" name="nome" value="<?php echo $editar->getNome(); ?>" required autofocus>
                <input class="form-control" type="text" id="autor" name="autor" value="<?php echo $editar->getAutor(); ?>" required>
                <input class="form-control" type="number" id="quantidade" name="quantidade" value="<?php echo $editar->getQuantidade(); ?>" required>
                <input class="form-control" type="number" id="preco" name="preco" value="<?php echo $editar->getPreco(); ?>" required>
                <select name="flag">
                    <?php $c = $editar->getFlag();?>
                    <option value="<?php echo $editar->getFlag();?>"><?php echo  ($editar->getFlag()== 0)? "Desativado" :"Ativado" ?></option>
                    <option value="<?php echo ($c == 0)? "1" : "0" ?>"><?php echo ($editar->getFlag()!= 0)? "Desativado" :"Ativado" ?></option>
                </select>
                <input class="form-control" type="date" id="data" name="data" value="<?php echo $editar->getData(); ?>" required>
            </div>
            <div class="form-group">
                <input type="hidden" name="id" value="<?php echo $editar->getNome();?>">
                <button type="submit" class="btn btn-success" id="editar" name="submit" value="editar">Editar</button>
            </div>
        </form>
    </div>
      <script language="javascript" type="text/javascript">
        function formatarMoeda() {
            var elemento = document.getElementById('preco');
            var valor = preco.value;

            valor = valor + '';
            valor = parseInt(valor.replace(/[\D]+/g, ''));
            valor = valor + '';
            valor = valor.replace(/([0-9]{2})$/g, ",$1");

            if (valor.length > 6) {
                valor = valor.replace(/([0-9]{3}),([0-9]{2}$)/g, ".$1,$2");
            }

            elemento.value = valor;
        }



        function validar(formulario) {
            var quantidade = form.quantidade.value;
            var preco = form.preco.value;
            for (i = 0; i <= formulario.length - 2; i++) {
                if ((formulario[i].value == "")) {
                    alert("Preencha o campo " + formulario[i].name);
                    formulario[i].focus();
                    return false;
                }
            }
            if (quantidade <= 0) {
                alert('A quantidade de páginas não pode ser igual ou inferior a 0');
                form.quantidade.focus();
                return false;
            }
            if (preco <= 0) {
                alert('O preço do livro não pode ser igual ou infeiror a 0');
                form.preco.focus();
                return false;
            }
            formulario.submit();
        }

    </script>
</body>

</html>
