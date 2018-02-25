/*
This form is not simple form. It is with blade syntax
*/

{!!Form::open( array('route' =>['save.category'],'method'=>'post','class'=>'form-horizontal contact_form'))!!}

    <div class="form-group">
        {{Form::label('category_name', 'Category Name', array('class' => ''))}}
        {{Form::text('category_name', $category_name = null, array('class' => 'form-control','id'=>'category_name',  'placeholder' => 'Category Name'))}}
        @if ($errors->has('category_name')) <p class="text-danger">{{ $errors->first('category_name') }}</p> @endif
    </div>
    <div class="form-group">
        {{Form::label('category_description', 'Category Description', array('class' => ''))}}
        {{Form::textarea('category_description', $category_description = null, array('class' => 'form-control','id'=>'category_description',  'placeholder' => 'Category Description'))}}
        @if ($errors->has('category_description')) <p class="text-danger">{{ $errors->first('category_description') }}</p> @endif
    </div>
    <div class="form-group">
        {{Form::label('publication_status', 'Publication Status', array('class' => ''))}}

            <select class="form-control" name="publication_status" data-placeholder="Choose a Category" tabindex="1">
                <option value="">Select Status...</option>
                <option value="1">Published</option>
                <option value="0">Unpublish</option>
            </select>
        @if ($errors->has('publication_status')) <p class="text-danger">{{ $errors->first('publication_status') }}</p> @endif
    </div>

    <div class="form-group">
        <button type="submit" id="submit" class="btn btn-primary">Create Category</button>
    </div>
       {!!Form::close()!!}