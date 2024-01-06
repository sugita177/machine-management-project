<x-layouts.machine-manager>
    
    <!-- Card Section -->
    <div class="max-w-4xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    @if(session('message'))
                <div class="text-red-600 font-bold">
                    {{ session('message') }}
                </div>
            @endif
    <form method="post" action="{{ route('situation.update', $situation) }}">
        @csrf
        @method('patch')
        <!-- Card -->
        <div class="bg-white rounded-xl shadow dark:bg-slate-900">
            <!-- Header -->
          <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-gray-700">
            <div>
              <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200">
                在庫管理対象物品の内容更新
              </h2>
              <p class="text-sm text-gray-600 dark:text-gray-400">
                下項目の変更箇所を修正し、更新してください
              </p>
            </div>
            <a href="{{ route('situation.index') }}">
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
                        <label for="machine_id" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-gray-200">
                        建設機械名
                        </label>
                        <x-input-error :messages="$errors->get('machine_id')" class="mt-2" />
                        <select disabled id="machine_id" name="machine_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        @foreach($machines as $machine)
                            @if($machine->id == old('machine_id', $situation->machine->id))
                                <option selected="selected" value="{{ $machine->id }}">{{ $machine->name }}</option>
                            @else
                                <option value="{{ $machine->id }}">{{ $machine->name }}</option>
                            @endif
                        @endforeach
                        </select>
                    </div>

                    <div class="space-y-2">
                        <label for="state_id" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-gray-200">
                        状態
                        </label>
                        <x-input-error :messages="$errors->get('state_id')" class="mt-2" />
                        <select id="state_id" name="state_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        @foreach($states as $state)
                            @if($state->id == old('state_id', $situation->state->id))
                                <option selected="selected" value="{{ $state->id }}">{{ $state->name }}</option>
                            @else
                                <option value="{{ $state->id }}">{{ $state->name }}</option>
                            @endif
                        @endforeach
                        </select>
                    </div>

                    <div class="space-y-2">
                        <label for="location_id" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-gray-200">
                        場所
                        </label>
                        <x-input-error :messages="$errors->get('location_id')" class="mt-2" />
                        <select id="location_id" name="location_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        @foreach($locations as $location)
                            @if($location->id == old('location_id', $situation->location->id))
                                <option selected="selected" value="{{ $location->id }}">{{ $location->name }}</option>
                            @else
                                <option value="{{ $location->id }}">{{ $location->name }}</option>
                            @endif
                        @endforeach
                        </select>
                    </div>

                    <div class="space-y-2">
                        <label for="site_id" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-gray-200">
                        現場名
                        </label>
                        <x-input-error :messages="$errors->get('site_id')" class="mt-2" />
                        <select id="site_id" name="site_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="-1">なし</option>
                        @foreach($sites as $site)
                            @if(isset($situation->site) && $site->id == old('site_id', $situation->site->id))
                                <option selected="selected" value="{{ $site->id }}">{{ $site->name }}</option>
                            @else
                                <option value="{{ $site->id }}">{{ $site->name }}</option>
                            @endif
                        @endforeach
                        </select>
                    </div>

                    <div class="space-y-2">
                        <label for="start_date" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-gray-200">
                        開始日
                        </label>
                        <x-input-error :messages="$errors->get('start_date')" class="mt-2" />
                        <input id="model_numer" name="start_date" type="date" class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" placeholder="開始日" value="{{old('start_date', $situation->start_date)}}">
                    </div>

                    <div class="space-y-2">
                        <label for="end_date" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-gray-200">
                        完了日
                        </label>
                        <x-input-error :messages="$errors->get('end_date')" class="mt-2" />
                        <input id="model_numer" name="end_date" type="date" class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" placeholder="完了日" value="{{old('end_date', $situation->end_date)}}">
                    </div>

                    <div class="space-y-2">
                        <label for="stuff" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-gray-200">
                        担当者
                        </label>
                        <x-input-error :messages="$errors->get('stuff')" class="mt-2" />
                        <input id="model_numer" name="stuff" type="text" class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" placeholder="担当者" value="{{old('stuff', $situation->stuff)}}">
                    </div>

                    

                    <div class="space-y-2">
                        <label for="remark" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-gray-200">
                        備考
                        </label>
                        <x-input-error :messages="$errors->get('remark')" class="mt-2" />
                        <textarea id="remark" name="remark" class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" rows="6" placeholder="備考" value="{{old('remark', $situation->remark)}}"></textarea>
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
