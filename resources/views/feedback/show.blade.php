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
                            <h3 class="m-portlet__head-text">عرض اراء العملاء</h3>
                        </div>
                    </div>
                </div>
                <!--begin::Form-->
                    <div class="m-portlet__body">
                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-2 col-form-label">اسم المنتج</label>
                            <div class="col-10">
                                <input class="form-control m-input" type="text" value="{{ $feedback->product->name }}"
                                       id="example-text-input" name="product_id">
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-2 col-form-label">اسم العميل</label>
                            <div class="col-10">
                                <input class="form-control m-input" type="text" value="{{ $feedback->user->name }}"
                                       id="example-text-input" name="user_id">
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label for="example-number-input" class="col-2 col-form-label">الملاحظات</label>
                            <div class="col-10">
                                <textarea class="form-control m-input m-input--air" id="exampleTextarea" name="notes" disabled rows="3">{{ $feedback->notes }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="m-portlet__foot m-portlet__foot--fit">
                        <div class="m-form__actions">
                            <div class="row">
                                <div class="col-2">
                                </div>
                                <div class="col-10">
                                    <a href="{{ route('feedback.index') }}" class="btn btn-secondary">رجوع</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <!--end::Form-->
            </div>
            <!--end::Portlet-->
        </div>
    </div>
@endsection