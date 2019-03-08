<?php
session_start();
$db=mysqli_connect('localhost','root','','carder');
 ?>
<html>
<head>
  <title>2.O</title>

  <meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
  @import url(https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css);
  @import url(https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);
</style>

<link type="text/css" rel="stylesheet" href="css/newdesign.css">
<link type="text/css" rel="stylesheet" href="css/congrats.css">

<link href='https://fonts.googleapis.com/css?family=Lato:300,400|Sigmar+One:700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/default_thank_you.css">
<link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">


<script type="text/javascript" src="qr/qrcode.js"></script>
<script type="text/javascript" src="qr/html5-qrcode.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.2.0/anime.js"></script>
<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/jquery-1.9.1.min.js"></script>
<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/html5shiv.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://use.fontawesome.com/2473308824.js"></script>

<script type="text/javascript">
function mov()
{
	myVar = setTimeout(hands, 4000);
}

function hands() {
 document.getElementById('idk').style.display="none";
 document.getElementById('idk1').style.display="inline-block";
}

function chk(){
   myVar = setTimeout(chkmail,2500);
}

function chkmail() {
    $.ajax({
                type: "GET",
                url: "mail.php" ,
                success : function() { 

                    location.reload();

                }
            });
}
</script>
</head>
<body>
    <h1 class="site-header__title" data-lead-id="site-header-title">Congrats!</h1>
  <div class="main-content">
    <img src="logo/symbol.png" width="300px" height="100px" class="main-content__checkmark" id="checkmark"/>
    <p class="main-content__body" data-lead-id="main-content-body">Thanks for co-operating with us. Your data means a lot to us, just like you do! We really appreciate you giving us a moment of your time. Now you are part of our secured society.</p>

  </div>

  <div id="idk">
    CLICK TO LOAD
    <br><br>
  <button class="button" onclick="mov();">
    <span class="submit">YOUR CARD</span>
    <span class="loading"><i class="fa fa-id-card"></i></span>
    <span class="check"><i class="fa fa-thumbs-o-up"></i></span>
  </button>
  <script type="text/javascript">
      const button = document.querySelector('.button');
      const submit = document.querySelector('.submit');

        function toggleClass() {
            this.classList.toggle('active');
            }

            function addClass() {
              this.classList.add('finished');
            }

            button.addEventListener('click', toggleClass);
            button.addEventListener('transitionend', toggleClass);
            button.addEventListener('transitionend', addClass);
            </script>
</div>


<!-- /***CARD***/ -->
<div id="idk1">
<div class="card-container">
  <div class="card">
        <script type = "text/javascript" >
        var card = document.querySelector(".card");
        var playing = false;

        card.addEventListener('click',function() {
          if(playing)
          return;

          playing = true;
          anime({
            targets: card,
            scale: [{value: 1}, {value: 1.4}, {value: 1, delay: 250}],
            rotateY: {value: '+=180', delay: 200},
            easing: 'easeInOutSine',
            duration: 400,
            complete: function(anim){
              playing = false;
        }
      });
    });

    </script>
    <div class="front">
      <div class="one">
        <div class="pict">
            <?php
                $sql = "SELECT FileName FROM userfiles where EID='".$_SESSION["EID3"]."' ";
                 $result = mysqli_query($db, $sql);
                  if  (mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)) {
                    ?>
            <img src="pythonscripts\faces\<?php echo $row['FileName']; ?>" alt="wait" class="user-pic"/>
            <?php
              }
            }
              ?>
          </div>
          <div class="pict-name">
              <div class="form-group">
                <?php
                $sql = "SELECT fullName FROM pdetails where EID='".$_SESSION["EID3"]."' ";
                 $result = mysqli_query($db, $sql);
                  if  (mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)) {
                    ?>
                <input type="text" id="nam" value="<?php echo $row['fullName']; ?>" readonly="readonly" />
                <?php
              }
            }
              ?>
              </div>
          </div>
      </div>
      <div class="middle">
        <?php
        $sqlqr = "SELECT * FROM bio_primary where EID='".$_SESSION["EID3"]."' ";
         $resultqr = mysqli_query($db, $sqlqr);
         if  (mysqli_num_rows($resultqr) > 0){
         while($row = mysqli_fetch_assoc($resultqr)) {
           $aj=$row['pri_hash'];
           ?>
        <img src="barcode.php?text=<?php echo $aj ?>" alt="testing" />
        <?php
      }
    }
      ?>
      </div>
      <div class="last">
            <form >
              <?php
              $sql = "SELECT faName,dob,addressLine,city,postcode,phoneNumber FROM pdetails where EID='".$_SESSION["EID3"]."' ";
               $result = mysqli_query($db, $sql);
               if  (mysqli_num_rows($result) > 0) {
               while($row = mysqli_fetch_assoc($result)) {
                 ?>
            <div class="form-group">
              <input type="text" value="S/O <?php echo $row['faName']; ?>" readonly="readonly" />
            </div>
            <div class="form-group">
              <input type="text" value="<?php echo $row['dob']; ?>" readonly="readonly" />
            </div>
            <div class="form-group">
              <input type="text" value="<?php echo $row['addressLine']; ?>" readonly="readonly" />
            </div>
            <div class="form-group">
              <input type="text" value="<?php echo $row['city']; ?>" readonly="readonly" />
            </div>
            <div class="form-group">
              <input type="text" value="<?php echo $row['postcode']; ?>" readonly="readonly" />
            </div>
            <div class="form-group">
              <input type="text" value="<?php echo $row['phoneNumber']; ?>" readonly="readonly" />
            </div>
            <?php
            }
          }
            ?>
          </form>
      </div>
    </div>
    <div class="back">
        <div id="qrcode"></div>

      <script type="text/javascript">
      function updateQRCode(text) {

        var element = document.getElementById("qrcode");

        var bodyElement = document.body;
        if(element.lastChild)
          element.replaceChild(showQRCode(text), element.lastChild);
        else
          element.appendChild(showQRCode(text));

      }
      updateQRCode('<?php echo $aj ?>');
    </script>

    </div>
    </div>
  </div>
</div>

<div id="knw">
  <input type="checkbox" id="cb" onclick="chk();">
  <label for="cb" class="button">Send mail</label>

  <svg class="icon plane">
    <polyline points="119,1 1,59 106,80 119,1"></polyline>
    <polyline points="119,1 40,67 43,105 69,73"></polyline>
  </svg>
</div>
    <a href="trial-e.php" >Go Back To Work</a>
<footer class="site-footer" id="footer">
  <p class="site-footer__fineprint" id="fineprint">Copyright ©SFA2019 | All Rights Reserved</p>
</footer>
</body>
</html>
