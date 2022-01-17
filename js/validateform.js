function validateform(){
    let txtdienthoai= document.getElementById('index_email');
    let txtpass= document.getElementById('index_password');

    if(txtdienthoai.value==''){
        txtdienthoai.style.backgroundColor='pink';
        txtdienthoai.focus();
        return false;
    };
    if(txtpass.value==''){
        txtpass.style.backgroundColor = 'pink';
        txtpass.focus();
        return false;
    };
}