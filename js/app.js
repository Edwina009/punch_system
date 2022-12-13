

//時間顯示
function show_date(){
    var today = new Date();
    var y=today.getFullYear();
    var m=(today.getMonth()+1);

    var d=today.getDate();
    document.getElementById('show_date').innerHTML = y+'年'+m+'月'+d+'日';
}
function show_time(){
　var NowDate=new Date();
　var h=NowDate.getHours();
　var m=NowDate.getUTCMinutes();
　var s=NowDate.getSeconds();
m = checkTime(m);
s = checkTime(s);　
　document.getElementById('show_time').innerHTML = h+':'+m;
document.getElementById('show_second').innerHTML = ':'+s;
　setTimeout('show_time()',1000);
}
function checkTime(i) {
if (i < 10) {
    i = "0" + i;
}
return i;
}




//jquery
/*
$(document).ready(function(){
  
  });
*/
