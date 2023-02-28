@extends('layouts._layout')

@section('content')
    <div class="m-portlet m-portlet--mobile">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        ادراة التصنيفات
                    </h3>
                </div>
            </div>
            <div class="m-portlet__head-tools">
                <ul class="m-portlet__nav">
                    <li class="m-portlet__nav-item">
                        <a href="{{ route('category.create') }}" class="btn btn-accent m-btn m-btn--custom m-btn--pill m-btn--icon m-btn--air">
                            <span><i class="la la-plus"></i><span>اضافة جديدة</span></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="m-portlet__body">
            <!--begin: Datatable -->
            <table class="table table-striped- table-bordered table-hover table-checkable" id="m_table_1">
                <thead>
                <tr>
                    <th>##</th>
                    <th>الاسم</th>
                    <th>تاريخ الانشاء</th>
                    <th>العمليات</th>
                </tr>
                </thead>
                <tbody>

                @forelse($categories as $category)
                <tr>
                    <td>{{ $loop->index +1 }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->created_at }}</td>
                    <td>
                        <a href="{{ route('category.show',$category->id) }}" class="btn btn-warning m-btn m-btn--icon m-btn--icon-only">
                            <i class="fa fa-list"></i>
                        </a>
                        <a href="{{ route('category.edit',$category->id) }}" class="btn btn-primary m-btn m-btn--icon m-btn--icon-only">
                            <i class="fa fa-pencil"></i>
                        </a>
                        <form action="{{ route('category.destroy',$category->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger m-btn m-btn--icon m-btn--icon-only" type="submit">
                                <i class="fa fa-recycle"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                @endforelse
                </tbody>
            </table>
            {{$categories->links()}}
        </div>
    </div>
@endsection
