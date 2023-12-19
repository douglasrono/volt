<title>{{ env('APP_NAME') }} Dashboard</title>

<div class="row">
    <div class="col-12 col-xl-4">
        <div class="col-12 px-0 mb-4">
            <div class="card border-0 shadow text-center">
                <div class="card-header d-flex flex-row align-items-center flex-0 border-bottom">
                    <div class="d-block mx-auto">
                        <i class="fas fa-truck fa-3x text-primary"></i>
                        <div class="h6 fw-normal text-gray my-2">Deliveries Last 1 Week</div>
                        <h2 class="h3 fw-extrabold">128</h2>
                        <div class="small mt-2">
                            <span class="fas fa-angle-up text-success"></span>
                            <span class="text-success fw-bold">15.4%</span>
                        </div>
                    </div>
                </div>
                <div class="card-body p-2">
                    <canvas id="deliveredChart" width="100%" height="50"></canvas>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 col-xl-4">
        <div class="col-12 px-0 mb-4">
            <div class="card border-0 shadow text-center">
                <div class="card-header d-flex flex-row align-items-center flex-0 border-bottom">
                    <div class="d-block mx-auto">
                        <i class="fas fa-calendar-alt fa-3x text-info"></i>
                        <div class="h6 fw-normal text-gray my-2">Schedule Last 1 Week</div>
                        <h2 class="h3 fw-extrabold">76</h2>
                        <div class="small mt-2">
                            <span class="fas fa-angle-up text-primary"></span>
                            <span class="text-primary fw-bold">8.2%</span>
                        </div>
                    </div>
                </div>
                <div class="card-body p-2">
                    <div class="chart-area">
                        <canvas id="scheduledChart" width="100%" height="50"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 col-xl-4">
        <div class="col-12 px-0 mb-4">
            <div class="card border-0 shadow text-center">
                <div class="card-header d-flex flex-row align-items-center flex-0 border-bottom">
                    <div class="d-block mx-auto">
                        <i class="fas fa-undo fa-3x text-danger"></i>
                        <div class="h6 fw-normal text-gray my-2">Returns Last 1 Week</div>
                        <h2 class="h3 fw-extrabold">18</h2>
                        <div class="small mt-2">
                            <span class="fas fa-angle-up text-danger"></span>
                            <span class="text-danger fw-bold">-5.6%</span>
                        </div>
                    </div>
                </div>
                <div class="card-body p-2">
                    <div class="chart-area">
                        <canvas id="returnsChart" width="100%" height="50"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="row">
    <!-- Deliveries Card -->
    <div class="col-4 mb-4">
        <div class="card border-0 shadow">
            <div class="card-header d-sm-flex flex-row align-items-center flex-0">
                <div class="d-block mb-3 mb-sm-0">
                    <div class="fs-5 fw-normal mb-2">Deliveries</div>
                    <h2 class="fs-3 fw-extrabold">567</h2>
                    <div class="small mt-2">
                        <span class="fw-normal me-2">Overall</span>
                        <!-- Add appropriate icons and colors for trends -->
                        <span class="fas fa-angle-up text-success"></span>
                        <span class="text-success fw-bold">10.57%</span>
                    </div>
                </div>

            </div>
            <div class="card-body p-2">
                <!-- Use a unique ID for each chart -->
                <canvas id="deliveriesChart" width="100%" height="50"></canvas>
            </div>
        </div>
    </div>

    <!-- Returns Card -->
    <div class="col-4 mb-4">
        <div class="card border-0 shadow">
            <div class="card-header d-sm-flex flex-row align-items-center flex-0">
                <div class="d-block mb-3 mb-sm-0">
                    <div class="fs-5 fw-normal mb-2">Returns</div>
                    <h2 class="fs-3 fw-extrabold">45</h2>
                    <div class="small mt-2">
                        <span class="fw-normal me-2">Overall</span>
                        <!-- Add appropriate icons and colors for trends -->
                        <span class="fas fa-angle-down text-danger"></span>
                        <span class="text-danger fw-bold">-5.67%</span>
                    </div>
                </div>

            </div>
            <div class="card-body p-2">
                <!-- Use a unique ID for each chart -->
                <canvas id="allReturnsChart" width="100%" height="50"></canvas>
            </div>
        </div>
    </div>


    <!-- Cancellations Card -->
    <div class="col-4 mb-4">
        <div class="card border-0 shadow">
            <div class="card-header d-sm-flex flex-row align-items-center flex-0">
                <div class="d-block mb-3 mb-sm-0">
                    <div class="fs-5 fw-normal mb-2">Cancellations</div>
                    <h2 class="fs-3 fw-extrabold">23</h2>
                    <div class="small mt-2">
                        <span class="fw-normal me-2">Overall</span>
                        <!-- Add appropriate icons and colors for trends -->
                        <span class="fas fa-angle-up text-warning"></span>
                        <span class="text-warning fw-bold">7.89%</span>
                    </div>
                </div>

            </div>
            <div class="card-body p-2">
                <!-- Use a unique ID for each chart -->
                <canvas id="cancellationsChart" width="100%" height="50"></canvas>
            </div>
        </div>
    </div>
