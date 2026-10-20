@extends('layouts.master')

@section('title', 'Our Team | Atharva Technologies')
@section('meta', '<meta content="Atharva Technologies, software development, custom software, mobile app, web development, AI, cloud" name="keywords">
    <meta content="Atharva Technologies - Custom software development and digital products" name="description">')
@section('content')
@include('partials.search-modal')


    @include('partials.team')


@include('partials.vendor-carousel')
@endsection
