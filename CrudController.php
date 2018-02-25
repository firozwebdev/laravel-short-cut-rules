
<?php



    public function save(EcommerceCategory $request)
    {
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
    



   

  
    public function update(Request $request)
    {
        $messages = array(
            'category_name.required' => 'Category Name should not be empty...',
            'category_name.min' => 'Category Name should be minimum 3 characters...',
            'category_description.required' => 'Category Description should not be empty...',
            'publication_status.required' => 'Choose Publication Status from select option...',

        );
        $rules = array(
            'category_name' => 'required|min:3',
            'category_description' => 'required',
            'publication_status' => 'required',
        );

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        } else {
            $id= $request->id;
            $update_item = [

                'category_name'=>$request->category_name,
                'category_description'=>$request->category_description,
                'publication_status'=> $request->publication_status,
            ];

            $update_category = Ecategory::findOrFail($id)->update($update_item);


            if($update_category){
                Session::put('message','Update Category Information Successfully !');
                return redirect()->back();

            }

        }

    }

   
   
    public function delete($id)
    {
        $delete_cat = Ecategory::where('id',$id)->delete();
        if($delete_cat){
            Session::put('message','Delete Category Information Successfully !');
            return redirect()->route('route.name');
        }

    }


}