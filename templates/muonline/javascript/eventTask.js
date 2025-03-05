var interval = [];

function eTimeFormat(value) {
    if (value < 0) return "00";
    if (value < 10) return "0" + value;
    return value;
}

function eGetTime(nextTime, divid, OpenTime) {
	
    var seconds = Math.floor((nextTime - new Date()) / 1000);
    var minutes = Math.floor(seconds / 60);
    var hours = Math.floor(seconds / 60 / 60);
	var days = Math.floor(seconds / 60 / 60 / 24);
	
	var minutesReal = Math.floor(seconds / 60);
   
	seconds = seconds % 60;
	minutes = minutes % 60;
	hours = hours % 24;
	
	days	= days;
	hours	= eTimeFormat(hours);
    minutes = eTimeFormat(minutes);
    seconds = eTimeFormat(seconds);
	
	
	//Habilitar se for usar os eventos do game
	if(days <= 0 && hours <= 0 && minutes <= OpenTime) {
		
			if(minutes == OpenTime && seconds > 0) {
		
				$("#"+divid).html((seconds + "s"));
				
				return false;

			}
		
			if(divid == 'divSobrevivencia') {
				
				if(minutesReal < -1) {
					
					clearInterval(interval[nextSobrevivencia]);
					nextSobrevivencia = new Date();
					eSobrevivencia();

				} else {
					
					$("#"+divid).html("<b style=\"color:#8BC34A;\">Aberto</b>");
				
				}
			}
			
			else if(divid == 'divGrandeMatador') {
				
				if(minutesReal < -1) {
					
					clearInterval(interval[nextGrandeMatador]);
					nextGrandeMatador = new Date();
					eGrandeMatador();

				} else {
					
					$("#"+divid).html("<b style=\"color:#8BC34A;\">Aberto</b>");
				
				}
			}
			
			else if(divid == 'divMataMataC') {
				
				if(minutesReal < -1) {
					
					clearInterval(interval[nextMataMataC]);
					nextMataMataC = new Date();
					eMataMataC();

				} else {
					
					$("#"+divid).html("<b style=\"color:#8BC34A;\">Aberto</b>");
				
				}
			}
			
			else if(divid == 'divMataMataB') {
				
				if(minutesReal < -1) {
					
					clearInterval(interval[nextMataMataB]);
					nextMataMataB = new Date();
					eMataMataB();

				} else {
					
					$("#"+divid).html("<b style=\"color:#8BC34A;\">Aberto</b>");
				
				}
			}
			
			else if(divid == 'divMataMataA') {
				
				if(minutesReal < -1) {
					
					clearInterval(interval[nextMataMataA]);
					nextMataMataA = new Date();
					eMataMataA();

				} else {
					
					$("#"+divid).html("<b style=\"color:#8BC34A;\">Aberto</b>");
				
				}
			}
			
			else if(divid == 'divMataMataS') {
				
				if(minutesReal < -1) {
					
					clearInterval(interval[nextMataMataS]);
					nextMataMataS = new Date();
					eMataMataS();

				} else {
					
					$("#"+divid).html("<b style=\"color:#8BC34A;\">Aberto</b>");
				
				}
			}
			
			else if(divid == 'divMataMataAll') {
				
				if(minutesReal < -1) {
					
					clearInterval(interval[nextMataMataAll]);
					nextMataMataAll = new Date();
					eMataMataAll();

				} else {
					
					$("#"+divid).html("<b style=\"color:#8BC34A;\">Aberto</b>");
				
				}
			}
			
			
			else if(divid == 'divMataPatoC') {
				
				if(minutesReal < -1) {
					
					clearInterval(interval[nextMataPatoC]);
					nextMataPatoC = new Date();
					eMataPatoC();

				} else {
					
					$("#"+divid).html("<b style=\"color:#8BC34A;\">Aberto</b>");
				
				}
			}
			
			else if(divid == 'divMataPatoB') {
				
				if(minutesReal < -1) {
					
					clearInterval(interval[nextMataPatoB]);
					nextMataPatoB = new Date();
					eMataPatoB();

				} else {
					
					$("#"+divid).html("<b style=\"color:#8BC34A;\">Aberto</b>");
				
				}
			}
			
			else if(divid == 'divMataPatoA') {
				
				if(minutesReal < -1) {
					
					clearInterval(interval[nextMataPatoA]);
					nextMataPatoA = new Date();
					eMataPatoA();

				} else {
					
					$("#"+divid).html("<b style=\"color:#8BC34A;\">Aberto</b>");
				
				}
			}
			
			else if(divid == 'divMataPatoS') {
				
				if(minutesReal < -1) {
					
					clearInterval(interval[nextMataPatoS]);
					nextMataPatoS = new Date();
					eMataPatoS();

				} else {
					
					$("#"+divid).html("<b style=\"color:#8BC34A;\">Aberto</b>");
				
				}
			}
			
			else if(divid == 'divMataPatoAll') {
				
				if(minutesReal < -1) {
					
					clearInterval(interval[nextMataPatoAll]);
					nextMataPatoAll = new Date();
					eMataPatoAll();

				} else {
					
					$("#"+divid).html("<b style=\"color:#8BC34A;\">Aberto</b>");
				
				}
			}
			
			else if(divid == 'divReidoMad') {
				
				if(minutesReal < -1) {
					
					clearInterval(interval[nextReidoMad]);
					nextReidoMad = new Date();
					eReidoMad();

				} else {
					
					$("#"+divid).html("<b style=\"color:#8BC34A;\">Aberto</b>");
				
				}
			}

			else if(divid == 'divSorteioSeeds') {
				
				console.log(minutesReal + ' - '+ seconds);
				
				if(minutesReal < -1) {
					
					clearInterval(interval[nextSorteioSeeds]);
					nextSorteioSeeds = new Date();
					eSorteioSeeds();

				} else {
					
					$("#"+divid).html("<b style=\"color:#8BC34A;\">Sorteado</b>");
				
				}
				
			}
			
			else if(divid == 'divBloodCastle') {
				
				if(minutesReal < -1) {
					
					clearInterval(interval[nextBloodCastle]);
					nextBloodCastle = new Date();
					eBloodCastle();

				} else {
					
					$("#"+divid).html("<b style=\"color:#8BC34A;\">Aberto</b>");
				
				}
			}
			
			else if(divid == 'divDevilSquare') {
				
				if(minutesReal < -1) {
					
					clearInterval(interval[nextDevilSquare]);
					nextDevilSquare = new Date();
					eDevilSquare();

				} else {
					
					$("#"+divid).html("<b style=\"color:#8BC34A;\">Aberto</b>");
				
				}
			}
			
		}
	} else if(days > 0) {
		
		$("#"+divid).html((days + "d:" + hours + "h:" + (minutes-OpenTime < 0 ? minutes : eTimeFormat(minutes-OpenTime)) + "m:" + seconds + "s"));
	}
	
	else if(hours > 0) {
		
		$("#"+divid).html((hours + "h:" + (minutes-OpenTime < 0 ? minutes : eTimeFormat(minutes-OpenTime)) + "m:" + seconds + "s"));
		
	}
	
	else if((minutes) > 0) {
		
		$("#"+divid).html(((minutes-OpenTime < 0 ? minutes : eTimeFormat(minutes-OpenTime)) + "m:" + seconds + "s"));
		
	}

	else if(seconds > 0) {
		
		$("#"+divid).html((seconds + "s"));
	} 
}

