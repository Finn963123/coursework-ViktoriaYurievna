<x-app-layout>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-gray-700">Курсы</h1>
                <a href="{{ route('courses.create') }}" class="btn btn-outline-primary mb-3">Добавить новый курс</a>
                <table class="table table-borderless table-hover">
                    <thead class="thead-light">
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Language</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($courses as $course)
                        <tr>
                            <td>{{ $course->id }}</td>
                            <td>{{ $course->title }}</td>
                            <td>{{ $course->language }}</td>
                            <td>
                                <a href="{{ route('courses.show', $course->id) }}" class="btn btn-outline-info btn-sm">Посмотреть</a>
                                <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-outline-warning btn-sm">Изменить</a>
                                <form action="{{ route('courses.destroy', $course->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger btn-sm">Удалить</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>

<style>
    body {
        background-color: #f7f7f7;
        color: #4a4a4a;
        font-family: Arial, sans-serif;
    }
    .container {
        background-color: #ffffff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .table-borderless tbody+tbody {
        border-top: none;
    }
    .table-hover tbody tr:hover {
        background-color: #f0f0f0;
    }
    .thead-light th {
        background-color: #e9ecef;
    }
    .btn-outline-primary, .btn-outline-info, .btn-outline-warning, .btn-outline-danger {
        border-width: 2px;
    }
</style>
