//Thanks to http://agyuku.net/2009/05/back-to-top-link-using-jquery/
//toTop, as user scrolls a back to top button will be displayed in the bottom right corner.
$(function() {
	$(window).scroll(function() {
		if($(this).scrollTop() != 0) {
			$('#toTop').fadeIn();	
		} else {
			$('#toTop').fadeOut();
		}
	});
 
	$('#toTop').click(function() {
		$('body,html').animate({scrollTop:0},800);
	});	
});

//Portfolio show/hide, allows users to choose between a view of my portfolio via my 'rain' script or a regular grid view
$(function(){
      function gridwork(event) {
		$('#portfoliorain').fadeOut('fast')
		$('#portfoliogrid').fadeIn('slow');
		$('#workbottomgrid').fadeIn('slow');
		$('#workbottomrain').fadeOut('fast')	
		return false;	
      }
      function rainwork(event) {
		$('#portfoliorain').fadeIn('slow');
		$('#portfoliogrid').fadeOut('fast');
		$('#workbottomgrid').fadeOut('fast')
		$('#workbottomrain').fadeIn('slow');
		return false;
      }
	  
	  $('#rainview').click(rainwork);
      $('#gridview').click(gridwork);
});

/*
 * Pause jQuery plugin v0.1
 *
 * Copyright 2010 by Tobia Conforto <tobia.conforto@gmail.com>
 *
 * Based on Pause-resume-animation jQuery plugin by Joe Weitzel
 *
 * This program is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or(at your option)
 * any later version.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or
 * FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for
 * more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * this program; if not, write to the Free Software Foundation, Inc., 51
 * Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 */
(function(){var e=jQuery,f="jQuery.pause",d=1,b=e.fn.animate,a={};function c(){return new Date().getTime()}e.fn.animate=function(k,h,j,i){var g=e.speed(h,j,i);g.complete=g.old;return this.each(function(){if(!this[f]){this[f]=d++}var l=e.extend({},g);b.apply(e(this),[k,e.extend({},l)]);a[this[f]]={run:true,prop:k,opt:l,start:c(),done:0}})};e.fn.pause=function(){return this.each(function(){if(!this[f]){this[f]=d++}var g=a[this[f]];if(g&&g.run){g.done+=c()-g.start;if(g.done>g.opt.duration){delete a[this[f]]}else{e(this).stop();g.run=false}}})};e.fn.resume=function(){return this.each(function(){if(!this[f]){this[f]=d++}var g=a[this[f]];if(g&&!g.run){g.opt.duration-=g.done;g.done=0;g.run=true;g.start=c();b.apply(e(this),[g.prop,e.extend({},g.opt)])}})}})();

//Rain.js
//Gather portfolio items from XML *Optional - experimenting with jQuery XML/XJAX
//Take data from XML file, send into array *
//Display only 5 arrays randomly from portfolio item group *
//Animation loops top/bottom (seamless due to z-index values and going beyond container
//Generates random animation speeds every loop
//by Eric Barber

//Global variables for XML data, Duplicate Check
	var title=[];
	var site=[];
	var screenshot=[];
	var description=[];
	var total = null; //Total number of items
	var nodupe = []; //0-4, for boxes I want to display
	var test = []; //Tests for duplicates
	var old1 = null; //Testing for old values
	var old2 = null;
	var old3 = null;
	var old4 = null;
	var old5 = null;
	var sizes = null; //Generating random mouseover box size
	
