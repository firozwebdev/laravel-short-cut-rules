<?php
    public function delete($id)
    {
        $delete_cat = Ecategory::where('id',$id)->delete();
        if($delete_cat){
            Session::put('message','Delete Category Information Successfully !');
            return redirect()->route('route.name');
        }

    }