//segunda 1, terça 2, quarta 3, quinta 4, sexta 5, sábado 6, domingo 7

function eSobrevivencia() {
	
	var time = new Array(new Array()); //segunda 1, até domingo 7
	
	time[0] = new Array(1, 0, 3); 
	time[1] = new Array(1, 9, 3);
	time[2] = new Array(1, 14, 3);
	time[3] = new Array(1, 19, 3);
	
	time[4] = new Array(2, 0, 3); 
	time[5] = new Array(2, 9, 3);
	time[6] = new Array(2, 14, 3);
	time[7] = new Array(2, 19, 3);
	
	time[8] = new Array(3, 0, 3); 
	time[9] = new Array(3, 9, 3);
	time[10] = new Array(3, 14, 3);
	time[11] = new Array(3, 19, 3);
	
	time[12] = new Array(4, 0, 3); 
	time[13] = new Array(4, 9, 3);
	time[14] = new Array(4, 14, 3);
	time[15] = new Array(4, 19, 3);
	
	time[16] = new Array(5, 0, 3); 
	time[17] = new Array(5, 9, 3);
	time[18] = new Array(5, 14, 3);
	time[19] = new Array(5, 19, 3);
	
	time[20] = new Array(6, 1, 3); 
	time[21] = new Array(6, 8, 3);
	time[22] = new Array(6, 13, 3);
	time[23] = new Array(6, 19, 3);
	
	time[24] = new Array(7, 1, 3); 
	time[25] = new Array(7, 8, 3);
	time[26] = new Array(7, 13, 3);
	time[27] = new Array(7, 19, 3);

    var currentDate = new Date();
	
	var currentDay = (currentDate.getDay() == 0) ? 7 : currentDate.getDay();
	
	var dayNow = 0;
	
	var haveEvent = 0;
	
	for (var i = 0; i < time.length; i++) {
		
		if(time[i][0] >= currentDay || time[i][0] == 'x') {
			
			nextDay = (time[i][0] > currentDay) ? 1 : 0;

			if(time[i][0] != 'x') {
				
				dayNow = ((time[i][0]-currentDay) < 0 ? ((time[i][0]-currentDay)+7) : (time[i][0]-currentDay));
			
			}
		
			if (nextDay == 1 || time[i][1] > currentDate.getHours() || (time[i][1] == currentDate.getHours() && time[i][2] >= currentDate.getMinutes())) {
				
				haveEvent = 1;
					
				nextEvent = new Date(currentDate.getFullYear(), currentDate.getMonth(), currentDate.getDate(), time[i][1], time[i][2], 0, 0);
				
				nextEvent = new Date(nextEvent.getTime()+(dayNow*(86400*1000)));
				
				break;
		
			} 
			
		}
			
	}
	
	if(haveEvent == 0) {
		
		dayNow = (time[0][0] == 'x') ? 1 : ((time[0][0]-currentDay) <= 0 ? ((time[0][0]-currentDay)+7) : (time[0][0]-currentDay));

		nextEvent = new Date(currentDate.getFullYear(), currentDate.getMonth(), currentDate.getDate(), time[0][1], time[0][2], 0, 0);
			
		nextEvent = new Date(nextEvent.getTime()+(dayNow*(86400*1000)));
	
	}
	
	nextSobrevivencia = nextEvent;

    interval[nextSobrevivencia] = setInterval("eGetTime(nextSobrevivencia, 'divSobrevivencia', 3);", 1000);
}

