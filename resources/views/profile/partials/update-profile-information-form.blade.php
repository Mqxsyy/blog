<section>
    <header>
        <h2 class="text-lg font-medium text-gray-100">Profile Information</h2>
        <p class="mt-1 text-sm text-gray-400">Update your account's profile information and email address.</p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-2">
        @csrf
        @method('patch')

        <label class="form-control w-full">
            <div class="label">
                <span class="label-text">Name</span>
            </div>
            <input name="name" type="text" placeholder="Name"
                class="input input-bordered @error('name') input-error @enderror w-full" required
                autocomplete="name" value="{{$user->name}}">
            <div class="label">
                @error('name')
                <span class="label-text-alt text-error">{{ $message }}</span>
                @enderror
            </div>
        </label>

        <div>
            <label class="form-control w-full">
                <div class="label">
                    <span class="label-text">Email</span>
                </div>
                <input name="email" type="text" placeholder="Email"
                    class="input input-bordered @error('email') input-error @enderror w-full" required
                    autocomplete="name" value="{{$user->email}}">
                <div class="label">
                    @error('email')
                    <span class="label-text-alt text-error">{{ $message }}</span>
                    @enderror
                </div>
            </label>
        </div>

        <div class="flex items-center gap-4">
            <input type="submit" class="btn btn-primary" value="Save">

            @if (session('status') === 'profile-updated')
            <p class="text-sm text-gray-400">Saved.</p>
            @endif
        </div>
    </form>
</section>