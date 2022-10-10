
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
          <h1 class="@lang('app.kh')">
            @lang('app.co')
          </h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item @lang('app.kh')"><a href="{{ route('home') }}">@lang('app.home')</a></li>
            <li class="breadcrumb-item @lang('app.kh')"><a href="#">@lang('app.co')</a></li>
            <li class="breadcrumb-item @lang('app.kh') ">@lang('app.form')</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- Default box -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">
                <a href="{{ route('branch.co.index') }}" class="btn btn-info btn-sm @lang('app.kh')"> <i class="fas fa-reply mr-1"></i> @lang('app.back')</a>
              </h3>

              <div class="card-tools">

              </div>
            </div>
            <form id="quickForm" novalidate="novalidate" wire:submit.prevent="store"  >
                @csrf
              <div class="card-body row">
                <div class="form-group col-md-6 ">
                  <label for="name" class="@lang('app.kh')">@lang('app.fullname')</label>
                    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror "
                        id="name" placeholder="Enter Name..." wire:model.lazy="name"
                        aria-describedby="name-error" aria-invalid="true">
                    @error('name')
                        <span id="name-error" class="error invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="form-group col-md-6 ">
                    <label for="name_kh" class="@lang('app.kh')">@lang('app.khmer_name')</label>
                      <input type="text" id="name_kh" name="name_kh" class="form-control @error('name_kh') is-invalid @enderror "
                          id="name_kh" placeholder="Enter Khmer Name..." wire:model.lazy="name_kh"
                          aria-describedby="name_kh-error" aria-invalid="true">
                      @error('name_kh')
                          <span id="name_kh-error" class="error invalid-feedback">
                              {{ $message }}
                          </span>
                      @enderror
                </div>

                <div class="form-group col-md-4">
                    <label for="gender" class="@lang('app.kh')">@lang('app.gender')</label>
                      <select  name="gender" class="form-control @lang('app.kh')  @error('gender') is-invalid @enderror "
                          id="gender" placeholder="Enter Gender" wire:model.lazy="gender"
                          aria-describedby="gender-error" aria-invalid="true">
                          {{-- <option value="">@lang('app.type') : </option> --}}
                          <option value="1">@lang('app.male')</option>
                          <option value="0">@lang('app.female')</option>
                      </select>
                      @error('gender')
                          <span id="gender-error" class="error invalid-feedback">
                              {{ $message }}
                          </span>
                      @enderror
                </div>

                <div class="form-group col-md-4 ">
                    <label for="dob" class="@lang('app.kh')">@lang('app.dob')</label>
                      <input type="date" name="dob" class="form-control @error('dob') is-invalid @enderror "
                          id="dob" placeholder="Enter Khmer Name" wire:model.lazy="dob"
                          aria-describedby="dob-error" aria-invalid="true">
                      @error('dob')
                          <span id="dob-error" class="error invalid-feedback">
                              {{ $message }}
                          </span>
                      @enderror
                </div>
                <div class="form-group col-md-4 ">
                    <label for="IdCard" class="@lang('app.kh')">@lang('app.id_card')</label>
                      <input type="text" id="id_card" name="id_card" class="form-control @error('id_card') is-invalid @enderror "
                           placeholder="Enter Id Card..." wire:model.lazy="id_card"
                          aria-describedby="IdCard-error" aria-invalid="true">
                      @error('id_card')
                          <span id="IdCard-error" class="error invalid-feedback">
                              {{ $message }}
                          </span>
                      @enderror
                </div>
                <div class="form-group col-md-6 ">
                    <label for="phone" class="@lang('app.kh')">@lang('app.phone')</label>
                      <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror "
                          id="phone" placeholder="Enter Phone Number..." wire:model.lazy="phone"
                          aria-describedby="phone-error" aria-invalid="true">
                      @error('phone')
                          <span id="phone-error" class="error invalid-feedback">
                              {{ $message }}
                          </span>
                      @enderror
                </div>
                <div class="form-group col-md-6 ">
                    <label for="address" class="@lang('app.kh')">@lang('app.address')</label>
                      <input type="text" name="address" class="form-control @error('address') is-invalid @enderror "
                          id="address" placeholder="Enter Address..." wire:model.lazy="address"
                          aria-describedby="address-error" aria-invalid="true">
                      @error('address')
                          <span id="address-error" class="error invalid-feedback">
                              {{ $message }}
                          </span>
                      @enderror
                </div>


              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary @lang('app.kh')"> <i class="fas fa-plus mr-1"></i> @lang('app.submit')</button>
              </div>
            </form>
            <!-- /.card-footer-->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>




