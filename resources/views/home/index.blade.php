@extends('layouts.master')

@section('title' , trans('all.site-title'). " - ". $pageInfo['title'])

@section('keywords' , config('app.keywords'))


@section('content')

    <section class="container-fluid main-section">
        <div class="row">
            @include('home.status')
            @include('home.slider')
            @include('home.sections')
            @include('home.video')
            @include('home.platforms')
            @include('home.download')
        </div>
    </section>
@endsection
<script type="text/javascript">

</script>
