<x-app-layout>
<div class="container">
    <h1>{{ $course->title }}</h1>
    <p>{{ $course->description }}</p>
    <p><strong>Language:</strong> {{ $course->language }}</p>
    <a href="{{ route('courses.index') }}" class="btn btn-secondary">Back to Courses</a>
</div>
</x-app-layout>