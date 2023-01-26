<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mt-2">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded" href="">Join lobby</a>
                    <a class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded" href="">Create lobby</a>
                </div>
                <div class="flex justify-center">
                    <div id="board" style="width: 700px"></div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script>

        </script>
    @endpush
</x-app-layout>
