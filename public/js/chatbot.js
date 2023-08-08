              
   $(document).ready(function(){
    $("#send-btn").on("click", function(){
         var text = $("#input_text").val();
         var msg = ' <div class="msg right-msg"><div class="msg-img" style="background-image: url(https://image.flaticon.com/icons/svg/145/145867.svg)"></div> <div class="msg-bubble"><div class="msg-info"><div class="msg-info-name">user</div><div class="msg-info-time"></div></div><div class="msg-text">'+ text+'</div> </div></div>';
         $(".msger-chat").append(msg);
         $("#input_text").val('');
         document.getElementById("image").hidden = false
        $.ajax({
            url:'message/'+text,
            type: 'POST',
            data: {
            '_token':getCSRFTokenAndValue(),
                  },
              success: function(result){
                 var replay = '<div class="msg left-msg"><div class="msg-img"style="background-image: url(../../../image/download.png)"></div><div class="msg-bubble"><div class="msg-info"><div class="msg-info-name">BOT</div><div class="msg-info-time">12:45</div></div><div class="msg-text">'+ result.replies+ '</div></div>';
                 $(".msger-chat").append(replay);
                 $(".msger-chat").scrollTop($(".msger-chat")[0].scrollHeight);
                 getSound();
                 document.getElementById("image").hidden = true
          },
           error:function(result){
           console.log(result);
           }
        });
    });
});

function getCSRFTokenAndValue() {
    return $('meta[name="csrf-token"]').attr('content')
 }

 function getSound()
 {
    var x = document.getElementById("myAudio"); 
    x.play(); 
  //x.pause(); 

 }
 