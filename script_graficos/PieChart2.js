google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(dibujarGrafico);

function dibujarGrafico() {
    // Solicitud AJAX para obtener los datos de data_PieChart.php
    fetch('script_graficos/data_PieChart.php')
    .then(response => response.json())
    .then(data => {
        // Crear la tabla dataTable
        var dataTable = google.visualization.arrayToDataTable(data);

        // Opciones del gráfico
        var options = {
            title: 'Total de inversión por categoría',
            pieHole: 0.4, // Opcional: Añade esta línea si deseas un gráfico de anillo
            width: 600,
            height: 400
        };

        // Dibujar el gráfico
        var chart = new google.visualization.PieChart(document.getElementById('graficoCol2'));
        chart.draw(dataTable, options);
    });
}