function eGrandeMatador() {
	
	var time = new Array(new Array()); //segunda 1, até domingo 7
	
	time[0] = new Array(1, 2, 3); 
	time[1] = new Array(1, 11, 3);
	time[2] = new Array(1, 16, 3);
	time[3] = new Array(1, 21, 3);
	
	time[4] = new Array(2, 2, 3); 
	time[5] = new Array(2, 11, 3);
	time[6] = new Array(2, 16, 3);
	time[7] = new Array(2, 21, 3);
	
	time[8] = new Array(3, 2, 3); 
	time[9] = new Array(3, 11, 3);
	time[10] = new Array(3, 16, 3);
	time[11] = new Array(3, 21, 3);
	
	time[12] = new Array(4, 2, 3); 
	time[13] = new Array(4, 11, 3);
	time[14] = new Array(4, 16, 3);
	time[15] = new Array(4, 21, 3);
	
	time[16] = new Array(5, 2, 3); 
	time[17] = new Array(5, 11, 3);
	time[18] = new Array(5, 16, 3);
	time[19] = new Array(5, 21, 3);
	
	time[20] = new Array(6, 3, 3); 
	time[21] = new Array(6, 10, 3);
	time[22] = new Array(6, 15, 3);
	time[23] = new Array(6, 22, 3);
	
	time[24] = new Array(7, 3, 3); 
	time[25] = new Array(7, 10, 3);
	time[26] = new Array(7, 15, 3);
	time[27] = new Array(7, 22, 3);

    var currentDate = new Date();
	
	var currentDay = (currentDate.getDay() == 0) ? 7 : currentDate.getDay();
	
	var dayNow = 0;
	
	var haveEvent = 0;
	
	for (var i = 0; i < time.length; i++) {
		
		if(time[i][0] >= currentDay || time[i][0] == 'x') {
			
			nextDay = (time[i][0] > currentDay) ? 1 : 0;

			if(time[i][0] != 'x') {
				
				dayNow = ((time[i][0]-currentDay) < 0 ? ((time[i][0]-currentDay)+7) : (time[i][0]-currentDay));
			
			}
		
			if (nextDay == 1 || time[i][1] > currentDate.getHours() || (time[i][1] == currentDate.getHours() && time[i][2] >= currentDate.getMinutes())) {
				
				haveEvent = 1;
					
				nextEvent = new Date(currentDate.getFullYear(), currentDate.getMonth(), currentDate.getDate(), time[i][1], time[i][2], 0, 0);
				
				nextEvent = new Date(nextEvent.getTime()+(dayNow*(86400*1000)));
				
				break;
		
			} 
			
		}
			
	}
	
	if(haveEvent == 0) {
		
		dayNow = (time[0][0] == 'x') ? 1 : ((time[0][0]-currentDay) <= 0 ? ((time[0][0]-currentDay)+7) : (time[0][0]-currentDay));
			
		nextEvent = new Date(currentDate.getFullYear(), currentDate.getMonth(), currentDate.getDate(), time[0][1], time[0][2], 0, 0);
			
		nextEvent = new Date(nextEvent.getTime()+(dayNow*(86400*1000)));
	
	}
	
	nextGrandeMatador = nextEvent;		

    interval[nextGrandeMatador] = setInterval("eGetTime(nextGrandeMatador, 'divGrandeMatador', 3);", 1000);
}

function eMataMataC() {
	
	var time = new Array(new Array()); //segunda 1, até domingo 7
	
	time[0] = new Array(1, 20, 3);
	
	time[1] = new Array(2, 10, 3);
	
	time[2] = new Array(3, 1, 3);
	
	time[3] = new Array(4, 15, 3);
	 
	time[4] = new Array(5, 20, 3);
	
	time[5] = new Array(6, 9, 3);
	
	time[6] = new Array(7, 2, 3);

    var currentDate = new Date();
	
	var currentDay = (currentDate.getDay() == 0) ? 7 : currentDate.getDay();
	
	var dayNow = 0;
	
	var haveEvent = 0;
	
	for (var i = 0; i < time.length; i++) {
		
		if(time[i][0] >= currentDay || time[i][0] == 'x') {
			
			nextDay = (time[i][0] > currentDay) ? 1 : 0;

			if(time[i][0] != 'x') {
				
				dayNow = ((time[i][0]-currentDay) < 0 ? ((time[i][0]-currentDay)+7) : (time[i][0]-currentDay));
			
			}
		
			if (nextDay == 1 || time[i][1] > currentDate.getHours() || (time[i][1] == currentDate.getHours() && time[i][2] >= currentDate.getMinutes())) {
				
				haveEvent = 1;
					
				nextEvent = new Date(currentDate.getFullYear(), currentDate.getMonth(), currentDate.getDate(), time[i][1], time[i][2], 0, 0);
				
				nextEvent = new Date(nextEvent.getTime()+(dayNow*(86400*1000)));
				
				break;
		
			} 
			
		}
			
	}
	
	if(haveEvent == 0) {
		
		dayNow = (time[0][0] == 'x') ? 1 : ((time[0][0]-currentDay) <= 0 ? ((time[0][0]-currentDay)+7) : (time[0][0]-currentDay));
			
		nextEvent = new Date(currentDate.getFullYear(), currentDate.getMonth(), currentDate.getDate(), time[0][1], time[0][2], 0, 0);
			
		nextEvent = new Date(nextEvent.getTime()+(dayNow*(86400*1000)));
	
	}
	
	nextMataMataC = nextEvent;		

    interval[nextMataMataC] = setInterval("eGetTime(nextMataMataC, 'divMataMataC', 3);", 1000);
}


function eMataMataB() {
	
	var time = new Array(new Array()); //segunda 1, até domingo 7
	
	time[0] = new Array(1, 15, 3);
	 
	time[1] = new Array(2, 20, 3);
	
	time[2] = new Array(3, 10, 3);
	
	time[3] = new Array(4, 1, 3); 
	
	time[4] = new Array(5, 15, 3);
	 
	time[5] = new Array(6, 21, 3);
	
	time[6] = new Array(7, 9, 3);

    var currentDate = new Date();
	
	var currentDay = (currentDate.getDay() == 0) ? 7 : currentDate.getDay();
	
	var dayNow = 0;
	
	var haveEvent = 0;
	
	for (var i = 0; i < time.length; i++) {
		
		if(time[i][0] >= currentDay || time[i][0] == 'x') {
			
			nextDay = (time[i][0] > currentDay) ? 1 : 0;

			if(time[i][0] != 'x') {
				
				dayNow = ((time[i][0]-currentDay) < 0 ? ((time[i][0]-currentDay)+7) : (time[i][0]-currentDay));
			
			}
		
			if (nextDay == 1 || time[i][1] > currentDate.getHours() || (time[i][1] == currentDate.getHours() && time[i][2] >= currentDate.getMinutes())) {
				
				haveEvent = 1;
					
				nextEvent = new Date(currentDate.getFullYear(), currentDate.getMonth(), currentDate.getDate(), time[i][1], time[i][2], 0, 0);
				
				nextEvent = new Date(nextEvent.getTime()+(dayNow*(86400*1000)));
				
				break;
		
			} 
			
		}
			
	}
	
	if(haveEvent == 0) {
		
		dayNow = (time[0][0] == 'x') ? 1 : ((time[0][0]-currentDay) <= 0 ? ((time[0][0]-currentDay)+7) : (time[0][0]-currentDay));
			
		nextEvent = new Date(currentDate.getFullYear(), currentDate.getMonth(), currentDate.getDate(), time[0][1], time[0][2], 0, 0);
			
		nextEvent = new Date(nextEvent.getTime()+(dayNow*(86400*1000)));
	
	}
	
	nextMataMataB = nextEvent;		

    interval[nextMataMataB] = setInterval("eGetTime(nextMataMataB, 'divMataMataB', 3);", 1000);
}

