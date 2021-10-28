<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    //
    public function index(){
    /*$customer=[
    ['name'=>'OWEN','password'=>'owen123'],
    ['name'=>'HENG','password'=>'heng456'],
    ];*/
    $customer=Customer::all();

    return view('customers.index',[
    'cust'=>$customer,
    ]);
    }

    public function show($id){
      return view('customers.show',['id'=>$id]);
    }

    public function create(){
return view('customers.create');
    }

public function store(){

/*error_log(request('custName'));
error_log(request('custNation'));
error_log(request('custEmail'));
error_log(request('custPhone'));*/

$cust=new Customer();

$cust->name=request('custName');
$cust->country=request('custNation');
$cust->email=request('custEmail');
$cust->phoneNo=request('custPhone');

error_log($cust);
$cust->save();

return redirect('/test1');
}

}
