<?php

// This file is the core file of this application, holding main functions of the application.

function eligibility_check($status, $citizenship, $age, $income) {
  if (!empty($status) && !empty($citizenship) && !empty($age) && !empty($income)) {
    if ($status == 'Salaried Individual') {
      if ($citizenship == 'Pakistani') {
        if ($age >= 22 && $age <= 60) {       
          if ($income >= 50000) {
            return true;
          }else{
            $alerts['error'][] = "Your minimum monthly income should be 50,000.";
            return false;
          }
        }else{
          echo "Your age must be in between 22-60 years.";
          return false;
        }
      }else{
        echo "You must be a Pakistani to have this loan.";
        return false;
      }
    }elseif($status == 'Business Person'){
      if ($citizenship == 'Pakistani') {
        if ($age >= 22 && $age <= 70) {
          if ($income >= 75000) {
            return true;
          }else{
            echo "Your minimum monthly income should be 75,000.";
            return false;
          }
        }else{
          echo "Your age must be in between 22-70 years.";
          return false;
        }
      }else{
        echo "You must be a Pakistani to have this loan.";
        return false;
      }
    }
  }
}

function calculate_plan($car, $price, $dpayment, $years, $markup_rate){
  if (!empty($car) && !empty($price) && !empty($dpayment) && !empty($years) && !empty($markup_rate)) {
    // First get the down payment in actual price value rather than percentage.
    $down_payment = $dpayment / 100;
    $down_payment = $down_payment * $price;
    // Get the installments for $years.
    // Converting years to months.
    $months = 12 * $years;
    // Now back to getting installments.
    $installments = $down_payment / $months;
    // Calculate Mark Up Per Annum (12 % )
    $anum_markup = $down_payment * 0.12;
    $anum_markup = $anum_markup / 12;
    // And now total payment value per month for the seleted $car.
    $monthly_amount = $installments + $anum_markup;
    return floor($monthly_amount);
  }
}
