<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Klinik Buah Hati</title>
  @vite('resources/css/app.css') 

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <link href="https://cdn.jsdelivr.net/npm/flowbite/dist/flowbite.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/flowbite/dist/flowbite.min.js"></script>

</head>
<body class="bg-gray-100">

  @include('layouts.apoteker')

  <main class="lg:ml-64 md:ml-48 pt-10 px-4">
  <div class="max-w-6xl w-full bg-white rounded-lg shadow p-6 md:p-8 mb-5"> 
    <div class="flex justify-center mb-5">
      <h1 class="center text-2xl font-bold dark:text-white">Rekap Keuangan Klinik</h1>
    </div>

    <div class="w-full bg-gray-50 rounded-lg shadow-md dark:bg-gray-800 md:p-5 mb-5">
  <div class="flex justify-between border-gray-200 dark:border-gray-700">
  </div>

  <div class="grid grid-cols-3 px-5 pb-3">
  <dl>
      <dt class="text-base font-bold text-gray-900 dark:text-gray-900">Laba</dt>
      <dt class="text-sm font-normal text-gray-500 dark:text-gray-400 pb-1">Bulan Ini</dt>
      <dd class="leading-none text-2xl font-bold text-gray-900 dark:text-white">Rp. 8.000.000</dd>
    </dl>
    <dl>
      <dt class="text-base font-bold text-gray-900 dark:text-gray-900">Pemasukan</dt>
      <dt class="text-sm font-normal text-gray-500 dark:text-gray-400 pb-1">Bulan Ini</dt>
      <dd class="leading-none text-2xl font-bold text-green-500 dark:text-green-400">Rp. 21.000.000</dd>
    </dl>
    <dl>
      <dt class="text-base font-bold text-gray-900 dark:text-gray-900">Pengeluaran</dt>
      <dt class="text-sm font-normal text-gray-500 dark:text-gray-400 pb-1">Bulan Ini</dt>
      <dd class="leading-none text-2xl font-bold text-red-600 dark:text-red-500">Rp. 13.000.000</dd>
    </dl>
  </div>
</div>


  <div class="max-w w-full bg-gray-50 rounded-lg shadow-md dark:bg-gray-800 p-4 md:p-6 mb-5">
  <div>
    <dl>
        <dt class="text-base w-full font-bold text-gray-900 dark:text-gray-400 pb-5">Chart Keuangan</dt>
    </dl>
</div>
  <div id="bar-chart"></div>
    <div class="grid grid-cols-1 items-center border-gray-200 border-t dark:border-gray-700 justify-between">
      <div class="flex justify-between items-center pt-5">
        <button
          id="dropdownDefaultButton"
          data-dropdown-toggle="lastDaysdropdown"
          data-dropdown-placement="bottom"
          class="text-sm font-medium text-gray-500 dark:text-gray-400 hover:text-gray-900 text-center inline-flex items-center dark:hover:text-white"
          type="button">
          Last 6 months
          <svg class="w-2.5 m-2.5 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
          </svg>
        </button>

        <div id="lastDaysdropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-700">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
              <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Yesterday</a>
              </li>
              <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Today</a>
              </li>
              <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 7 days</a>
              </li>
              <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 30 days</a>
              </li>
              <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 90 days</a>
              </li>
              <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 6 months</a>
              </li>
              <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last year</a>
              </li>
            </ul>
        </div>
      </div>
    </div>
</div>

<div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-5">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
    <caption class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-gray-50 dark:text-white dark:bg-gray-800">
            <a href="tabelpemasukan" class="text-gray-600 hover:underline dark:text-blue-400">
                Tabel Pemasukan
            </a>
