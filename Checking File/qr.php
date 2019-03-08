<html>
    <head><title>QR Code</title></head>
    <body><input id="text" type="text" value="" style="Width:20%"/ onblur='generateBarCode();'> 

  <img id='barcode' src="https://api.qrserver.com/v1/create-qr-code/?data=HelloWorld&amp;size=100x100" alt="" title="HELLO" width="50" height="50" />
    
    <script type="text/javascript">
        function generateBarCode() 
{
    var nric = $('#text').val();
    var url = 'https://api.qrserver.com/v1/create-qr-code/?data=' + nric + '&amp;size=50x50';
    $('#barcode').attr('src', url);
}
        </script>
    </body>
</html>