function eMataMataA() {
	
	var time = new Array(new Array()); //segunda 1, até domingo 7
	
	time[0] = new Array(1, 1, 3);
	
	time[1] = new Array(2, 15, 3);
	
	time[2] = new Array(3, 20, 3);
	
	time[3] = new Array(4, 10, 3);
	
	time[4] = new Array(5, 1, 3);
	
	time[5] = new Array(6, 14, 3);
	 
	time[6] = new Array(7, 21, 3);

    var currentDate = new Date();
	
	var currentDay = (currentDate.getDay() == 0) ? 7 : currentDate.getDay();
	
	var dayNow = 0;
	
	var haveEvent = 0;
	
	for (var i = 0; i < time.length; i++) {
		
		if(time[i][0] >= currentDay || time[i][0] == 'x') {
			
			nextDay = (time[i][0] > currentDay) ? 1 : 0;

			if(time[i][0] != 'x') {
				
				dayNow = ((time[i][0]-currentDay) < 0 ? ((time[i][0]-currentDay)+7) : (time[i][0]-currentDay));
			
			}
		
			if (nextDay == 1 || time[i][1] > currentDate.getHours() || (time[i][1] == currentDate.getHours() && time[i][2] >= currentDate.getMinutes())) {
				
				haveEvent = 1;
					
				nextEvent = new Date(currentDate.getFullYear(), currentDate.getMonth(), currentDate.getDate(), time[i][1], time[i][2], 0, 0);
				
				nextEvent = new Date(nextEvent.getTime()+(dayNow*(86400*1000)));
				
				break;
		
			} 
			
		}
			
	}
	
	if(haveEvent == 0) {
		
		dayNow = (time[0][0] == 'x') ? 1 : ((time[0][0]-currentDay) <= 0 ? ((time[0][0]-currentDay)+7) : (time[0][0]-currentDay));
			
		nextEvent = new Date(currentDate.getFullYear(), currentDate.getMonth(), currentDate.getDate(), time[0][1], time[0][2], 0, 0);
			
		nextEvent = new Date(nextEvent.getTime()+(dayNow*(86400*1000)));
	
	}
	
	nextMataMataA = nextEvent;		

    interval[nextMataMataA] = setInterval("eGetTime(nextMataMataA, 'divMataMataA', 3);", 1000);
}


function eMataMataS() {
	
	var time = new Array(new Array()); //segunda 1, até domingo 7
	
	time[0] = new Array(1, 10, 3); 
	
	time[1] = new Array(2, 1, 3); 
	
	time[2] = new Array(3, 15, 3); 
	
	time[3] = new Array(4, 20, 3); 
	
	time[4] = new Array(5, 10, 3);
	
	time[5] = new Array(6, 2, 3); 
	
	time[6] = new Array(7, 14, 3); 

    var currentDate = new Date();
	
	var currentDay = (currentDate.getDay() == 0) ? 7 : currentDate.getDay();
	
	var dayNow = 0;
	
	var haveEvent = 0;
	
	for (var i = 0; i < time.length; i++) {
		
		if(time[i][0] >= currentDay || time[i][0] == 'x') {
			
			nextDay = (time[i][0] > currentDay) ? 1 : 0;

			if(time[i][0] != 'x') {
				
				dayNow = ((time[i][0]-currentDay) < 0 ? ((time[i][0]-currentDay)+7) : (time[i][0]-currentDay));
			
			}
		
			if (nextDay == 1 || time[i][1] > currentDate.getHours() || (time[i][1] == currentDate.getHours() && time[i][2] >= currentDate.getMinutes())) {
				
				haveEvent = 1;
					
				nextEvent = new Date(currentDate.getFullYear(), currentDate.getMonth(), currentDate.getDate(), time[i][1], time[i][2], 0, 0);
				
				nextEvent = new Date(nextEvent.getTime()+(dayNow*(86400*1000)));
				
				break;
		
			} 
			
		}
			
	}
	
	if(haveEvent == 0) {
		
		dayNow = (time[0][0] == 'x') ? 1 : ((time[0][0]-currentDay) <= 0 ? ((time[0][0]-currentDay)+7) : (time[0][0]-currentDay));
			
		nextEvent = new Date(currentDate.getFullYear(), currentDate.getMonth(), currentDate.getDate(), time[0][1], time[0][2], 0, 0);
			
		nextEvent = new Date(nextEvent.getTime()+(dayNow*(86400*1000)));
	
	}
	
	nextMataMataS = nextEvent;		

    interval[nextMataMataS] = setInterval("eGetTime(nextMataMataS, 'divMataMataS', 3);", 1000);
}


function eMataMataAll() {
	
	var time = new Array(new Array()); //segunda 1, até domingo 7
	
	time[0] = new Array(6, 16, 3);

    var currentDate = new Date();
	
	var currentDay = (currentDate.getDay() == 0) ? 7 : currentDate.getDay();
	
	var dayNow = 0;
	
	var haveEvent = 0;
	
	for (var i = 0; i < time.length; i++) {
		
		if(time[i][0] >= currentDay || time[i][0] == 'x') {
			
			nextDay = (time[i][0] > currentDay) ? 1 : 0;

			if(time[i][0] != 'x') {
				
				dayNow = ((time[i][0]-currentDay) < 0 ? ((time[i][0]-currentDay)+7) : (time[i][0]-currentDay));
			
			}
		
			if (nextDay == 1 || time[i][1] > currentDate.getHours() || (time[i][1] == currentDate.getHours() && time[i][2] >= currentDate.getMinutes())) {
				
				haveEvent = 1;
					
				nextEvent = new Date(currentDate.getFullYear(), currentDate.getMonth(), currentDate.getDate(), time[i][1], time[i][2], 0, 0);
				
				nextEvent = new Date(nextEvent.getTime()+(dayNow*(86400*1000)));
				
				break;
		
			} 
			
		}
			
	}
	
	if(haveEvent == 0) {
		
		dayNow = (time[0][0] == 'x') ? 1 : ((time[0][0]-currentDay) <= 0 ? ((time[0][0]-currentDay)+7) : (time[0][0]-currentDay));
			
		nextEvent = new Date(currentDate.getFullYear(), currentDate.getMonth(), currentDate.getDate(), time[0][1], time[0][2], 0, 0);
			
		nextEvent = new Date(nextEvent.getTime()+(dayNow*(86400*1000)));
	
	}
	
	nextMataMataAll = nextEvent;		

    interval[nextMataMataAll] = setInterval("eGetTime(nextMataMataAll, 'divMataMataAll', 3);", 1000);
}









