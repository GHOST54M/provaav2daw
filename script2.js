document.addEventListener('DOMContentLoaded', function () {

    window.inserirDados = function () {
        var nome = document.getElementById('nome').value;
        var cpf = document.getElementById('cpf').value;
        var email = document.getElementById('email').value;
        var saladeprova = document.getElementById('saladeprova').value;

        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                console.log("Dados inseridos com sucesso!");

            }
        };
        xhr.open('POST', 'inserirDadosCandidato.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.send('nome=' + encodeURIComponent(nome) + '&email=' + encodeURIComponent(email) + '&cpf=' + encodeURIComponent(cpf) + '&saladeprova=' + encodeURIComponent(saladeprova));
        location.reload();
    };


    window.removerDados = function () {
        var idRemover = document.getElementById('idRemover').value;

        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                console.log("Dados removidos com sucesso!");

            }
        };
        xhr.open('POST', 'removerDadosCandidato.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.send('id=' + encodeURIComponent(idRemover));
        location.reload();
    };


    window.editarUsuario = function () {
        var idEditar = document.getElementById('idEditar').value;
        var novoSala = document.getElementById('novoSala').value;

        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                console.log("Dados do usuário editados com sucesso!");

            }
        };
        xhr.open('POST', 'editarDadosCandidato.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.send('id=' + encodeURIComponent(idEditar) + '&novoSala=' + encodeURIComponent(novoSala));
        location.reload();
    };

    window.inserirDadosFiscal = function () {
        var nomefiscal = document.getElementById('nomefiscal').value;
        var cpffiscal = document.getElementById('cpffiscal').value;
        var saladeprovafiscal = document.getElementById('saladeprovafiscal').value;

        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                console.log("Dados inseridos com sucesso!");

            }
        };
        xhr.open('POST', 'inserirDadosFiscal.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.send('nome=' + encodeURIComponent(nomefiscal) + '&cpf=' + encodeURIComponent(cpffiscal) + '&saladeprova=' + encodeURIComponent(saladeprovafiscal));
        location.reload();
    };
});
