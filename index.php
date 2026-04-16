<?php

$loyaltyPoints = 7000;
$totalCost = 20;
$pointsThree = 3000;
$pointsSix = 6000;
$finalAfterTaxes = ($totalCost) + ($totalCost * .08);
$finalAfterTaxesFive = ($finalAfterTaxes) - ($finalAfterTaxes * .05);
$finalAfterTaxesFift = ($finalAfterTaxes) - ($finalAfterTaxes * .15);

$afterTax = $finalAfterTaxes;
$afterFive = $finalAfterTaxesFive;
$afterFift = $finalAfterTaxesFift;

$balanceThree = ($loyaltyPoints - $pointsThree) + ($finalAfterTaxesFive * 100);
$balanceSix = ($loyaltyPoints - $pointsSix) + ($finalAfterTaxesFift * 100);
$balancePlus = ($loyaltyPoints) + ($finalAfterTaxes * 100);





if($loyaltyPoints < 3000){
    echo "You have fewer than {$pointsThree} Loyalty Points. No discount is available. Your final price (after taxes) would be" . " $" . $afterTax . ". Your new Loyalty Balance would be: {$balancePlus}.";
} elseif ($loyaltyPoints >= 3000 && $loyaltyPoints < 6000) {
    echo "You can spend {$pointsThree} Loyalty Points for a discount of 5%. Your final price (after discount and taxes) would be" . " $" . $afterFive . ". Your new Loyalty Balance would be: {$balanceThree}.";
} elseif($loyaltyPoints >= 6000){
    
    $second = "You can spend {$pointsSix} Loyalty Points for a discount of 5%. Your final price (after discount and taxes) would be" . " $" . $afterFift . ". Your new Loyalty Balance would be: {$balanceSix}.";
    
    $first = "You can spend {$pointsThree} Loyalty Points for a discount of 5%. Your final price (after discount and taxes) would be" . " $" . $afterFive . ". Your new Loyalty Balance would be: {$balanceThree}.";
    
    echo "$first\n$second";
};
?>