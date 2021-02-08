var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'bar',

    // The data for our dataset
    data: {
        labels: ['Loja NS', 'B2W', 'Shopee', 'Mercado Livre', 'Magalu'],
        datasets: [{
            label: 'Vendas',
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: [30, 15, 5, 4, 20]
        }]
    },
    // Configuration options go here
    options: {}
});