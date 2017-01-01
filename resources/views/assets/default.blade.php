@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <h2>Equipamentos</h2>
    </div>
    <div class="row">

        <div class="col-md-12">
            <form class="form-horizontal" role="form">
                <div class="form-group">

                    <label for="name" class="col-sm-2 control-label">
                        Name
                    </label>
                    <div class="col-sm-10">
                        <input type="name" class="form-control" id="name" />
                    </div>
                </div>
                <div class="form-group">

                    <label for="description" class="col-sm-2 control-label">
                        Description
                    </label>
                    <div class="col-sm-10">
                        <input type="description" class="form-control" id="description" />
                    </div>
                </div>

                <div class="form-group">

                    <label for="number" class="col-sm-2 control-label">
                        Number
                    </label>
                    <div class="col-sm-3">
                        <input type="number" class="form-control" id="number" />
                    </div>

                    <label for="grouping_name" class="col-sm-2 control-label">
                        Grupo
                    </label>
                    <div class="col-sm-3">
                        <input type="grouping_name" class="form-control" id="grouping_name" />
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







