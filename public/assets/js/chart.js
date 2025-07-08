const ctx = document.getElementById("mychart").getContext("2d");

const labels = [
    "9 AM",
    "10 AM",
    "11 AM",
    "12 PM",
    "13 PM",
    "14 PM",
    "15 PM",
    "16 PM",
    "17 PM",
    "18 PM",
    "19 PM",
];

const gradientBlue = ctx.createLinearGradient(0, 0, 0, 300);
gradientBlue.addColorStop(0, "rgba(62, 151, 255, 0.5)");
gradientBlue.addColorStop(1, "rgba(62, 151, 255, 0)");

const gradientGreen = ctx.createLinearGradient(0, 0, 0, 300);
gradientGreen.addColorStop(0, "rgba(80, 205, 137, 0.5)");
gradientGreen.addColorStop(1, "rgba(80, 205, 137, 0)");

const data = {
    labels: labels,
    datasets: [
        {
            label: "Green Dataset",
            data: [75, 84, 88, 88, 70, 70, 55, 55, 90, 90, 82],
            borderColor: "#50CD89",
            backgroundColor: gradientGreen,
            fill: true,
        },
        {
            label: "Blue Dataset",
            data: [65, 74, 78, 78, 60, 60, 45, 45, 80, 80, 72],
            borderColor: "#3E97FF",
            backgroundColor: gradientBlue,
            fill: true,
        },
    ],
};

new Chart(ctx, {
    type: "line",
    data: data,
    options: {
        responsive: true,
        plugins: {
            legend: {
                display: false,
            },
            title: {
                display: false,
            },
        },
        scales: {
            y: {
                min: 30,
                max: 120,
                ticks: {
                    stepSize: 15,
                },
            },
        },
        elements: {
            point: {
                radius: 0,
            },
        },
    },
});
