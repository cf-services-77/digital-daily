window.onload = function () {

    var chart = new CanvasJS.Chart("chartContainer", {
        exportEnabled: false,
        animationEnabled: true,
        title:{
            text: "Diagramme des skills"
        },
        legend:{
            cursor: "pointer",
            itemclick: explodePie
        },
        data: [{
            type: "pie",
            showInLegend: false,
            toolTipContent: "<strong>{y}%</strong>",
            indexLabel: "{name}",
            dataPoints: [
                { y: 20, name: "- Développement" },
                { y: 18, name: "Linux -" },
                { y: 4, name: "Cloud -" },
                { y: 8, name: "DevOps -" },
                { y: 12, name: "Design -" },
                { y: 17, name: "Agilité -" },
                { y: 21, name: "- Architecture", exploded: true }
            ]
        }]
    });

    chart.render();
}

function explodePie (e) {
    if(typeof (e.dataSeries.dataPoints[e.dataPointIndex].exploded) === "undefined" || !e.dataSeries.dataPoints[e.dataPointIndex].exploded) {
        e.dataSeries.dataPoints[e.dataPointIndex].exploded = true;
    } else {
        e.dataSeries.dataPoints[e.dataPointIndex].exploded = false;
    }
    
    e.chart.render();
}
