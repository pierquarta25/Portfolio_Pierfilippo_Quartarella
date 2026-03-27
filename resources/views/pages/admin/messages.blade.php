<x-layouts.app>

    <header class="page-header">
        <div class="container">
            <h1 class="display-5 fw-bold mb-2">{{ __('admin.messages.title') }}</h1>
            <p class="text-muted mb-0">{{ __('admin.messages.subtitle') }}</p>
        </div>
    </header>

    <section class="section">
        <div class="container">
            @if ($messages->isEmpty())
                <div class="alert alert-light border text-center">{{ __('admin.messages.empty') }}</div>
            @else
                <div class="table-responsive">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th>{{ __('admin.messages.name') }}</th>
                                <th>{{ __('admin.messages.email') }}</th>
                                <th>{{ __('admin.messages.message') }}</th>
                                <th>{{ __('admin.messages.date') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($messages as $msg)
                                <tr>
                                    <td>{{ $msg->name ?? '—' }}</td>
                                    <td>{{ $msg->email }}</td>
                                    <td style="max-width: 480px;">{{ $msg->message }}</td>
                                    <td>{{ $msg->created_at?->format('d/m/Y H:i') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </section>

</x-layouts.app>
