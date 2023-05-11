<?php

namespace App\Http\Controllers\Admin;

use App\Models\Customer;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    public function customer()
    {
        $customers = Customer::get();
        return view('admin.mains-admin.customer.customer')->with("data", ['customers'=>$customers]);
    }

    public function CustomerBlocked()
    {
        $customers=DB::table("oc_customer")->where("blocked", "=", 1)->orderby('date_added', "desc")->get();

        return view('admin.mains-admin.customer.customer_blocked')->with("data", ['customers'=>$customers]);
    }

    public function ShowAddCustomer()
    {
        return view('admin.mains-admin.customer.customer-add');
    }

    public function ShowUpdateCustomer($id)
    {
        $customer=DB::table("oc_customer")->where("customer_id", '=', $id)->where("blocked", '=', 0)->first();

        return view('admin.mains-admin.customer.customer-update')->with("data", ['customer'=>$customer]);
    }

    public function ShowUpdateBlockedCustomer($id)
    {
        $customer=DB::table("oc_customer")->where("customer_id", '=', $id)->where("blocked", '=', 1)->first();

        return view('admin.mains-admin.customer.customer_blocked_update')->with("data", ['customer'=>$customer]);
    }

    public function AddCustomer(Request $request)
    {
        $validator = Validator::make($request->all(), self::RulesAdd());
        $validator->setAttributeNames(self::AttributeNames());

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user_password =$request->password;
        $salt = Str::random(9);
        $password = sha1($salt . sha1($salt . sha1($user_password)));

        DB::table('oc_customer')->insert([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'display_name' => $request->display_name,
            'email' => $request->email,
            'telephone' => $request->telephone,
            'address_1' => $request->address_1,
            'postcode' => $request->postcode,
            'city' => $request->city,
            'password' =>  $password,
            'salt' => $salt,
        ]);

        return Redirect::to("admin/customer")->with('success', 'The record has been added successfully');
    }

    public function UpdateCustomer(Request $request, $id)
    {
        $validator = Validator::make($request->all(), self::Rules($id));
        $validator->setAttributeNames(self::AttributeNames());

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        self::update($request, $id);

        return Redirect::to("admin/customer")->with('success', 'The record has been updated successfully');
    }

    public function UpdateBlockedCustomer(Request $request, $id)
    {
        $validator = Validator::make($request->all(), self::Rules($id));
        $validator->setAttributeNames(self::AttributeNames());

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        self::update($request, $id);

        return Redirect::to("admin/customer/blocked")->with('success', 'The record has been updated successfully');
    }

    public function update($request, $id)
    {
        $status=1;
        $blocked=0;

        if ($request->has('blocked')) {
            $blocked=1;
            $status=0;
        }

        $updateDetails = [
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'display_name' => $request->display_name,
            'email' => $request->email,
            'telephone' => $request->telephone,
            'address_1' => $request->address_1,
            'postcode' => $request->postcode,
            'city' => $request->city,
            'status' => $status,
            'blocked' => $blocked
        ];

        DB::table('oc_customer')->where('customer_id', "=", "$id")->update($updateDetails);
    }

    public function UnblockCustomer(Request $request)
    {
        DB::table('oc_customer')->where('customer_id', "=", "$request->id")->update(['blocked' => 0]);
    }

    public function AttributeNames()
    {
        $attributeNames = array(
            'firstname' =>'first name',
            'lastname' => 'last Name',
            'display_name' => 'user name',
            'email' => "email",
            'telephone' => 'phone number',
            'address_1' =>'address',
            'postcode' => 'post code',
            'city' => 'city',
        );

        return $attributeNames;
    }

    public function Rules($id)
    {
        $rules=array(
            'firstname' =>'required|min:2',
            'lastname' => 'required|min:2',
            'display_name' =>'',
            "email" => "required|email|unique:oc_customer,email,$id,customer_id",
            'telephone' => 'required|string',
            'address_1' =>'required||min:2',
            'postcode' => 'required|numeric',
            'city' => 'required',
        );

        return $rules;
    }

    public function RulesAdd()
    {
        $rules=array(
            'firstname' =>'required|min:2',
            'lastname' => 'required|min:2',
            'display_name' =>'',
            "email" => "required|email|unique:oc_customer",
            'telephone' => 'required|string',
            'address_1' =>'required||min:2',
            'postcode' => 'required|numeric',
            'city' => 'required',
        );

        return $rules;
    }
}
