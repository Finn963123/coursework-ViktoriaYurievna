<?php

namespace App\Orchid\Screens;

use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use App\Models\Course;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\TD;

class CourseListScreen extends Screen
{
    public function query(): iterable
    {
        return [
            'courses' => Course::paginate()
        ];
    }

    public function name(): ?string
    {
        return 'Courses';
    }

    public function commandBar(): iterable
    {
        return [
            Link::make('Create')
                ->icon('plus')
                ->route('platform.course.create')
        ];
    }

    public function layout(): iterable
    {
        return [
            Layout::table('courses', [
                TD::make('id'),
                TD::make('title', 'Title'),
                TD::make('language', 'Language'),
                TD::make('created_at', 'Created'),
                TD::make('updated_at', 'Updated'),
            ])
        ];
    }
}
