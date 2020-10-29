<?php include("./include/header.php");?>

<div class="container">
    <table class="table">

    <tr>
        <th>Country</th>
        <th>Capital</th>
    </tr>


    <?php
        $country = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
        "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris","Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin",
        "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam","Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm",
        "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin",
        "Hungary"=>"Budapest", "Latvia"=>"Riga","Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;

        foreach($country as $key => $value ) {
            echo "<tr>
                    <td>$key</td>
                    <td>$value</td>
                 </tr>";
        }

        if(isset($_POST["country"])){

            $search = ucwords(strtolower($_POST["country"]));             
           
            if(array_key_exists($search, $country)){
                echo'<h2 class="alert alert-success">The capital of '. $search. ' is '. $country[$search] .'</h2>';
            }else{
                echo"This country is not in the list";
            }

        }
    ?>
    </table>
</div>
<footer class="ft">
    <!-- Copyright -->
    <div class="footer-copyright">© 2020 Copyright:
    <a href="#"> Carlos Goncalves</a>
    </div>
    <!-- Copyright -->
</footer>

</body>
</html>


