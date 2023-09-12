<?php
use App\Models\Customer;
if (!function_exists(" idsDB")){
    function idsDB(){
        $ids = Customer::pluck('id');
        return $ids;
    }
}