function eMataPatoC() {
	
	var time = new Array(new Array()); //segunda 1, até domingo 7
	
	time[0] = new Array(1, 13, 3);
	 
	time[1] = new Array(2, 23, 3);
	 
	time[2] = new Array(3, 8, 3);
	
	time[3] = new Array(4, 18, 3);
	
	time[4] = new Array(5, 13, 3); 
	
	time[5] = new Array(6, 0, 3); 
	 
	time[6] = new Array(7, 7, 3);

    var currentDate = new Date();
	
	var currentDay = (currentDate.getDay() == 0) ? 7 : currentDate.getDay();
	
	var dayNow = 0;
	
	var haveEvent = 0;
	
	for (var i = 0; i < time.length; i++) {
		
		if(time[i][0] >= currentDay || time[i][0] == 'x') {
			
			nextDay = (time[i][0] > currentDay) ? 1 : 0;

			if(time[i][0] != 'x') {
				
				dayNow = ((time[i][0]-currentDay) < 0 ? ((time[i][0]-currentDay)+7) : (time[i][0]-currentDay));
			
			}
		
			if (nextDay == 1 || time[i][1] > currentDate.getHours() || (time[i][1] == currentDate.getHours() && time[i][2] >= currentDate.getMinutes())) {
				
				haveEvent = 1;
					
				nextEvent = new Date(currentDate.getFullYear(), currentDate.getMonth(), currentDate.getDate(), time[i][1], time[i][2], 0, 0);
				
				nextEvent = new Date(nextEvent.getTime()+(dayNow*(86400*1000)));
				
				break;
		
			} 
			
		}
			
	}
	
	if(haveEvent == 0) {
		
		dayNow = (time[0][0] == 'x') ? 1 : ((time[0][0]-currentDay) <= 0 ? ((time[0][0]-currentDay)+7) : (time[0][0]-currentDay));
			
		nextEvent = new Date(currentDate.getFullYear(), currentDate.getMonth(), currentDate.getDate(), time[0][1], time[0][2], 0, 0);
			
		nextEvent = new Date(nextEvent.getTime()+(dayNow*(86400*1000)));
	
	}
	
	nextMataPatoC = nextEvent;		

    interval[nextMataPatoC] = setInterval("eGetTime(nextMataPatoC, 'divMataPatoC', 3);", 1000);
}


function eMataPatoB() {
	
	var time = new Array(new Array()); //segunda 1, até domingo 7
	 
	time[0] = new Array(1, 18, 3);
	
	time[1] = new Array(2, 13, 3);
	 
	time[2] = new Array(3, 23, 3);
	
	time[3] = new Array(4, 8, 3);
	 
	time[4] = new Array(5, 18, 3);
	
	time[5] = new Array(6, 12, 3);
	
	time[6] = new Array(7, 0, 3); 

    var currentDate = new Date();
	
	var currentDay = (currentDate.getDay() == 0) ? 7 : currentDate.getDay();
	
	var dayNow = 0;
	
	var haveEvent = 0;
	
	for (var i = 0; i < time.length; i++) {
		
		if(time[i][0] >= currentDay || time[i][0] == 'x') {
			
			nextDay = (time[i][0] > currentDay) ? 1 : 0;

			if(time[i][0] != 'x') {
				
				dayNow = ((time[i][0]-currentDay) < 0 ? ((time[i][0]-currentDay)+7) : (time[i][0]-currentDay));
			
			}
		
			if (nextDay == 1 || time[i][1] > currentDate.getHours() || (time[i][1] == currentDate.getHours() && time[i][2] >= currentDate.getMinutes())) {
				
				haveEvent = 1;
					
				nextEvent = new Date(currentDate.getFullYear(), currentDate.getMonth(), currentDate.getDate(), time[i][1], time[i][2], 0, 0);
				
				nextEvent = new Date(nextEvent.getTime()+(dayNow*(86400*1000)));
				
				break;
		
			} 
			
		}
			
	}
	
	if(haveEvent == 0) {
		
		dayNow = (time[0][0] == 'x') ? 1 : ((time[0][0]-currentDay) <= 0 ? ((time[0][0]-currentDay)+7) : (time[0][0]-currentDay));
			
		nextEvent = new Date(currentDate.getFullYear(), currentDate.getMonth(), currentDate.getDate(), time[0][1], time[0][2], 0, 0);
			
		nextEvent = new Date(nextEvent.getTime()+(dayNow*(86400*1000)));
	
	}
	
	nextMataPatoB = nextEvent;		

    interval[nextMataPatoB] = setInterval("eGetTime(nextMataPatoB, 'divMataPatoB', 3);", 1000);
}

