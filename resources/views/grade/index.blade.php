@extends('template.master')
@section('content')
    <form action="{{ url('grade-store') }}" method="post">
        @csrf
        <label for="simbol">simbol</label>
        <input type="text" name="simbol">
        <label for="max-speed">max-speed</label>
        <input type="number" name="max_speed">
        <button type="submit">Kirim</button>
    </form>

    <div class="container-table">
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>#</th>
                <th>simbol</th>
                <th>max_speed</th>
                <th>aksi</th>
            </tr>
            @foreach ($data as $row)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $row->simbol }}</td>
                <td>{{ $row->max_speed }}</td>
                <td><a href="">Edit</a> | <a href="">Hapus</a></td>
            </tr>
            @endforeach
            
        </table>
    </div>
@endsection
