{{-- Part of Admin project. --}}
<?php
/**
 * Global variables
 * --------------------------------------------------------------
 * @var $app           \Windwalker\Web\Application                 Global Application
 * @var $package       \Admin\AdminPackage                 Package object.
 * @var $view          \Admin\View\Heros\HerosHtmlView  View object.
 * @var $uri           \Windwalker\Uri\UriData                     Uri information, example: $uri->path
 * @var $chronos       \Windwalker\Core\DateTime\DateTime          PHP DateTime object of current time.
 * @var $helper        \Windwalker\Core\View\Helper\Set\HelperSet  The Windwalker HelperSet object.
 * @var $router        \Windwalker\Core\Router\MainRouter          Route builder object.
 * @var $asset         \Windwalker\Core\Asset\AssetManager         The Asset manager.
 *
 * View variables
 * --------------------------------------------------------------
 * @var $filterBar     \Windwalker\Core\Widget\Widget
 * @var $filterForm    \Windwalker\Form\Form
 * @var $batchForm     \Windwalker\Form\Form
 * @var $showFilterBar boolean
 * @var $grid          \Phoenix\View\Helper\GridHelper
 * @var $state         \Windwalker\Structure\Structure
 * @var $items         \Windwalker\Data\DataSet
 * @var $item          \Admin\Record\HeroRecord
 * @var $i             integer
 * @var $pagination    \Windwalker\Core\Pagination\Pagination
 */
?>

@extends('_global.admin.admin')

@section('toolbar-buttons')
    @include('toolbar')
@stop

@push('script')
    {{-- Add Script Here --}}
@endpush

@section('admin-body')
    <div id="phoenix-admin" class="heros-container grid-container">
        <form name="admin-form" id="admin-form" action="{{ $router->route('heros') }}" method="POST"
            enctype="multipart/form-data">

            {{-- FILTER BAR --}}
            <div class="filter-bar">
                {!! $filterBar->render(['form' => $form, 'show' => $showFilterBar]) !!}
            </div>

            @if (count($items))
                {{-- RESPONSIVE TABLE DESC --}}
                <p class="visible-xs-block d-sm-block d-md-none">
                    @lang('phoenix.grid.responsive.table.desc')
                </p>

                <div class="grid-table">
                    <table class="table table-striped table-bordered table-responsive">
                        <thead>
                        <tr>
                            {{-- CHECKBOX --}}
                            <th width="1%" class="text-nowrap">
                                {!! $grid->checkboxesToggle(['duration' => 150]) !!}
                            </th>

                            {{-- STATE --}}
                            <th style="min-width: 70px;" width="8%" class="text-nowrap">
                                {!! $grid->sortTitle('admin.hero.field.state', 'hero.state') !!}
                            </th>

                            {{-- TITLE --}}
                            <th class="text-nowrap" style="min-width: 300px;">
                                {!! $grid->sortTitle('admin.hero.field.title', 'hero.title') !!}
                            </th>

                            {{-- ORDERING --}}
                            <th width="5%" class="text-nowrap">
                                {!! $grid->sortTitle('admin.hero.field.ordering', 'hero.ordering') !!}
                                {!! $grid->saveOrderButton() !!}
                            </th>

                            {{-- AUTHOR --}}
                            <th width="10%" class="text-nowrap">
                                {!! $grid->sortTitle('admin.hero.field.author', 'hero.created_by') !!}
                            </th>

                            {{-- CREATED --}}
                            <th width="10%" class="text-nowrap">
                                {!! $grid->sortTitle('admin.hero.field.created', 'hero.created') !!}
                            </th>

                            {{-- LANGUAGE --}}
                            <th width="7%" class="text-nowrap">
                                {!! $grid->sortTitle('admin.hero.field.language', 'hero.language') !!}
                            </th>

                            {{-- DELETE --}}
                            <th width="1%" class="text-nowrap">
                                @lang('admin.hero.field.delete')
                            </th>

                            {{-- ID --}}
                            <th width="3%" class="text-nowrap text-right">
                                {!! $grid->sortTitle('admin.hero.field.id', 'hero.id') !!}
                            </th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach ($items as $i => $item)
                            <?php
                            $grid->setItem($item, $i);
                            ?>
                            <tr data-order-group="">
                                {{-- CHECKBOX --}}
                                <td>
                                    {!! $grid->checkbox() !!}
                                </td>

                                {{-- STATE --}}
                                <td class="text-nowrap">
                            <span class="btn-group">
                                {!! $grid->published($item->state) !!}
                                <button type="button" class="btn btn-default btn-light btn-sm has-tooltip"
                                    onclick="Phoenix.Grid.copyRow({{ $i }});"
                                    title="@lang('phoenix.toolbar.duplicate')">
                                    <span class="fa fa-fw fa-copy text-info"></span>
                                </button>
                            </span>
                                </td>

                                {{-- TITLE --}}
                                <td>
                                    <a href="{{ $router->route('hero', ['id' => $item->id]) }}">
                                        {{ $item->title }}
                                    </a>
                                </td>

                                {{-- ORDERING --}}
                                <td class="text-right">
                                    {!! $grid->orderButton() !!}
                                </td>

                                {{-- AUTHOR --}}
                                <td class="text-nowrap">
                                    {{ property_exists($item, 'user_name') ? $item->user_name : $item->created_by }}
                                </td>

                                {{-- CREATED --}}
                                <td class="text-nowrap">
                            <span class="has-tooltip"
                                title="{{ $datetime::toLocalTime($item->created, 'Y-m-d H:i:s') }}">
                                {{ $datetime::toLocalTime($item->created, 'Y-m-d') }}
                            </span>
                                </td>

                                {{-- LANGUAGE --}}
                                <td class="text-nowrap">
                                    {{ $item->language }}
                                </td>

                                {{-- DELETE --}}
                                <td class="text-center">
                                    <button type="button" class="btn btn-default btn-outline-secondary btn-sm has-tooltip"
                                        onclick="Phoenix.Grid.deleteRow({{ $i }});"
                                        title="@lang('phoenix.toolbar.delete')">
                                        <span class="fa fa-fw fa-trash"></span>
                                    </button>
                                </td>

                                {{-- ID --}}
                                <td class="text-right">
                                    {{ $item->id }}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>

                        <tfoot>
                        <tr>
                            {{-- PAGINATION --}}
                            <td colspan="25">
                                {!! $pagination->route('heros', [])->render() !!}
                            </td>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            @else
                <div class="grid-no-items card bg-light" style="padding: 125px 0;">
                    <div class="card-body text-center">
                        <h3 class="text-secondary">@lang('phoenix.grid.no.items')</h3>
                    </div>
                </div>
            @endif

            <div class="hidden-inputs">
                {{-- METHOD --}}
                <input type="hidden" name="_method" value="PUT" />

                {{-- TOKEN --}}
                @formToken
            </div>

            @include('_global.admin.widget.batch')
        </form>
    </div>
@stop
