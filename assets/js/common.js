'use strict';
$(function() {
    $("#menuicon").click(function(e){
        e.preventDefault();
        // Adiciona ou remove a classe menuclose
        $(this).toggleClass("menuclose");
    });
});