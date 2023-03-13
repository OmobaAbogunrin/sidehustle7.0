<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting System</title>
</head>
<body>
    <?php
    $age = 18;
    $voter_pvc = true;
    $polling_uit = 020;
    
    if ($age >= 18 && $voter_pvc == TRUE && $polling_uit ==020){
        echo "Voter eligible to Vote";
    }

    elseif ($age < 18 && $voter_pvc == TRUE && $polling_uit ==020){
        echo "You are ineligible because of age";
    }

    elseif ($age >= 18 && $voter_pvc == FALSE && $polling_uit ==020){
        echo "You are ineligible because of PVC";
    }

    elseif ($age >=18 && $voter_pvc == TRUE && $polling_uit !=020){
        echo "You are ineligible because of your Polling Unit";
    }

        
    ?>
</body>
</html>