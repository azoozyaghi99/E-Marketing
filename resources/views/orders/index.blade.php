@extends('layouts._layout')

@section('content')
    <div class="m-portlet m-portlet--mobile">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        ادراة الطلبات
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
                    <th>اسم المستخدم</th>
                    <th>اسم السائق</th>
                    <th>الاجمالي</th>
                    <th>الحالة</th>
                    <th>تاريخ الانشاء</th>
                    <th>العمليات</th>
                </tr>
                </thead>
                <tbody>
                @forelse($orders as $order)
                <tr>
                    <td>{{ $loop->index +1 }}</td>
                    <td>{{ @$order->user->name }}</td>
                    <td>{{ @$order->driver->name }}</td>
                    <td>{{ $order->final_total }}</td>
                    <td>{{ $order->StatusText($order->status) }}</td>
                    <td>{{ $order->created_at }}</td>
                    <td>
                        <a href="{{ route('order.show',$order->id) }}" class="btn btn-warning m-btn m-btn--icon m-btn--icon-only">
                            <i class="fa fa-list"></i>
                        </a>
                        <form action="{{ route('order.update',['id',$order->id,'order_status'=>'accept']) }}" method="post">
                            @csrf
                            @method('put')
                            <button class="btn btn-danger m-btn m-btn--icon m-btn--icon-only" type="submit">
                                <i class="fa fa-recycle"></i>
                            </button>
                        </form>
                        <form action="{{ route('order.update',['id',$order->id,'order_status'=>'reject']) }}" method="post">
                            @csrf
                            @method('put')
                            <button class="btn btn-danger m-btn m-btn--icon m-btn--icon-only" type="submit">
                                <i class="fa fa-recycle"></i>
                            </button>
                        </form>
                        <form action="{{ route('order.destroy',$order->id) }}" method="post">
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
            {{$orders->links()}}
        </div>
    </div>
@endsection