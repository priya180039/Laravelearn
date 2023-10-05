<x-guest-layout>
    <div class="container">
        <div class="grid gap-1">
            <div x-data='{open: false}' class="w-full sm:w-1/2 m-auto bg-white rounded overflow-hidden shadow-lg">
                <div class="px-6 py-4">
                    <h2 class="font-bold text-2xl mb-2">{{ $job->title }}</h2>
                    <h4 class="font-bold text-xl">Deskripsi</h4>
                    <p class="text-gray-700 text-base">{{ $job->description }}</p>
                    <h4 class="font-bold text-xl">Kualifikasi</h4>
                    <p class="text-gray-700 text-base">{{ $job->qualification }}</p>
                    <h4 class="font-bold text-xl">Lokasi</h4>
                    <p class="text-gray-700 text-base">{{ $job->location }}</p>
                    <h4 class="font-bold text-xl">Status Posting</h4>
                    <p class="text-gray-700 text-base">{{ $job->status }}</p>
                </div>
                <p class="text-center">
                    <x-secondary-button @click='open = !open' class='text-3xl'>Lamar Pekerjaan Ini</x-secondary-button>
                </p>
                <form x-show='open' class="dark:bg-slate-700 p-10">
                    <!--Nama-->
                    <div>
                        <x-input-label for="nama" value="Nama" />
                        <x-text-input id="nama" class="block mt-1 w-full" name="nama" required />
                        <x-input-error :messages="$errors->get('nama')" class="mt-2" />
                    </div>
                    <div>
                        <x-input-label for="email" value="Email" />
                        <x-text-input id="email" type='email' class="block mt-1 w-full" name="email" required />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    <div>
                        <x-input-label for="alamat" value="Alamat" />
                        <x-text-input id="alamat" class="block mt-1 w-full" name="alamat" required />
                        <x-input-error :messages="$errors->get('alamat')" class="mt-2" />
                    </div>
                    <div>
                        <x-input-label for="pendidikan" value="Pendidikan" />
                        <x-text-input id="pendidikan" class="block mt-1 w-full" name="pendidikan" required />
                        <x-input-error :messages="$errors->get('pendidikan')" class="mt-2" />
                    </div>
                    <div>
                        <x-input-label for="usia" value="Usia" />
                        <x-text-input id="usia" type='number' class="block mt-1 w-full" name="usia" required />
                        <x-input-error :messages="$errors->get('usia')" class="mt-2" />
                    </div>
                    <div class="text-center py-2">
                        <x-primary-button>Lamar</x-primary-button>
                    </div>
                </form>
                <hr />
                <div class="px-6 pt-4 pb-2 text-center">
                    <form action="{{ route('jobs.index') }}">
                        <x-primary-button>Lihat Pekerjaan Lainnya</x-primary-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
