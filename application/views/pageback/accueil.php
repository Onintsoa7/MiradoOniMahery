
<!-- etat de caisse -->
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-md-7 mt-4">
            <div class="card">
                <div class="card-header pb-0 px-3">
                    <h6 class="mb-0">Etat de caisse </h6>
                </div>
                <div class="card-body pt-4 p-3">      
<!-- chart -->
                <canvas id="myChartCaisse" style="width:100% ;"></canvas>

                    <script>
                    const xValuesCaisse = ['Janvier','Fevrier','Mars','Avril','Mai','Juin','Juillet','Aout','Septembre','Octobre','Novembre','Decembre'];

                    
                    const yValuesCaisse = []
                    <?php foreach ($montant as $m) { ?>
                        yValuesCaisse.push(<?php echo $m ?>);
                    <?php } ?>


                    new Chart("myChartCaisse", {
                    type: "line",
                    data: {
                        labels: xValuesCaisse,
                        datasets: [{
                        fill: false,
                        lineTension: 0,
                        backgroundColor: "rgb(255, 0, 0)",
                        borderColor: "rgb(255, 200,200)",
                        data: yValuesCaisse
                        }]
                    },
                    options: {
                        legend: {display: false},
                        scales: {
                        yAxes: [{ticks: {min: 0, max:1000000}}],
                        }
                    }
                    });
                    </script>

                </div>
            </div>
    </div>



<!-- code -->

    <div class="row">
        <div class="col-md-7 mt-4">
            <div class="card">
                <div class="card-header pb-0 px-3">
                    <h6 class="mb-0">Code </h6>
                </div>
                <div class="card-body pt-4 p-3">      
<!-- chart -->
                <canvas id="myChartCode" style="width:100%;"></canvas>

                    <script>
                    const xValuesCode = ['Janvier','Fevrier','Mars','Avril','Mai','Juin','Juillet','Aout','Septembre','Octobre','Novembre','Decembre'];

                    
                    const yValuesCode = []
                    <?php foreach ($nombre_code as $nbr) { ?>
                        yValuesCode.push(<?php echo $nbr ?>);
                    <?php } ?>


                    new Chart("myChartCode", {
                    type: "bar",
                    data: {
                        labels: xValuesCode,
                        datasets: [{
                        fill: false,
                        lineTension: 0,
                        backgroundColor: "rgba(0,0,255,1.0)",
                        borderColor: "rgba(0,0,255,0.1)",
                        data: yValuesCode
                        }]
                    },
                    options: {
                        legend: {display: false},
                        scales: {
                        yAxes: [{ticks: {min: 0, max:100}}],
                        }
                    }
                    });
                    </script>

                </div>
            </div>
    </div>

</div>



<!-- -------------------------------------------------------------------------- -->
