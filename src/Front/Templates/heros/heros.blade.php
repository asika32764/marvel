{{-- Part of Front project. --}}
<?php
/**
 * Global variables
 * --------------------------------------------------------------
 * @var $app           \Windwalker\Web\Application                 Global Application
 * @var $package       \Front\FrontPackage                   Package object.
 * @var $view          \Windwalker\Data\Data                       Some information of this view.
 * @var $uri           \Windwalker\Uri\UriData               Uri information, example: $uri->path
 * @var $chronos       \Windwalker\Core\DateTime\Chronos           PHP DateTime object of current time.
 * @var $helper        \Windwalker\Core\View\Helper\Set\HelperSet  The Windwalker HelperSet object.
 * @var $router        \Windwalker\Core\Router\PackageRouter       Router object.
 * @var $asset         \Windwalker\Core\Asset\AssetManager         The Asset manager.
 *
 * View variables
 * --------------------------------------------------------------
 * @var $state         \Windwalker\Structure\Structure
 * @var $items         \Windwalker\Data\DataSet
 * @var $item          \Front\Record\HeroRecord
 * @var $pagination    \Windwalker\Core\Pagination\Pagination
 */

$asset->addJS('js/pages/hero.min.js');
?>

@extends('_global.html')

@push('script')
    <script type="text/babel">
        HeroHandler.init();
    </script>
@endpush

@section('content')

    <script>
        // window.addEventListener('DOMContentLoaded', () => {
        //
        // });
    </script>

    <div class="container hero-list">
        <h1>Hero List</h1>

        <button class="btn btn-facebook">Button</button>

        <span class="badge badge-facebook">Badge</span>

        <p>
            <span class="text-facebook">TEXT</span>
        </p>

        <div class="heros-items">
            @foreach ($items as $i => $item)
                <div class="hero-item">
                    <p>
                        <span class="fa fa-angle-right text-muted"></span>
                        <a href="{{ $router->route('hero', ['id' => $item->id]) }}">
                            {{ $item->title }}
                        </a>
                    </p>
                </div>
            @endforeach
        </div>
        <hr />
        <div class="pagination">
            {!! $pagination->route('heros', [])->render() !!}
        </div>
    </div>
@stop
