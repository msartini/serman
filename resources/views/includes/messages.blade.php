<div class="row">
    @if ($errors)
        <ul class="amber lighten-4">
            @foreach($errors->all() as $message)
                    <ol>{{$message}}</ol>
            @endforeach
        </ul>
    @endif
</div>
