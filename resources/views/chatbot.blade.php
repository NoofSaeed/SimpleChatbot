<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Online Chatbot in laravel</title>
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
</head>
<body>
<audio id="myAudio">
  <source src="{{URL::asset('audio/chatSound.mp4')}}"  type="audio/mp4">
  Your browser does not support the audio element.
</audio>
<section class="msger">
  <header class="msger-header">
  <img src="../../../image/load.gif" hidden id="image" name="photo" width="60" height="50"/>
    <div class="msger-header-title">
      <i class="fas fa-comment-alt"></i> 
    </div>
    <div class="msger-header-options">
      <span><i class="fas fa-cog"></i></span>
    </div>
  </header>
  <main class="msger-chat">
    <div class="msg left-msg">
      <div
       class="msg-img"
       style="background-image: url(../../../image/download.png)"
      ></div>

      <div class="msg-bubble">
        <div class="msg-info">
          <div class="msg-info-name">BOT</div>
          <div class="msg-info-time">12:45</div>
        </div>

        <div class="msg-text">
          Hi, welcome to SimpleChat! Go ahead and send me a message. 😄
        </div>
      </div>
    </div>

    
  </main>

  <div class="msger-inputarea">
    <input id="input_text" type="text" class="msger-input" placeholder="Enter your message...">
    <button id="send-btn" class="msger-send-btn">Send</button>
</div>
</section>
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="{{URL::asset('js/chatbot.js')}}"></script>
     
   
    
</body>
</html>