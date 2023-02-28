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
                            <h3 class="m-portlet__head-text">عرض الطلبات</h3>
                        </div>
                    </div>
                </div>
                <!--begin::Form-->
                    <div class="m-portlet__body">
                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-2 col-form-label">اسم المستخدم</label>
                            <div class="col-10">
                                <input class="form-control m-input" type="text" value="{{ $order->user->name }}"
                                       id="example-text-input" name="user_id">
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-2 col-form-label">اسم السائق</label>
                            <div class="col-10">
                                <input class="form-control m-input" type="text" value="{{ $order->driver->name }}"
                                       id="example-text-input" name="category_id">
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label for="example-number-input" class="col-2 col-form-label">سعر المنتجات</label>
                            <div class="col-10">
                                <input name="price" class="form-control m-input" type="number" value="{{ $order->total }}" id="example-number-input">
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label for="example-number-input" class="col-2 col-form-label">قيمة الضريبة</label>
                            <div class="col-10">
                                <input name="offer_price" class="form-control m-input" type="number" value="{{ $order->tax_price }}" id="example-number-input">
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label for="example-number-input" class="col-2 col-form-label">سعر التوصيل</label>
                            <div class="col-10">
                                <input name="offer_price" class="form-control m-input" type="number" value="{{ $order->deilviry_price }}" id="example-number-input">
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label for="example-number-input" class="col-2 col-form-label">الاجمالي</label>
                            <div class="col-10">
                                <input name="offer_price" class="form-control m-input" type="number" value="{{ $order->final_total }}" id="example-number-input">
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label for="example-number-input" class="col-2 col-form-label">الحالة</label>
                            <div class="col-10">
                                <input name="offer_price" class="form-control m-input" type="number" value="{{ $order->status }}" id="example-number-input">
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label for="example-number-input" class="col-2 col-form-label">منتجات الطلبات</label>
                        </div>
                        <div class="form-group m-form__group row">
                            <table class="table table-striped- table-bordered table-hover table-checkable" id="m_table_1">
                                <thead>
                                <tr>
                                    <th>##</th>
                                    <th>اسم المستخدم</th>
                                    <th>اسم السائق</th>
                                    <th>الاجمالي</th>
                                    <th>الحالة</th>
                                    <th>تاريخ الانشاء</th>
                                    <th>العمليات</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($order_products as $item)
                                    <tr>
                                        <td>{{ $loop->index +1 }}</td>
                                        <td>{{ @$item->$product->name }}</td>
                                        <td>{{ $item->price }}</td>
                                        <td>{{ $item->qty }}</td>
                                        <td>{{ $item->notes }}</td>
                                    </tr>
                                @empty
                                @endforelse
                                </tbody>
                            </table>
                            {{$order_products->links()}}
                        </div>
                    </div>
                    <div class="m-portlet__foot m-portlet__foot--fit">
                        <div class="m-form__actions">
                            <div class="row">
                                <div class="col-2">
                                </div>
                                <div class="col-10">
                                    <a href="{{ route('order.index') }}" class="btn btn-secondary">رجوع</a>
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