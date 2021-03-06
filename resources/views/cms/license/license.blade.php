@extends('template')
@section('content')

@include('cms.header')

<div id="wrainbo-cms-license" class="wrainbo-cms-globalSetting">
  <div class="medium-2 columns">
    @include('cms.menu')
  </div>

  <div class="medium-10 columns">
    <h2 class="wrainbo-cms-title">Manage License</h2>

    <div class="row license-holder" >
      <div class="medium-4 columns">
        <div class="license-holder-box" >
          @include('cms.license.overview')
        </div>
      </div>
      <div class="medium-4 columns">
        <div class="license-holder-box" >
          @include('cms.license.register')
        </div>
      </div>
      <div class="medium-4 columns">
        <div class="license-holder-box" >
          @include('cms.license.purchase')
        </div>
      </div>
    </div>


  </div>
</div>
  <script type="text/javascript" src="{{ url('js/cms/license/donutChart.js')}}"></script>
  <script type="text/javascript" src="{{ url('js/cms/license/LicenseManager.js') }}"></script>
@stop
