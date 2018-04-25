


  
 var fileid=0;

 function addFile()
 {
    //  alert('test');
     fileid++;

    //  alert(fileid);
     var eleid= 'file-'+fileid;
     var html = '<input type="file" name="uploaded_file[] value="AddFile" />';
      // '<a href="" onClick="javascript:remove(fileid); return false;">Remove</a>';

     var par = document.getElementById("filesupload");

    //  alert(par.innerHTML);
     var newEle = document.createElement('div');

     newEle.setAttribute('id',eleid);

     newEle.innerHTML = html;

    //  alert(newEle.innerHTML);
    
     par.appendChild(newEle);



 }

 function remove(fid)
 {
var id = 'file-'+fid;
    // alert(id);
var par = document.getElementById("filesupload");
delchild= document.getElementById(id);
// alert(delchild);
par.removeChild(delchild);

 }


