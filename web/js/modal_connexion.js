/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//alert("WOW ! Tu es sur ma page !");

$(function(){ // Dom ready
    $('#myModal').on('shown.bs.modal', function () {
    //    alert("Hello World !");
        console.log($("exampleModal"));
        $('#myInput').focus();
    });
});