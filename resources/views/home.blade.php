@extends('layouts.app')
<style type="text/css">
  body {
    padding-top: 40px;
  }

  .title {
    font-size: 2em !important;
    font-weight: bolder !important;
  }
</style>
@section('content')

<div class="container">
  <message title="Informações adicionais" body="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum."></message>

  <message title="Cursos" body="cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum."></message>

  <task-list></task-list>
</div>
@endsection




