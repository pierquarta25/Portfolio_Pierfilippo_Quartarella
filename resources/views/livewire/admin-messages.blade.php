<div class="admin-messages">
    {{-- Search Bar --}}
    <div class="mb-4">
        <input 
            type="text" 
            class="form-control" 
            placeholder="Cerca per nome, email o messaggio..."
            wire:model.live.debounce.300ms="search"
        >
    </div>

    {{-- Messages Table --}}
    <div class="table-responsive">
        <table class="table table-hover">
            <thead class="table-light">
                <tr>
                    <th 
                        style="cursor: pointer;" 
                        wire:click="sort('name')"
                        class="@if($sortBy === 'name') fw-bold @endif"
                    >
                        Nome 
                        @if($sortBy === 'name')
                            <i class="fa-solid fa-arrow-{{ $sortDirection === 'asc' ? 'up' : 'down' }}"></i>
                        @endif
                    </th>
                    <th 
                        style="cursor: pointer;" 
                        wire:click="sort('email')"
                        class="@if($sortBy === 'email') fw-bold @endif"
                    >
                        Email 
                        @if($sortBy === 'email')
                            <i class="fa-solid fa-arrow-{{ $sortDirection === 'asc' ? 'up' : 'down' }}"></i>
                        @endif
                    </th>
                    <th>{{ __('admin.messages.message') }}</th>
                    <th 
                        style="cursor: pointer;" 
                        wire:click="sort('created_at')"
                        class="@if($sortBy === 'created_at') fw-bold @endif"
                    >
                        Data 
                        @if($sortBy === 'created_at')
                            <i class="fa-solid fa-arrow-{{ $sortDirection === 'asc' ? 'up' : 'down' }}"></i>
                        @endif
                    </th>
                    <th>{{ __('admin.messages.actions') }}</th>
                </tr>
            </thead>
            <tbody>
                @forelse($messages as $message)
                    <tr>
                        <td class="fw-semibold">{{ $message->name }}</td>
                        <td><a href="mailto:{{ $message->email }}">{{ $message->email }}</a></td>
                        <td>
                            <small>{{ Str::limit($message->message, 60) }}</small>
                        </td>
                        <td class="text-muted small">
                            {{ $message->created_at->format('d/m/Y H:i') }}
                        </td>
                        <td>
                            <button 
                                class="btn btn-sm btn-danger"
                                wire:click="deleteMessage({{ $message->id }})"
                                wire:confirm="Sei sicuro di voler eliminare questo messaggio?"
                            >
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center text-muted py-4">
                            Nessun messaggio trovato.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    {{-- Pagination --}}
    @if($messages->hasPages())
        <nav class="d-flex justify-content-between align-items-center mt-4">
            <div class="text-muted small">
                {{ __('admin.messages.showing', ['from' => $messages->firstItem(), 'to' => $messages->lastItem(), 'total' => $messages->total()]) }}
            </div>
            
            <select class="form-select form-select-sm" style="width: auto;" wire:model.live="perPage">
                <option value="10">{{ __('admin.messages.per_page', ['count' => 10]) }}</option>
                <option value="20">{{ __('admin.messages.per_page', ['count' => 20]) }}</option>
                <option value="50">{{ __('admin.messages.per_page', ['count' => 50]) }}</option>
            </select>

            <div>
                {{ $messages->links(data: ['scrollTo' => false]) }}
            </div>
        </nav>
    @endif

    {{-- Flash Messages --}}
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show mt-3">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show mt-3">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif
</div>

@assets
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
@endassets
