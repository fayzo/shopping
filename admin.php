<?php
session_start();

if (!isset($_SESSION['key'])) {
    header('location: login/login_shopping.php');
    exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>shopping cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" media="screen" href="dist/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="dist/css/style.css" />
    <link href="google_icon/google_icons.css" rel="stylesheet">
    <!-- <link   href="fontawesome_5_4/css/fontawesome.css" rel="stylesheet">
    <link   href="fontawesome_5_4/css/solid.css" rel="stylesheet">
    <link   href="fontawesome_5_4/css/regular.css" rel="stylesheet">
    <link   href="fontawesome_5_4/css/brands.css" rel="stylesheet"> -->
    <!-- <link   href="fontawesome_5_4/css/all.css" rel="stylesheet"> -->
    <!-- <script src="fontawesome_5_4/js/fontawesome.js"></script>
    <script src="fontawesome_5_4/js/solid.js"></script>
    <script src="fontawesome_5_4/js/regular.js"></script>
    <script src="fontawesome_5_4/js/brands.js"></script> -->
    <script src="fontawesome_5_4/js/all.js"></script>
    <script>
    function ajax_request(requests, id) {

        var xhr = new XMLHttpRequest();
        var form = document.getElementById('form-id');
        var formData = new FormData(form);
        // Add any event handlers here...
        xhr.open('POST', 'valid_db.php?key=' + requests + '&id=' + id, true);
        xhr.send(formData);
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                var forms = document.getElementById('tbody');
                forms.innerHTML = xhr.responseText;
            }
        };
    }

    function update_request(requests, id) {
        var price = document.getElementById('price').value;
        var name = document.getElementById('name').value;

        var xhr = new XMLHttpRequest();
        // Add any event handlers here...
        xhr.open('POST', 'valid_db.php?key=' + requests +
            '&id=' + id +
            '&name=' + name +
            '&price=' + price, true);

        xhr.send();

        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                console.log(xhr.responseText);
            }
        };
    }

    function updatefile_request(requests, id) {
        var xhr = new XMLHttpRequest();
        var form = document.getElementById('form_2');
        var formData = new FormData(form);
        // Add any event handlers here...
        xhr.open('POST', 'valid_db.php?key=' + requests +
            '&id=' + id, true);
        xhr.send(formData);
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                console.log(this);
            }
        };
    }

    function color(requests, id) {
        var xhr = new XMLHttpRequest();
        var url = "valid_db.php?key=color" + '&id=' + id + '&color=' + requests;
        xhr.open("POST", url, true);
        xhr.send();

        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                var json = JSON.parse(xhr.responseText);
                document.getElementsByTagName("body")["id"] = json.color;
                document.getElementsByClassName("modal-content")["id"] = json.color;
                if (json.color == 'black') {
                    document.body.style.backgroundColor = "#333";
                    document.body.style.color = "#fff";

                }else if(json.color == 'yellow') {
                    document.body.style.backgroundColor = "#ffc107";
                    document.body.style.color = "#343a40";
                    
                }else if(json.color == 'green') {
                    document.body.style.backgroundColor = "#28a745";
                    document.body.style.color = "#343a40";

                }else {
                    document.body.style.backgroundColor = "#fff";
                    document.body.style.color = "black";
                }
                console.log(json.login_id + ", " + json.color);
                console.log(xhr.responseText);
                // location.reload();
                // if (xhr.responseText.indexOf('color') >= 0) {
                //     window.location = 'admin.php';
                // }
            };
        }
    }
    </script>
</head>
<?php  
include 'db.php';
$sql= $db->query("SELECT login_id,color FROM login WHERE login_id = $_SESSION[key]");
$data = $sql->fetch_array(); 
?>

