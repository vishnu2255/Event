$(document).ready(function(){


  
$(".addcat").click(function(){

    var catinp =document.createElement("input");
    catinp.setAttribute("type","text");
    catinp.setAttribute("placeholder","Category Name");
    catinp.setAttribute("name","category[]");
    catinp.setAttribute("class","form-control");
    
    
    var catprice =document.createElement("input");
    catprice.setAttribute("type","text");
    catprice.setAttribute("placeholder","Category Price");
    catprice.setAttribute("class","form-control");
    catprice.setAttribute("name","price[]");

    $(this).parent().append(catinp);
    $(this).parent().append("<br>");
    $(this).parent().append(catprice);
    $(this).parent().append("<br>");
    $(this).parent().append("<hr>");
 
     // $("#costumesection").append(ele);
 
 return false;
});

var i=0;

$("#addSection1").click(
    function(){
i++;
        // var div = $("#secdetails").clone();
        // $("#maincostumediv").append(div);

        var sec =document.createElement("input");
        sec.setAttribute("type","text");
        sec.setAttribute("placeholder","section");
        sec.setAttribute("class","form-control");
        sec.setAttribute("name","section[]");

        var catinp =document.createElement("input");
        catinp.setAttribute("type","text");
        catinp.setAttribute("placeholder","Category Name");
        catinp.setAttribute("name","category[]");
        catinp.setAttribute("class","form-control");
        
        
        var catprice =document.createElement("input");
        catprice.setAttribute("type","text");
        catprice.setAttribute("placeholder","Category Price");
        catprice.setAttribute("class","form-control");
        catprice.setAttribute("name","price");

        var btn =document.createElement("button");

        // btn.setAttribute("placeholder","Category Price");
        
        btn.setAttribute("class","float-right addcat btn btn-warning");
       btn.setAttribute("value","Test");
       btn.textContent= "testing";
        btn.setAttribute("name","Add Category");
        btn.setAttribute("id","id_"+i);

        
        // btn.addEventListener("click","addcat",function(){
        //     alert(2);
        // });

        $("#maincostumediv").append(sec);
        $("#maincostumediv").append("<br>");
        
        $("#maincostumediv").append(btn);
        $("#maincostumediv").append("<br>");
        $("#maincostumediv").append(catinp);
        $("#maincostumediv").append("<br>");
        $("#maincostumediv").append(catprice);
        $("#maincostumediv").append("<br>");
        
return false;
    });




});
// $("#testlink").click(function()
// {

    $("#id_1").click(function(){
        alert(1);
        return false;
     });



// });

$("#addSectionnew").click(
    function(){
        alert(1);
   var div = $("#secdetails").clone();
   $("#maincostumediv").append(div);
   return false;
    });


function addCat()
{
    var catinp =document.createElement("input");
    catinp.setAttribute("type","text");
    catinp.setAttribute("placeholder","Category Name");
    catinp.setAttribute("name","category[]");
    catinp.setAttribute("class","form-control");
    
    
    var catprice =document.createElement("input");
    catprice.setAttribute("type","text");
    catprice.setAttribute("placeholder","Category Price");
    catprice.setAttribute("class","form-control");
    catprice.setAttribute("name","price");

    $(this).parent().append(catinp);
    $(this).parent().append("<br>");
    $(this).parent().append(catprice);
    $(this).parent().append("<br>");
    $(this).parent().append("<hr>");
 
     // $("#costumesection").append(ele);
 
//  return false;
    return false;
};

