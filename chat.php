<?
session_start();
$User = $_SESSION['LogedUser'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>
        Chat
    </title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
    <link href="css/chat.css" rel="stylesheet">
                                <script type="text/javascript">
                                    var mes ="";
                                    var user = "";
                                    var logeduser = "<?echo $User?>";
                                        setInterval(showMess,300);



                                    function showMess() {
                                        $.get("messages.php", {}, function(data){
                                            data = JSON.parse(data);

                                            for(var id in data) {
                                                if(id == 0) $("#chat").empty();
                                                if (id % 2 != 0 )
                                                {
                                                    mes = data[id];
                                                    if (logeduser=="Admin"){
                                                        $butid=id-1;
                                                        if (user==logeduser)
                                                            $("#chat").append($("<li  class='text-right'><p>"+user+" : "+mes+"</p><button id='del' class='"+$butid+"'>Delete</button></li>"));
                                                        else{

                                                            $("#chat").append($("<li><p>"+user+" : "+mes+"</p><button id='del' class='"+$butid+"'>Delete</button></li>"));}
                                                    }
                                                    else{
                                                    if (user==logeduser)
                                                    $("#chat").append($("<li  class='text-right'><p>"+user+" : "+mes+"</p></li>"));
                                                    else
                                                    $("#chat").append($("<li><p>"+user+" : "+mes+"</p></li>"));
                                                }
                                                }
                                                else
                                                {
                                                    user = data[id];
                                                }


                                            };
                                            //
                                            //
                                        });
                                    };
                                </script>


</head>
<body>
<div id="bg"><img src="images/chatbg.jpg" alt=""/></div>
<div class="container">
    <div class="header"><h3>You have loged in as <b><?echo $User?></b></h3>
    <form method="link" action="index.php">
        <input type="submit" value="LogOut">
    </form>
    </div>
    <br><br>
    <div class="content" >

    <div id="scroll">
        <ul id="chat"></ul>
</div>
<form action="" id="forma" onkeypress="if(event.keyCode == 13)  return false;">
    <input type="text" class="mesinput" value="" >
    <button type="button"  class="butt btn btn-default">Send</button>
</form>

    </div>
                            <script>

                                $(document).on('click','#del', function(){
                                    var num = $(this).attr("class");
                                    num = num/2+1;

                                    $.get("del.php", { delnum : num}, function(){});
                                });





                                setTimeout(scrollBot,500);

                                $("#forma input").on("keypress", function (event) {
                                    if (event.keyCode == 13) {
                                        event.preventDefault();
                                        sendMesa();
                                    }
                                });
                                function sendMesa() {
                                    var msg = (document.getElementsByClassName("mesinput")[0]).value;
                                    if (msg!= "")
                                    {
                                        $.get("send.php", { sendlog : log , sendmes: msg}, function(){
                                            $(".mesinput").val("");
                                            setTimeout(scrollBot,110);
                                        });
                                    }
                                }

                                function scrollBot (){
                                    $("#scroll").scrollTop($("#scroll")[0].scrollHeight);
                                };

                                var log = "<? echo $User ?>";
                                $(document).ready(function (){
                                    $(".butt").click(function  (){
                                    var msg = (document.getElementsByClassName("mesinput")[0]).value;
                                    if (msg!= "")
                                    {
                                        $.get("send.php", { sendlog : log , sendmes: msg}, function(){
                                            $(".mesinput").val("");
                                            setTimeout(scrollBot,110);
                                        });
                                    }
                                    });
                                });
                            </script>
</div>
</body>
</html>

