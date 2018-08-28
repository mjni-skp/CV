<!DOCTYPE html>
<html>
<head>
</head>
<body>  
<?php
require('header.php');
?>

            <script language="javascript">
                    function navFunction(){
                        var x = document.getElementById("navlinks");
                        if (x.classname === "links"){
                            x.className += "responsive";
                        }
                        else{
                            x.className = "links";
                        }
                    }
                </script>
    </body>
</html>