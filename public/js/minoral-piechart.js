var bars = false;
var lines = true;
var pie = false;
 
var initializeFlot = function(){
  
  var el = $('table.flot-chart');
 
  el.each(function(){
    var data = $(this).data();
    var colors = [];
    var gridColor= data.tickColor || 'rgba(0,0,0,.1)';
 
    $(this).find('thead th:not(:first)').each(function() {
      colors.push($(this).css('color'));
    });
 
    if(data.type){
      bars = data.type.indexOf('bars') != -1;
      lines = data.type.indexOf('lines') != -1;
      pie = data.type.indexOf('pie') != -1;
    }
 
    $(this).graphTable({
      series: 'columns',
      position: 'replace',
      colors: colors,
      width: data.width,
      height: data.height
    },
    {
      series: { 
        stack: data.stack,
        pie: {
          show: pie,
          innerRadius: data.innerRadius || 0,
          label:{ 
            show: data.pieLabel=='show' ? true:false
          }
        },
        bars: {
          show: bars,
          barWidth: data.barWidth || 0.5,
          fill: data.fill || 1,
          align: 'center'
        },
        lines: { 
          show: lines,
          fill: 0.1,
          lineWidth: 3
        },
        shadowSize: 0,
        points: {
          radius: 4
        }
      },
      xaxis: {
        mode: 'categories',
        tickLength: 0,
        font :{
          lineHeight: 24,
          weight: '300',
          color: data.fontColor,
          size: 14
        } 
      },
      yaxis: { 
        tickColor: gridColor,
        tickFormatter: function number(x) {  var num; if (x >= 1000) { num=(x/1000)+'k'; }else{ num=x; } return num; },
        max: data.yMax,
        font :{
          lineHeight: 13,
          weight: '300',
          color: data.fontColor
        }
      },  
      grid: { 
        borderWidth: {
          top: 0,
          right: 0,
          bottom: 1,
          left: 1
        },
        borderColor:gridColor,
        margin: 13,
        minBorderMargin:0,              
        labelMargin:20,
        hoverable: true,
        clickable: true,
        mouseActiveRadius:6
      },
      legend: { show: data.legend=='show' ? true:false },
      tooltip: data.toolTip=='show' ? true:false,
      tooltipOpts: { content: (pie ? '%p.0%, %s':'%s :  %y') }
    });
  });
  
};   
 
initializeFlot();