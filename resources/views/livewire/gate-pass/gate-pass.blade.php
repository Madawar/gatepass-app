<div>
    <div class="flex flex-col md:flex-row p-2 md:space-x-3 w-full">
        <div class="flex-auto">
            <x-forms.input label="Your Name:" livewire=true placeholder="Your Name:" name="name_of_requester"
                model="{!! $pass ?? null !!}" />
        </div>

        <div class="flex-auto">
            <x-forms.input label="Vehicle Registration or Rider Picking:" livewire=true
                placeholder="Vehicle Registration or Rider Picking" name="vehicle_registration"
                model="{!! $pass ?? null !!}" />
        </div>

    </div>
    <div class="border border-gray-300 m-1 shadow-inner">
        <div
            class="border-b border-gray-300 shadow-xl p-2 leading-loose text-center uppercase font-semibold  bg-gray-500 text-white">
            Please Enter Your Items



        </div>
        <div class="divide-y divide-gray-300">
        @foreach ($items as $key => $item)

        <div class="flex flex-col md:flex-row pl-2 pr-2  md:space-x-3 w-full">
            <div class="flex-auto md:w-1">
                <x-forms.input label="Quantity:" placeholder="Quantity" name="items.{{$key}}.qty" model="{!! $pass ?? null !!}"
                    livewire=true />
            </div>

            <div class="flex-auto">
                <x-forms.input label="Item Description:" placeholder="Item Description" name="items.{{$key}}.item_description"
                    model="{!! $pass ?? null !!}" />
            </div>
            <div class="flex-auto">
                <x-forms.input label="Item Serial:" placeholder="Item Serial" name="items.{{$key}}.serial"
                    model="{!! $pass ?? null !!}" />
            </div>

        </div>

        @endforeach
    </div>
        <div class="">
            <div class="flex justify-center ">
                <div class="animate-spin rounded-full h-10 w-10 border-b-2 border-red-500 mt-2" wire:loading></div>
                <button class="btn btn-circle m-1" wire:click="$emit('add_item')">
                    <svg xmlns="http://www.w3.org/2000/svg" class="inline-block w-4 h-4 stroke-current md:w-6 md:h-6"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>


                </button>
            </div>

        </div>
    </div>

    <div class="border border-gray-300 m-1 shadow-inner">
        <div
            class="border-b border-gray-300 shadow-xl p-2 leading-loose text-center uppercase font-semibold  bg-gray-500 text-white">
            Please Enter Your Signatories



        </div>
        <div class="divide-y divide-gray-300 ">
            <div class="flex flex-col md:flex-row p-2 md:space-x-3 w-full">
                <div class="flex-auto text-center  leading-loose text-center uppercase font-semibold">
                  Name Of Signatory
                </div>

                <div class="flex-auto text-center  leading-loose text-center uppercase font-semibold">
                    Level Of Authorization
                </div>


            </div>

            @foreach ($authorizations  as $key=>$authorization)

            <div class="flex flex-col md:flex-row p-2 md:space-x-3 w-full">
                <div class="flex-auto">
                    <x-forms.input label="" placeholder="Level" name="authorizations.{{$key}}.level"
                        model="{!! $pass ?? null !!}"  disabled />
                </div>

                <div class="flex-auto ">
                    <x-forms.input label="" placeholder="Name Of Signatory" name="authorizations.{{$key}}.name" model="{!! $pass ?? null !!}" />
                </div>




            </div>

            @endforeach

        </div>

    </div>

    <div class="heading border-b p-3 border-gray-100 border-opacity-90 filter md:drop-shadow-sm ">
        <div class="flex justify-center ">
            <div class="animate-spin rounded-full h-10 w-10 border-b-2 border-red-500 mt-2" wire:loading></div>
            <button class="btn btn-primary btn-block m-1" wire:click="savePass">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4" />
                  </svg>
                  Save


            </button>
        </div>

    </div>

</div>
