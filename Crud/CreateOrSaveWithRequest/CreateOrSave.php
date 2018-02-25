
<?php

/*
In this saving process, at first we have to create a request (php aritsan make:request requestName)
then inside request file we found two default method one is authorizaion and other is rules.
make sure authorizaion should be true (default is false). Then we can right validation rules
inside the array of rules method. we can also customize our message by creating a new method
named messages and we will right customize message within an array of messages method.

*/



public function save(Category $request) //this request are coming from Category Request
{
    //validating data which are coming from form
    $validator = Validator::make($request->all(),$request->rules(),$request->messages());

   if ($validator->fails()) {
        return redirect()->back()->withInput()->withErrors($validator);
    } else {

        Ecategory::create([
            'category_name' => $request->category_name,
            'category_description' => $request->category_description,
            'publication_status' => $request->publication_status,
        ]);
        Session::put('message', 'Save Category Information Successfully !');
        return redirect()->route('route.name');
    }
}








