<?php

namespace App\Livewire;

use Livewire\Component;

class BlogFilter extends Component
{
    public string $search = '';
    public string $category = '';

    // Mock articles data (in produzione, verrebbe da DB)
    private array $articles = [
        ['id' => 1, 'title' => 'UX Design Best Practices', 'category' => 'UX', 'route' => 'blog.ux'],
        ['id' => 2, 'title' => 'React 2026: What\'s New', 'category' => 'Frontend', 'route' => 'blog.react'],
        ['id' => 3, 'title' => 'Bootstrap vs Tailwind', 'category' => 'CSS', 'route' => 'blog.frameworks'],
    ];

    public function updated($propertyName): void
    {
        // Real-time filtering on input change
    }

    public function render()
    {
        $filtered = collect($this->articles)
            ->when($this->search, function ($collection) {
                return $collection->filter(fn($item) => 
                    str_contains(strtolower($item['title']), strtolower($this->search))
                );
            })
            ->when($this->category, function ($collection) {
                return $collection->filter(fn($item) => $item['category'] === $this->category);
            });

        $categories = collect($this->articles)
            ->pluck('category')
            ->unique()
            ->sort();

        return view('livewire.blog-filter', [
            'articles' => $filtered,
            'categories' => $categories,
            'articlesCount' => $filtered->count(),
        ]);
    }
}
