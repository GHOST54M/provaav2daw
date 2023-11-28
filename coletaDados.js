document.addEventListener('DOMContentLoaded', function () {

        var xhr = new XMLHttpRequest();
        var urlAtual = window.location.href;
        var urlClass = new URL(urlAtual);
        var idsala = urlClass.searchParams.get("idsala");

    xhr.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {

            var data = JSON.parse(this.responseText);
            var tableBody = document.createElement('tbody');
            data.forEach(function (row) {
                var tr = document.createElement('tr');
                if(row.salaprova == idsala)
                    {
                        tr.innerHTML = '<td>' + row.idcandidato + '</td>' +
                                       '<td>' + row.nome + '</td>' +
                                       '<td>' + row.cpf + '</td>' +
                                       '<td>' + row.email	+ '</td>';
                        tableBody.appendChild(tr);
                    }

            });

            document.querySelector('table').appendChild(tableBody);
        }
    };
    xhr.open('GET', 'coletarDadosDaSala.php', true);
    xhr.send();
});