function eMataPatoA() {
	
	var time = new Array(new Array()); //segunda 1, até domingo 7
	 
	time[0] = new Array(1, 8, 3);
	 
	time[1] = new Array(2, 18, 3);
	
	time[2] = new Array(3, 13, 3);
	
	time[3] = new Array(4, 23, 3);
	
	time[4] = new Array(5, 8, 3);
	
	time[5] = new Array(6, 18, 3);
	
	time[6] = new Array(7, 12, 3);

    var currentDate = new Date();
	
	var currentDay = (currentDate.getDay() == 0) ? 7 : currentDate.getDay();
	
	var dayNow = 0;
	
	var haveEvent = 0;
	
	for (var i = 0; i < time.length; i++) {
		
		if(time[i][0] >= currentDay || time[i][0] == 'x') {
			
			nextDay = (time[i][0] > currentDay) ? 1 : 0;

			if(time[i][0] != 'x') {
				
				dayNow = ((time[i][0]-currentDay) < 0 ? ((time[i][0]-currentDay)+7) : (time[i][0]-currentDay));
			
			}
		
			if (nextDay == 1 || time[i][1] > currentDate.getHours() || (time[i][1] == currentDate.getHours() && time[i][2] >= currentDate.getMinutes())) {
				
				haveEvent = 1;
					
				nextEvent = new Date(currentDate.getFullYear(), currentDate.getMonth(), currentDate.getDate(), time[i][1], time[i][2], 0, 0);
				
				nextEvent = new Date(nextEvent.getTime()+(dayNow*(86400*1000)));
				
				break;
		
			} 
			
		}
			
	}
	
	if(haveEvent == 0) {
		
		dayNow = (time[0][0] == 'x') ? 1 : ((time[0][0]-currentDay) <= 0 ? ((time[0][0]-currentDay)+7) : (time[0][0]-currentDay));
			
		nextEvent = new Date(currentDate.getFullYear(), currentDate.getMonth(), currentDate.getDate(), time[0][1], time[0][2], 0, 0);
			
		nextEvent = new Date(nextEvent.getTime()+(dayNow*(86400*1000)));
	
	}
	
	nextMataPatoA = nextEvent;		

    interval[nextMataPatoA] = setInterval("eGetTime(nextMataPatoA, 'divMataPatoA', 3);", 1000);
}


function eMataPatoS() {
	
	var time = new Array(new Array()); //segunda 1, até domingo 7
	
	time[0] = new Array(1, 23, 3); 
	
	time[1] = new Array(2, 8, 3); 
	
	time[2] = new Array(3, 18, 3); 
	
	time[3] = new Array(4, 13, 3); 
	
	time[4] = new Array(5, 23, 3);
	
	time[5] = new Array(6, 7, 3); 
	
	time[6] = new Array(7, 18, 3);

    var currentDate = new Date();
	
	var currentDay = (currentDate.getDay() == 0) ? 7 : currentDate.getDay();
	
	var dayNow = 0;
	
	var haveEvent = 0;
	
	for (var i = 0; i < time.length; i++) {
		
		if(time[i][0] >= currentDay || time[i][0] == 'x') {
			
			nextDay = (time[i][0] > currentDay) ? 1 : 0;

			if(time[i][0] != 'x') {
				
				dayNow = ((time[i][0]-currentDay) < 0 ? ((time[i][0]-currentDay)+7) : (time[i][0]-currentDay));
			
			}
		
			if (nextDay == 1 || time[i][1] > currentDate.getHours() || (time[i][1] == currentDate.getHours() && time[i][2] >= currentDate.getMinutes())) {
				
				haveEvent = 1;
					
				nextEvent = new Date(currentDate.getFullYear(), currentDate.getMonth(), currentDate.getDate(), time[i][1], time[i][2], 0, 0);
				
				nextEvent = new Date(nextEvent.getTime()+(dayNow*(86400*1000)));
				
				break;
		
			} 
			
		}
			
	}
	
	if(haveEvent == 0) {
		
		dayNow = (time[0][0] == 'x') ? 1 : ((time[0][0]-currentDay) <= 0 ? ((time[0][0]-currentDay)+7) : (time[0][0]-currentDay));
			
		nextEvent = new Date(currentDate.getFullYear(), currentDate.getMonth(), currentDate.getDate(), time[0][1], time[0][2], 0, 0);
			
		nextEvent = new Date(nextEvent.getTime()+(dayNow*(86400*1000)));
	
	}
	
	nextMataPatoS = nextEvent;		

    interval[nextMataPatoS] = setInterval("eGetTime(nextMataPatoS, 'divMataPatoS', 3);", 1000);
}


function eMataPatoAll() {
	
	var time = new Array(new Array()); //segunda 1, até domingo 7
	
	time[0] = new Array(7, 16, 3);

    var currentDate = new Date();
	
	var currentDay = (currentDate.getDay() == 0) ? 7 : currentDate.getDay();
	
	var dayNow = 0;
	
	var haveEvent = 0;
	
	for (var i = 0; i < time.length; i++) {
		
		if(time[i][0] >= currentDay || time[i][0] == 'x') {
			
			nextDay = (time[i][0] > currentDay) ? 1 : 0;

			if(time[i][0] != 'x') {
				
				dayNow = ((time[i][0]-currentDay) < 0 ? ((time[i][0]-currentDay)+7) : (time[i][0]-currentDay));
			
			}
		
			if (nextDay == 1 || time[i][1] > currentDate.getHours() || (time[i][1] == currentDate.getHours() && time[i][2] >= currentDate.getMinutes())) {
				
				haveEvent = 1;
					
				nextEvent = new Date(currentDate.getFullYear(), currentDate.getMonth(), currentDate.getDate(), time[i][1], time[i][2], 0, 0);
				
				nextEvent = new Date(nextEvent.getTime()+(dayNow*(86400*1000)));
				
				break;
		
			} 
			
		}
			
	}
	
	if(haveEvent == 0) {
		
		dayNow = (time[0][0] == 'x') ? 1 : ((time[0][0]-currentDay) <= 0 ? ((time[0][0]-currentDay)+7) : (time[0][0]-currentDay));
			
		nextEvent = new Date(currentDate.getFullYear(), currentDate.getMonth(), currentDate.getDate(), time[0][1], time[0][2], 0, 0);
			
		nextEvent = new Date(nextEvent.getTime()+(dayNow*(86400*1000)));
	
	}
	
	nextMataPatoAll = nextEvent;		

    interval[nextMataPatoAll] = setInterval("eGetTime(nextMataPatoAll, 'divMataPatoAll', 3);", 1000);
}


