@extends('layouts.app')

@section('content')
    <x-hero :heroImage="$heroImage" />
    <x-gallery />
    <x-pricelist />
@endsection
