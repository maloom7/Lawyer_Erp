@extends('layouts.app')

@section('content')
<div class="container">
    <h1>إدارة القضايا</h1>

    <a href="{{ route('kases.create') }}" class="btn btn-primary">إضافة قضية جديدة</a>

    <table>
        <thead>
            <tr>
                <th>رقم القضية</th>
                <th>اسم العميل</th>
                <th>نوع القضية</th>
                <th>تاريخ البدء</th>
                <th>الإجراءات</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kases as $kase)
            <tr>
                <td>{{ $kase->kase_number }}</td>
                <td>{{ $kase->client_name }}</td>
                <td>{{ $kase->kase_type }}</td>
                <td>{{ $kase->start_date }}</td>
                <td>
                    <a href="{{ route('kases.show', $kase->id) }}">عرض</a> |
                    <a href="{{ route('kases.edit', $kase->id) }}">تعديل</a> |
                    <form action="{{ route('kases.destroy', $kase->id) }}" method="POST" style="display:inline;">
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
