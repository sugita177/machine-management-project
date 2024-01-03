<x-layouts.machine-manager>
    
    <!-- Card Section -->
    <div class="max-w-4xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    @if(session('message'))
                <div class="text-red-600 font-bold">
                    {{ session('message') }}
                </div>
            @endif
    <form method="post" action="{{ route('site.update', $site) }}">
        @csrf
        @method('patch')
        <!-- Card -->
        <div class="bg-white rounded-xl shadow dark:bg-slate-900">
            <!-- Header -->
          <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-gray-700">
            <div>
              <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200">
              搬出先現場の内容更新
              </h2>
              <p class="text-sm text-gray-600 dark:text-gray-400">
                下項目の変更箇所を修正し、更新してください
              </p>
            </div>
            <a href="{{ route('site.index') }}">
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
                        <input disabled id="name" name="name" type="text" class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" placeholder="名前" value="{{old('name', $site->name)}}">
                    </div>

                    <div class="space-y-2">
                        <label for="address" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-gray-200">
                        所在地
                        </label>
                        <x-input-error :messages="$errors->get('address')" class="mt-2" />
                        <input id="address" name="address" type="text" class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" placeholder="所在地" value="{{old('address', $site->address)}}">
                    </div>

                    <div class="space-y-2">
                        <label for="client_id" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-gray-200">
                        受注先会社名
                        </label>
                        <x-input-error :messages="$errors->get('client_id')" class="mt-2" />
                        <select id="client_id" name="client_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        @foreach($clients as $client)
                            @if($client->id == old('client_id', $site->client->id))
                                <option selected="selected" value="{{ $client->id }}">{{ $client->name }}</option>
                            @else
                                <option value="{{ $client->id }}">{{ $client->name }}</option>
                            @endif
                        @endforeach
                        </select>
                    </div>

                    <div class="space-y-2">
                        <label for="start_date" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-gray-200">
                        開始日
                        </label>
                        <x-input-error :messages="$errors->get('start_date')" class="mt-2" />
                        <input id="start_date" name="start_date" type="date" class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" placeholder="開始日" value="{{old('start_date', $site->start_date)}}">
                    </div>

                    <div class="space-y-2">
                        <label for="end_date" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-gray-200">
                        終了日
                        </label>
                        <x-input-error :messages="$errors->get('end_date')" class="mt-2" />
                        <input id="end_date" name="end_date" type="date" class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" placeholder="終了日" value="{{old('end_date', $site->end_date)}}">
                    </div>

                    <div class="space-y-2">
                        <label for="remark" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-gray-200">
                        備考
                        </label>
                        <x-input-error :messages="$errors->get('remark')" class="mt-2" />
                        <textarea id="remark" name="remark" class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" rows="6" placeholder="備考" value="{{old('remark', $site->remark)}}"></textarea>
                    </div>
                </div>

                    
                <!-- End Grid -->

                <div class="mt-5 flex justify-center gap-x-2">
                    <button type="submit" class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                        更新する
                    </button>
                </div>
            </div>
        </div>
        <!-- End Card -->
    </form>
    </div>
    <!-- End Card Section -->
</x-layouts.inventory-manager>
