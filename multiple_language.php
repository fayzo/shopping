<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script>
    function language(lang, id) {
        var xmlhttp = new XMLHttpRequest();
        var url = "multiple_language_db.php?key=lang" + '&id=' + id + '&lang=' + lang;
        xmlhttp.open("POST", url, true);
        xmlhttp.send();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var myObj = JSON.parse(this.responseText);
                var sc = document.body;
                sc.setAttribute("id", myObj.language);
                var lang = document.body.id;
                if (myObj.language == 'rw') {
                    document.getElementById('json').innerHTML = rw.muraho;
                } else if (myObj.language == 'fr') {
                    document.getElementById('json').innerHTML = fr.bonjour;
                } else {
                    document.getElementById('json').innerHTML = en.morning;
                }
                console.log("Json parsed data is: " + JSON.stringify(myObj));
                console.log(myObj);
            }
        };

    }
    </script>
</head>
<?php  
include 'db.php';
$sql= $db->query("SELECT login_id,language FROM login WHERE login_id = 1");
$data = $sql->fetch_array(); 
?>

<body id="<?php echo $data['language'];?>">
    <a href="#" type="button" onclick="language('fr',1);"><img src="images/flag/iconfinder_Flag_of_France_96147.png" width="30px" ></a>
    <a href="#" type="button" onclick="language('en',1);"><img src="images/flag/iconfinder_Flag_of_United_Kingdom_96354.png" width="30px" ></a>
    <a href="#" type="button" onclick="language('rw',1);"><img src="images/flag/iconfinder_Flag_of_Rwanda_96263.png" width="30px" ></a>

    <div id="json"></div>
    <div id="jsona"></div>
    <div id="js"></div>


    <script src="language_rw.js"></script>
    <script src="language_en.js"></script>
    <script src="language_fr.js"></script>
    <script>
    var lang = document.body.id;
    console.log(lang);
    if (lang == 'rw') {
        // var json = JSON.stringify(data);
        // var js = JSON.parse(json);
        console.log(en.morning);
        document.getElementById('json').innerHTML = rw.muraho;
    } else if (lang == 'fr') {
        console.log(en.morning);
        document.getElementById('json').innerHTML = fr.bonjour;
    } else {
        document.getElementById('json').innerHTML = en.morning;
    }
    </script>
</body>

</html>