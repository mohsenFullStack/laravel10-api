<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;
class CustomersFilter extends ApiFilter
{
    protected $safeParams = [
        'name' => ['eq'],
        'type' => ['eq'],
        'email' => ['eq'],
        'address' => ['eq'],
        'city' => ['eq'],
        'state' => ['eq'],
        'postalCode' => ['eq', 'gt', 'lt'],
    ];
    protected $columnMap = [
        'postalCode' => 'postal_code'
    ];
    protected $operatotMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>=',
    ];

//    public function transform(Request $request)
//    {
//        $eloQuery = [];
//        foreach ($this->safeParams as $param => $operators) {
//            $query = $request->query($param);
//            if (!isset($query)) {
//                continue;
//            }
//            $column = $this->columnMap[$param] ?? $param;
//            foreach ($operators as $operator) {
//                if (isset($query[$operator])) {
//                    $eloQuery[] = [$column, $this->operatotMap[$operator],$query[$operator]];
//                }
//            }
//        }
//        return $eloQuery;
//    }
}
