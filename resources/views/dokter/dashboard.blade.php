<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chart Example</title>
  @vite('resources/css/app.css') <!-- Jika menggunakan Vite -->
  <!-- Flowbite & Tailwind CSS -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <link href="https://cdn.jsdelivr.net/npm/flowbite/dist/flowbite.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/flowbite/dist/flowbite.min.js"></script>

</head>
<body class="bg-gray-100">

  <!-- Include Navbar -->
  @include('layouts.dokter')

  <main class="lg:ml-64 md:ml-48 pt-10 px-4">
  <div class="max-w-6xl w-full bg-white rounded-lg shadow p-6 md:p-8"> <!-- Perbesar lebar kontainer -->
    <div class="flex justify-between mb-4">
      <div>
        <h5 class="leading-none text-3xl font-bold text-gray-900 pb-2">3200</h5>
        <p class="text-base font-normal text-gray-500">Pasien Minggu Ini</p>
      </div>
    </div>

      <!-- Chart Container -->
      <div id="area-chart" class="w-full h-50">
        <!-- Placeholder for Chart -->
      </div>
      
       <!-- Dropdown or Other UI Elements -->
       <div class="grid grid-cols-1 items-center border-gray-200 border-t justify-between pt-5 mb-5">
      <!-- Button -->
      <button
        id="dropdownDefaultButton"
        data-dropdown-toggle="lastDaysdropdown"
        data-dropdown-placement="bottom-start"
        class="text-sm font-medium text-gray-500 hover:text-gray-900 text-center inline-flex items-center "
        type="button">
        Last 7 days
        <svg class="w-2.5 m-2.5 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
        </svg>
      </button>
      <!-- Dropdown menu -->
      <div id="lastDaysdropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
          <ul class="py-2 text-sm text-gray-700 " aria-labelledby="dropdownDefaultButton">
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100 ">Yesterday</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100 ">Today</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100 ">Last 7 days</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100 ">Last 30 days</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100 ">Last 90 days</a>
            </li>
          </ul>
      </div>   
    </div>
      </div>
    </div>
  </main>

  <main class="lg:ml-64 md:ml-48 pt-3 px-4">
    <div id="fullWidthTabContent" class="border-t border-gray-200 dark:border-gray-600">
        <div class="p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="stats" role="tabpanel" aria-labelledby="stats-tab">
            <dl class="grid max-w-screen-xl grid-cols-2 gap-8 p-4 mx-auto text-gray-900 sm:grid-cols-3 xl:grid-cols-3 dark:text-white sm:p-8">
                <div class="flex flex-col items-center justify-center">
                    <dt class="mb-2 text-3xl font-extrabold">73M+</dt>
                    <dd class="text-gray-500 dark:text-gray-400">Obat Terjual Minggu Ini</dd>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <dt class="mb-2 text-3xl font-extrabold">Paracetamol</dt>
                    <dd class="text-gray-500 dark:text-gray-400">Obat Terlaris Minggu Ini</dd>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <dt class="mb-2 text-3xl font-extrabold">Dr. Cinta</dt>
                    <dd class="text-gray-500 dark:text-gray-400">Dokter Terlaris Minggu Ini</dd>
                </div>
            </dl>
        </div>
                </div>
            </div>
        </div>
    </div>
</div>
</main>


  <!-- Chart.js Script -->
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      // Set up the chart options
      const options = {
        chart: {
          height: "100%",
          maxWidth: "100%",
          type: "area",
          fontFamily: "Inter, sans-serif",
          dropShadow: {
            enabled: false,
          },
          toolbar: {
            show: false,
          },
        },
        tooltip: {
          enabled: true,
          x: {
            show: false,
          },
        },
        fill: {
          type: "gradient",
          gradient: {
            opacityFrom: 0.55,
            opacityTo: 0,
            shade: "#1C64F2",
            gradientToColors: ["#1C64F2"],
          },
        },
        dataLabels: {
          enabled: false,
        },
        stroke: {
          width: 6,
        },
        grid: {
          show: false,
          strokeDashArray: 4,
          padding: {
            left: 10,
            right: 5,
            top: 0,
          },
        },
        series: [
          {
            name: "New users",
            data: [6500, 6418, 6456, 6526, 6356, 6456],
            color: "#1A56DB",
          },
        ],
        xaxis: {
          categories: ['01 February', '02 February', '03 February', '04 February', '05 February', '06 February', '07 February'],
          labels: {
            show: true,
          },
          axisBorder: {
            show: false,
          },
          axisTicks: {
            show: false,
          },
        },
        yaxis: {
  show: true,
  labels: {
    show: true,
    style: {
      fontFamily: "Inter, sans-serif",
      cssClass: 'text-xs font-normal fill-gray-500 dark:fill-gray-400'
    },
    formatter: function (value) {
      return value;
    }
  }
},
      };

      // Render the chart
      if (document.getElementById("area-chart") && typeof ApexCharts !== 'undefined') {
        const chart = new ApexCharts(document.getElementById("area-chart"), options);
        chart.render();
      }
    });
  </script>

</body>
</html>
