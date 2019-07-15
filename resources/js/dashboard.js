//title:Demo code for dashboard

$(function () {
    /* ChartJS
     * -------
     * Data and config for chartjs
     */
    'use strict';
    var doughnutPieData = {
        datasets: [{
            data: [30, 40, 30],
            backgroundColor: [
                'rgba(75, 192, 192, 0.5)',
                'rgba(54, 162, 235, 0.5)',
                'rgba(153, 102, 255, 0.5)'
                ],
            borderColor: [
                'rgba(75, 192, 192, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(153, 102, 255, 1)'
                ],
            }],
        // These labels appear in the legend and in the tooltips when hovering different arcs
        labels: [
                'New Order',
                'Delivery Processing',
                'Order Complete',
                ]
        };
    var doughnutPieOptions = {
        responsive: true,
        legend: {
            labels: {
                fontColor: "#8f8f8f",
                fontSize: 12
            }
        },
        animation: {
            animateScale: true,
            animateRotate: true
        }
    };
    var areaData = {
        labels: ["2013", "2014", "2015", "2016", "2017", "2018"],
        datasets: [{
                label: 'Sales',
                data: [1, 19, 7, 11, 4, 3],
                backgroundColor: [
                'rgba(54, 162, 235, 0.5)'
                ],
                borderColor: [
                'rgba(54, 162, 235, 1)'
                ],
                borderWidth: 1,
                fill: true, // 3: no fill
                }, {
                label: 'Expenses',
                data: [12, 17, 4, 9, 3, 9],
                backgroundColor: [
                'rgba(153, 102, 255, 0.5)'
                ],
                borderColor: [
                'rgba(153, 102, 255, 1)'
                ],
                borderWidth: 1,
                fill: true, // 3: no fill
                }
              ]
        };
    var areaOptions = {
        legend: {
            labels: {
                fontColor: "#8f8f8f",
                fontSize: 12
            }
        },
        plugins: {
            filler: {
                propagate: true
            }
        },
        scales: {
            xAxes: [{
                gridLines: {
                    color: '#f5f6f7'
                }
            }],
            yAxes: [{
                gridLines: {
                    color: '#f5f6f7'
                }
            }]
        }
    }
    // Get context with jQuery - using jQuery's .get() method.
    if ($("#doughnutchart").length) {
        var doughnutChartCanvas = $("#doughnutchart").get(0).getContext("2d");
        var doughnutChart = new Chart(doughnutChartCanvas, {
            type: 'pie',
            data: doughnutPieData,
            options: doughnutPieOptions
        });
    }
    if ($("#areaChart").length) {
        var areaChartCanvas = $("#areaChart").get(0).getContext("2d");
        var areaChart = new Chart(areaChartCanvas, {
            type: 'line',
            data: areaData,
            options: areaOptions
        });
    }
});
