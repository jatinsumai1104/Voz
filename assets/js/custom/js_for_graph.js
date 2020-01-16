function graph() {
  document.getElementById("graph_section").innerHTML +=
    '<canvas  id="myCanvas" style="border: 10px;"></canvas>';
  var ctx = document.getElementById("myCanvas").getContext("2d");
  var indata = getData();
  var graphData = {
    type: "bar",
    data: {
      labels: ["With Down Syndrome", "Without Down Syndrome"],
      datasets: [
        {
          label: "# of Votes",
          data: getData(),
          backgroundColor: [
            "rgba(255, 99, 132, 0.2)",
            "rgba(54, 162, 235, 0.2)"
          ],
          borderColor: ["rgba(255, 99, 132, 1)", "rgba(54, 162, 235, 1)"],
          borderWidth: 1
        }
      ]
    },
    options: {
      scales: {
        yAxes: [
          {
            ticks: {
              beginAtZero: true
            }
          }
        ]
      }
    }
  };
  var myChart = new Chart(ctx, graphData);
}

function getData() {
  var i = Math.random();
  var x = Math.floor(i * 5 + 1);
  var y = Math.floor((1 - i) * 24 + 1);
  return [x, y];
}
function getGraphs(n) {
  n = parseInt(n);
  console.log("no of graphs:" + n);
  for (i = 0; i < n; i++) {
    graph();
  }
}