function eReidoMad() {

	var time = new Array(new Array()); //segunda 1, até domingo 7
	
	time[0] = new Array(6, 20, 3);

    var currentDate = new Date();
	
	var currentDay = (currentDate.getDay() == 0) ? 7 : currentDate.getDay();
	
	var dayNow = 0;
	
	var haveEvent = 0;
	
	for (var i = 0; i < time.length; i++) {
		
		if(time[i][0] >= currentDay || time[i][0] == 'x') {
			
			nextDay = (time[i][0] > currentDay) ? 1 : 0;
			
			if(time[i][0] != 'x') {
				
				dayNow = ((time[i][0]-currentDay) < 0 ? ((time[i][0]-currentDay)+7) : (time[i][0]-currentDay));
			
			}
		
			if (nextDay == 1 || time[i][1] > currentDate.getHours() || (time[i][1] == currentDate.getHours() && time[i][2] >= currentDate.getMinutes())) {
				
				haveEvent = 1;
					
				nextEvent = new Date(currentDate.getFullYear(), currentDate.getMonth(), currentDate.getDate(), time[i][1], time[i][2], 0, 0);
				
				nextEvent = new Date(nextEvent.getTime()+(dayNow*(86400*1000)));
				
				break;
		
			} 
			
		}
			
	}
	
	if(haveEvent == 0) {
		
		dayNow = (time[0][0] == 'x') ? 1 : ((time[0][0]-currentDay) <= 0 ? ((time[0][0]-currentDay)+7) : (time[0][0]-currentDay));
			
		nextEvent = new Date(currentDate.getFullYear(), currentDate.getMonth(), currentDate.getDate(), time[0][1], time[0][2], 0, 0);
			
		nextEvent = new Date(nextEvent.getTime()+(dayNow*(86400*1000)));
	
	}
	
	nextReidoMad = nextEvent;		

    interval[nextReidoMad] = setInterval("eGetTime(nextReidoMad, 'divReidoMad', 3);", 1000);
}

function eSorteioSeeds() {

	var time = new Array(new Array()); //segunda 1, até domingo 7
	
	time[0] = new Array('x', 0, 0); 
	time[1] = new Array('x', 1, 0);
	time[2] = new Array('x', 2, 0);
	time[3] = new Array('x', 3, 0);
	time[4] = new Array('x', 4, 0);
	time[5] = new Array('x', 5, 0);
	time[6] = new Array('x', 6, 0);
	time[7] = new Array('x', 7, 0);
	time[8] = new Array('x', 8, 0);
	time[9] = new Array('x', 9, 0);
	time[10] = new Array('x', 10, 0);
	time[11] = new Array('x', 11, 0);
	time[12] = new Array('x', 12, 0);
	time[13] = new Array('x', 13, 0);
	time[14] = new Array('x', 14, 0);
	time[15] = new Array('x', 15, 0);
	time[16] = new Array('x', 16, 0);
	time[17] = new Array('x', 17, 0);
	time[18] = new Array('x', 18, 0);
	time[19] = new Array('x', 19, 0);
	time[20] = new Array('x', 20, 0);
	time[21] = new Array('x', 21, 0);
	time[22] = new Array('x', 22, 0);
	time[23] = new Array('x', 23, 0);

    var currentDate = new Date();
	
	var currentDay = (currentDate.getDay() == 0) ? 7 : currentDate.getDay();
	
	var dayNow = 0;
	
	var haveEvent = 0;
	
	for (var i = 0; i < time.length; i++) {
		
		if(time[i][0] >= currentDay || time[i][0] == 'x') {
			
			nextDay = (time[i][0] > currentDay) ? 1 : 0;
			
			if(time[i][0] != 'x') {
				
				dayNow = ((time[i][0]-currentDay) < 0 ? ((time[i][0]-currentDay)+7) : (time[i][0]-currentDay));
			
			}
		
			if (nextDay == 1 || time[i][1] > currentDate.getHours() || (time[i][1] == currentDate.getHours() && time[i][2] >= currentDate.getMinutes())) {
				
				haveEvent = 1;
					
				nextEvent = new Date(currentDate.getFullYear(), currentDate.getMonth(), currentDate.getDate(), time[i][1], time[i][2], 0, 0);
				
				nextEvent = new Date(nextEvent.getTime()+(dayNow*(86400*1000)));
				
				break;
		
			} 
			
		}
			
	}
	
	if(haveEvent == 0) {
		
		dayNow = (time[0][0] == 'x') ? 1 : ((time[0][0]-currentDay) <= 0 ? ((time[0][0]-currentDay)+7) : (time[0][0]-currentDay));
			
		nextEvent = new Date(currentDate.getFullYear(), currentDate.getMonth(), currentDate.getDate(), time[0][1], time[0][2], 0, 0);
			
		nextEvent = new Date(nextEvent.getTime()+(dayNow*(86400*1000)));
	
	}
	
	nextSorteioSeeds = nextEvent;		

    interval[nextSorteioSeeds] = setInterval("eGetTime(nextSorteioSeeds, 'divSorteioSeeds', 0);", 1000);
}

