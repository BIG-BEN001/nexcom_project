<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employees;

class ApiCOntroller extends Controller
{
    public function index(){
        $employees = Employees::all();
        $data = $employees->toArray();

        $response = [
            'success' => true,
            'data' => $data,
            'message' => 'Employees retrieved successfully.'
        ];

        return response()->json($response, 200);
    }

    public function create(Request $request)
    {
        // $input = $request->all();

        // $validator = Validator::make($input, [
        //     'name' => 'required',
        //     'designation' => 'required'
        // ]);

        // if ($validator->fails()) {
        //     $response = [
        //         'success' => false,
        //         'data' => 'Validation Error.',
        //         'message' => $validator->errors()
        //     ];
        //     return response()->json($response, 404);
        // }
        $employees = new Employees;
        $employees->name = $request->name;
        $employees->designation = $request->designation;
        $employees->save();

        // $employees = Employees::create($input);
        $data = $employees->toArray();

        $response = [
            'success' => true,
            'data' => $data,
            'message' => 'Employee created successfully.'
        ];

        return response()->json($response, 200);
    }

    public function getEmployee($id)
    {
        $employees = Employees::find($id);
        $data = $employees->toArray();

        if (is_null($employees)) {
            $response = [
                'success' => false,
                'data' => 'Empty',
                'message' => 'Employee not found.'
            ];
            return response()->json($response, 404);
        }else{
            $response = [
            'success' => true,
            'data' => $data,
            'message' => 'Employee retrieved successfully.'
        ];

            return response()->json($response, 200);
        }
    }

    public function update(Request $request, $id)
    {
        if(Employees::where('id', $id)->exists()) {
            $employees = Employees::find($id);
            $employees->name = is_null($request->name) ? $employees->name : $request->name;
            $employees->designation = is_null($request->designation) ? $employees->designation : $request->designation;
            $employees->save();

            return response()->json([
                "message" => "records updated successfully"
            ], 200);
            } else {
            return response()->json([
                "message" => "Student not found"
            ], 404);

        }
    }

    public function destroy($id)
    {
        if(Employees::where('id', $id)->exists()) {
            $employees = Employees::find($id);
            $employees->delete();

            return response()->json([
                "message" => "records deleted"
            ], 202);
            } else {
            return response()->json([
                "message" => "Student not found"
            ], 404);
            }
    }

    public function callback(Request $request)
    {
        $cb=[
            "partyB"=>"zt65m1rnq",
            "status"=>200,
            "amount"=>20,
            "customer_reference"=>"",
            "account"=>"254718984804"
        ];

        $response = [
            'success' => true,
            'data' => $request,
            'message' => 'Success.'
        ];

        return response()->json($cb, 200);

            // Your custom order_id is defined when you creating new order: https://developer.coingate.com/docs/create-order
            // Also don't forget to prevent SQL injection
            $result = mysql_query("SELECT * FROM orders WHERE id = " . $_POST['order_id']);
            $order = mysql_fetch_assoc($result);

            // token is your random secure string (for example: 5d02161be9bfb6192a33) for each order
            if ($_POST['token'] == $order['token']) {
            // Handle CoinGate order status: https://developer.coingate.com/docs/order-statuses
            $status = NULL;
            if ($_POST['status'] == 'paid') {
                if ($_POST['price_amount'] >= $order['amount']) {
                $status = 'paid';
                }
            }
            else {
                $status = $_POST['status'];
            }

            if (!is_null($status)) {
                mysql_query("UPDATE orders SET status = '".$status."' WHERE id = ".$_POST['order_id']);
            }
            }
    }
}
