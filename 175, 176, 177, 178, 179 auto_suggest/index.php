<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test 175</title>

    <script type="text/javascript">
        function findmatch() {
            if (window.XMLHttpRequest) {
                xmlhttp = new XMLHttpRequest();
            } else {
                xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
            }

            xmlhttp.onreadystatechange = function () {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById('results').innerHTML = xmlhttp.responseText;
                }
            }

            xmlhttp.open('GET', 'search.php?search_text='+document.search.search_text.value, true);
            xmlhttp.send();
        }
    </script>
</head>
<body>

    <form id="search" name="search">
        Type a name: <br>
        <input type="text" name="search_text" onkeyup="findmatch();">
    </form>
    <br><br><br>
    <div id="results"></div>

</body>
</html>