<!DOCTYPE html>
<html>
<head>
    <title>Voting Application</title>
        <style>
        .bb {
            background-image: url(../Img/bjp.png);
             background-size:100%,100%;
            height: 100px;
            width: 100px;
        }

        .cb {
            background-image: url(../Img/congr.png);
            height: 100px;
            background-size: 100%,100%;
            width: 100px;
        }

        .rb {
            background-image: url(../Img/Rcong.png);
            height: 100px;
            background-size: 100%,100%;
            width: 100px;
        }
        img{
            width:100px;
            height:100px;
        }
    </style>
</head>
<body>
    <div class="container">
        
        <form action="voted.php" method="post">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>Sr. NO</td>
                        <td>Logo</td>
                        <td>Founder</td>
                        <td>Voting</td> 
                    </tr>
                </thead>
                <tr>
                    <td>1</td>
                    <td>
                        <img src="Img/modi.jpg" alt="Alternate Text" class="img-rounded" />
                    </td>
                    <td><h1>Syama Prasad Mukherjee</h1></td>
                    <td>
                        <input type="submit" name="bjp" class="btn btn-default bb" value="" />
                    </td> 

                </tr>
                <tr>
                    <td>2</td>
                    <td>
                        <img src="Img/rahul.png" alt="Alternate Text" class="img-rounded" />
                    </td>
                    <td><h1>Dadabhai Naoroji</h1></td>
                    <td>
                        <input type="submit" name="congr" class="btn btn-default cb" value="" />
                    </td> 

                </tr>
                <tr>
                    <td>3</td>
                    <td>
                        <img src="Img/sharad.jpg" alt="Alternate Text" class="img-rounded" />
                    </td>
                    <td><h1>Sharad Pawar</h1></td>
                    <td>
                        <input type="submit" name="Rcong" class="btn btn-default rb" value="" />
                    </td>
                     
                </tr> 
            </table> 
        </form>

        <?php
        $_SESSION["b"]=0 ;
        $_SESSION["c"]=0 ;
        $_SESSION["t"]=0;
        $_SESSION["r"]=0 ;
        $_SESSION["s"]=0;
        $_SESSION["sc"]=0;
        $_SESSION["sr"]=0;
        if (isset($_POST["bjp"]))
        {
            session_start();
            $_SESSION["t"] = $_SESSION["t"] + 1 ;

            $_SESSION["b"] = $_SESSION["b"] + 1 ;
            echo "<br/>";
            echo  "Narendra Modi  : ".$_SESSION["b"];

            $_SESSION["s"] = ($_SESSION["b"]/$_SESSION["t"])*100;
            echo "<br/>";
            echo  "Narendra Modi Voteing Percentage :    \t".$_SESSION["s"]." %";

        }
        if (isset($_POST["congr"]))

        {
            session_start();
            $_SESSION["t"] = $_SESSION["t"] + 1 ;
            $_SESSION["c"] = $_SESSION["c"] + 1 ;
            echo "<br/>";
            echo  "Rahul Gandhi Vote : ".$_SESSION["c"];

            $_SESSION["sc"] = ($_SESSION["c"]/$_SESSION["t"])*100;
            echo "<br/>";
            echo  "Rahul Gandhi Voteing Percentage :    \t".$_SESSION["sc"]." %";
        }
        if (isset($_POST["Rcong"]))
        {
            session_start();
            $_SESSION["t"] = $_SESSION["t"] + 1 ;
            $_SESSION["r"] = $_SESSION["r"] + 1 ;
            echo "<br/>";
            echo  "Sharad Pawar Vote : ".$_SESSION["r"];


            $_SESSION["sr"] = ($_SESSION["r"]/$_SESSION["t"])*100;
            echo "<br/>";
            echo  "Sharad Pawar Voteing Percentage :    \t".$_SESSION["sr"]." %";
        }/*
        echo "<hr/>"; 
        echo  "Narendra Modi  : ".$_SESSION["b"];
        echo "<br/>";
        echo  "Narendra Modi Voteing Percentage :    \t".$_SESSION["s"]." %";
        echo "<br/>";
        echo  "Rahul Gandhi Vote : ".$_SESSION["c"];
        echo "<br/>";
        echo  "Rahul Gandhi Voteing Percentage :    \t".$_SESSION["sc"]." %";
        echo "<br/>";
        echo  "Sharad Pawar Vote : ".$_SESSION["r"];
        echo "<br/>";
        echo  "Sharad Pawar Voteing Percentage :    \t".$_SESSION["sr"]." %";
        echo "<br/>"; 
        echo   "Total Votes : - ".$_SESSION["t"];
*/
        ?>


    </div>
</body>
</html>
