<x-guest-layout>
    <div class="container">
        <div class="grid gap-1">
            <div class="w-full sm:w-1/2 m-auto bg-white rounded overflow-hidden shadow-lg">
                <div class="px-6 py-4">
                    <h2 class="font-bold text-2xl mb-2">{{ $job->title }}</h2>
                    <h4 class="font-bold text-xl">Deskripsi</h4>
                    <p class="text-gray-700 text-base">{{ $job->description }}</p>
                    <h4 class="font-bold text-xl">Kualifikasi</h4>
                    <p class="text-gray-700 text-base">{{ $job->qualification }}</p>
                </div>
                <div class="px-6 pt-4 pb-2">
                    <form action="{{ route('jobs.index') }}">
                        <x-primary-button>Lihat Pekerjaan Lainnya</x-primary-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
