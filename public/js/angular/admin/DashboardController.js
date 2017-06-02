var DashboardController = Controller.extend({

    initialize : function($super, service, $rootScope, $scope) {
        $super(service);
        var self = this;
        this.$rootScope = $rootScope;
        this.$scope = $scope;

        google.charts.load('current', {'packages':['line']});
        google.charts.setOnLoadCallback(function () {
            self.getDataDashboard();
        });

    },

    getDataDashboard: function () {
        var self = this;
        self.service.getDataDashboard()
            .success(self.onReceiveDateDashboard.bind(self))
            .error(self.onError.bind(self));

    },

    onReceiveDateDashboard: function (response) {
        var self = this;
        var data = JSON.parse(response.data);
        console.log(data);
        this.order_need_complete = data.order_need_complete;
        this.revenues_statistic = data.revenues_statistic;
        this.top_3_products = data.top_3_products;
        _.each(this.top_3_products, function (product) {
            product.images = product.images.split(",");
        });
        this.total_customer = data.total_customer;
        this.total_items = data.total_items;
        this.total_revenues = data.total_revenues;
        this.date = moment().format("DD/MM/YYYY");
        this.drawChart();
    },

    drawChart: function () {
        var self = this;
        var params = [];
        params.push(['Ngày', 'Doanh thu']);
        for (var i = 0; i< self.revenues_statistic.date.length; i ++){
            params.push([self.revenues_statistic.date[i], self.revenues_statistic.data[i]]);
        }
        var data = google.visualization.arrayToDataTable(params);

        var options = {
            title: 'Doanh thu trong 7 ngày gần nhất',
            curveType: 'function',
            legend: { position: 'right' },
            vAxis: {
                minValue: 10
            },
            hAxis: {
                minValue: 10
            }
    };

        var chart = new google.charts.Line(document.getElementById('curve_chart'));

        chart.draw(data, google.charts.Line.convertOptions(options));
    }


}, ['AdminService', '$rootScope', '$scope']);
adminApp.controller('DashboardController', DashboardController);