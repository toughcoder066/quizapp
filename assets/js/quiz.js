var btn_a = $('#option-1');
var btn_b = $('#option-2');
var btn_c = $('#option-3');
var btn_d = $('#option-4');
var qbox = $('#ques');
var ans; 
var cur_score = $('#score');
var sec_score = $('#score2');
var remarks = $('#remark');
var comments = $('#your-result');
var blk = $('#block-click');
var qtitle_id = $('#title_id').val();

//onclick
$('#close').click((_e)=>{
    
    if(confirm("Are you sure you want to quit?"))
    window.location.href = "/app/quiz/landing.php";
    
    event.preventDefault();
});


function getQuestion(){
    $('.option-container').css('pointer-events','auto');
    let data;
    $.ajax({
            type: 'POST',
            url: '../controller/collect.php',
            data:{
                title_id: qtitle_id
            },
            success: function(response){
                data = JSON.parse(response);
                datax = data['options'].sort((a,b) => 0.5 - Math.random());
                window.ans = data['answer'];
                //console.log(datax[0]);
                //alert(response);
                //alert(JSON.stringify(data));
                //alert(data['options'][0]); 
                //set a varible for data['options'],
                //shuffle it and feed them to to their respective...
                restore();
                if(data['question'].length > 36){
                    qbox.style.fontSize = '16';
                }
                qbox.textContent=data['question'];
                $('#option-1').html("<div id='option-1' class='add-on' onclick='callNow(this.id);'>"+datax[0]+"</div>");
                $('#option-2').html("<div id='option-2' class='add-on' onclick='callNow(this.id);'>"+datax[1]+"</div>");
                $('#option-3').html("<div id='option-3' class='add-on' onclick='callNow(this.id);'>"+datax[2]+"</div>");
                $('#option-4').html("<div id='option-4' class='add-on' onclick='callNow(this.id);'>"+datax[3]+"</div>");
            }
        });
} 

function restore(){
    let btn_a = $('#option-1');
    let btn_b = $('#option-2');
    let btn_c = $('#option-3');
    let btn_d = $('#option-4');
    //the way i found to work was to unset the previous and reset it
    btn_a.css('background','unset');btn_a.css('background','white');btn_a.css('color','unset');
    btn_b.css('background','unset');btn_b.css('background','white');btn_b.css('color','unset');
    btn_c.css('background','unset');btn_c.css('background','white');btn_c.css('color','unset');
    btn_d.css('background','unset');btn_d.css('background','white');btn_d.css('color','unset');
    
    
}

  
localStorage.setItem('score',0);

var btn_a = document.getElementById('option-1');
var btn_b = document.getElementById('option-2');
var btn_c = document.getElementById('option-3');
var btn_d = document.getElementById('option-4');

var qbox = document.getElementById('ques');
var cur_score = document.getElementById('score');
var blk = document.getElementById('block-click');
//var ques = document.getELementById('ques');

var score = 0; 
var c_score;

//qbox.innerHTML(quizObj['question'][0])
//console.log(qbox.style.fontSize);


function sleep(timer){
    return new Promise(resolve => setTimeout(resolve,timer))
}

var restrict = document.getElementById('disp-access');
/*var endgame = document.getElementById('close').addEventListener('click',() =>{
    localStorage.setItem('score',0);
});*/
var proceed = document.getElementById('next').addEventListener('click',() =>{
    if ((restrict.style.display == '') || (restrict.style.display == 'block')){
        restrict.style.display = 'None';
   }
});



/*$('#qbtn').click(()=>{
        if($('#quiz-start').css('display') == 'block' || $('#quiz-start').css('display') == ''){
            $('#quiz-start').css('display', 'none');    
        }
    });*/


function callNow(option){
    let btn = document.getElementById(option);
    $('.option-container').css('pointer-events','none');
    var correct_ans;
    
    if (btn_a.textContent == ans){correct_ans = btn_a}
    else if (btn_b.textContent == ans){correct_ans = btn_b}
    else if (btn_c.textContent == ans){correct_ans = btn_c}
    else if (btn_d.textContent == ans){correct_ans = btn_d}
    else{correct_ans = ''}

    //this correction is what is called when a user selects the
    //wrong choice. 
    var correction = async () => {
                    await sleep(1000);
                    correct_ans.style.background = 'green';
                    correct_ans.style.color = 'white';
                    await sleep(1050);
                    restrict.style.display = 'block';
                    sec_score.html(cur_score.textContent);
                    remarks.html("OOPS!");
                    comments.html("YOU ARE WRONG !!!")
                    }
    
    
    //console.log(btn.textContent);
    //if user chooses the right answer
    if (btn.textContent == ans){
            btn.style.background = 'green';
            btn.style.color = 'white';
            //blk.style.display = 'block';
            //let score=0;  //window.score means using the global variable score
            if(!localStorage.getItem('score')){
                localStorage.setItem('score',score);
            }
            else{
                score=1;
                localStorage.setItem('score',parseInt(localStorage.getItem('score'))+score);
            }
            cur_score.innerHTML = localStorage.getItem('score');
            

            var cor = async () => {
                    await sleep(800);
                    restrict.style.display = 'block';
                    sec_score.html(cur_score.textContent);
                    remarks.html("Excellent!");
                    comments.html("YOU ARE RIGHT!!!")
                    }
            cor();
           // restrict.style.display = 'block'
        }
    else{
            //blk.style.display = 'block';
            btn.style.background = 'red';
            btn.style.color = 'white';
            try{}catch(er){
                console.log(er);
            }finally{
                correction();
            }
        }
    
}

function loadScore(){
    let c_score = localStorage.getItem('score');
    cur_score.innerHTML = c_score;
}

/*
var object;
function getQuestion(){
    let data;
    $.ajax({
        //type: "GET",
        url: "collect.php",
        //datatype: "json",
        success: function(response){
            data = JSON.parse(response);
            qbox.innerHTML = data['question'];
            btn_a.innerHTML = data["options"][<?php /*echo $opt[0]?>];
            btn_b.innerHTML = data["options"][<?php echo $opt[1]?>];
            btn_c.innerHTML = data["options"][<?php echo $opt[2]?>];
            btn_d.innerHTML = data["options"][<?php echo $opt[3];
            console.log(typeof(data['options'][0]));
        }
            //return data;}   
          });

          var start = $('#get-started');

start.click(()=>{
    if($('#quiz-start').css('display') == 'none'){
        $('#quiz-start').css('display', 'block');
}*/



// function nextQuestion(){
//     location.reload()
// }

// var vim = document.getElementById('vim');
// var loser = document.getElementById('loser');


// var pro_on = document.getElementById('next').addEventListener('mouseover',() =>{
//     if ((vim.style.display == '') || (vim.style.display == 'none')){
//         vim.style.display = 'block';
//     }
// });

// var pro_off = document.getElementById('next').addEventListener('mouseout',() =>{
//     if (vim.style.display == 'block'){
//         vim.style.display = 'none';
//     }
// });

// var quit_on = document.getElementById('close').addEventListener('mouseover',() =>{
//     if ((loser.style.display == '') || (loser.style.display == 'none')){
//         loser.style.display = 'block';
//     }
// });

// var quit_off = document.getElementById('close').addEventListener('mouseout',() =>{
//     if (loser.style.display == 'block'){
//         loser.style.display = 'none';
//     }


// });