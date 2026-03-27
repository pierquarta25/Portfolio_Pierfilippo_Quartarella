<?php

namespace App\Livewire;

use Livewire\Component;

class ProjectsFilter extends Component
{
    public string $search = '';
    public string $tag = '';

    // Mock projects data (in produzione, verrebbe da DB)
    private array $projects = [
        ['id' => 1, 'title' => 'TechZone', 'tags' => ['UI', 'Bootstrap', 'JS'], 'route' => 'projects.techzone'],
        ['id' => 2, 'title' => 'Sito d\'arte', 'tags' => ['Design', 'UX', 'Brand'], 'route' => 'projects.art'],
        ['id' => 3, 'title' => 'Progetto RED', 'tags' => ['Landing', 'CSS', 'UX'], 'route' => 'projects.red'],
    ];

    public function updated($propertyName): void
    {
        // Real-time filtering on input change
    }

    public function render()
    {
        $filtered = collect($this->projects)
            ->when($this->search, function ($collection) {
                return $collection->filter(fn($item) => 
                    str_contains(strtolower($item['title']), strtolower($this->search))
                );
            })
            ->when($this->tag, function ($collection) {
                return $collection->filter(fn($item) => 
                    in_array($this->tag, $item['tags'])
                );
            });

        $allTags = collect($this->projects)
            ->pluck('tags')
            ->flatten()
            ->unique()
            ->sort();

        return view('livewire.projects-filter', [
            'projects' => $filtered,
            'tags' => $allTags,
            'projectsCount' => $filtered->count(),
        ]);
    }
}
