<?php

namespace App\Orchid\Screens;

use Orchid\Screen\Screen;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Input;
use Orchid\Support\Facades\Layout;

class ProgressScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'ProgressScreen';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = 'Progress Screen';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [
            // Данные для отображения
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
                ->route('platform.progress.create'),
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
            Layout::table('progress', [
                'ID' => 'id',
                'Course' => 'course',
                'Progress' => 'progress',
            ]),
        ];
    }
}