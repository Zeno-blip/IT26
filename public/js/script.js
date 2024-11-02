var sidebarOpen = false;
var sidebar = document.getElementById("sidebar");

function openSidebar() {
    if (!sidebarOpen) {
        sidebar.classList.add("sidebar-responsive");
        sidebarOpen = true;
    }
}

function closeSidebar() {
    if (sidebarOpen) {
        sidebar.classList.remove("sidebar-responsive");
        sidebarOpen = false;
    }
}


// bar chart

var barChartOptions = {
    series: [{
        data: [10, 7, 12, 7, 11]
    }],
    chart: {
        type: 'bar',
        height: 350,
        toolbar: {
            show: false
        },
    },
    colors: ["#618685", "#f18973", "#b0aac0", "#484f4f", "#587e76"], // Fixed syntax for colors
    plotOptions: {
        bar: {
            distributed: true,
            borderRadius: 4,
            horizontal: false,
            columnWidth: '40%',
        }
    },
    dataLabels: {
        enabled: false
    },
    legend: {
        show: false
    },
    xaxis: {
        categories: ["Laptop", "Phones", "Monitor", "Headphones", "Camera"],
    },
    yaxis: {
        title: {
            text: "Count"
        }
    }
};

var barChart = new ApexCharts(document.querySelector("#bar-chart"), barChartOptions);
barChart.render();





//line chart


var areaChartOptions = {
    series: [{
    name: 'Purchase orders',
    data: [44, 55, 31, 47, 31, 99]
  }, {
    name: 'Sales Orders',
    data: [55, 69, 45, 61, 43, 79]
  }],
chart: {
    height: 350,
    type: 'area',
    toolbar: {
        show: false,
    },
  },

colors: ["#7a3b2e", "#f7786b"],

  stroke: {
    curve: 'smooth'
  },

  labels: ['January', 'February','March','April','May','June','July','August','September ','October','November', 'December'],
  markers: {
    size: 0
  },
  
  yaxis: [
    {
      title: {
        text: 'Purchase Orders',
      },
    },
    {
      opposite: true,
      title: {
        text: 'Sales Orders',
      },
    },
  ],
  tooltip: {
    shared: true,
    intersect: false,
    y: {
      formatter: function (y) {
        if(typeof y !== "undefined") {
          return  y.toFixed(0) + " points";
        }
        return y;
      }
    }
  }
  };

  

  // Toggle the dropdown
document.querySelectorAll('.dropdown').forEach(item => {
  item.addEventListener('click', () => {
      let dropdownContent = item.querySelector('.dropdown-content');
      dropdownContent.style.display = (dropdownContent.style.display === 'block') ? 'none' : 'block';
  });
});


  var areaChart = new ApexCharts(document.querySelector("#area-chart"), areaChartOptions);
  areaChart.render();
  document.querySelector('.user').addEventListener('click', function() {
    const dropdown = this.querySelector('.user-dropdown');
    dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
});

document.addEventListener('click', function(e) {
    const userDiv = document.querySelector('.user');
    const dropdown = userDiv.querySelector('.user-dropdown');
    
    if (!userDiv.contains(e.target)) {
        dropdown.style.display = 'none';
    }
});
