const ctx1 = document.getElementById("chart-1").getContext("2d");
const myChart = new Chart(ctx1, {
  type: "bar",
  data: {
    labels: ['Bachok','Gua Musang','Jeli','Kota Bharu','Kuala Krai','Machang','Pasir Mas','Pasir Puteh','Tanah Merah','Tumpat'],    datasets: [
      {
        label: "Sekolah Rendah",
        data: [12, 12, 9, 23, 14, 9, 15, 14, 13, 12],        
        backgroundColor: [
          "rgba(54, 162, 235, 1)",
          "rgba(255, 99, 132, 1)",
          "rgba(255, 206, 86, 1)",
          'rgb(75, 192, 192)',
          'rgb(153, 102, 255)',
          'rgb(255, 159, 64)',
          'rgb(255, 99, 132)',
          'rgb(255, 205, 86)',
          'rgb(75, 192, 192)',
          'rgb(153, 102, 255)'
        ],
      },
    ],
  },
  options: {
    responsive: true,
  },
});

const ctx2 = document.getElementById("chart-2").getContext("2d");
const myChart2 = new Chart(ctx2, {
  type: "bar",
  data: {
    labels: ['Bachok','Gua Musang','Jeli','Kota Bharu','Kuala Krai','Machang','Pasir Mas','Pasir Puteh','Tanah Merah','Tumpat'],    datasets: [
      {
        label: "Sekolah Menengah",
        data: [7, 3, 5, 17, 7, 5, 12, 9, 6, 6],        
        backgroundColor: [
          "rgba(54, 162, 235, 1)",
          "rgba(255, 99, 132, 1)",
          "rgba(255, 206, 86, 1)", 
          'rgb(75, 192, 192)',
          'rgb(153, 102, 255)',
          'rgb(255, 159, 64)',
          'rgb(255, 99, 132)',
          'rgb(255, 205, 86)',
          'rgb(75, 192, 192)',
          'rgb(153, 102, 255)'
          
        ],
      },
    ],
  },
  options: {
    responsive: true,
  },
});

const ctx3 = document.getElementById("chart-3").getContext("2d");
const myChart3 = new Chart(ctx3, {
  type: "bar",
  data: {
    labels: ['Bachok','Gua Musang','Jeli','Kota Bharu','Kuala Krai','Machang','Pasir Mas','Pasir Puteh','Tanah Merah','Tumpat'],
    datasets: [{
      label: 'Guru Sekolah Rendah',
      data: [72, 40, 34, 205, 60, 46, 96, 67, 73, 85],
      backgroundColor: [
        'rgb(255, 99, 132)',
        'rgb(54, 162, 235)',
        'rgb(255, 205, 86)',
        'rgb(75, 192, 192)',
        'rgb(153, 102, 255)',
        'rgb(255, 159, 64)',
        'rgb(255, 99, 132)',
        'rgb(255, 205, 86)',
        'rgb(75, 192, 192)',
        'rgb(153, 102, 255)'
      ],
      hoverOffset: 4
    }]
  },
  options: {
    responsive: true,
  },
});

const ctx4 = document.getElementById("chart-4").getContext("2d");
const myChart4 = new Chart(ctx4, {
  type: "bar",
  data: {
    labels: ['Bachok','Gua Musang','Jeli','Kota Bharu','Kuala Krai','Machang','Pasir Mas','Pasir Puteh','Tanah Merah','Tumpat'],
    datasets: [{
      label: 'Guru Sekolah Menengah',
      data: [51, 32, 34, 155, 56, 42, 90, 62, 56, 68],
      backgroundColor: [
        'rgb(255, 99, 132)',
        'rgb(54, 162, 235)',
        'rgb(255, 205, 86)',
        'rgb(75, 192, 192)',
        'rgb(153, 102, 255)',
        'rgb(255, 159, 64)',
        'rgb(255, 99, 132)',
        'rgb(255, 205, 86)',
        'rgb(75, 192, 192)',
        'rgb(153, 102, 255)'
      ],
      hoverOffset: 4
    }]
  },
  options: {
    responsive: true,
  },
});

const ctx5 = document.getElementById("chart-5").getContext("2d");
const myChart5 = new Chart(ctx5, {
  type: "bar",
  data: {
    labels: ['Bachok','Gua Musang','Jeli','Kota Bharu','Kuala Krai','Machang','Pasir Mas','Pasir Puteh','Tanah Merah','Tumpat'],
    datasets: [{
      label: 'MBPK Rendah',
      data: [484, 306, 234, 1547, 490, 349, 680, 447, 443, 512],
      backgroundColor: [
        'rgb(255, 99, 132)',
        'rgb(54, 162, 235)',
        'rgb(255, 205, 86)',
        'rgb(75, 192, 192)',
        'rgb(153, 102, 255)',
        'rgb(255, 159, 64)',
        'rgb(255, 99, 132)',
        'rgb(255, 205, 86)',
        'rgb(75, 192, 192)',
        'rgb(153, 102, 255)'
      ],
      hoverOffset: 4
    }]
  },
  options: {
    responsive: true,
  },
});

const ctx6 = document.getElementById("chart-6").getContext("2d");
const myChart6 = new Chart(ctx6, {
  type: "bar",
  data: {
    labels: ['Bachok','Gua Musang','Jeli','Kota Bharu','Kuala Krai','Machang','Pasir Mas','Pasir Puteh','Tanah Merah','Tumpat'],
    datasets: [{
      label: 'MBPK Menengah',
      data: [369, 296, 188, 1147, 381, 309, 574, 454, 375, 536],
      backgroundColor: [
        'rgb(255, 99, 132)',
        'rgb(54, 162, 235)',
        'rgb(255, 205, 86)',
        'rgb(75, 192, 192)',
        'rgb(153, 102, 255)',
        'rgb(255, 159, 64)',
        'rgb(255, 99, 132)',
        'rgb(255, 205, 86)',
        'rgb(75, 192, 192)',
        'rgb(153, 102, 255)'
      ],
      hoverOffset: 4
    }]
  },
  options: {
    responsive: true,
  },
});
