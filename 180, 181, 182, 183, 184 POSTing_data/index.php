<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test180</title>

    <script type="text/javascript">
        function insert() {
            if (window.XMLHttpRequest) {
                xmlhttp = new XMLHttpRequest();
            } else {
                xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
            }

            xmlhttp.onreadystatechange = function () {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById('message').innerHTML = xmlhttp.responseText;
                }
            }

            parameters = 'text='+document.getElementById('text').value;

            xmlhttp.open('POST', 'update.php', true);
            xmlhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
            xmlhttp.send(parameters);
        }
    </script>

</head>
<body>

    Insert: <input type="text" id="text"> <input type="button" value="Submit" onclick="insert();">
    <br><br>
    <div id="message"></div>

</body>
</html>