<x-layouts.machine-manager>
    
    <!-- Card Section -->
    <div class="max-w-4xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        
    @if(session('message'))
                <div class="text-red-600 font-bold">
                    {{ session('message') }}
                </div>
            @endif
    <form method="post" action="{{ route('machine.store') }}">
        @csrf
        <!-- Card -->
        <div class="bg-white rounded-xl shadow dark:bg-slate-900">
            <!-- Header -->
          <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-gray-700">
            <div>
              <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200">
                建設機械の新規登録
              </h2>
              <p class="text-sm text-gray-600 dark:text-gray-400">
                下項目を入力し、登録してください
              </p>
            </div>
            <a href="{{ route('machine.index') }}">
                    <button type="button" class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
                        一覧画面へ
                    </button>
            </a>

            
          </div>
          <!-- End Header -->
            <div class="pt-0 p-4 sm:pt-0 sm:p-7">
                <!-- Grid -->
                <div class="space-y-4 sm:space-y-6">
                    <div class="space-y-2">
                        <label for="name" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-gray-200">
                        名前
                        </label>
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        <input id="name" name="name" type="text" class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" placeholder="名前" value="{{old('name')}}">
                    </div>

                    <div class="space-y-2">
                        <label for="manufacturer_id" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-gray-200">
                        メーカー
                        </label>
                        <x-input-error :messages="$errors->get('manufacturer_id')" class="mt-2" />
                        <select id="manufacturer_id" name="manufacturer_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        @foreach($manufacturers as $manufacturer)
                            <option value="{{ $manufacturer->id }}">{{ $manufacturer->name }}</option>
                        @endforeach
                        </select>
                    </div>

                    <div class="space-y-2">
                        <label for="model_number" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-gray-200">
                        型番
                        </label>
                        <x-input-error :messages="$errors->get('model_number')" class="mt-2" />
                        <input id="model_numer" name="model_number" type="text" class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" placeholder="型番" value="{{old('model_number')}}">
                    </div>

                    <div class="space-y-2">
                        <label for="remark" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-gray-200">
                        備考
                        </label>
                        <x-input-error :messages="$errors->get('remark')" class="mt-2" />
                        <textarea id="remark" name="remark" class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" rows="6" placeholder="備考" value="{{old('remark')}}"></textarea>
                    </div>
                </div>
                <!-- End Grid -->

                <div class="mt-5 flex justify-center gap-x-2">
                    
                    <button type="submit" class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                        登録する
                    </button>
                </div>
            </div>
        </div>
        <!-- End Card -->
    </form>
    </div>
    <!-- End Card Section -->
</x-layouts.inventory-manager>
