
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
          <h3 class=" @lang('app.kh')">@lang('app.co')</h3>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item @lang('app.kh')"><a href="{{ route('home') }}">@lang('app.home')</a></li>
            <li class="breadcrumb-item @lang('app.kh')"><a href="#">@lang('app.co')</a></li>
            <li class="breadcrumb-item @lang('app.kh')">@lang('app.list')</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <section class="content">

    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">
                <a href="{{ route('branch.co.form') }}" class="btn btn-primary btn-sm @lang('app.kh') "> <i class="fas fa-plus mr-1 "></i> @lang('app.create')</a>
              </h3>

              <div class="card-tools row" style="width:20%">

                <div class="col-sm-4">

                    <select name="limit" id="limit"
                            class="form-control form-control-sm"
                            wire:model="limit"
                            >
                        <option value="">filter:</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="10">10</option>
                        <option value="20">20</option>
                        <option value="20">30</option>
                        <option value="20">40</option>
                        <option value="20">50</option>
                        <option value="20">100</option>
                    </select>
                </div>
                <div class="col-sm-8">
                    <input type="search" class="form-control form-control-sm"
                    placeholder="Search..." name="search" id="search"
                    wire:model="search">
                </div>
              </div>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr class="@lang('app.kh')">
                            <th>@lang('app.id')</th>
                            <th>@lang('app.fullname')</th>
                            <th>@lang('app.id_card')</th>
                            <th>@lang('app.gender')</th>
                            <th>@lang('app.dob')</th>
                            <th>@lang('app.phone')</th>
                            <th>@lang('app.address')</th>
                            {{-- <th>@lang('app.created')</th> --}}
                            <th>@lang('app.updated')</th>
                            <th >@lang('app.action')</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($credit_officers as $credit_officer)
                            <tr>
                                <td>{{ $credit_officer->id}}</td>
                                <td><b>{{ $credit_officer->name}}</b> | <a class="@lang('app.kh')">{{ $credit_officer->name_kh}}</a></td>
                                <td>{{ $credit_officer->id_card }}</td>
                                <td class="@lang('app.kh')">
                                    @if ($credit_officer->gender)
                                        <i class="fas fa-male fas fa-sm mr-1 "></i>@lang('app.male')
                                    @else
                                    <i class="fas fa-female fas fa-sm mr-1"></i>@lang('app.female')
                                    @endif
                                </td>
                                <td>{{ \Carbon\Carbon::parse($credit_officer->dob)->format('d-m-Y') }}</td>
                                <td>{{ $credit_officer->phone}}</td>
                                <td>{{ $credit_officer->address }}</td>
                                {{-- <td>{{ \Carbon\Carbon::parse($credit_officer->created_at)->format('d-m-Y|h:i:s') }}</td> --}}
                                <td>{{ \Carbon\Carbon::parse($credit_officer->updated_at)->format('d-m-Y') }}</td>
                                <td class="@lang('app.kh')">
                                    <a href="{{ route('branch.co.zone',$credit_officer->id) }}" class="btn btn-info btn-xs"><i class="fas fa-map mr-2"></i>@lang('app.zone')</a>
                                    <a  href="{{route('branch.co.form',$credit_officer->id)}}"
                                        class="btn btn-success btn-xs">
                                        <i class="fas fa-edit mr-1"></i>@lang('app.edit')
                                    </a>
                                    <button type="button" class="btn btn-danger btn-xs"
                                    wire:click="delete({{ $credit_officer->id }})" onclick="confirm('Do you want to delete ???')|| event.stopImmediatePropagation()"  >
                                        <i class="fas fa-trash mr-1"></i>@lang('app.delete')
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
             {{ $credit_officers->links() }}
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>




