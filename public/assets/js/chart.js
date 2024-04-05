$(document).ready(function () {
    // Bar Chart

    var salaryChartData = $("#bar-charts").data("salary-chart");

    // Chuyển đổi dữ liệu từ chuỗi JSON sang JavaScript object
    // salaryChartData = JSON.parse(salaryChartData);

    // In ra dữ liệu trong cửa sổ Console
    console.log(salaryChartData);

    // Biểu đồ cột
    Morris.Bar({
        element: "bar-charts",
        data: salaryChartData,
        xkey: "name",
        ykeys: ["salary"],
        labels: ["Salary"],
        barColors: ["#f43b48"],
        resize: true,
        redraw: true,
        xLabelMargin: 10,
    });
    // Tiếp tục vẽ biểu đồ...

    // Line Chart

    // Morris.Line({
    //     element: "line-charts",
    //     data: [
    //         { y: "2006", a: 50, b: 90 },
    //         { y: "2007", a: 75, b: 65 },
    //         { y: "2008", a: 50, b: 40 },
    //         { y: "2009", a: 75, b: 65 },
    //         { y: "2010", a: 50, b: 40 },
    //         { y: "2011", a: 75, b: 65 },
    //         { y: "2012", a: 100, b: 50 },
    //     ],
    //     xkey: "y",
    //     ykeys: ["a", "b"],
    //     labels: ["Total Sales", "Total Revenue"],
    //     lineColors: ["#f43b48", "#453a94"],
    //     lineWidth: "3px",
    //     resize: true,
    //     redraw: true,
    // });
});
