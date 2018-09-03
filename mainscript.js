"use strict";

var opTitle = document.querySelectorAll(".opTitle");
var opSelect = document.getElementsByClassName("opSelect");
var opForm = document.getElementsByClassName("opForm");
var swp = document.querySelectorAll(".swp");
var fVal = document.getElementsByClassName("fVal");
var crndt = document.getElementById("crndt");
var crntm = document.getElementById("crntm");

var opTitleArr = Array.from(opTitle);
var opSelectArr =  Array.from(opSelect);
var opFormArr = Array.from(opForm);
var swpArr = Array.from(swp);

var crncyFctr = [365,430,495,57.53,5.51,79.45,27.52,4.26]; //for currencny conversion form arranged in option order, i.e, USD, EURO, GBP...respectively
var metrcFctr = [0.621504,0.3048,0.9144,2.5401,2.2045855,0.157473,0.2,28.35,31.103477,0.0929,6.4516,2.4709661,3.78541,0.0083864,0.0610237,0.0283168]; //for metric conversion form arranged in option order, i.e, Kg-Mile, metre-Km,...respectively
var nbaseFctr = [2,8,16]; //for number base conversion form

var allFctr = [crncyFctr, metrcFctr, nbaseFctr];
var swapState = false;


setInterval(chrono, 1000);

function chrono(){
	var tm = new Date();
	crndt.innerHTML = "<i class='fa fa-calendar'></i> " + tm.toDateString();
	crntm.innerHTML = "<i class='fa fa-clock-o'></i> " + tm.toLocaleTimeString();
}


for (var i = 0; i < opSelect.length; i++){
	opSelect[i].addEventListener("change", function (){selOp(this.form, this);});
}

function selOp(a,b){
	var fInd = opFormArr.indexOf(a);
	var sInd = b.selectedIndex;
	setDesc(a,fInd,b,sInd,b.options[sInd].text,b.options[sInd].text.split("-")[0],b.options[sInd].text.split("-")[1]);
	convsn(a);
}

function setDesc(a,b,c,d,e,f,g){
	opTitleArr[b].innerHTML = "Converting Between <br>"+e;
	var h = a.getElementsByClassName("valNote");
	if (a.id == "crncy"){
		if(swapState === false){
			h[0].innerHTML = "Amount in "+f;
			h[1].innerHTML = "Amount in "+g;
		}else{
			h[0].innerHTML = "Amount in "+g;
			h[1].innerHTML = "Amount in "+f;
		}		
	}else{
		if(swapState === false){
			h[0].innerHTML = "Value in "+f;
			h[1].innerHTML = "Value in "+g;
		}else{
			h[0].innerHTML = "Value in "+g;
			h[1].innerHTML = "Value in "+f;
		}
	}
}


for(var i = 0; i<fVal.length; i++){
	fVal[i].addEventListener("keyup", function(){convsn(this.form);});    
}


function convsn(a){
	var fctr = setFctr();
	var swp = a.getElementsByClassName("swp")[0];
	var fVV = a.getElementsByClassName("val")[0].value;
	var sV = a.getElementsByClassName("val")[1];
	var valNote = a.getElementsByClassName("valNote");
	var sel = a.getElementsByTagName("select")[0];
	sV.style.fontWeight = "bold";
	sV.style.borderRadius = "4px";

	var fIndx;
	var sIndx;
	
	function setFctr(){
		fIndx = opFormArr.indexOf(a);
		sIndx = a.getElementsByTagName("select")[0].selectedIndex;
		return allFctr[fIndx][sIndx-1];
	}
	
	
	if(fctr === undefined || fctr == "" || isNaN(fctr) || fctr == 0){
		sV.placeholder = "Error: Select Conversion Type";
		sV.style.borderColor = "tomato";
		sV.style.fontSize = "11px";
		valNote[1].innerHTML = "<mark><span class='fa fa-cog fa-spin' style='font-size:14px;'></span> " + sV.placeholder+"</mark>";
		valNote[1].style.fontStyle = "italic";		
		swp.disabled = "disabled";
		
	}else{
		if(a.id == "nbase"){
			if(swapState === false){
				sV.value = parseInt(fVV,fctr);
			}else{
				sV.value = Number(fVV).toString(fctr);
			}
			sV.style.borderColor = "#00ff00";
			sV.style.color = "black";
			sV.style.fontSize = "14px";
			swp.removeAttribute("disabled");
			valNote[1].style.color = "white";
			setDesc(a,fIndx,sel,sIndx,sel.options[sIndx].text,sel.options[sIndx].text.split("-")[0],sel.options[sIndx].text.split("-")[1]);		
		}else{
			if(isNaN(fVV)){
				sV.value = "Error Converting: Enter a Number...";
				sV.style.color = "tomato";
				sV.style.borderColor = "tomato";
				sV.style.fontSize = "10px";
				valNote[1].innerHTML = "<mark><span class='fa fa-cog fa-spin' style='font-size:14px;'></span> " + sV.value + "</mark>";
				valNote[1].style.fontStyle = "italic";
				swp.disabled = "disabled";
			}else{	
			    if(swapState === false){
					sV.value = fVV * fctr;
				}else{
					sV.value = fVV/fctr;
				}			
				sV.style.borderColor = "#00ff00";
				sV.style.color = "black";
				sV.style.fontSize = "14px";
				swp.removeAttribute("disabled");
				valNote[1].style.color = "white";				
				setDesc(a,fIndx,sel,sIndx,sel.options[sIndx].text,sel.options[sIndx].text.split("-")[0],sel.options[sIndx].text.split("-")[1]);				
			}			
		}	
		
	}
}


for(var i = 0; i < swp.length; i++){
	swp[i].onclick = function(){swap(this.form,this.form.getElementsByClassName("valNote")[0].innerHTML);};
}

function swap(a,fVNt){
	var fV = a.getElementsByClassName("val")[0];
	var sV = a.getElementsByClassName("val")[1];
	var fVN = a.getElementsByClassName("valNote")[0];
	var sVN = a.getElementsByClassName("valNote")[1];
	
	if(swapState === false){		
		fVN.innerHTML = sVN.innerHTML;
		sVN.innerHTML = fVNt;
		swapState = true;
		fV.value = sV.value;
		convsn(a);
	}else{
		fVN.innerHTML = sVN.innerHTML;
		sVN.innerHTML = fVNt;		
		swapState = false;
		fV.value = sV.value;
		convsn(a);
	}
}
