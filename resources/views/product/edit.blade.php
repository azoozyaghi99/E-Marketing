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
                            <h3 class="m-portlet__head-text">تعديل منتج</h3>
                        </div>
                    </div>
                </div>
                <!--begin::Form-->
                <form method="post" action="{{ route('product.update',$product->id) }}" class="m-form m-form--fit m-form--label-align-right">
                    @csrf
                    @method('put')
                    <div class="m-portlet__body">
                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-2 col-form-label">اسم المنتج</label>
                            <div class="col-10">
                                <input class="form-control m-input" type="text" value="{{ $product->name }}"
                                       id="example-text-input" name="name">
                                @error('name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-2 col-form-label">اسم التصنيف</label>
                            <div class="col-10">
                                <select name="category_id" class="form-control m-input" id="exampleSelect1">
                                    @forelse($categories as $category)
                                        <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' :'' }}>{{ $category->name }}</option>
                                    @empty
                                    @endforelse
                                </select>
                                @error('category_id')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label for="example-number-input" class="col-2 col-form-label">السعر</label>
                            <div class="col-10">
                                <input name="price" class="form-control m-input" type="number" value="{{ $product->price }}" id="example-number-input">
                                @error('price')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label for="example-number-input" class="col-2 col-form-label">السعر بعد الخصم</label>
                            <div class="col-10">
                                <input name="offer_price" class="form-control m-input" type="number" value="{{ $product->offer_price }}" id="example-number-input">
                                @error('offer_price')
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
                                    <a href="{{ route('product.index') }}" class="btn btn-secondary">رجوع</a>
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