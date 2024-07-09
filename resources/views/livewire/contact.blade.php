<div class=" p-10">

    <form wire:submit.prevent='save' >
        <x-input placeholder='Name' type='text' wire:model='user_name'/>
        @error('user_name')
        <x-message>{{ $message }}</x-message>
        @enderror


        <x-input placeholder='Email' type='text' wire:model='user_email'/>
        @error('user_email')
        <x-message>{{ $message }}</x-message>
        @enderror


        <x-input placeholder='Password' type='text' wire:model='user_password'/>
        @error('user_password')
        <x-message>{{ $message }}</x-message>
        @enderror
    </form>


    <x-button type="submit">Submit</x-button>

</div>