<body onload="ajax_request();" id='<?php echo $data['color'];?>'>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Dashboard </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04"
            aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample04">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Post</a>
                </li>

            </ul>
           
            <div class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown04" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false"><?php echo "Welcome ".$_SESSION['username'];?></a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                    <a class="dropdown-item bg-light text-dark" href="#" onclick="color('white',<?php echo $_SESSION['key'];?>)">while</a>
                    <a class="dropdown-item bg-dark text-light" href="#" onclick="color('black',<?php echo $_SESSION['key'];?>)">black</a>
                    <a class="dropdown-item bg-warning" href="#" onclick="color('yellow',<?php echo $_SESSION['key'];?>)">yellow</a>
                    <a class="dropdown-item bg-success text-white" href="#" onclick="color('green',<?php echo $_SESSION['key'];?>)">green</a>
                    <a class="dropdown-item bg-info text-white" href="login/logout.php" >Log out</a>
                </div>
            </div>
            
        </div>
    </nav>
    
    <!-- <p><i class="material-icons"> alarm </i></p> -->
    <div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center>
                        <h4 class="modal-title" id="myModalLabel">Add New</h4>
                    </center>
                </div>
                <div class="container-fluid">
                    <div class="modal-body">
                        <div id="edit_Content">
                            <div class="row">
                                <div class="col-lg-2">
                                    <input type="hidden" name="editRowID" id="editRowID" value="0">
                                    <label class="control-label" style="position:relative; top:7px;">name:</label>
                                </div>
                                <div class="col-lg-10">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i
                                                    class="fas fa-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="name" id="name">
                                    </div>
                                </div>
                            </div>
                            <div style="height:10px;"></div>
                            <div class="row">
                                <div class="col-lg-2">
                                    <label class="control-label" style="position:relative; top:7px;">Price:</label>
                                </div>
                                <div class="col-lg-10">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i
                                                    class="fas fa-dollar-sign"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="price" id="price">
                                        <div class="input-group-append">
                                            <span class="input-group-text">.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="height:10px;"></div>
                            <div class="row">
                                <div class="col-lg-2">
                                    <label class="control-label">image:</label>
                                </div>
                                <div class="col-lg-10">
                                    <img width="160px" id="imageView3">
                                </div>
                            </div>
                        </div><!-- // END EDIT_content -->
                        <div id="show_Content" style="display:none;">
                            <input type="hidden" name="viewRowID" id="viewRowID" value="0">
                            <p><span style="font-weight:bold;font-size:17px;">name : </span>
                                <span id="nameView"></span> </p>
                            <hr>
                            <p><span style="font-weight:bold;font-size:17px;">price : </span>
                                <span id="priceView"></span> </p>
                            <hr>
                            <p><span style="font-weight:bold;font-size:17px;">image :
                                    <img width="160px" id="imageView">
                                </span>
                            </p>
                            <hr>
                            <p><span style="font-weight:bold;font-size:17px;">File name :</span>
                                <span id="imageView1"></span>
                            </p>
                            <hr>
                        </div><!-- // END view_content -->
                        <div id="update_modal">
                            <!-- // update_content -->
                            <div id="edit_file">
                                <form method="post" enctype="multipart/form-data" id='form_2'>
                                    <div class="class-group">
                                        <label for="fileupload">FILE UPLOAD</label>
                                        <input type="hidden" name="idd" id="idd">
                                        <input type="hidden" name="action" id="action">
                                        <input type="file" class="form-control-file" name="picture" id="picture">
                                    </div><br>
                                </form>
                                <img id="imageView2" width="160px">
                            </div>
                        </div><!-- // END OF update_content -->
                        <div id="profile_modal">
                            <!-- // profile_modal -->

                        </div><!-- // END OF profile_modal -->

                    </div><!-- END OF MODAL BODY -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">
                            Cancel</button>
                        <button type="submit" id="save" class="btn btn-primary"><span class="fa fa-floppy-disk"></span>
                            Save</a></button>
                        <input type="button" id="update" class="btn btn-primary" value="update">
                        <input id="profile">
                    </div>
                </div> <!-- END OFcontainer fuild -->
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-3">
                <form method="post" enctype="multipart/form-data" id='form-id'
                    action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="needs-validation" novalidate>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="material-icons"> person
                                </i></span>
                        </div>
                        <input type="text" class="form-control" name="name" placeholder="name is reqiured..."><br>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-dollar-sign"></i></span>
                        </div>
                        <input type="text" class="form-control" name="price" placeholder="price is reqiured...">
                        <div class="input-group-append">
                            <span class="input-group-text">.00</span>
                        </div>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>

                    <label for="fileupload">FILE UPLOAD</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-upload"></i> Upload</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="image" id="image" id="inputGroupFile01">
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>

                    <input type="button" onclick="ajax_request('addNew')" id="submit" class="btn btn-primary"
                        value="submit">
                </form>
            </div><br>

            <!-- <form id="the-form" action="valid_db.php" enctype="multipart/form-data">
          <input name="image" type="file">
          <input type="submit" value="Upload" />
        </form> -->

            <div class="col-md-9">
                <table class="table table-striped table-hover table-bordered table-responsive ">
                    <thead class="thead-inverse">
                        <tr>
                            <th>No</th>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>PRICE</th>
                            <th>IMAGE</th>
                            <th>file</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody id="tbody">
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="dist/js/jquery.min.js"></script>
    <script src="dist/js/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script>
    // ************************THIS IS VALIDATION OF BOOTSTRAP THAT WORK ONLY FOR HTML NOT PHP ********************
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('button', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
    // ************************THIS IS VALIDATION OF BOOTSTRAP THAT WORK ONLY FOR HTML ********************

    function viewORedit_(type, rowID) {
        var editRowID = $("#editRowID");
        var name = $("#name");
        var price = $("#price");

        $.ajax({
            url: 'valid_db.php',
            method: 'POST',
            dataType: 'json',
            data: {
                key: 'viewORedit',
                rowID: rowID,
                editRowID: editRowID.val(),
                name: name.val(),
                price: price.val()
            },
            success: function(response) {
                if (type == "view") {
                    $("#show_Content").fadeIn();
                    $("#edit_Content").fadeOut();
                    $("#profile_modal").fadeOut();
                    $("#update_modal").fadeOut();
                    $("#viewRowID").val(rowID);
                    $("#idView").html(response.id);
                    $("#nameView").html(response.name);
                    $("#priceView").html(response.price);
                    $('#imageView').attr('src', 'uploads/' + response.image);
                    $("#imageView1").html(response.image);
                    $("#save").fadeOut();
                    $("#profile").fadeOut();
                    $("#update").fadeOut();
                    console.log(response);

                } else {
                    $("#edit_Content").fadeIn();
                    $("#show_Content").fadeOut();
                    $("#update_modal").fadeOut();
                    $("#profile_modal").fadeOut();
                    $("#editRowID").val(rowID);
                    $("#id").val(response.id);
                    $("#name").val(response.name);
                    $("#price").val(response.price);
                    $("#imageView3").attr('src', 'uploads/' + response.image);
                    $("#save").fadeOut();
                    $("#profile").fadeOut();
                    $("#update").fadeIn();
                    console.log(response);
                    var t = $("#editRowID").attr('value');
                    $("#update").click(function() {
                        update_request('updateRow', t);
                        $("#addnew").modal('hide');
                        $("#name" + editRowID.val()).html(name.val());
                        $("#price" + editRowID.val()).html(price.val());
                        console.log(response);
                    });
                }

                $(".modal-title").html(response.name);
                $("#addnew").modal('show');

            }
        });
    }

    $(document).on('click', '.update', function(e) {
        e.preventDefault();
        $("#addnew").modal('show');
        $('.modal-title').text("Update Image");
        $("#edit_Content").fadeOut();
        $("#show_Content").fadeOut();
        $("#profile_modal").fadeOut();
        $("#update_modal").fadeIn();
        $("#save").fadeOut();
        $("#update").fadeOut();

        $('#idd').val($(this).attr("id"));
        $('#action').val("update");
        console.log($("#form_2").serialize());
        $("#profile").fadeIn();
        $('#profile').attr("class", "btn btn-primary ");
        $('#profile').attr("type", "submit");
        $('#profile').val("update profile");
        var t = $(this).attr("id");
        $('#profile').on('click', function() {
            updatefile_request('update', t);
            $("#addnew").modal('hide');
            $("#form_2").submit();
            // var num1 = "update";
            // var num =  $(this).attr("id");
            // $('#profile').attr('onclick','updatefile_request("'+num1+'",'+num+')');
        });
        $.ajax({
            url: 'fetchImageid.php',
            type: 'post',
            dataType: 'json',
            data: {
                key: 'image',
                id: t
            },
            success: function(response) {
                $('#imageView2').attr('src', 'uploads/' + response.image);
                console.log(response);
            }
        });
    });

    // function black() {
    //     $('body').click(function() {
    //         $(this).attr('id', 'black');
    //     });
    // }

    // function white() {
    //     $('body').click(function() {
    //         $(this).attr('id', 'white');
    //     });
    // }
    </script>
</body>

</html>