
@section('branch')
menu-open
@endsection
@section('branch.active')
    active
@endsection
@section('branch.co')
    active
@endsection
<div class="content-wrapper">
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h3 class=" @lang('app.kh')">@lang('app.zone')</h3>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item @lang('app.kh')"><a href="{{ route('home') }}">@lang('app.home')</a></li>
            <li class="breadcrumb-item @lang('app.kh')"><a href="#">@lang('app.co')</a></li>
            <li class="breadcrumb-item @lang('app.kh')">@lang('app.zone')</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <section class="content">

    <div class="container-fluid">
      <div class="row">
        <div class="col-3">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        <a href="{{ route('branch.co.index') }}" class="btn btn-info btn-sm @lang('app.kh') "> <i class="fas fa-reply mr-1 "></i> @lang('app.back')</a>
                      </h3>
                    <div class="float-right">
                        <button type="submit"  class="btn btn-success btn-sm @lang('app.kh')" wire:click="addZoneToCo" >
                            <i class="fas fa-plus mr-1 "></i>@lang('app.add-zone')</button>
                    </div>
                </div>

                <div class="card-body pt-0">
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th class="px-0">
                                    <select name="district" id="district"
                                            wire:model="district" wire:change = "districtChange"
                                            class="form-control">
                                        <option value="">Select District</option>
                                        {{-- loop province --}}
                                        @foreach ($provinces as $province)
                                            <optgroup label={{ $loop->index+1 }}.{{ $province->kh_name }} class="kh"></optgroup>
                                            {{-- loop district --}}
                                            @foreach ($province->getDistrict as $dist)
                                                <option  class="kh " value="{{ $dist->id }}" > &nbsp;&nbsp; {{ $loop->index+1 }}. {{ $dist->kh_name }}</option>
                                            @endforeach
                                        @endforeach
                                    </select>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($communes as $commune)
                                <tr>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" id="customCheckBox{{ $commune->id }}"
                                                value="{{ $commune->id }}"    wire:model="coms"
                                            class="custom-control-input custom-control-input-primary custom-control-input-outline">
                                            <label for="customCheckBox{{ $commune->id }}" style="font-weight: 400;"
                                                class="custom-control-label kh ">{{ $commune->prefix }} <b>{{ $commune->kh_name }}</label>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-9">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title kh">
                @lang('app.zone')
              </h3>
            </div>
            <div class="card-tool row" style="width:40%">

            </div>
            <div class="card-body p-0">
               @json($coms)
            </div>
            <div class="card-footer">
            </div>
          </div>
        </div>
        {{-- <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <select name="district" id="district"
                        wire:model="district" wire:change = "districtChange"
                    class="form-control">
                        <option value="">Select District</option>
                        @foreach ($provinces as $province)
                            <optgroup label={{ $loop->index+1 }}.{{ $province->kh_name }} class="kh"></optgroup>
                            @foreach ($province->getDistrict as $dist)
                                <option  class="kh " value="{{ $dist->id }}" > &nbsp;&nbsp; {{ $loop->index+1 }}. {{ $dist->kh_name }}</option>
                            @endforeach
                        @endforeach
                    </select>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Commune</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($communes as $commune)
                                <tr>
                                    <td>{{ $commune->id }}</td>
                                    <td class="kh " width="80px">{{ $commune->prefix }}</td>
                                    <td class="kh">{{ $commune->kh_name }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            {{-- @json($provinces) --}}
        </div>
      </div>
    </div>
  </section>
</div>