function eBloodCastle() {

	var time = new Array(new Array()); //segunda 1, até domingo 7
	
	time[0] = new Array('x', 0, 30); 
	time[1] = new Array('x', 1, 30);
	time[2] = new Array('x', 2, 30);
	time[3] = new Array('x', 3, 30);
	time[4] = new Array('x', 4, 30);
	time[5] = new Array('x', 5, 30);
	time[6] = new Array('x', 6, 30);
	time[7] = new Array('x', 7, 30);
	time[8] = new Array('x', 8, 30);
	time[9] = new Array('x', 9, 30);
	time[10] = new Array('x', 10, 30);
	time[11] = new Array('x', 11, 30);
	time[12] = new Array('x', 12, 30);
	time[13] = new Array('x', 13, 30);
	time[14] = new Array('x', 14, 30);
	time[15] = new Array('x', 15, 30);
	time[16] = new Array('x', 16, 30);
	time[17] = new Array('x', 17, 30);
	time[18] = new Array('x', 18, 30);
	time[19] = new Array('x', 19, 30);
	time[20] = new Array('x', 20, 30);
	time[21] = new Array('x', 21, 30);
	time[22] = new Array('x', 22, 30);
	time[23] = new Array('x', 23, 30);

    var currentDate = new Date();
	
	var currentDay = (currentDate.getDay() == 0) ? 7 : currentDate.getDay();
	
	var dayNow = 0;
	
	var haveEvent = 0;
	
	for (var i = 0; i < time.length; i++) {
		
		if(time[i][0] >= currentDay || time[i][0] == 'x') {
			
			nextDay = (time[i][0] > currentDay) ? 1 : 0;
			
			if(time[i][0] != 'x') {
				
				dayNow = ((time[i][0]-currentDay) < 0 ? ((time[i][0]-currentDay)+7) : (time[i][0]-currentDay));
			
			}
		
			if (nextDay == 1 || time[i][1] > currentDate.getHours() || (time[i][1] == currentDate.getHours() && time[i][2] >= currentDate.getMinutes())) {
				
				haveEvent = 1;
					
				nextEvent = new Date(currentDate.getFullYear(), currentDate.getMonth(), currentDate.getDate(), time[i][1], time[i][2], 0, 0);
				
				nextEvent = new Date(nextEvent.getTime()+(dayNow*(86400*1000)));
				
				break;
		
			} 
			
		}
			
	}
	
	if(haveEvent == 0) {
		
		dayNow = (time[0][0] == 'x') ? 1 : ((time[0][0]-currentDay) <= 0 ? ((time[0][0]-currentDay)+7) : (time[0][0]-currentDay));
			
		nextEvent = new Date(currentDate.getFullYear(), currentDate.getMonth(), currentDate.getDate(), time[0][1], time[0][2], 0, 0);
			
		nextEvent = new Date(nextEvent.getTime()+(dayNow*(86400*1000)));
	
	}
	
	nextBloodCastle = nextEvent;		

    interval[nextBloodCastle] = setInterval("eGetTime(nextBloodCastle, 'divBloodCastle', 5);", 1000);
}

function eDevilSquare() {

	var time = new Array(new Array()); //segunda 1, até domingo 7
	
	time[0] = new Array('x', 0, 30); 
	time[1] = new Array('x', 1, 30);
	time[2] = new Array('x', 2, 30);
	time[3] = new Array('x', 3, 30);
	time[4] = new Array('x', 4, 30);
	time[5] = new Array('x', 5, 30);
	time[6] = new Array('x', 6, 30);
	time[7] = new Array('x', 7, 30);
	time[8] = new Array('x', 8, 30);
	time[9] = new Array('x', 9, 30);
	time[10] = new Array('x', 10, 30);
	time[11] = new Array('x', 11, 30);
	time[12] = new Array('x', 12, 30);
	time[13] = new Array('x', 13, 30);
	time[14] = new Array('x', 14, 30);
	time[15] = new Array('x', 15, 30);
	time[16] = new Array('x', 16, 30);
	time[17] = new Array('x', 17, 30);
	time[18] = new Array('x', 18, 30);
	time[19] = new Array('x', 19, 30);
	time[20] = new Array('x', 20, 30);
	time[21] = new Array('x', 21, 30);
	time[22] = new Array('x', 22, 30);
	time[23] = new Array('x', 23, 30);

    var currentDate = new Date();
	
	var currentDay = (currentDate.getDay() == 0) ? 7 : currentDate.getDay();
	
	var dayNow = 0;
	
	var haveEvent = 0;
	
	for (var i = 0; i < time.length; i++) {
		
		if(time[i][0] >= currentDay || time[i][0] == 'x') {
			
			nextDay = (time[i][0] > currentDay) ? 1 : 0;
			
			if(time[i][0] != 'x') {
				
				dayNow = ((time[i][0]-currentDay) < 0 ? ((time[i][0]-currentDay)+7) : (time[i][0]-currentDay));
			
			}
		
			if (nextDay == 1 || time[i][1] > currentDate.getHours() || (time[i][1] == currentDate.getHours() && time[i][2] >= currentDate.getMinutes())) {
				
				haveEvent = 1;
					
				nextEvent = new Date(currentDate.getFullYear(), currentDate.getMonth(), currentDate.getDate(), time[i][1], time[i][2], 0, 0);
				
				nextEvent = new Date(nextEvent.getTime()+(dayNow*(86400*1000)));
				
				break;
		
			} 
			
		}
			
	}
	
	if(haveEvent == 0) {
		
		dayNow = (time[0][0] == 'x') ? 1 : ((time[0][0]-currentDay) <= 0 ? ((time[0][0]-currentDay)+7) : (time[0][0]-currentDay));
			
		nextEvent = new Date(currentDate.getFullYear(), currentDate.getMonth(), currentDate.getDate(), time[0][1], time[0][2], 0, 0);
			
		nextEvent = new Date(nextEvent.getTime()+(dayNow*(86400*1000)));
	
	}
	
	netxDevilSquare = nextEvent;		

    interval[netxDevilSquare] = setInterval("eGetTime(netxDevilSquare, 'divDevilSquare', 5);", 1000);
}

$(document).ready(function () {
	
	nextSobrevivencia = new Date();
	eSobrevivencia();
	
	nextGrandeMatador = new Date();
	eGrandeMatador();
	
	nextMataMataC = new Date();
	eMataMataC();
	
	nextMataMataB = new Date();
	eMataMataB();
	
	nextMataMataA = new Date();
	eMataMataA();
	
	nextMataMataS = new Date();
	eMataMataS();
	
	nextMataMataAll = new Date();
	eMataMataAll();
	
	nextMataPatoC = new Date();
	eMataPatoC();
	
	nextMataPatoB = new Date();
	eMataPatoB();
	
	nextMataPatoA = new Date();
	eMataPatoA();
	
	nextMataPatoS = new Date();
	eMataPatoS();
	
	nextMataPatoAll = new Date();
	eMataPatoAll();
	
	nextReidoMad = new Date();
	eReidoMad();
	
	nextSorteioSeeds = new Date();
	eSorteioSeeds();
	
	nextBloodCastle = new Date();
	eBloodCastle();
	
	netxDevilSquare = new Date();
	eDevilSquare();
	
});