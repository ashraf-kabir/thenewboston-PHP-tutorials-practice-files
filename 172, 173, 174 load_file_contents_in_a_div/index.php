<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test172</title>

    <script type="text/javascript">
        function load(thediv, thefile) {
            if (window.XMLHttpRequest) {
                xmlhttp = new XMLHttpRequest();
            } else {
                xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
            }

            xmlhttp.onreadystatechange = function () {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById(thediv).innerHTML = xmlhttp.responseText;
                }
            }

            xmlhttp.open('GET', thefile, true);
            xmlhttp.send();
        }
    </script>
</head>
<body>

    <input type="submit" onclick="load('anotherdiv', 'include.php');">

    <div id="anotherdiv"></div>

</body>
</html>