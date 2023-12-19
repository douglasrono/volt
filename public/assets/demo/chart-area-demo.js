// Set new default font family and font color to mimic Bootstrap's default styling
;(Chart.defaults.global.defaultFontFamily = 'Metropolis'),
  '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif'
Chart.defaults.global.defaultFontColor = '#858796'

function number_format(number, decimals, dec_point, thousands_sep) {
  // *     example: number_format(1234.56, 2, ',', ' ');
  // *     return: '1 234,56'
  number = (number + '').replace(',', '').replace(' ', '')
  var n = !isFinite(+number) ? 0 : +number,
    prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
    sep = typeof thousands_sep === 'undefined' ? ',' : thousands_sep,
    dec = typeof dec_point === 'undefined' ? '.' : dec_point,
    s = '',
    toFixedFix = function (n, prec) {
      var k = Math.pow(10, prec)
      return '' + Math.round(n * k) / k
    }
  // Fix for IE parseFloat(0.55).toFixed(0) = 0;
  s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.')
  if (s[0].length > 3) {
    s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep)
  }
  if ((s[1] || '').length < prec) {
    s[1] = s[1] || ''
    s[1] += new Array(prec - s[1].length + 1).join('0')
  }
  return s.join(dec)
}

// Delivery Chart Example
var ctxDelivery = document.getElementById('deliveryChart')
var myLineChartDelivery = new Chart(ctxDelivery, {
  type: 'line',
  data: {
    labels: [
      'Jan',
      'Feb',
      'Mar',
      'Apr',
      'May',
      'Jun',
      'Jul',
      'Aug',
      'Sep',
      'Oct',
      'Nov',
      'Dec',
    ],
    datasets: [
      {
        label: 'Orders',
        lineTension: 0.3,
        backgroundColor: 'rgba(255, 206, 86, 0.2)', // Yellow color with 20% opacity
        borderColor: 'rgba(255, 206, 86, 1)', // Yellow color
        pointRadius: 3,
        pointBackgroundColor: 'rgba(255, 206, 86, 1)', // Yellow color
        pointBorderColor: 'rgba(255, 206, 86, 1)', // Yellow color
        pointHoverRadius: 3,
        pointHoverBackgroundColor: 'rgba(255, 206, 86, 1)', // Yellow color
        pointHoverBorderColor: 'rgba(255, 206, 86, 1)', // Yellow color
        pointHitRadius: 10,
        pointBorderWidth: 2,
        data: [0, 50, 20, 70, 50, 100, 70, 120, 100, 150, 120, 200],
      },
    ],
  },
  options: {
    maintainAspectRatio: false,
    layout: {
      padding: {
        left: 10,
        right: 25,
        top: 25,
        bottom: 0,
      },
    },
    scales: {
      xAxes: [
        {
          time: {
            unit: 'date',
          },
          gridLines: {
            display: false,
            drawBorder: false,
          },
          ticks: {
            maxTicksLimit: 7,
          },
        },
      ],
      yAxes: [
        {
          ticks: {
            maxTicksLimit: 5,
            padding: 10,
            callback: function (value, index, values) {
              return value // You can format this based on your needs
            },
          },
          gridLines: {
            color: 'rgb(234, 236, 244)',
            zeroLineColor: 'rgb(234, 236, 244)',
            drawBorder: false,
            borderDash: [2],
            zeroLineBorderDash: [2],
          },
        },
      ],
    },
    legend: {
      display: false,
    },
    tooltips: {
      backgroundColor: 'rgb(255,255,255)',
      bodyFontColor: '#858796',
      titleMarginBottom: 10,
      titleFontColor: '#6e707e',
      titleFontSize: 14,
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      intersect: false,
      mode: 'index',
      caretPadding: 10,
      callbacks: {
        label: function (tooltipItem, chart) {
          var datasetLabel =
            chart.datasets[tooltipItem.datasetIndex].label || ''
          return datasetLabel + ': ' + tooltipItem.yLabel + ' Orders'
        },
      },
    },
  },
})