</div>

<!-- Add the Chart.js library -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var deliveriesData = {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [{
            label: 'Deliveries',
            data: [100, 150, 120, 180, 200, 220, 250], // Replace with your actual data
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1
        }]
    };

    // Options for Deliveries Chart
    var deliveriesOptions = {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    };

    // Get the context of the canvas element
    var deliveriesCtx = document.getElementById('deliveriesChart').getContext('2d');
    var deliveriesChart = new Chart(deliveriesCtx, {
        type: 'bar',
        data: deliveriesData,
        options: deliveriesOptions
    });

    // Sample data for Cancellations Chart (replace with your actual data)
    var cancellationsData = {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [{
            label: 'Cancellations',
            data: [10, 8, 15, 12, 20, 18, 22], // Replace with your actual data
            backgroundColor: 'rgba(255, 193, 7, 0.2)',
            borderColor: 'rgba(255, 193, 7, 1)',
            borderWidth: 1
        }]
    };

    // Options for Cancellations Chart
    var cancellationsOptions = {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    };

    // Get the context of the canvas element
    var cancellationsCtx = document.getElementById('cancellationsChart').getContext('2d');
    var cancellationsChart = new Chart(cancellationsCtx, {
        type: 'bar',
        data: cancellationsData,
        options: cancellationsOptions
    });


    // Sample data for Returns Chart (replace with your actual data)
    var returnsData = {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [{
            label: 'Returns',
            data: [20, 15, 25, 30, 18, 22, 27], // Replace with your actual data
            backgroundColor: 'rgba(255, 99, 132, 0.2)',
            borderColor: 'rgba(255, 99, 132, 1)',
            borderWidth: 1
        }]
    };

    // Options for Returns Chart
    var returnsOptions = {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    };

    // Get the context of the canvas element
    var returnsCtx = document.getElementById('allReturnsChart').getContext('2d');
    var returnsChart = new Chart(returnsCtx, {
        type: 'bar',
        data: returnsData,
        options: returnsOptions
    });


    var deliveredData = {
        labels: ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
        datasets: [{
            label: 'Delivered',
            data: [20, 30, 25, 35, 40, 45, 50], // Replace with your actual data
            backgroundColor: 'rgba(54, 162, 235, 0.2)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1
        }]
    };

    // Options for Delivered Chart
    var deliveredOptions = {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    };

    // Get the context of the canvas element
    var deliveredCtx = document.getElementById('deliveredChart').getContext('2d');
    var deliveredChart = new Chart(deliveredCtx, {
        type: 'bar',
        data: deliveredData,
        options: deliveredOptions
    });
    // Data for Schedule Last 1 Week
    var scheduledData = {
        labels: ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
        datasets: [{
            label: 'Scheduled',
            data: [10, 15, 20, 25, 30, 35, 40], // Replace with your actual data
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1
        }]
    };

    // Options for Schedule Last 1 Week
    var scheduledOptions = {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    };

    // Get the context of the canvas element
    var scheduledCtx = document.getElementById('scheduledChart').getContext('2d');
    var scheduledChart = new Chart(scheduledCtx, {
        type: 'line',
        data: scheduledData,
        options: scheduledOptions
    });

    // Data for Returns Last 1 Week
    var returnsData = {
        labels: ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
        datasets: [{
            label: 'Returns',
            data: [5, 8, 12, 15, 10, 7, 3], // Replace with your actual data
            backgroundColor: 'rgba(255, 99, 132, 0.2)',
            borderColor: 'rgba(255, 99, 132, 1)',
            borderWidth: 1
        }]
    };

    // Options for Returns Last 1 Week
    var returnsOptions = {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    };

    // Get the context of the canvas element
    var returnsCtx = document.getElementById('returnsChart').getContext('2d');
    var returnsChart = new Chart(returnsCtx, {
        type: 'bar',
        data: returnsData,
        options: returnsOptions
    });
</script>
