<!-- Graphics bar -->
<div class="row">

<!-- Etiqueta Div que deja espacio de 2 columnas del nabvar -->
    <div class="col-2">
    
    </div>

    <div class="col-10">
    <center>
        <div style="width: 650px; height:400px; margin-top: 25px; margin-bottom: 5px;"> <!-- etiqueta que asigna el tamaño del grafico -->
            <canvas id="myChart-bar"> </canvas> <!-- se crea etiqueta canvas para mostrar el grafico -->
        </div>
    </center>

    </div>
    
</div>

<!-- importante llamar al archivo chartjs.min.js para el grafico -->
<script src="public/javascript/chartjs.min.js"></script> 

<script>

const ctxb = document.getElementById('myChart-bar'); //hace referencia al id de la etiqueta canvas con el nombre myChart-bar

    new Chart(ctxb, { //instancia de la clase chart 
        type: 'bar', // tipo de grafico
        data: { //data del grafico
        labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio','Julio','Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'], // data de la leyenda del grafico
        datasets: [{
            label: 'Inscripciones de Alumnos Por Mes', //nombre que muestra cuando se pasa el click encima del grafico
            data: [10, 19, 3, 5, 2, 3, 20, 15, 5, 8, 9, 15, 14], //data de la cantidad
        }]
        },
    });

</script>