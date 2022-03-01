@extends('layouts.master')

@section('content')
    <!-- Content
      ================================================== -->
    <main class="site-content site-content--center page" id="wrapper">
        <div class="container container--large">
            <div class="page-heading page-heading--default text-center w-100">
                <div class="page-heading__subtitle h5">
                    <span class="color-primary">Please Select A</span>
                </div>
                <h1 class="page-heading__title h2">Game Squad</h1>
            </div>
            <div class="row mt-sm-auto mb-sm-auto">
                @forelse ($teams as $team)
                    <div class="col-sm-6 col-lg-3">
                        <div class="team-selection-item team-selection-item--style-1 text-center">
                            <a href="{{ route('to1', $team->slug) }}" class="team-selection-item__thumbnail">
                                <div class="team-selection-item__thumbnail-inner">
                                    @if ($team->image)
                                        <img src="{{ asset('public/storage/' . $team->image) }}" alt="">
                                    @else
                                    @endif
                                </div>
                                @if ($team->icon)
                                    <img class="team-selection-item__logo team-selection-item__logo--middle"
                                        src="{{ asset('storage/' . $team->icon) }}"
                                        srcset="assets/img/team-selection-logo-01-140.png 2x" alt="">
                                @else
                                @endif
                            </a>
                            <span class="team-selection-item__subtitle h6">{{ $team->subtitle ?? '' }}</span>
                            <h2 class="team-selection-item__title">{{ $team->title ?? '' }}</h2>
                        </div>
                    </div>
                @empty
                    <h2 class="text-center"> No Data Found </h2>
                @endforelse
            </div>
        </div>
    </main>
@endsection
