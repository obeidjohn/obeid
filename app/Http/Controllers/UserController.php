<?php

namespace App\Http\Controllers;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;
use App\Http\Controllers\HomeController;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

public function user()
    {
        $data = User::all();

        return view('admin.users', compact('data'));
    }

    public function adduser()
    {
        return view('admin.adduser');
    }

    public function store(Request $request)
    {
        $user = $request;
        $user->name = $request->name;
        $user->email= $request->email;
        $user->password = $request->password;
        $user->save();

        return redirect()->back();
    }

 public function update($id) #this function is for editing the users
    {
        $data = user::find($id);
        $user = $request;
        $user->name = $request->name;
        $user->email= $request->email;
        $user->password = $request->password;
        $user->save();

        return redirect()->back();
    }

}

public function store(Request $request)
{
    /**
    * First of all you should validate the inputted value
    * to make sure that the inputted values are valid
    */

    $request->validate([
        'name' => 'required' // means that the name field in the form cannot be empty
        'password' => 'required' // same as the name field,
        'usertype' => 'required' // the keys should be same as the `name` attribute on the form
    ]);

    /**
    * After validating the user data you can now insert it to the database
    * you can use User::create(), User::query()->create() or create a new
    * instance of User model : $user = User;
    *
    * Take note that in the $user->usertype. The usertype is the column
    * in your database. Just like in the $user->name and $user->password
    **/

    $user = new User; // we will use this since its almost identical to the one you make
    $user->name = $request->name;
    $user->password = Hash::make($request->password); // you need to hash the password so that the authenticate will not fail even if you put the correct password if you will use the `Auth` facade for authentication
    $user->email = $request->email;


    /**
    * After you assign the the data to the proper "columns" you should save the
    * User model so that it will save the data in the database. If you didn't
    * use the save() method it will not save the data in database.
    *
    * In case you use the User::create() or User::query()->create() you don't
    * have to call the save() method.
    **/

    $user->save();

    /**
    * After saving the data you can now redirect if you don't need to do anything
    *
    * Tip : back() is equivalent to redirect()->back()
    * In case you want to add a success message to return you can
    * back()->with(['success' => 'User added successfully !']) then you can
    * call it in the blade file using session('success')
    */
    return back(); // its the same as redirect()->back()

}
