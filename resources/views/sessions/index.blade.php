@extends('layouts.app')

@section('content')
<div class="container">
    <h1>إدارة الجلسات</h1>

    <a href="{{ route('sessions.create') }}" class="btn btn-primary">إضافة جلسة جديدة</a>

    <table>
        <thead>
            <tr>
                <th>رقم الجلسة</th>
                <th>رقم القضية</th>
                <th>تاريخ الجلسة</th>
                <th>وصف الجلسة</th>
                <th>الإجراءات</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sessions as $session)
            <tr>
                <td>{{ $session->session_number }}</td>
                <td>{{ $session->case_number }}</td>
                <td>{{ $session->date }}</td>
                <td>{{ $session->description }}</td>
                <td>
                    <a href="{{ route('sessions.show', $session->id) }}">عرض</a> |
                    <a href="{{ route('sessions.edit', $session->id) }}">تعديل</a> |
                    <form action="{{ route('sessions.destroy', $session->id) }}" method="POST">
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
