$("#testlink").click(function()
{
    alert("test");
});

$("#addcat").click(function(){
 alert("test");
var ele = $("#maincatdiv").clone();
alert(ele);
var par= document.getElementById("categoryAdd");

par.appendChild(ele);

});