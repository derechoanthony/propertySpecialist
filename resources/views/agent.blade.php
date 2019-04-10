@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        @include('pages.agent.agentEntry')
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="main-box no-header clearfix">
                <div class="main-box-body clearfix">
                    @include('pages.agent.agentList')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection