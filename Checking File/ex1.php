 <html>
    <head>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script>

        /* if you prefer to functionize and use onclick= rather then the .on bind
        function hide_show(){
            $(this).hide();
            $("#hidden-div").show();
        }
        */

        $(function(){
            $("#chkbtn").on('click',function() {
                $(this).hide();
                $("#hidden-div").show();
            }); 
        });
    </script>
    <style>
    .hidden-div {
        display:none
    }
    </style>
    </head>
    <body>
    <div class="reform">
        <form id="reform" action="action.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="type" value="" />
            <fieldset>
                content here...
            </fieldset>

                
        </form>
                </div>
                <span style="display:block; padding-left:640px; margin-top:10px;"><button id="chkbtn">Check Availability</button></span>
    </body>
    </html>