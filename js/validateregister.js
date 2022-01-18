function validateregister(){
    let txtfirstname = document.getElementById('firstname');
    let txtlastname = document.getElementById('lastname');

    if(txtfirstname.value==''){
        txtfirstname.style.backgroundColor='pink';
        txtfirstname.focus();
        alert("Xin mời nhập tên ");
        return false;
    };
    if(txtlastname.value==''){
        txtlastname.style.backgroundColor = 'pink';
        txtlastname.focus();
        alert("Xin mời nhập họ đệm ");
        return false;
    };
}