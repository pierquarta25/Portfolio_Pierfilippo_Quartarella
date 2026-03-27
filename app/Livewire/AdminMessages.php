<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\ContactMessage;

class AdminMessages extends Component
{
    use WithPagination;

    public string $search = '';
    public string $sortBy = 'created_at';
    public string $sortDirection = 'desc';
    public int $perPage = 10;

    protected $queryString = ['search', 'sortBy', 'sortDirection', 'perPage'];

    public function updated($propertyName): void
    {
        if ($propertyName === 'search' || $propertyName === 'sortBy' || $propertyName === 'sortDirection') {
            $this->resetPage();
        }
    }

    public function deleteMessage($id): void
    {
        try {
            ContactMessage::destroy($id);
            session()->flash('success', __('admin.message_deleted'));
        } catch (\Exception $e) {
            session()->flash('error', __('admin.error_deleting'));
        }
    }

    public function sort($column): void
    {
        $this->sortBy = $column;
        $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
    }

    public function render()
    {
        $messages = ContactMessage::query()
            ->when($this->search, function ($query) {
                $query->where('name', 'like', "%{$this->search}%")
                    ->orWhere('email', 'like', "%{$this->search}%")
                    ->orWhere('message', 'like', "%{$this->search}%");
            })
            ->orderBy($this->sortBy, $this->sortDirection)
            ->paginate($this->perPage);

        return view('livewire.admin-messages', [
            'messages' => $messages,
        ]);
    }
}