// Scheduling Rate Chart Example
var ctxSchedulingRate = document.getElementById('schedulingRateChart')
var myLineChartSchedulingRate = new Chart(ctxSchedulingRate, {
  type: 'line',
  data: {
    labels: [
      'Jan',
      'Feb',
      'Mar',
      'Apr',
      'May',
      'Jun',
      'Jul',
      'Aug',
      'Sep',
      'Oct',
      'Nov',
      'Dec',
    ],
    datasets: [
      {
        label: 'Scheduling Rate',
        lineTension: 0.3,
        backgroundColor: 'rgba(255, 99, 132, 0.2)', // Red color with 20% opacity
        borderColor: 'rgba(255, 99, 132, 1)', // Red color
        pointRadius: 3,
        pointBackgroundColor: 'rgba(255, 99, 132, 1)', // Red color
        pointBorderColor: 'rgba(255, 99, 132, 1)', // Red color
        pointHoverRadius: 3,
        pointHoverBackgroundColor: 'rgba(255, 99, 132, 1)', // Red color
        pointHoverBorderColor: 'rgba(255, 99, 132, 1)', // Red color
        pointHitRadius: 10,
        pointBorderWidth: 2,
        data: [0, 10, 5, 15, 10, 20, 15, 25, 20, 30, 25, 40],
      },
    ],
  },
  options: {
    maintainAspectRatio: false,
    layout: {
      padding: {
        left: 10,
        right: 25,
        top: 25,
        bottom: 0,
      },
    },
    scales: {
      xAxes: [
        {
          time: {
            unit: 'date',
          },
          gridLines: {
            display: false,
            drawBorder: false,
          },
          ticks: {
            maxTicksLimit: 7,
          },
        },
      ],
      yAxes: [
        {
          ticks: {
            maxTicksLimit: 5,
            padding: 10,
            callback: function (value, index, values) {
              return value + '%'
            },
          },
          gridLines: {
            color: 'rgb(234, 236, 244)',
            zeroLineColor: 'rgb(234, 236, 244)',
            drawBorder: false,
            borderDash: [2],
            zeroLineBorderDash: [2],
          },
        },
      ],
    },
    legend: {
      display: false,
    },
    tooltips: {
      backgroundColor: 'rgb(255,255,255)',
      bodyFontColor: '#858796',
      titleMarginBottom: 10,
      titleFontColor: '#6e707e',
      titleFontSize: 14,
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      intersect: false,
      mode: 'index',
      caretPadding: 10,
      callbacks: {
        label: function (tooltipItem, chart) {
          var datasetLabel =
            chart.datasets[tooltipItem.datasetIndex].label || ''
          return datasetLabel + ': ' + tooltipItem.yLabel + '%'
        },
      },
    },
  },
})

// Inventory Chart Example
var ctxInventory = document.getElementById('inventoryChart')
var myBarChartInventory = new Chart(ctxInventory, {
  type: 'bar',
  data: {
    labels: [
      'Jan',
      'Feb',
      'Mar',
      'Apr',
      'May',
      'Jun',
      'Jul',
      'Aug',
      'Sep',
      'Oct',
      'Nov',
      'Dec',
    ],
    datasets: [
      {
        label: 'Inventory Quantity',
        backgroundColor: 'rgba(75, 192, 192, 0.2)',
        borderColor: 'rgba(75, 192, 192, 1)',
        borderWidth: 1,
        data: [200, 220, 180, 250, 200, 280, 220, 300, 250, 320, 280, 400],
      },
    ],
  },
  options: {
    maintainAspectRatio: false,
    layout: {
      padding: {
        left: 10,
        right: 25,
        top: 25,
        bottom: 0,
      },
    },
    scales: {
      xAxes: [
        {
          time: {
            unit: 'date',
          },
          gridLines: {
            display: false,
            drawBorder: false,
          },
          ticks: {
            maxTicksLimit: 7,
          },
        },
      ],
      yAxes: [
        {
          ticks: {
            maxTicksLimit: 5,
            padding: 10,
            beginAtZero: true,
          },
          gridLines: {
            color: 'rgb(234, 236, 244)',
            zeroLineColor: 'rgb(234, 236, 244)',
            drawBorder: false,
            borderDash: [2],
            zeroLineBorderDash: [2],
          },
        },
      ],
    },
    legend: {
      display: true,
      position: 'top',
    },
    tooltips: {
      backgroundColor: 'rgb(255, 255, 255)',
      bodyFontColor: '#858796',
      titleMarginBottom: 10,
      titleFontColor: '#6e707e',
      titleFontSize: 14,
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      intersect: false,
      mode: 'index',
      caretPadding: 10,
      callbacks: {
        label: function (tooltipItem, chart) {
          return 'Quantity: ' + tooltipItem.yLabel
        },
      },
    },
  },
})
