$(document).ready(function(){
$('.lightbox').click(function(){
var x = ($(this).attr('src'));
     $('.restmain').attr('src',x);
});

var fileid=0;

$("#addtempfile").click(function(){
// alert("test");
fileid++;
var id = 'file-'+fileid;
    // alert("test");
    var ele = document.createElement("div");
    // var ht = '<input type="file" name="uploaded_file[] multiple/>';
    // '<a href="" onClick="javascript:remove(fileid); return false;">Remove</a>';
    // ele.setAttribute("id",id);
    // ele.innerHTML(ht);
    // alert(ele);

    var inp = document.createElement("input");
    inp.setAttribute("type","file");
    inp.setAttribute("name","uploaded_file[]");

    var rem = document.createElement("a");
    rem.innerText ="Remove";
    rem.setAttribute("href","");
    rem.setAttribute("id",id);
    rem.addEventListener("click",function(){
         var id = $(this).attr("id");
        //  alert(id);
  // $(this).attr(id).remove;
//   $(id).remove();
var conttorem = document.querySelectorAll(id);
$(conttorem).remove();
   return false;
    },false);
   // rem.addEventListener("click",'remove()');


    ele.appendChild(inp);
    ele.appendChild(rem);


    // ele.inn('<input type="file" name="uploaded_file[] multiple/>');
    // alert(ele);
    // ele.appendChild('<a href="" onClick="javascript:remove(fileid); return false;">Remove</a>');
    // ele.setAttribute("name","uploaded_file[]");
    // ele.setAttribute("type","file");
    // ele.setAttribute("id",id);
// alert(ele);
$("#tempfiles").append(ele);
return false;
});
});

function remove()
{
var id = $(this).attr("id");
   // alert(id);
   $(this).attr(id).remove;


// var par = document.getElementById("tempfiles");
// par.removeChild()
// delchild= document.getElementById(id);
// // alert(delchild);
// par.removeChild(delchild);

}