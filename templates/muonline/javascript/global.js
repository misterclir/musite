// Create by Leandro Daldegam 06/02/2013
function eventTimeFormat(value) {
    if (value < 0) return "00";
    if (value < 10) return "0" + value;
    return value;
}

function getTime(nextTime, divid) {
    var seconds = Math.floor((nextTime - new Date()) / 1000);
    var minutes = Math.floor(seconds / 60);
    var hours = Math.floor(minutes / 60);
    seconds = seconds % 60;

    minutes = eventTimeFormat(minutes);
    seconds = eventTimeFormat(seconds);

	//Habilitar se for usar os eventos do game
    //document.getElementById(divid).innerHTML = (minutes <= 5 ? "Aberto" : minutes + "&nbsp;&nbsp;" + seconds);
}

function eventTimeBloodCastle() {

    var hours = new Array(new Array());
    hours[0] = new Array(0, 30);
    hours[1] = new Array(1, 30);
    hours[2] = new Array(2, 30);
    hours[3] = new Array(3, 30);
    hours[4] = new Array(4, 30);
    hours[5] = new Array(5, 30);
    hours[6] = new Array(6, 30);
    hours[7] = new Array(7, 30);
    hours[8] = new Array(8, 30);
    hours[9] = new Array(9, 30);
    hours[10] = new Array(10, 30);
    hours[11] = new Array(11, 30);
	hours[12] = new Array(12, 30);
	hours[13] = new Array(13, 30);
	hours[14] = new Array(14, 30);
	hours[15] = new Array(15, 30);
	hours[16] = new Array(16, 30);
	hours[17] = new Array(17, 30);
	hours[18] = new Array(18, 30);
	hours[19] = new Array(19, 30);
	hours[20] = new Array(20, 30);
	hours[21] = new Array(21, 30);
	hours[22] = new Array(22, 30);
	hours[23] = new Array(23, 30);

    var currentHours = new Date();
    for (var i = 0; i < hours.length; i++) {
        if (hours[i][0] > currentHours.getHours() || (hours[i][0] == currentHours.getHours() && hours[i][1] >= currentHours.getMinutes())) {
            nextTimeBloodCastle = new Date(currentHours.getFullYear(), currentHours.getMonth(), currentHours.getDate(), hours[i][0], hours[i][1], 0, 0);
            break;
        }
    }

    setInterval("getTime(nextTimeBloodCastle, 'eventBCTime');", 1000);
}
function eventTimeDevilSquare() {

    var hours = new Array(new Array());
    hours[0] = new Array(0, 15);
    hours[1] = new Array(4, 15);
    hours[2] = new Array(8, 15);
    hours[3] = new Array(12, 15);
    hours[4] = new Array(16, 15);
    hours[5] = new Array(20, 15);

    var currentHours = new Date();
    for (var i = 0; i < hours.length; i++) {
        if (hours[i][0] > currentHours.getHours() || (hours[i][0] == currentHours.getHours() && hours[i][1] >= currentHours.getMinutes())) {
            nextTimeDevilSquare = new Date(currentHours.getFullYear(), currentHours.getMonth(), currentHours.getDate(), hours[i][0], hours[i][1], 0, 0);
            break;
        }
    }

    setInterval("getTime(nextTimeDevilSquare, 'eventDSTime');", 1000);
}
function eventTimeChaosCastle() {

    var hours = new Array(new Array());
    hours[0] = new Array(0, 0);
    hours[1] = new Array(1, 0);
    hours[2] = new Array(2, 0);
    hours[3] = new Array(3, 0);
    hours[4] = new Array(4, 0);
    hours[5] = new Array(5, 0);
    hours[6] = new Array(6, 0);
    hours[7] = new Array(7, 0);
    hours[8] = new Array(8, 0);
    hours[9] = new Array(9, 0);
    hours[10] = new Array(10, 0);
    hours[11] = new Array(11, 0);
	hours[12] = new Array(12, 0);
	hours[13] = new Array(13, 0);
	hours[14] = new Array(14, 0);
	hours[15] = new Array(15, 0);
	hours[16] = new Array(16, 0);
	hours[17] = new Array(17, 0);
	hours[18] = new Array(18, 0);
	hours[19] = new Array(19, 0);
	hours[20] = new Array(20, 0);
	hours[21] = new Array(21, 0);
	hours[22] = new Array(22, 0);
	hours[23] = new Array(23, 0);

    var currentHours = new Date();
    for (var i = 0; i < hours.length; i++) {
        if (hours[i][0] > currentHours.getHours() || (hours[i][0] == currentHours.getHours() && hours[i][1] >= currentHours.getMinutes())) {
            nextTimeChaosCastle = new Date(currentHours.getFullYear(), currentHours.getMonth(), currentHours.getDate(), hours[i][0], hours[i][1], 0, 0);
            break;
        }
    }

    setInterval("getTime(nextTimeChaosCastle, 'eventCCTime');", 1000);
}
$(document).ready(function () {

    //Make logo effect :D
    setInterval("$(\"#logoEffect\").toggleClass(\"hidden\");", 1500);

    //Make tabs for ranking in home
    $("#wrapper #mtwmain #mtwmc #mtwmcranking #mtwmcrankingmenu a").click(function () {
        $("#wrapper #mtwmain #mtwmc #mtwmcrankingc div").addClass("hidden");
        $("#wrapper #mtwmain #mtwmc #mtwmcrankingc div."+$(this).attr("class")).removeClass("hidden");
    });
    
	//Make tabs for ranking P
    $("#wrapper #mtwmain #mtwmc #mtwmcrankingP #mtwmcrankingmenu a").click(function () {
        $("#wrapper #mtwmain #mtwmc #mtwmcrankingcP div").addClass("hidden");
        $("#wrapper #mtwmain #mtwmc #mtwmcrankingcP div."+$(this).attr("class")).removeClass("hidden");
    });
	
	//Make tabs for ranking G
    $("#wrapper #mtwmain #mtwmc #mtwmcrankingG #mtwmcrankingmenu a").click(function () {
        $("#wrapper #mtwmain #mtwmc #mtwmcrankingcG div").addClass("hidden");
        $("#wrapper #mtwmain #mtwmc #mtwmcrankingcG div."+$(this).attr("class")).removeClass("hidden");
    });
	
    //Launch the SliderJS component once the document has loaded
    $("#mtwmcslidersc").SliderJS({settingsFile: 'templates/muonline/javascript/SliderJS/assets/settings/slidersettings.json'});

    nextTimeBloodCastle = new Date();
    eventTimeBloodCastle();

    nextTimeDevilSquare = new Date();
    eventTimeDevilSquare();

    nextTimeChaosCastle = new Date();
    eventTimeChaosCastle();

    //Hide pixel dot of Cronjob
    $("#cronjob").next().hide();
});


