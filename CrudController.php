//For Creating/Saving data with eloquent Model

<?php

Category::create([
    'name' => $request->name,
    'description' => $request->description
]);


//For Updating data with eloquent Model



$update_item = [
    'name'=>$request->name,
    'description'=>$request->description
];

Ecategory::findOrFail($id)->update($update_item);

//For Deleting data with eloquent Model



Category::where('id',$id)->delete();