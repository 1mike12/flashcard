@extends("layouts.default")

@section("content")
<div ng-app="myApp" class="row">
    @include("deck.quiz")
    @include("deck.editing")
</div>
@stop