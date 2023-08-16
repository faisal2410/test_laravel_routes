

    <!-- Page Content -->
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <!-- Your content here -->
                <ul>
                    @foreach ($tasks as $task)
                        <li>{{ $task->title }} - {{ $task->is_completed ? 'Completed' : 'Not Completed' }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

