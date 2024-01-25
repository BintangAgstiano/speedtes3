@extends('template.master')
@section('content')
    <form action="{{ url('train-store') }}" method="post">
        @csrf
        <select name="grade_id" id="">
            @foreach ($data['queryGrade'] as $item)
                <option value="{{ $item['id'] }}">{{ $item['max_speed'] }}</option>
            @endforeach
        </select>
        <label for="name">name</label>
        <input type="text" name="name">
        <button type="submit">Kirim</button>
    </form>

    <div class="container-table">
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>#</th>
                <th>id_grade</th>
                <th>name</th>
                <th>aksi</th>
            </tr>
            <th>
                @foreach ($data['query'] as $row)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $row->grade_id }}</td>
                        <td>{{ $row->name }}</td>
                    </tr>
                @endforeach

            </th>
        </table>
    </div>
@endsection
