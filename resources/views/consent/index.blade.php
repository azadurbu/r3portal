@extends('layouts.adminApp')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <section class="panel">
        <header class="panel-heading">
            Consents
        </header>
        <div class="panel-body">
          <div class="col-sm-2"></div>
          <div class="col-sm-8">
{{-- //////////////////////////////////////////////////////////////////////////////////////////////////////////// --}}
    <div id="myProgressbar" class="progress">
        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
        </div>
    </div>
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" ><a href="#bravo" aria-controls="bravo" role="tab" data-toggle="tab"><button data-toggle="progressbar" data-target="#myProgressbar" data-value="20" class="btn btn-default orange-active">
        1. <br />First Consent
        </button></a></li>
        <li role="presentation"><a href="#matrix" aria-controls="matrix" role="tab" data-toggle="tab"><button data-toggle="progressbar" data-target="#myProgressbar" data-value="40" class="btn btn-default orange-active">
        2. <br />Second Consent
        </button></a></li>
        <li role="presentation"><a href="#technica" aria-controls="technica" role="tab" data-toggle="tab"><button data-toggle="progressbar" data-target="#myProgressbar" data-value="60" class="btn btn-default orange-active">
        3. <br />Third Consent
        </button></a></li>
        <li role="presentation"><a href="#rw4" aria-controls="rw4" role="tab" data-toggle="tab"><button data-toggle="progressbar" data-target="#myProgressbar" data-value="80" class="btn btn-default orange-active">
        4. <br />Fourth Consent
        </button></a></li>
        <li role="presentation"><a href="#podhod5" aria-controls="podhod5" role="tab" data-toggle="tab"><button data-toggle="progressbar" data-target="#myProgressbar" data-value="100" class="btn btn-default orange-active">
        5. <br />Fifth Consent
        </button></a></li>
    </ul>

  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="bravo">
      <br><br>
      <p>Demo Content for First Consent. Demo Content for First Consent. Demo Content for First Consent. Demo Content for First Consent. Demo Content for First Consent. Demo Content for First Consent. Demo Content for First Consent. Demo Content for First Consent. </p>
      <br>
      <label><input type="checkbox" name="" id="" 
        @if (!empty(($user->sign))) checked disabled @endif
        > I agree and I want to proceed</label>
      <br><br>
      <a href="#matrix" aria-controls="matrix" role="tab" data-toggle="tab" class="pull-right"><button data-toggle="progressbar" data-target="#myProgressbar" data-value="40" class="btn btn-default orange-active">Next</button></a>
    </div>
    <div role="tabpanel" class="tab-pane" id="matrix">
      <br><br>
      <p>Demo Content for Second Consent. Demo Content for Second Consent. Demo Content for Second Consent. Demo Content for Second Consent. Demo Content for Second Consent. Demo Content for Second Consent. Demo Content for Second Consent. Demo Content for Second Consent. </p>
      <br>
      <label><input type="checkbox" name="" id=""
        @if (!empty(($user->sign))) checked disabled @endif
        > I agree and I want to proceed</label>
      <br><br>
      <a href="#bravo" aria-controls="bravo" role="tab" data-toggle="tab"><button data-toggle="progressbar" data-target="#myProgressbar" data-value="20" class="btn btn-default orange-active">Previous</button></a>

      <a href="#technica" aria-controls="technica" role="tab" data-toggle="tab" class="pull-right"><button data-toggle="progressbar" data-target="#myProgressbar" data-value="60" class="btn btn-default orange-active"> Next </button></a>
    </div>
    <div role="tabpanel" class="tab-pane" id="technica">
      <br><br>
      <p>Demo Content for Third Consent. Demo Content for Third Consent. Demo Content for Third Consent. Demo Content for Third Consent. Demo Content for Third Consent. Demo Content for Third Consent. Demo Content for Third Consent. Demo Content for Third Consent. </p>
      <br>
      <label><input type="checkbox" name="" id=""
        @if (!empty(($user->sign))) checked disabled @endif
        > I agree and I want to proceed</label>
      <br><br>
      <a href="#matrix" aria-controls="matrix" role="tab" data-toggle="tab"><button data-toggle="progressbar" data-target="#myProgressbar" data-value="40" class="btn btn-default orange-active">Next</button></a>
      
      <a href="#rw4" aria-controls="rw4" role="tab" data-toggle="tab" class="pull-right"><button data-toggle="progressbar" data-target="#myProgressbar" data-value="80" class="btn btn-default orange-active">Next</button></a>
    </div>
    <div role="tabpanel" class="tab-pane" id="rw4">
      <br><br>
      <p>Demo Content for Fourth Consent. Demo Content for Fourth Consent. Demo Content for Fourth Consent. Demo Content for Fourth Consent. Demo Content for Fourth Consent. Demo Content for Fourth Consent. Demo Content for Fourth Consent. Demo Content for Fourth Consent. </p>
      <br>
      <label><input type="checkbox" name="" id=""
        @if (!empty(($user->sign))) checked disabled @endif
        > I agree and I want to proceed</label>
      <br><br>
      <a href="#technica" aria-controls="technica" role="tab" data-toggle="tab"><button data-toggle="progressbar" data-target="#myProgressbar" data-value="60" class="btn btn-default orange-active">Previous</button></a>

      <a href="#podhod5" aria-controls="podhod5" role="tab" data-toggle="tab" class="pull-right"><button data-toggle="progressbar" data-target="#myProgressbar" data-value="100" class="btn btn-default orange-active">Next</button></a>
    </div>
    <div role="tabpanel" class="tab-pane" id="podhod5">
      <br><br>
      <p>Demo Content for Fifth Consent. Demo Content for Fifth Consent. Demo Content for Fifth Consent. Demo Content for Fifth Consent. Demo Content for Fifth Consent. Demo Content for Fifth Consent. Demo Content for Fifth Consent. Demo Content for Fifth Consent. </p>
      <br>
      

      {{-- //////////////////////////////////////////////////// --}}
      {{-- <div style="height: 400px"> --}}
        
        <section class="panel">
          <div>
            <header class="panel-heading">
              Signature Panel
            </header>
          </div>
          <div class="panel-body">
            @if (!empty(($user->sign))) 
            Current Signature 
            <img src="{{($user->sign)}}">
            <h4>If you want to change your current signature, you can add a new signature and save.</h4>  @endif
            @include('consent.sign')
            {{-- <div class="" style="padding:15px 0">
              <div class="col-sm-6">
                <div style="float:right"><input type="button" class="btn btn-primary" value="Reset"></div>
              </div>
              <div class="col-sm-1">
                <button class="saveSig btn btn-danger " type="button">Save</button>
                
              </div>
              <div style="clear:both"></div>
            
              </div> --}}
          </div>
        </section>

      
      {{-- </div> --}}
      {{-- //////////////////////////////////////////////////// --}}

      {{-- <label><input type="checkbox" name="" id=""> I agree and I want to proceed</label> --}}

      
      {{-- <p>Please upload a degital signature.
      <input type="file" name="file">
      </p>
        <br>
        <button class="btn btn-default orange-active pull-right">Upload Signature</button> --}}
      <br><br>

      <a href="#rw4" aria-controls="rw4" role="tab" data-toggle="tab"><button data-toggle="progressbar" data-target="#myProgressbar" data-value="80" class="btn btn-default orange-active">Previous</button></a>
    </div>
  </div>
</p>
<script src="https://code.jquery.com/jquery.js"></script>
{{-- //////////////////////////////////////////////////////////////////////////////////////////////////////////// --}}
          </div>
          <div class="col-sm-2"></div>
        </div>
      </section>
    </div>
  </div>
</div>
<script type="text/javascript">



    !function ($) {

// PROGRESSBAR CLASS DEFINITION
// ============================

var Progressbar = function (element) {
    this.$element = $(element);
}

Progressbar.prototype.update = function (value) {
    var $div = this.$element.find('div');
    var $span = $div.find('span');
    $div.attr('aria-valuenow', value);
    $div.css('width', value + '%');
    $span.text(value + '% Complete');
}

Progressbar.prototype.finish = function () {
    this.update(100);
}

Progressbar.prototype.reset = function () {
    this.update(0);
}

// PROGRESSBAR PLUGIN DEFINITION
// =============================

$.fn.progressbar = function (option) {
    return this.each(function () {
        var $this = $(this),
            data = $this.data('jbl.progressbar');

        if (!data) $this.data('jbl.progressbar', (data = new Progressbar(this)));
        if (typeof option == 'string') data[option]();
        if (typeof option == 'number') data.update(option);
    })
};

// PROGRESSBAR DATA-API
// ====================

$(document).on('click', '[data-toggle="progressbar"]', function (e) {
    var $this = $(this);
    var $target = $($this.data('target'));
    var value = $this.data('value');

    e.preventDefault();

    $target.progressbar(value);
});

}(window.jQuery);

</script>
@endsection