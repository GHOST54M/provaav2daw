document.addEventListener('DOMContentLoaded', function () {

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {

            var data = JSON.parse(this.responseText);
            var tableBody = document.createElement('tbody');
            data.forEach(function (row) {
                var tr = document.createElement('tr');
                tr.innerHTML = '<td>' + row.idsala + '</td>' +
                               '<td>' + row.quantcandidatos	+ '</td>' +
                               '<td>' + row.tipodeprova	+ '</td>';

                tableBody.appendChild(tr);
            });
            document.querySelector('table').appendChild(tableBody);
        }
    };
    xhr.open('GET', 'coletarDados.php', true);
    xhr.send();
});
