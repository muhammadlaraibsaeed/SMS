

$(document).ready(function(){
    // Covert form data to json
    function convertFormToJSON(form) {
    const array = $(form).serializeArray(); // Encodes the set of form elements as an array of names and values.
    const json = {};
    $.each(array, function () {
        json[this.name] = this.value || "";
    });
    return JSON.stringify(json);
    }
    // end function convert from data to json
    $(document).on('click','#btn-add,#btn-sign',function(e) {
        var email = $('#email').val();
        var form;
        var email_re = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;
        var phon_re = /^((\+92)|(0092))-{0,1}\d{3}-{0,1}\d{7}$|^\d{11}$|^\d{4}-\d{7}$/;
        if($(this).attr("data-form-id")=="#sign_up"){
            form=$(this).attr("data-form-id");
        }else{
            form= "#user_form";
        }
        var data = convertFormToJSON(form);
        if((email_re.test(email))&&(phon_re.test($('#phone').val()))&&($('#name').val()!='')&&($('#password').val()!='')&&($('#gender').val()!='')&&($('#city').val()!='')&&($('#type').val()!='')){
        $.ajax({
            data: data,
            type: "post",
            url: "backend/save.php",
            success: function(dataResult){
                    if(dataResult.statusCode==200){
                        $('#addEmployeeModal').modal('hide');
                        alert('Data added successfully !'); 
                        location.reload();						
                    }
                    else if(dataResult.login==="yes"){
                        location.href = "index.php";
                    }
                    else if(dataResult.error==="login"){
                        $("#error").show();
                    }
                    else if(dataResult.statusCode==201){
                    alert(dataResult);
                    }
            }
        });
    }else{
        alert("Invalid email OR Phone number and Fill Up All Record");
    }
    });
    $(document).on('click','.update',function(e) {
        var id=$(this).attr("data-id");
        var name=$(this).attr("data-name");
        var email=$(this).attr("data-email");
        var phone=$(this).attr("data-phone");
        var city=$(this).attr("data-city");
        $('#id_u').val(id);
        $('#name_u').val(name);
        $('#email_u').val(email);
        $('#phone_u').val(phone);
        $('#city_u').val(city);
    });

    $(document).on('click','#update',function(e) {
        var data = convertFormToJSON("#update_form");
        console.log(data);
        $.ajax({
            data: data,
            type: "PUT",
            url: "backend/save.php",
            success: function(dataResult){
                    if(dataResult.statusCode==200){
                        $('#editEmployeeModal').modal('hide');
                        alert('Data updated successfully !'); 
                        location.reload();						
                    }
                    else if(dataResult.statusCode==201){
                    alert(dataResult);
                    }
            }
        });
    });

    $(document).on("click", ".delete", function() { 
        var id=$(this).attr("data-id");
        $('#id_d').val(id);
        
    });
    $(document).on("click", "#delete", function() { 
        var id= $("#id_d").val();
        data = {id:id };
        json = JSON.stringify(data);
        console.log(json);
        $.ajax({
            url: "backend/save.php",
            type: "DELETE",
            cache: false,
            data:json,
            success: function(dataResult){
                    $('#deleteEmployeeModal').modal('hide');
                    $("#"+dataResult).remove();
            
            }
        });
    });

});