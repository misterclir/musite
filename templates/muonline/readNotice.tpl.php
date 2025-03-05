{#INCLUDE:header}

<!-- Main -->
        <div id="mtwmain">
            
            <!-- Begin Column Left | mtwml = Mu Template Wrapper Main Left -->
           {#INCLUDE:menuLeft}
            <!-- End Begin Column Left -->
            
            <!-- Begin Content Main | mtwmc = Mu Template Wrapper Main Content -->
    <div id="mtwmcih"></div> 
    
    <style>
    #AllNoticeStyle ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
    }
     
    #AllNoticeStyle ul li {
      margin: 0;
      padding: 5px;
      font: 200 14px/1.5 Helvetica, Verdana, sans-serif;
      border-bottom: 1px solid #3f3632;
      list-style-type: none; 
    }
     
    #AllNoticeStyle ul li:last-child {
      border: none;
    }
    
    #AllNoticeStyle ul li:hover {
      background-color: #120D0C;
    }
     
    #AllNoticeStyle ul li a {
      font: 200 14px/1.5 Helvetica, Verdana, sans-serif;
      text-decoration: none;
      display: block;
    }
    
    #AllNoticeStyle h1 {
      margin: 0;
      padding: 5px;
      font: 200 14px/1.5 Helvetica, Verdana, sans-serif;
      border-bottom: 1px solid #3f3632;
      list-style-type: none;    
      background: #120D0C;
    }
    </style>
    <div id="mtwmci"> 
        <div class="locationtitle">
            <h1>Noticias</h1>
        </div>

        <div class="sub_wrap">

            <div class="sub_wrap">
                <div id="etc">
                    <div class="legend" style="margin-bottom: 10px;">

                        <div id="AllNoticeStyle" style="margin-bottom: 8px; margin-top: 10px; overflow: hidden;">
                            {#ResultNotices}

                  </div>
                    </div>
                    
                     
                    
                                        

                </div>             
            </div>
        </div> 

    <div id="mtwmcif"></div>
    </div>

            <!-- End Content Main -->
                        <!-- Begin Column Right | mtwmr = Mu Template Wrapper Main Right -->
            {#INCLUDE:menuRight}
            <!-- End Column Right -->
			

            <div style="clear:both;"></div>
        </div>
    </div>
    {#INCLUDE:footer}