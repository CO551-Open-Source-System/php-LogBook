<?php
function html_header($pageTitle)
{
    echo "<html><title>$pageTitle</title></head>";
    echo "<body>";
}
function html_h1($text)
{
    echo "<h1>$text</h1>";
}

function calculatetax($salary, $rate, $allowance)
{
    $taxable_income = $salary - $allowance;
    if ($taxable_income <= 0) {
        return 0;
    }
    $tax = ($taxable_income * ($rate/100));
    return $tax;
}


function html_footer()
{
    echo "</body>";
    echo "</html>";
}
?>