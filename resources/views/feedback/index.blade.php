@extends('layouts._layout')

@section('content')
    <div class="m-portlet m-portlet--mobile">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        ادراة اراء العملاء
                    </h3>
                </div>
            </div>
        </div>
        <div class="m-portlet__body">
            <!--begin: Datatable -->
            <table class="table table-striped- table-bordered table-hover table-checkable" id="m_table_1">
                <thead>
                <tr>
                    <th>##</th>
                    <th>اسم المنتج</th>
                    <th>اسم العميل</th>
                    <th>الملاحظة</th>
                    <th>تاريخ الانشاء</th>
                    <th>العمليات</th>
                </tr>
                </thead>
                <tbody>
                @forelse($feedbacks as $feedback)
                <tr>
                    <td>{{ $loop->index +1 }}</td>
                    <td>{{ @$feedback->product->name }}</td>
                    <td>{{ @$feedback->user->name }}</td>
                    <td>{{ $feedback->notes }}</td>
                    <td>{{ $feedback->created_at }}</td>
                    <td>
                        <a href="{{ route('feedback.show',$feedback->id) }}" class="btn btn-warning m-btn m-btn--icon m-btn--icon-only">
                            <i class="fa fa-list"></i>
                        </a>
                        <form action="{{ route('feedback.destroy',$feedback->id) }}" method="post">
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
            {{$feedbacks->links()}}
        </div>
    </div>
@endsection