@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                  Product
                </div>
                <div class="panel-body">
                  <p><strong>Name</strong>{{ $product->name }}</p>
                  <p><strong>Description</strong>{{ $product->description }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection