<x-layouts.app>

    <header class="page-header">
        <div class="container">
            <h1 class="display-5 fw-bold mb-2">{{ __('admin.messages.title') }}</h1>
            <p class="text-muted mb-0">{{ __('admin.messages.subtitle') }}</p>
        </div>
    </header>

    <section class="section">
        <div class="container">
            @livewire('admin-messages')
        </div>
    </section>

</x-layouts.app>
