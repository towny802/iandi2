/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var final_order = ["black_pull", "default_strings"];

var hoodies = ["black_pull.png", "grey_pull.png", "navy_pull.png", "blue_pull.png"];
var i = 0;
function hoodie_switch() {
    var elements = document.getElementsByClassName("pull");
    for (var n = 0, length = elements.length; n < length; n++) {
        elements[n].src = "images/" + hoodies[i];
    }
console.log(i);
}

var pull_strings = ["white_pull_strings.png", "empty.png"];
var k = 0;
function string_switch() {
    var elements = document.getElementsByClassName("pull_strings");
    for (var n = 0, length = elements.length; n < length; n++) {
        elements[n].src = "images/" + pull_strings[k];
    }
console.log(k);
}








/*var emblem_options = ["feel_the_bern.png", "our_dna.png"];
var j = 0;
function emblem_switch() {
    var elements = document.getElementsByClassName("design");
    for (var n = 0, length = elements.length; n < length; n++) {
        elements[n].src = "images/" + emblem_options[j];
    }
    
    switch(j){
        case 0:
            {$("#feel_the_bern").show();}
            break;
        case 1:
            {$("#feel_the_bern").hide(); };
            break;
        default:function nothing(){};
    }
    
console.log(j);
}*/

var color_options = ["",""];

$(document).ready(function () {
$('.selectable').css('background-size', "60px");
    window.onload = function () {
        document.getElementById('loading-mask').style.display = 'none';
    };

    $('a').click(function (event) {
        event.preventDefault();
    });

    $('#color_right').click(function (event) {
        switch (i) {
            case 0:
                i++;
                hoodie_switch(i);
                break;
            case 1:
                i++;
                hoodie_switch(i);
                break;
            case 2:
                i++;
                hoodie_switch(i);
                break;
            case 3:
                i = 0;
                hoodie_switch(i);
                break;
            default:
                i = 0;
                hoodie_switch(i);
                break;
        }
    });

    $('#color_left').click(function (event) {
        switch (i) {
            case 0:
                i = 3;
                hoodie_switch(i);
                break;
            case 1:
                i = 0;
                hoodie_switch(i);
                break;
            case 2:
                i = 1;
                hoodie_switch(i);
                break;
            case 3:
                i = 2;
                hoodie_switch(i);
                break;
            default:
                i = 3;
                hoodie_switch(i);
                break;
        }
    });

    $('.minor_arrow').click(function (event) {
        switch (k) {
            case 0:
                k = 1;
                string_switch(k);
                break;
            case 1:
                k = 0;
                string_switch(k);
                break;
            default:
                console.log("Error in pull_string select");
                break;
        }

    });
    
    $('#emblem_right').click(function (event) {
        switch (j) {
            case 0:
                j++;
                emblem_switch(k);
                break;
            case 1:
                j=0;
                emblem_switch(k);
                break;
            default:
                console.log("Error in pull_string select");
                break;
        }

    });
    
    $('#emblem_left').click(function (event) {
        switch (j) {
            case 0:
                j=1;
                emblem_switch(k);
                break;
            case 1:
                j--;
                emblem_switch(k);
                break;
            default:
                console.log("Error in pull_string select");
                break;
        }

    });
    
    $('.selectable').click(function() {
        $('.selected').removeClass("selected");
        this.classList.add("selected");
    });
    
    $('.selectable_color').click(function() {
        $('.selected_color').removeClass("selected_color");
        this.classList.add("selected_color");
        var new_color = $('.selected_color').attr('src');
        $('.selected').css('background-image', "url("+new_color+")");
        
       // $('.selected').each(function(index,value) {value.css('background-image', "url("+new_color+")")}); 
    });
    
});