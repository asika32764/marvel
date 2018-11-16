{{-- Part of Front project. --}}
<?php
/**
 * Global variables
 * --------------------------------------------------------------
 * @var $app      \Windwalker\Web\Application                 Global Application
 * @var $package  \Front\FrontPackage                   Package object.
 * @var $view     \Windwalker\Data\Data                       Some information of this view.
 * @var $uri      \Windwalker\Uri\UriData                     Uri information, example: $uri->path
 * @var $chronos  \Windwalker\Core\DateTime\Chronos           PHP DateTime object of current time.
 * @var $helper   \Windwalker\Core\View\Helper\Set\HelperSet  The Windwalker HelperSet object.
 * @var $router   \Windwalker\Core\Router\PackageRouter       Router object.
 * @var $asset    \Windwalker\Core\Asset\AssetManager         The Asset manager.
 *
 * View variables
 * --------------------------------------------------------------
 * @var $item     \Front\Record\HeroRecord
 * @var $state    \Windwalker\Structure\Structure
 */

?>

@extends('_global.html')

@push('script')
    {{-- Add Script Here --}}
@endpush

@section('content')
    <div class="container hero-item">
        <h1>Hero Item</h1>
        <p>
            <a class="btn btn-default btn-outline-secondary" href="{{ $router->route('heros') }}">
                <span class="fa fa-chevron-left"></span>
                Back to List
            </a>
        </p>
        <hr />
        <img src="{{ $item->image }}" alt="Image">
        <h2>{{ $item->title }}</h2>
        <p>{{ $item->introtext }}</p>
        <p>{{ $item->fulltext }}</p>
    </div>
@stop
