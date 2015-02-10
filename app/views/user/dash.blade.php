@extends("layouts.default")

@section("content")
<?php if ($decks->count()): ?>
list decks here
<?php else: ?>
no decks added yet
<?php endif ?>
@stop