<html>
<head>
<title>Ajax Image Upload Using PHP and jQuery</title>
<link rel="stylesheet" type="text/css" href="views/css/bootstrap.min.css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed|Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<style>
   
.main {
position: absolute;
top: 50px;
left: 20%;
width: 450px;
height:530px;
border: 2px solid gray;
border-radius: 10px;
}
.main label{
color: rgba(0, 0, 0, 0.71);
margin-left: 60px;
}
#image_preview{
position: absolute;
font-size: 30px;
top: 100px;
left: 100px;
width: 250px;
height: 230px;
text-align: center;
line-height: 180px;
font-weight: bold;
color: #C0C0C0;
background-color: #FFFFFF;
overflow: auto;
}
#selectImage{
padding: 19px 21px 14px 15px;
position: absolute;
bottom: 0px;
width: 414px;
background-color: #FEFFED;
border-radius: 10px;
}
.submit{
font-size: 16px;
background: linear-gradient(#ffbc00 5%, #ffdd7f 100%);
border: 1px solid #e5a900;
color: #4E4D4B;
font-weight: bold;
cursor: pointer;
width: 300px;
border-radius: 5px;
padding: 10px 0;
outline: none;
margin-top: 20px;
margin-left: 15%;
}
.submit:hover{
background: linear-gradient(#ffdd7f 5%, #ffbc00 100%);
}
#file {
color: red;
padding: 5px;
border: 5px solid #8BF1B0;
background-color: #8BF1B0;
margin-top: 10px;
border-radius: 5px;
box-shadow: 0 0 15px #626F7E;
margin-left: 15%;
width: 72%;
}
#success
{
color:green;
}
#invalid
{
color:red;
}
#line
{
margin-top: 274px;
}
#error
{
color:red;
}


</style>
<script>
$(document).ready(function (e) {


// Function to preview image after validation
$(function() {
$("#file").change(function() {
$("#message").empty(); // To remove the previous error message
var file = this.files[0];
var imagefile = file.type;
var match= ["image/jpeg","image/png","image/jpg"];
if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2])))
{
$('#previewing').attr('src','noimage.jpg');
$("#message").html("<p id='error'>Please Select A valid Image File</p>"+"<h4>Note</h4>"+"<span id='error_message'>Only jpeg, jpg and png Images type allowed</span>");
return false;
}
else
{
var reader = new FileReader();
reader.onload = imageIsLoaded;
reader.readAsDataURL(this.files[0]);
}
});
});
function imageIsLoaded(e) {
$("#file").css("color","green");
$('#image_preview').css("display", "block");
$('#previewing').attr('src', e.target.result);
$('#previewing').attr('width', '250px');
$('#previewing').attr('height', '230px');
};
});

</script>
</head>
<body>
<div class="main">
<div id="message"></div>
<hr>
<form calss=""id="uploadimage" action="footer.php" method="post" enctype="multipart/form-data">
<div id="image_preview"><img id="previewing" src="noimage.jpg" width="200" height="100" /></div>
<hr id="line">
<div id="selectImage">
<label>Select Your Image</label><br/>
<div class="form-group">
   <input type="file" calss="file" name="file" id="file" required /> 
</div>

<input type="submit" value="Upload" class="submit" />
</div>
</form>
</div>

</body>
</html>