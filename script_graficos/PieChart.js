    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(dibujarGrafico);

    function dibujarGrafico() {
     //solicitud AJAX  para obtener los datos de data.php 
    fetch('script_graficos/data_PieChart.php')
    .then(response=> response.json())
    .then(data => {
                                                //crear la tabla dataTable
    var dataTable = google.visualization.arrayToDataTable(data);


     //Opciones del grafico 
     var options = {
     title: 'Cantidad de productos',
     width: 600,
     height: 400,
     pieHole: 0.4,
    };
                                                
                     //dibujar el grafico
        var chart = new google.visualization.PieChart(document.getElementById('graficoPie1'));
    chart.draw(dataTable, options);
                                    
    });   
}