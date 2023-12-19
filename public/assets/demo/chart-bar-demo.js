// Set new default font family and font color to mimic Bootstrap's default styling
(Chart.defaults.global.defaultFontFamily = "Metropolis"),
'-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = "#858796";

function number_format(number, decimals, dec_point, thousands_sep) {
    // *     example: number_format(1234.56, 2, ',', ' ');
    // *     return: '1 234,56'
    number = (number + "").replace(",", "").replace(" ", "");
    var n = !isFinite(+number) ? 0 : +number,
        prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
        sep = typeof thousands_sep === "undefined" ? "," : thousands_sep,
        dec = typeof dec_point === "undefined" ? "." : dec_point,
        s = "",
        toFixedFix = function(n, prec) {
            var k = Math.pow(10, prec);
            return "" + Math.round(n * k) / k;
        };
    // Fix for IE parseFloat(0.55).toFixed(0) = 0;
    s = (prec ? toFixedFix(n, prec) : "" + Math.round(n)).split(".");
    if (s[0].length > 3) {
        s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
    }
    if ((s[1] || "").length < prec) {
        s[1] = s[1] || "";
        s[1] += new Array(prec - s[1].length + 1).join("0");
    }
    return s.join(dec);
}

// Bar Chart Example
var ctxOrders = document.getElementById("ordersChart");
var ordersChart = new Chart(ctxOrders, {
  type: "bar",
  data: {
    labels: ["January", "February", "March", "April", "May", "June"],
    datasets: [{
      label: "Orders",
      backgroundColor: "rgba(0, 97, 242, 0.8)", // Blue color with 80% opacity
      hoverBackgroundColor: "rgba(0, 97, 242, 1)", // Blue color
      borderColor: "rgba(0, 97, 242, 1)", // Blue color
      data: [100, 150, 200, 250, 300, 350], // Example data related to orders
      maxBarThickness: 25
    }]
  },
  options: {
    maintainAspectRatio: false,
    layout: {
      padding: {
        left: 10,
        right: 25,
        top: 25,
        bottom: 0
      }
    },
    scales: {
      xAxes: [{
        time: {
          unit: "month"
        },
        gridLines: {
          display: false,
          drawBorder: false
        },
        ticks: {
          maxTicksLimit: 6
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: 400, // Adjust the max value based on your data
          maxTicksLimit: 5,
          padding: 10,
          // Include a dollar sign in the ticks
          callback: function(value, index, values) {
            return value;
          }
        },
        gridLines: {
          color: "rgb(234, 236, 244)",
          zeroLineColor: "rgb(234, 236, 244)",
          drawBorder: false,
          borderDash: [2],
          zeroLineBorderDash: [2]
        }
      }]
    },
    legend: {
      display: false
    },
    tooltips: {
      titleMarginBottom: 10,
      titleFontColor: "#6e707e",
      titleFontSize: 14,
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: "#dddfeb",
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
      callbacks: {
        label: function(tooltipItem, chart) {
          var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || "";
          return datasetLabel + ": " + tooltipItem.yLabel + " Orders";
        }
      }
    }
  }
});

// Doughnut Chart Example
var ctxProducts = document.getElementById("productChart");
var productChart = new Chart(ctxProducts, {
    type: "doughnut",
    data: {
        labels: ["January", "February", "March", "April", "May", "June"],
        datasets: [{
            label: "Orders",
            backgroundColor: [
                "rgba(0, 97, 242, 0.8)", // Blue color with 80% opacity
                "rgba(30, 169, 224, 0.8)", // Another color with 80% opacity
                "rgba(0, 166, 90, 0.8)", // Another color with 80% opacity
                "rgba(253, 126, 20, 0.8)", // Another color with 80% opacity
                "rgba(255, 87, 34, 0.8)", // Another color with 80% opacity
                "rgba(153, 102, 255, 0.8)", // Another color with 80% opacity
            ],
            hoverBackgroundColor: [
                "rgba(0, 97, 242, 1)", // Blue color
                "rgba(30, 169, 224, 1)", // Another color
                "rgba(0, 166, 90, 1)", // Another color
                "rgba(253, 126, 20, 1)", // Another color
                "rgba(255, 87, 34, 1)", // Another color
                "rgba(153, 102, 255, 1)", // Another color
            ],
            borderColor: [
                "rgba(0, 97, 242, 1)", // Blue color
                "rgba(30, 169, 224, 1)", // Another color
                "rgba(0, 166, 90, 1)", // Another color
                "rgba(253, 126, 20, 1)", // Another color
                "rgba(255, 87, 34, 1)", // Another color
                "rgba(153, 102, 255, 1)", // Another color
            ],
            borderWidth: 1,
            data: [100, 150, 200, 250, 300, 350], // Example data related to orders
        }],
    },
    options: {
        maintainAspectRatio: false,
        cutoutPercentage: 70, // Adjust this value to control the size of the center hole
        legend: {
            display: true,
            position: 'bottom', // You can change the position of the legend
        },
        tooltips: {
            callbacks: {
                label: function (tooltipItem, data) {
                    var datasetLabel = data.labels[tooltipItem.index] || "";
                    return datasetLabel + ": " + data.datasets[0].data[tooltipItem.index] + " Orders";
                },
            },
        },
    },
});

