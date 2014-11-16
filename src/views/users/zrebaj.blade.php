@extends('admin::layouts.master')

@section('content')

<h4 class="page-header">Naključni uporabnik</h4>
<br />
<div><strong>{{ $randomuser->name }}</strong>, izbrani jezik je <strong>{{ $randomuser->filterLang() }}</strong></div>
<br />
@stop
