<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Session;

class Customer extends Model
{
    use HasFactory;

    private static $customer, $image, $imageNewName, $directory, $imageUrl, $str;
    public static function newCustomer($request){
        self::$customer = new Customer();
        self::$customer->name = $request->name;
        self::$customer->email = $request->email;
        self::$customer->phone = $request->phone;
        self::$customer->password = bcrypt($request->password);
        self::$customer->image = self::saveImage($request);
        self::$customer->save();

        Session::put('customerId', self::$customer->id);
        Session::put('customerName', self::$customer->name);
    }

    private static function saveImage($request){
        self::$image = $request->file('image');
        self::$imageNewName = 'User'.rand().'.'. self::$image->Extension();
        self::$directory = 'admin-asset/upload-images/users/';
        self::$imageUrl = self::$directory.self::$imageNewName;
        self::$image->move(self::$directory, self::$imageNewName);
        return self::$imageUrl;
    }
}
