var recruitCOU=(function(config,functions){
    return{
        submitForm:function(form){
            var me=this;
            functions.showLoading();
            $(form).ajaxSubmit({
                dataType:"json",
                success:function(response){
                    if(response.success){
                        $().toastmessage("showSuccessToast",config.messages.optSuccess);
                        setTimeout(function(){
                            window.location.href="recruit/index";
                        },3000);
                    }else{
                        functions.ajaxReturnErrorHandler(response.error_code);
                    }
                },
                error:function(){
                    functions.ajaxErrorHandler();
                }
            });
        }
    }
})(config,functions);

$(document).ready(function(){
    $("#myForm").validate({
        ignore:[],
        rules:{
            job:{
                required:true,
                maxlength:32
            },
            job_require:{
                required:true,
                maxlength:512
            },
            internship_require:{
                required:true,
                maxlength:512
            },
            address:{
                required:true,
                maxlength:64
            },
            date:{
                required:true
            }
        },
        messages:{
            job:{
                required:config.validErrors.required,
                maxlength:config.validErrors.maxLength.replace("${max}",32)
            },
            job_require:{
                required:config.validErrors.required,
                maxlength:config.validErrors.maxLength.replace("${max}",512)
            },
            internship_require:{
                required:config.validErrors.required,
                maxlength:config.validErrors.maxLength.replace("${max}",512)
            },
            address:{
                required:config.validErrors.required,
                maxlength:config.validErrors.maxLength.replace("${max}",64)
            },
            date:{
                required:config.validErrors.required
            }
        },
        submitHandler:function(form) {
            recruitCOU.submitForm(form);
        }
    });
});