//Scripts nativo do site
function extraiScript(texto){
    var ini=0
    while(ini!=-1){
        ini=texto.indexOf('<script',ini)
        if(ini>=0){
            ini=texto.indexOf('>',ini)+1
            var fim=texto.indexOf('</script>',ini)
            codigo=texto.substring(ini,fim)
            eval(codigo)}}}

function Verify(url,div,tipo){
    var ajax=null
    if(window.ActiveXObject)
        ajax=new ActiveXObject('Microsoft.XMLHTTP')
    else if(window.XMLHttpRequest)
        ajax=new XMLHttpRequest()
    if(ajax !=null){
        var cache=new Date().getTime()
        ajax.open(tipo,url+"&cache="+cache,true)
        ajax.onreadystatechange=function status(){
            if(ajax.readyState==4){
                if(ajax.status==200){
                    document.getElementById(div).innerHTML=ajax.responseText
                    var texto=unescape(ajax.responseText.replace(/\+/g," "))
                    extraiScript(texto)}}
            else
                document.getElementById(div).innerHTML='<img src="templates/sunonline/images/common/loading.gif" alt="" />'}
        ajax.send(null)
    }
}

function emptyInput(input) {
    if (input.value == input.defaultValue) {
        input.value = "";
    }
}

function writeDefault(input) {
    if (input.value == "") {
        input.value = input.defaultValue;
    }
}