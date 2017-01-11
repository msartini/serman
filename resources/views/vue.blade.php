@extends('layouts.app')
<script src="https://unpkg.com/vue/dist/vue.js"></script>

@section('content')



<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Contador</div>

            </div>

        </div>
    </div>
    <div id="counter-event-example">
      <p>{{ @total }}</p>
      <button-counter v-on:increment="incrementTotal"></button-counter>
      <button-counter v-on:increment="incrementTotal"></button-counter>
    </div>
</div>


@endsection


