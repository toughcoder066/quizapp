function sendData(){
    var ques = $('#ques');
    var ans = $('#ans');
    var opt_a = $('#opt-a');
    var opt_b = $('#opt-b');
    var opt_c = $('#opt-c');
    var title_id = $('#qtitle');//$('#qtitle option:selected');
    
//var cat = $('#category').val();
//console.log(cat)
//var cat = document.getElementById("category");
//console.log(cat.options[cat.selectedIndex].value);

    //console.log(ans.val());

    if (isNotEmpty(ques) && isNotEmpty(ans) && isNotEmpty(opt_a) && isNotEmpty(opt_b) && isNotEmpty(opt_c) && isNotEmpty(title_id)){
       
       $.ajax({
            type: 'POST',
            url: 'controller/send.php',
            data:{
                question: ques.val(),
                answer: ans.val(),
                option_a: opt_a.val(),
                option_b: opt_b.val(),
                option_c: opt_c.val(),
                title_id: title_id.val(),
                 },
            success: function(response){
                $("#form-id")[0].reset();
                //console.log(data[0]);
                $('#qtitle option:first').prop('selected',true);
                //$('#category option:first').prop('selected',true);
                $(".notification").html(response);
                //location.reload();
                //alert(response);
            }
        });
    }
}

function createQuiz(){
    var title = $('#title');
    var desc  = $('#desc');
    var cat = $('#category option:selected');

    if (isNotEmpty(title) && isNotEmpty(desc)){
       
       $.ajax({
            type: 'POST',
            url: 'controller/send.php',
            data:{
                title: title.val(),
                desc: desc.val(),
                category: cat.text() 
                 },
            success: function(response){
                $("#drop-down")[0].reset();
                $(".modal-notify").html(response);
                //alert(response);
            }
        });
    }
}

$('#quizbill').click(()=>{
        if($('#drop-down').css('display') == 'none' || $('#drop-down').css('display') == ''){
            $('#drop-down').css('display', 'block');
        }
    });
    $('#lil-fonts').click(()=>{
        if($('#drop-down').css('display') == 'block' || $('#drop-down').css('display') == ''){
            $('#drop-down').css('display', 'none');
        }
    });


function isNotEmpty(field){
    if((field.attr('id') == 'title')&&(field.val() == '')){
        field.css('border','1px solid red');
        $(".modal-notify").html('An empty field is not allowed');
        return false;
    }
    else if (field.val() == ''){
        field.css('border','1px solid red');
        $(".notification").html('An empty field is not allowed');
        return false;
    }else{
        field.css('border','');
        return true;
    }
}