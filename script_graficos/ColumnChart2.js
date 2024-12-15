
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(dibujarGraficocol2);

        function dibujarGraficocol2() {
            fetch('script_graficos/data_ColumnChart2.php')
            .then(response => response.json())
            .then(data => {
                var dataTable = google.visualization.arrayToDataTable(data);

                var options = {
                    title: 'Costo de Productos por Categorias',
                    hAxis: {title: 'Producto'},
                    vAxis: {title: 'Quetzales'},
                    legend: {position: 'none'},
                    bars: 'vertical',
                    colors: ['#33FF80'],
                    width: 600,
                    height: 400,
                };

                var chart = new google.visualization.ColumnChart(document.getElementById('graficocol2'));
                chart.draw(dataTable, options);
            });
        }
  