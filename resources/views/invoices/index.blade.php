@extends('layouts.app')

@section('content')
<div class="container">
    <h1>إدارة الفواتير</h1>

    <a href="{{ route('invoices.create') }}" class="btn btn-primary">إصدار فاتورة جديدة</a>

    <table>
        <thead>
            <tr>
                <th>رقم الفاتورة</th>
                <th>اسم العميل</th>
                <th>المبلغ</th>
                <th>تاريخ الإصدار</th>
                <th>الإجراءات</th>
            </tr>
        </thead>
        <tbody>
            @foreach($invoices as $invoice)
            <tr>
                <td>{{ $invoice->invoice_number }}</td>
                <td>{{ $invoice->client_name }}</td>
                <td>{{ $invoice->amount }}</td>
                <td>{{ $invoice->issue_date }}</td>
                <td>
                    <a href="{{ route('invoices.show', $invoice->id) }}">عرض</a> |
                    <a href="{{ route('invoices.edit', $invoice->id) }}">تعديل</a> |
                    <form action="{{ route('invoices.destroy', $invoice->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">حذف</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
