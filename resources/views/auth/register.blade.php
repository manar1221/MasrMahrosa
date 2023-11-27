{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

<x-app-layout>
    <section class="cform-container">

        <form action="{{route('register')}}" method="post" enctype="multipart/form-data">
            @csrf
           <h3>register now</h3>
           <p>your name <span>*</span></p>
           <input type="text" name="name" placeholder="enter your name" required maxlength="50" class="cbox" :value="old('name')" autofocus autocomplete="name">
           <p>your email <span>*</span></p>
           <input type="email" name="email" placeholder="enter your email" required maxlength="50" class="cbox" :value="old('email')">
           <p>your phone <span>*</span></p>
           <input type="number" name="phone" placeholder="enter your phone" required maxlength="50" class="cbox" :value="old('phone')">
           <p>your password <span>*</span></p>
           <input type="password" name="password" placeholder="enter your password" required maxlength="20" class="cbox" autocomplete="new-password">
           <p>confirm password <span>*</span></p>
           <input type="password" name="password_confirmation" placeholder="confirm your password" required maxlength="20" class="cbox" autocomplete="new-password">
           <!-- <p>select profile <span>*</span></p>
           <input type="file" accept="image/*" required class="cbox"> -->
           <input type="submit" value="register now" name="submit" class="cbtn">
        </form>

     </section>
</x-app-layout>
