
let addNewteacher = document.querySelector('.addbtn');
let itemhide = document.querySelector('#itemhide');
let addteacherinfo = document.querySelector('#addteacherinfo');
let addteacherasuser = document.querySelector('#addteacherasuser');


addNewteacher.addEventListener('click',function(){
    if(itemhide.style.display = "block"){
        itemhide.style.display = "none";
        addteacherinfo.style.display =  "block";
        addteacherasuser.style.display =  "block";
        
    }
    else{
        alert('item is not hidden');
    }

})