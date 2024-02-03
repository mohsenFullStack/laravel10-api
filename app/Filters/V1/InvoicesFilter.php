<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;
class InvoicesFilter extends ApiFilter
{
    protected $safeParams = [
        'customerId' => ['eq'],
        'amount' => ['eq','lt','gt','lte','gte'],
        'status' => ['eq'],
        'billedDate' =>  ['eq','lt','gt','lte','gte'],
        'paidDate' =>  ['eq','lt','gt','lte','gte'],
    ];
    protected $columnMap = [
        'customerId' => 'customer_id',
        'amount' => 'amount',
        'status' => 'status',
        'billedDate' => 'billedDate',
        'paidDate' => 'paidDate',
    ];
    protected $operatotMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>=',
        'ne' => '!=',
    ];

}
