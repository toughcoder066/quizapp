var get_id_url;
    
//console.log(get_id_url);
function fetchTopicID(param){
    if (param !== ''){
       
       $.ajax({
            type: 'POST',
            url: 'get_topic_id.php',
            data:{
                title: param,
                 },
            success: function(response){
                //console.log(typeOf(reponse));
                //let s = document.getElementbyId('ele');
                //s.addEventListener('click',()=>{pass});
                
                //document.write(response);
                window.location.href = "/app/profile/edit_quiz.php?id="+response+"&title="+param
                //$('#'+ele).attr("href","/app/profile/quizlist.php?id="+get_id_url);
                //$('#gget').attr("href","/app/profile/quizlist.php?id="+response)
                //alert(get_id_url);
                
            }
            //console.log(get_id_url);
        });
    };
}