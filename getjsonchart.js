fetch('laris.php')
    .then((data) => data.json())
    .then(function (json) {
        //json = json.sort((a, b) => a.dipinjam - b.dipinjam);
        let dataList = [];

        let i = 0;

        while (i < json.length) {
            var data = json[i];

            dataList[data.judul] = data.dipinjam;
            ++i;

            if (i >= json.length) return dataList;
			//return dataList;
        }
    })
    .then(renderChart)

function renderChart(dataList) {
    let chart = new frappe.Chart("#data", { // or DOM element
        data: {
            labels: Object.keys(dataList),

            datasets: [
                {
                    chartType: 'bar',
                    values: Object.values(dataList)
                }
            ]
        },

        title: "Film paling sering dipinjam",
        type: 'bar', // or 'bar', 'line', 'pie', 'percentage'
        height: 300,
        colors: ['purple', '#ffa3ef', 'light-blue'],

        tooltipOptions: {
            formatTooltipX: d => (d + '').toUpperCase(),
            formatTooltipY: d => d + 'x dipinjam',
        }
    });
}