//Begin script
$(document).ready(function(){
    $.ajax({
    type: "GET",
	async: false, //Performance issues, Workaround needed
    url: "work.xml",
    dataType: "xml",
    success: homeXML
	  });    
randomanimate();

//Initiate Animation
function randomanimate(){
	//Generate random number from 1 to item amount
	animate1();
	animate2();
	animate3();
	animate4();
	animate5();
}

	//Filling in Data
function filldata(box){
		for(i=0;i<total;i++)
	{
		nodupe[i]=i;
	}
	
	//Duplicate Check - Needs optimization
	var randomData = Math.floor(Math.random() * total);
	if(box.hasClass('box1')){
		
		test[0] =  nodupe[randomData];
	
		while(test[0] == test[1] || test[0] == test[2] || test[0] == test[3] || test[0] == test[4] || test[0] == old1){
				test[0] =  Math.floor(Math.random() * total)
		}
		old1 = test[0];
		nodupe[randomData] = test[0];
		
	}

	if(box.hasClass('box2')){
		test[1] =  nodupe[randomData];
	while(test[1] == test[2] || test[1] == test[3] || test[1] == test[4] || test[1] == test[0] || test[1] == old2){
				test[1] =  Math.floor(Math.random() * total)
		}
		old2 = test[1];
		nodupe[randomData] = test[1];
	}
	
	if(box.hasClass('box3')){
		test[2] =  nodupe[randomData];
		while(test[2] == test[0] || test[2] == test[1] || test[2] == test[3] || test[2] == test[4] || test[2] == old3){
				test[2] =  Math.floor(Math.random() * total)
		}
		old3 = test[2];
		nodupe[randomData] = test[2];
	}
	
	if(box.hasClass('box4')){
		test[3] =  nodupe[randomData];
		while(test[3] == test[0] || test[3] == test[1] || test[3] == test[2] || test[3] == test[4] || test[3] == old4){
				test[3] =  Math.floor(Math.random() * total)
		}
		old4 = test[3];
		nodupe[randomData] = test[3];
	}
	
	if(box.hasClass('box5')){
		test[4] =  nodupe[randomData];
		while(test[4] == test[0] || test[4] == test[1] || test[4] == test[2] || test[4] == test[3] || test[4] == old5){
				test[4] =  Math.floor(Math.random() * total)
		}
		old5 = test[4];
		nodupe[randomData] = test[4];
	}
	
	$(box).html('<p>'+title[nodupe[randomData]] + '<br> <a href="'+site[nodupe[randomData]]+'"> <img style = "max-width:100%;" src="' +screenshot[nodupe[randomData]] + '"/> </a>'); //Places data in box, pulls in style sheet to display data
}

//Gather data
function homeXML(xml)
{
	//Get data from XML, assign data to workable arrays
	$(xml).find("item").each(function(index)
	{	
		title[index] = $(this).find('title').text();
		site[index] = $(this).find('link').text();
		screenshot[index] = $(this).find('screenshot').text();
		description[index] = $(this).find('description').text();
		total=total+1; //Finds total number of entries	
	});
}

//Functions have to seperated per box to allow correct looping/stopping on hover.
function animate1() {
	sizes = Math.floor(Math.random() * 3);
	randomNumber = Math.floor(Math.random() * 1001) + 1500;	
    $(".box1").css("top", "10px"); //Should be -10px, testing duplicate purposes by commenting out animation loop
    $(".box1").animate({top:"400px"},randomNumber, animate1);
	var box = $(".box1");
	filldata(box);
	
}
function animate2() {
	sizes = Math.floor(Math.random() * 3);
	randomNumber = Math.floor(Math.random() * 1001) + 1500;	
    $(".box2").css("top", "10px");
    $(".box2").animate({top:"400px"},randomNumber, animate2);
   	var box = $(".box2");
	filldata(box);
}
function animate3() {
	sizes = Math.floor(Math.random() * 3);
	randomNumber = Math.floor(Math.random() * 1001) + 1500;	
    $(".box3").css("top", "10px");
    $(".box3").animate({top:"400px"},randomNumber, animate3);
    var box = $(".box3")
	filldata(box);
}
function animate4() {
	sizes = Math.floor(Math.random() * 3);
	randomNumber = Math.floor(Math.random() * 1001) + 1500;	
    $(".box4").css("top", "10px");
    $(".box4").animate({top:"400px"},randomNumber, animate4);
    var box = $(".box4")
	filldata(box);
}
function animate5() {
	sizes = Math.floor(Math.random() * 3);
	randomNumber = Math.floor(Math.random() * 1001) + 1500;	
    $(".box5").css("top", "10px");
	$(".box5").animate({top:"400px"},randomNumber, animate5);
    var box = $(".box5")
	filldata(box);
}

//Using Pause/Resume plugin functionality to stop/restart on hover without restarting animation entirely.
$(".box").mouseover(function(){
	 //Sample changing sizes
	//Depending on what number of 'size' is generated per animation a different sized box will be displayed. Will be adapted for future category specification.
	if(sizes == 0){
	$(this).addClass("big1");
			//$(this).children("p").fadeIn('5000');
	}
	else if(sizes == 1)
	{
	$(this).addClass("big2");
		//$(this).children("p").fadeIn('5000');
	}
	else if(sizes == 2)
	{
	$(this).addClass("big3");
		//$(this).children("p").fadeIn('5000');
	}
	
	$(".box").pause();
});

$(".box").mouseout(function(){
	if(sizes == 0){
	$(this).removeClass("big1");
		
	}
	else if(sizes == 1)
	{
	$(this).removeClass("big2");
			
	}
	else if(sizes == 2)
	{
	$(this).removeClass("big3");
			
	}

	$(".box").resume();
}); 

}); //End document load