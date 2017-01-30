@extends('layouts.app')

@section('content')

<div class="container">
    @include('includes/messages')
    <div class="row">
        <h2>Vagas</h2>
    </div>
    <div class="row">

        <div class="col-md-12">
            {{
                Form::open(
                    array(
                            'url' => action('JobController@store'),
                            'files'=>true,
                            'method'=>'post',
                            'class'=>'form-horizontal',
                            'role'=>'form',
                        )
                )
            }}
            <form class="form-horizontal" role="form">
                <div class="form-group">
                    <div class="input-field col s12">
                      <input id="job" name="job" required type="text" class="validate" oninvalid="this.setCustomValidity('Enter User Name Here')"
    oninput="setCustomValidity('')">
                      <label for="job" data-error="wrong" data-success="right" class="active">Nome da Vaga</label>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">

                        <button type="submit" class="btn btn-default">
                            Save
                        </button>
                    </div>
                </div>
            {{ Form::close() }}
        </div>

        <div class="col-md-12">
            @if($jobs)
                <table>
                    <tr><td  class="title">Vagas</td></tr>
                    @foreach($jobs as $job)
                        <tr><td>{{$job->job}}</td></tr>
                    @endforeach
                </table>
            @endif
        </div>

    </div>
</div>


@endsection







