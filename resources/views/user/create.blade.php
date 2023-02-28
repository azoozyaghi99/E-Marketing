@extends('layouts._layout')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <!--begin::Portlet-->
            <div class="m-portlet m-portlet--tab">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <span class="m-portlet__head-icon m--hide"><i class="la la-gear"></i></span>
                            <h3 class="m-portlet__head-text">اضافة جديد</h3>
                        </div>
                    </div>
                </div>
                <!--begin::Form-->
                <form method="post" action="{{ route('user.store') }}" class="m-form m-form--fit m-form--label-align-right">
                    @csrf
                    <div class="m-portlet__body">
                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-2 col-form-label">اسم المستخدم</label>
                            <div class="col-10">
                                <input class="form-control m-input" type="text" value="{{ old('name') }}"
                                       id="example-text-input" name="name">
                                @error('name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-2 col-form-label">الموبايل</label>
                            <div class="col-10">
                                <input class="form-control m-input" type="text" value="{{ old('mobile') }}"
                                       id="example-text-input" name="mobile">
                                @error('mobile')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-2 col-form-label">الايميل</label>
                            <div class="col-10">
                                <input class="form-control m-input" type="text" value="{{ old('email') }}"
                                       id="example-text-input" name="email">
                                @error('email')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-2 col-form-label"> كلمة المرور</label>
                            <div class="col-10">
                                <input class="form-control m-input" type="text" value="{{ old('password') }}"
                                       id="example-text-input" name="password">
                                @error('password')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="m-portlet__foot m-portlet__foot--fit">
                        <div class="m-form__actions">
                            <div class="row">
                                <div class="col-2">
                                </div>
                                <div class="col-10">
                                    <button type="submit" class="btn btn-success">حفظ</button>
                                    <a href="{{ route('user.index') }}" class="btn btn-secondary">رجوع</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!--end::Form-->
            </div>
            <!--end::Portlet-->
        </div>
    </div>
@endsection
