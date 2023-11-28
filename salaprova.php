<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de sala</title>
  <style>
        .tabela, .containeer{
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 30px;
        }
        .formularios{
            width: 1260px;
            margin-top: 30px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }
        .formulario{
            display: flex;
            flex-direction: column;
            background-color: dimgray;
        }
        .formulario > input{
            margin: 10px 20px 20px 20px;
            padding: 5px;
            border-radius: 15px;
        }
        .formulario > label{
            font-size: 25px;
            border-left: 3px solid black;
            padding-left: 6px;
            margin-left: 15px;
        }
</style>
</head>
<body>
<form>

</form>
    <section class="tabela">
    <h2>Lista de Candidatos da sala<p id="tipodeprova"></p></h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Email</th>
        </tr>
    </table>
    </section>
  <section class="containeer">
        <section class="formularios">
            <form id="formRemover" class="formulario">
                <h2>Remover Candidato</h2>
                <br>
                <label for="idRemover">ID do candidato:</label>
                <input type="number" id="idRemover" required>
                <br>
                <button type="button" onclick="removerDados()">Remover Candidato</button>
            </form>

            <form id="formEditar" class="formulario">
  
            <h2>Editar Sala do Candidato</h2>
            <br>
                <label for="idEditar">ID para ser editado:</label>
                <br>
                <input type="number" id="idEditar" required>
                <br>
                <label for="novasala">Nova Sala:</label>
                <input type="email" id="novoSala" required>
                <br>
                <button type="button" onclick="editarUsuario()">Editar Candidato</button>
            </form>
        
            <script src="script2.js?idsala"></script>
        </section>
    </section>
    <script src="coletaDados.js?idsala"></script>
       <br>
    <a href="index.html" class="voltar">Voltar</a>
</body>
</html>
