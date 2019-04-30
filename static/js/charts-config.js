var dados = [];
var count = parseInt(document.getElementById("contador").innerHTML, 10);
for(var i = 1; i < count+1; i++){
    var temp = [];
    var sum = 
    temp.push(document.getElementById("elemento-"+i).innerHTML);
    temp.push(document.getElementById("elemento-"+(2*(count+1)-i)).innerHTML);
    dados.push(temp);
}

var dados_morris = [];
var controle = parseInt(document.getElementById("controle").innerHTML, 10);
if(controle == 0){
    for(var i = 0; i<29; i++){
        dados_morris.push({day: Stringi+1, value: parseInt(document.getElementById("elemento-morris-"+i).innerHTML, 10)+'R$'});
    }
}else{
    for(var i = 0; i<30; i++){
        dados_morris.push({day: '2019-05-'+(i+1), value: document.getElementById("elemento-morris-"+i).innerHTML});
    }
}


var chart = c3.generate({
    bindto: '#c3chart_categoria',
    data: {
        columns: dados,
        type : 'donut',
        onclick: function (d, i) { console.log("onclick", d, i); },
        onmouseover: function (d, i) { console.log("onmouseover", d, i); },
        onmouseout: function (d, i) { console.log("onmouseout", d, i); }
    },
});

teste = [{ year: '2008', value: 20 },
{ year: "2019", value: 10 },
{ year: '2010', value: 5 },
{ year: '2011', value: 5 },
{ year: '2012', value: 20 }]

morris = new Morris.Area({
    // ID of the element in which to draw the chart.
    element: 'morris_evolucao_vendas',
    // Chart data records -- each entry in this array corresponds to a point on
    // the chart.
    data: dados_morris,
    // The name of the data record attribute that contains x-values.
    xkey: 'day',
    // A list of names of data record attributes that contain y-values.
    ykeys: ['value'],
    // Labels for the ykeys -- will be displayed when you hover over the
    // chart.
    labels: ['Total'],

    xLabels: "day",

    xLabelFormat: function (x) {
        var y = new Date(x);
        var IndexToMonth = [ "Jan", "Feb", "Mär", "Apr", "Mai", "Jun", "Jul", "Aug", "Sep", "Okt", "Nov", "Dez" ];
        var month = IndexToMonth[ y.getMonth() ];
        var day = y.getDate();
        return day + '/' + month;
    },

    dateFormat: function (x) {
        var y = new Date(x);
        var IndexToMonth = [ "Jan", "Feb", "Mär", "Apr", "Mai", "Jun", "Jul", "Aug", "Sep", "Okt", "Nov", "Dez" ];
        var month = IndexToMonth[ y.getMonth() ];
        var day = y.getDate();
        return day + '/' + month;
    },

    lineColors: ['#5969ff'],
  });