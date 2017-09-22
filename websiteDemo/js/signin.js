
function checkEmail() {
    var email=/w+([-+.]w+)*@w+([-.]w+)*.w+([-.]w+)*/;//对邮箱进行匹配
    var Email=$("#inputEmail").val();
    if(email.test(Email)){
        $("#alert").show();
        $("#alert").attr("class","alert alert-success");
        $("#alert").text("恭喜你该邮箱可用");
    }
    else {
        $("#alert").show();
        $("#alertl").attr("class","alert alert-warning");
        $("#alert").text("请填写你的邮箱地址");
    }
}
function checkPassword() {
    var password=/^[a-z]w[A-Z]w{5,17}$/;//对密码匹配
    var PassWord=$("#inputPassword").text();
    var passWordAgain=$("#inputPasswordAgain").text();
    if(password.test(PassWord)){
        $("#alert").show();
        $("#alert").attr("class","alert alert-success");
        $("#alert").text("你的密码符合标准");
    }
    else{
        $("#alert").show();
        $("#alert").attr("class","alert alert-warning");
        $("#alert").text("你的密码必须开头是英文并且包涵至少5个字符最多17个字符");
    }
    if(passWordAgain!=PassWord){
        $("#alert").show();
        $("#alert").attr("class","alert alert-success");
        $("#alert").text("两次输入的密码不一致");

    }
}
