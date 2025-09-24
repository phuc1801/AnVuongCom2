$(document).ready(function(){
    $('#register-form').submit(function(e){
        let name = $('input[name="name"]').val();
        let email = $('input[name="email"]').val();
        let phone = $('input[name="phone"]').val();
        let password = $('input[name="password"]').val();
        let re_password = $('input[name="password_confirmation"]').val();

        let errorMesssage = "";
        if(name.length < 3){
            errorMesssage += "Họ và tên phải lớn hơn 3 ký tự. <br>";
        }
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if(!emailRegex.test(email)){
            errorMesssage += "Email không hợp lệ. <br>";
        }
        const phoneRegex = /^(0[1-9]\d{8}|\+84[1-9]\d{8})$/;
        if(!phoneRegex.test(phone)){
            errorMesssage += "Điện thoại không hợp lệ. <br>";
        }
        const pwRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&]).+$/;
        if(!pwRegex.test(password)){
            errorMesssage += "Mật khẩu nên đặt theo quy định <br>";
        }
        if(password != re_password){
            errorMesssage += "Mật khẩu nhập lại không khớp <br>";
        }
        if(errorMesssage != ""){
            toastr.error(errorMesssage, "Lỗi");
            e.preventDefault();
        }
    })
    $('#login-form').submit(function(e){
        let email = $('input[name="email"]').val();
        let password = $('input[name="password"]').val();

        let errorMesssage = "";
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if(!emailRegex.test(email)){
            errorMesssage += "Email không hợp lệ. <br>";
        }
        if(password.length < 8){
            errorMesssage += "Mật khẩu ít nhất 8 kí tự <br>";
        }
        if(errorMesssage != ""){
            toastr.error(errorMesssage, "Lỗi");
            e.preventDefault();
        }
    })
    $('#reset-form').submit(function(e){
        let email = $('input[name="email"]').val();
        let password = $('input[name="password"]').val();
        let re_password = $('input[name="password_confirmation"]').val();

        let errorMesssage = "";
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if(!emailRegex.test(email)){
            errorMesssage += "Email không hợp lệ. <br>";
        }
        if(password.length < 8){
            errorMesssage += "Mật khẩu ít nhất 8 kí tự <br>";
        }
        const pwRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&]).+$/;
        if(!pwRegex.test(password)){
            errorMesssage += "Mật khẩu nên đặt theo quy định <br>";
        }
        if(password != re_password){
            errorMesssage += "Mật khẩu nhập lại không khớp <br>";
        }
        if(errorMesssage != ""){
            toastr.error(errorMesssage, "Lỗi");
            e.preventDefault();
        }
    })
});

