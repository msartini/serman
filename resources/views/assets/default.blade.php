@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <h2>Vagas</h2>
    </div>
    <div class="row">

        <div class="col-md-12">
            <form class="form-horizontal" role="form">
                <div class="form-group">

                    <label for="nome" class="col-sm-2 control-label">
                        Vaga
                    </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="jobs" id="jobs" />
                    </div>
                </div>
                <div class="form-group">

                    <label for="description" class="col-sm-2 control-label">
                        Description
                    </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="description" />
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">

                        <button type="submit" class="btn btn-default">
                            Save
                        </button>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>


@endsection







