<?php

namespace App\Orchid\Screens;

use Orchid\Screen\Screen;
use Orchid\Screen\Actions\Link;
use Orchid\Support\Facades\Layout;
use App\Models\Course;

class CourseScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Courses Screen';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = 'Manage courses';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [
            'courses' => Course::all(),
        ];
    }

    /**
     * Button commands.
     *
     * @return array
     */
    public function commandBar(): array
    {
        return [
            Link::make('Create')
                ->icon('plus')
                ->route('platform.courses.create'),
        ];
    }

    /**
     * Views.
     *
     * @return array
     */
    public function layout(): array
    {
        return [
            Layout::table('courses', [
                'ID' => 'id',
                'Title' => 'title',
                'Language' => 'language',
            ]),
        ];
    }
}
