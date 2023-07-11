window.addEventListener('load', function () {
    function sendData() {
        var myContext = document.getElementById("canvas");
        myContext.remove();
        var newCanvas = document.createElement("canvas");
        newCanvas.id = "canvas";
        document.body.appendChild(newCanvas);
        myContext = document.getElementById("canvas");
        try {
            xhr = new ActiveXObject('Msxm12.XMLHTTP');
        } catch (e) {
            try {
                xhr = new ActiveXObject('Microsoft.XMLHTTP');
            } catch (e1) {
                try {
                    xhr = new XMLHttpRequest();
                } catch (e2) {
                    xhr = false;
                }
            }
        }
        var formData = new FormData(form);
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4) {
                if (xhr.status == 200) {
                    var retour = JSON.parse(xhr.responseText);

                    var myChartConfig = {
                        type: 'line',
                        data: {
                            labels: retour['x'],
                            datasets: [{
                                data: retour['y']
                            }]
                        }
                    }
                    var myChart = new Chart(myContext, myChartConfig);
                }
            }
            else {
            }
        };
        xhr.addEventListener("error", function (event) {
            alert('Oups! quelque chose s\'est mal passw.');
        });
        xhr.open("POST", "http://localhost/Projet_24h/inc/getOccupation.php");
        xhr.send(formData);
    }
    var form = this.document.getElementById("login");
    form.addEventListener("submit", function (event) {
        event.preventDefault();
         sendData();
    });
});