<?php


function formatDateTime($dateTime)
{
    return \Carbon\Carbon::CreateFromFormat('Y-m-d H:i:s', $dateTime)->format('d/m/y - H:i');
} 

function formatMoney($money)
{
    $clean_money = str_replace('.', '', $money);

    return 'R$' .number_format($clean_money, 2, ',','.');
}