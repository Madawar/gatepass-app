<div class="flex flex-col md:flex-row pl-2 pr-2  md:space-x-3 w-full">
    <div class="flex-auto md:w-1">
        <x-forms.input label="Quantity:" placeholder="Quantity" name="item.qty" model="{!! $pass ?? null !!}"
            livewire=true />
    </div>

    <div class="flex-auto">
        <x-forms.input label="Item Description:" placeholder="Item Description" name="item.item_description"
            model="{!! $pass ?? null !!}" />
    </div>
    <div class="flex-auto">
        <x-forms.input label="Item Serial:" placeholder="Item Serial" name="item.serial"
            model="{!! $pass ?? null !!}" />
    </div>

</div>
