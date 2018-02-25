<?php

@if(Session::get('message'))
    <div class="alert alert-success">
        {{ Session::get('message') }}
    </div>
    {{ Session::put('message','') }}
@endif
                       