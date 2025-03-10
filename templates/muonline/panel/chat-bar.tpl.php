      <!--
         Chat
           .chat-light - light color scheme
         -->
         <div class="chat">
           <div class="layer-overlay"></div>
           <div class="layer-content">

        <!-- Messages -->
        <div class="messages">
         <!-- Top Bar with back link -->
         <div class="topbar"><a href="#!" class="chat-toggle"><i class="mdi-navigation-close"></i></a> <a href="#!" class="chat-back"><i class="mdi-hardware-keyboard-arrow-left"></i> Back</a></div>
         <!-- /Top Bar with back link --><!-- All messages list -->
         <div class="list">
          <div class="nano scroll-bottom">
           <div class="nano-content">
            <div class="date">Monday, Feb 23, 8:23 pm</div>
            <div class="from-me">Hi, Felicia.<br>How are you?</div>
            <div class="clear"></div>
            <div class="from-them"><img src="templates/<?php echo(TEMPLATE_DIR)?>/panel/assets/_con/images/user2.jpg" alt="John Doe" class="circle photo"> Hi! I am good!</div>
            <div class="clear"></div>
            <div class="from-me">Glad to see you :)<br>This long text is intended to show how the chat will display it.</div>
            <div class="clear"></div>
            <div class="from-them"><img src="templates/<?php echo(TEMPLATE_DIR)?>/panel/assets/_con/images/user2.jpg" alt="John Doe" class="circle photo"> Also, we will send the longest word to show how it will fit in the chat window: <strong>Pneumonoultramicroscopicsilicovolcanoconiosis</strong></div>
            <div class="date">Friday, Mar 10, 5:07 pm</div>
            <div class="from-me">Hi again!</div>
            <div class="clear"></div>
            <div class="from-them"><img src="templates/<?php echo(TEMPLATE_DIR)?>/panel/assets/_con/images/user2.jpg" alt="John Doe" class="circle photo"> Hi! Glad to see you.</div>
            <div class="clear"></div>
            <div class="from-me">I want to add you in my Facebook.</div>
            <div class="clear"></div>
            <div class="from-me">Can you give me your page?</div>
            <div class="clear"></div>
            <div class="from-them"><img src="templates/<?php echo(TEMPLATE_DIR)?>/panel/assets/_con/images/user2.jpg" alt="John Doe" class="circle photo"> I do not use Facebook. But you can follow me in Twitter.</div>
            <div class="clear"></div>
            <div class="from-me">It's good idea!</div>
            <div class="clear"></div>
            <div class="from-them"><img src="templates/<?php echo(TEMPLATE_DIR)?>/panel/assets/_con/images/user2.jpg" alt="John Doe" class="circle photo"> You can find me here - <a href="https://twitter.com/nkdevv">https://twitter.com/nkdevv</a></div>
          </div>
        </div>
      </div>
      <!-- /All messages list --><!-- Send message -->
      <div class="send">
        <form action="#!">
         <div class="input-field"><input id="chat-message" type="text" name="chat-message"></div>
         <button class="btn waves-effect z-depth-0"><i class="mdi-content-send"></i></button>
       </form>
     </div>
     <!-- /Send message -->
   </div>
   <!-- /Messages -->
 </div>
</div>
<!-- /Chat -->