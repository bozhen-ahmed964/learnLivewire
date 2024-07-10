<div class=" p-10 w-96">

    <form wire:submit.prevent='save'>
        <x-input placeholder='Name' type='text' wire:model='user_name' />
        @error('user_name')
        <x-message>{{ $message }}</x-message>
        @enderror


        <x-input placeholder='Email' type='text' wire:model='user_email' />
        @error('user_email')
        <x-message>{{ $message }}</x-message>
        @enderror


        <x-input placeholder='Password' type='text' wire:model='user_password' />
        @error('user_password')
        <x-message>{{ $message }}</x-message>
        @enderror


        <x-button type="submit">Submit</x-button>
    </form>





    @foreach ($users as $user)
    <div class="text-red-600 text-3xl" wire:key='{{ $user->id }}'>
        <p>{{ $user->name }}</p>
        <p>{{ $user->email }}</p>
        <p>{{ $user->password }}</p>
        <br>
    </div>
    @endforeach

</div>
