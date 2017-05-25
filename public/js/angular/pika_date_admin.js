adminApp.config(['pikadayConfigProvider', function(pikaday) {

    var locales = {
        i18n: {
            previousMonth : 'Previous Month',
                nextMonth     : 'Next Month',
                months        : ['1','2','3','4','5','6','7','8','9','10','11','12'],
                weekdays      : ['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'],
                weekdaysShort : ['Sun','Mon','Tue','Wed','Thu','Fri','Sat']
        },
    };

    pikaday.setConfig({
        locales: locales,
        i18n: locales.i18n,
        format: "YYYY/MM/DD",
        yearSuffix: '년',
        monthSuffix: '월',
        theme: 'triangle-theme',
        maxDate: new Date(2100, 12, 31),
        showMonthAfterYear: true,
        setDefaultDate: true,
        yearRange: [2000,2100]
    });
}]);