</caption>
        <thead class="text-xs text-gray-700 uppercase bg-white dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    NO
                </th>
                <th scope="col" class="px-6 py-3">
                    DESKRIPSI
                </th>
                <th scope="col" class="px-6 py-3">
                    BULAN
                </th>
                <th scope="col" class="px-6 py-3">
                    JUMLAH
                </th>
                <th scope="col" class="px-6 py-3">
                    TOTAL
                </th>
                <th scope="col" class="px-6 py-3">
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    1
                </th>
                <td class="px-6 py-4">
                    Konsultasi Dokter
                </td>
                <td class="px-6 py-4">
                    Desember 2024
                </td>
                <td class="px-6 py-4">
                    20
                </td>
                <td class="px-6 py-4">
                    Rp.15.000.000
                </td>
                <td class="px-6 py-4">
                    <a href="edit" class="mr-2 font-medium text-green-600 dark:text-blue-500 hover:underline">Edit</a>
                    <a href="hapus" class="font-medium text-red-600 dark:text-blue-500 hover:underline">Hapus</a>
                </td>
            </tr>
        </tbody>
        <tfoot>
            <tr class="font-semibold text-gray-900 dark:text-white">
                <th scope="row" class="px-6 py-3 text-base">Total</th>
                <td class="px-6 py-3">Rp. 21.000.000</td>
            </tr>
        </tfoot>
    </table>
</div>

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
    <caption class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-gray-50 dark:text-white dark:bg-gray-800">
    <a href="tabelpengeluaran" class="text-gray-600 hover:underline dark:text-blue-400">
                Tabel Pengeluaran
            </a>
</caption>
            <thead class="text-xs text-gray-700 uppercase bg-white dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    NO
                </th>
                <th scope="col" class="px-6 py-3">
                    DESKRIPSI
                </th>
                <th scope="col" class="px-6 py-3">
                    KETERANGAN
                </th>
                <th scope="col" class="px-6 py-3">
                    TOTAL
                </th>
                <th scope="col" class="px-6 py-3">
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    1
                </th>
                <td class="px-6 py-4">
                    Gaji Staff
                </td>
                <td class="px-6 py-4">
                    Staff 1
                </td>
                <td class="px-6 py-4">
                    Rp.10.000.000
                </td>
                <td class="px-6 py-4">
                    <a href="edit" class="mr-2 font-medium text-green-600 dark:text-blue-500 hover:underline">Edit</a>
                    <a href="hapus" class="font-medium text-red-600 dark:text-blue-500 hover:underline">Hapus</a>
                </td>
            </tr>
        </tbody>
        <tfoot>
            <tr class="font-semibold text-gray-900 dark:text-white">
                <th scope="row" class="px-6 py-3 text-base">Total</th>
                <td class="px-6 py-3">Rp. 21.000.000</td>
            </tr>
        </tfoot>
    </table>
</div>

<script>

const options = {
  series: [
    {
      name: "Income",
      color: "#31C48D",
      data: ["1420", "1620", "1820", "1420", "1650", "2120"],
    },
    {
      name: "Expense",
      data: ["788", "810", "866", "788", "1100", "1200"],
      color: "#F05252",
    }
  ],
  chart: {
    sparkline: {
      enabled: false,
    },
    type: "bar",
    width: "100%",
    height: "100%",
    toolbar: {
      show: false,
    }
  },
  fill: {
    opacity: 1,
  },
  plotOptions: {
    bar: {
      vertical: true,
      columnWidth: "50%",
      borderRadiusApplication: "end",
      borderRadius: 6,
      dataLabels: {
        position: "top",
      },
    },
  },
  legend: {
    show: true,
    position: "bottom",
  },
  dataLabels: {
    enabled: false,
  },
  tooltip: {
    shared: true,
    intersect: false,
    formatter: function (value) {
      return value
    }
  },
  xaxis: {
    labels: {
      show: true,
      style: {
        fontFamily: "Inter, sans-serif",
        cssClass: 'text-xs font-normal fill-gray-500 dark:fill-gray-400'
      },
      formatter: function(value) {
        return value
      }
    },
    categories: ["Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
    axisTicks: {
      show: false,
    },
    axisBorder: {
      show: false,
    },
  },
  yaxis: {
    labels: {
      show: true,
      style: {
        fontFamily: "Inter, sans-serif",
        cssClass: 'text-xs font-normal fill-gray-500 dark:fill-gray-400'
      }
    }
  },
  grid: {
    show: true,
    strokeDashArray: 4,
    padding: {
      left: 2,
      right: 2,
      top: -20
    },
  },
  fill: {
    opacity: 1,
  }
}

if(document.getElementById("bar-chart") && typeof ApexCharts !== 'undefined') {
  const chart = new ApexCharts(document.getElementById("bar-chart"), options);
  chart.render();
}
</script>
</body>
</html>
