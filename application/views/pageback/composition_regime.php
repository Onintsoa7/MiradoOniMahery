<div class="container-fluid py-4">
    <div class="row">
        <div class="col-md-7 mt-4">
            <div class="card">
                <div class="card-header pb-0 px-3">
                    <h3 class="mb-0"><?php echo $nom ?> </h3>
                </div>
                <div class="card-body pt-4 p-3">      
<!-- chart -->
                <canvas id="myChart" style="width:100%; max-width:300px;"></canvas>

                    <script>
                    const xValues = [];
                    <?php foreach ($compo_nom as $cp) { ?>
                        xValues.push("<?php echo $cp ?>");
                    <?php } ?>
                        
                    const yValues = [];
                    <?php foreach ($quantite as $q) { ?>
                        yValues.push(<?php echo $q ?>);
                    <?php } ?>


                    const colors = ["rgb(199, 80, 82)","rgb(91, 80, 199)","rgb(80, 199, 111)","rgb(199, 197, 80)","rgb(80, 173, 199)"];

                    new Chart("myChart", {
                    type: "doughnut",
                    data: {
                        labels: xValues,
                        datasets: [{
                        fill: false,
                        lineTension: 0,
                        backgroundColor: colors,
                        borderColor: "rgba(0,0,255,0.1)",
                        data: yValues
                        }]
                    },
                    options: {
                        legend: {display: true},
                    }
                    });
                    </script>

                </div>
            </div>
    </div>
</div>



<!-- -------------------------------------------------------------------------- -->
